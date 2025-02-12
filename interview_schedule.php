<?php
// Start session to fetch the logged-in user's email
session_start();

// Ensure user is logged in
if (!isset($_SESSION["email"])) {
    echo '<script>alert("User not logged in."); window.location.href = "landing.php";</script>';
    exit();
}

// Get logged-in user's email
$userEmail = $_SESSION['email'];

// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mop";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle requests for adding, editing, or deleting notes
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'add') {
        $noteDate = $_POST['noteDate'];
        $noteText = $_POST['noteText'];
        $stmt = $conn->prepare("INSERT INTO interview (noteDate, noteText, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $noteDate, $noteText, $userEmail);
        $stmt->execute();
        $stmt->close();
        exit("Note saved successfully!");
    } elseif ($_POST['action'] === 'delete') {
        $noteDate = $_POST['noteDate'];
        $stmt = $conn->prepare("DELETE FROM interview WHERE noteDate = ? AND email = ?");
        $stmt->bind_param("ss", $noteDate, $userEmail);
        $stmt->execute();
        $stmt->close();
        exit("Note deleted successfully!");
    }
}

// Fetch events from the database for the logged-in user
$events = [];
$stmt = $conn->prepare("SELECT noteDate, noteText FROM interview WHERE email = ?");
$stmt->bind_param("s", $userEmail);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $events[] = [
        'title' => $row['noteText'],
        'start' => $row['noteDate'],
        'allDay' => true
    ];
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOP Interview Scheduler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>
    <style>
        /* General styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f0f4f7;
        }
        .navbar {
            background-color: rgb(0, 200, 230);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            color: white;
        }
        .navbar .logo {
            display: flex;
            align-items: center;
        }
        .navbar img {
            width: 60px;
            margin-right: 10px;
        }
        .navbar h3, .navbar h4, .navbar h6 {
            margin: 0;
            color: black;
        }
        .navbar .menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .navbar .menu a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            transition: transform 0.3s ease;
        }
        .navbar .menu a:hover {
            font-weight: bold;
            transform: scale(1.1);
        }
        #calendar {
            max-width: 1000px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .note-modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
        .note-modal input, .note-modal textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .note-modal button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 4px;
            background-color: rgb(0, 200, 230);
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="rect1.png" alt="Logo">
            <div>
                <h3>MOP</h3>
                <h4>RESUME BUILDER</h4>
                <h6>Me On Paper</h6>
            </div>
        </div>
        <div class="menu">
            <a href="landing.php">Home</a>
            <a href="template.html">Templates</a>
            <a href="userprofile.php">My Account</a>
            <a href="interview_schedule.php">Interview Scheduler</a>
        </div>
    </div>

    <div id="calendar"></div>

    <div class="note-modal" id="noteModal">
        <h3>Manage Note</h3>
        <input type="date" id="noteDate">
        <textarea id="noteText" placeholder="Enter your note"></textarea>
        <button id="saveNote">Save Note</button>
        <button id="deleteNote">Delete Note</button>
        <button id="closeModal">Close</button>
    </div>

    <script>
     $(document).ready(function () {
    var events = <?php echo json_encode($events); ?>;

    // Render calendar
    $('#calendar').fullCalendar({
        header: {
            left: '',
            center: 'title',
            right: ''
        },
        events: events,
        selectable: true,
        dayClick: function (date) {
            $('#noteDate').val(date.format('YYYY-MM-DD'));
            $('#noteText').val('');
            $('#saveNote').show();
            $('#deleteNote').hide();
            $('#noteModal').show();
        },
        eventClick: function (event) {
            $('#noteDate').val(event.start.format('YYYY-MM-DD'));
            $('#noteText').val(event.title);
            $('#saveNote').hide();
            $('#deleteNote').show();
            $('#noteModal').show();
        }
    });

    // Save Note
    $('#saveNote').click(function () {
        const noteDate = $('#noteDate').val();
        const noteText = $('#noteText').val();
        if (noteText) {
            $.post('', { action: 'add', noteDate, noteText }, function () {
                $('#calendar').fullCalendar('renderEvent', { title: noteText, start: noteDate, allDay: true }, true);
                $('#noteModal').hide();
            });
        }
    });

    // Delete Note
    $('#deleteNote').click(function () {
        const noteDate = $('#noteDate').val();
        $.post('', { action: 'delete', noteDate }, function () {
            $('#calendar').fullCalendar('removeEvents', function (ev) {
                return ev.start.format('YYYY-MM-DD') === noteDate;
            });
            $('#noteModal').hide();
        });
    });

    // Close Modal
    $('#closeModal').click(function () {
        $('#noteModal').hide();
    });

    // Reminder notification with proper event removal
    setInterval(function () {
        const today = moment().format('YYYY-MM-DD');
        const todayEvents = events.filter(function (event) {
            return event.start === today;
        });

        todayEvents.forEach(function (event) {
            if (confirm(`Reminder: ${event.title}\nClick OK to delete this note.`)) {
                $.post('', { action: 'delete', noteDate: event.start }, function () {
                    // Immediately remove the event from FullCalendar and the local `events` array
                    $('#calendar').fullCalendar('removeEvents', function (ev) {
                        return ev.start === event.start; // Correct event comparison
                    });

                    // Remove from the `events` array
                    events = events.filter(function (e) {
                        return e.start !== event.start;
                    });
                });
            }
        });
    }, 6000); // Check every 60 seconds
});

    </script>
</body>
</html>
