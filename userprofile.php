<?php
session_start();

// Database connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$fullname = $bio = $profession = "";
$resumes = [];  // This will hold resume data

// Check if the user is logged in
if (!isset($_SESSION["email"])) {
    echo '<script>alert("User not logged in."); window.location.href = "landing.php";</script>';
    exit();
}

$email = $_SESSION["email"];

// Fetch user profile data
$query = "SELECT fullname, Bio, profession FROM signup WHERE email=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($fullname, $bio, $profession);
$stmt->fetch();

// Set default values if no data is found
if (!$fullname) {
    $fullname = "Not Provided";
}
if (!$profession) {
    $profession = "Not Provided";
}
if (!$bio) {
    $bio = "Not available";
}
$stmt->close();

// Fetch resume data for the logged-in user
$resumeQuery = "SELECT resume_image FROM resumes WHERE email=?";
$stmt = $conn->prepare($resumeQuery);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($resume_image);

// Fetch all resumes for the user
while ($stmt->fetch()) {
    $resumes[] = ['image' => $resume_image]; // Add each resume to the $resumes array
}
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    height: 100vh;
    background-color: #f7f7f7; /* Soft background color */
}

.sidebar {
    width: 250px;
    background-color: rgb(0, 200, 230);
    color: black;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
    padding: 20px 0;
}

.sidebar img {
    width: 80px;
    margin-bottom: 20px;
}

.sidebar h2 {
    color: white;
    font-size: 1.5em;
    text-align: center;
    margin-bottom: 80px; /* Adjusted for more spacing */
}

.menu {
    width: 100%;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 30px;
    text-align: center;
}

.menu-item a {
    text-decoration: none;
    color:black;
    font-size: 1.1em;
    font-weight: bold;
    padding-left: 25%;
    display: block;
    text-align:left;
    transition: background-color 0.3s;
}

.menu-item a:hover {
    text-align:left;
    padding-left: 25%;
    transform: scale(1.2);
}

.main-content {
    flex: 1;
    padding: 40px;
    background-color: #ffffff;
    overflow-y: auto;
}
.profile-info {
    color: #333;
    margin-top: 20px;
    font-size: 1.1em;
    text-align: left;
    width: 100%;
}

.profile-details h2 {
    font-size: 1.7em;
    font-weight: 600;
    margin-bottom: 15px;
    color: black;
    letter-spacing: 0.5px;
}

.profile-details p {
    font-size: 1.1em;
    line-height: 1.6;
    margin-top: 8px;
    font-weight: 400;
    color:black;
}

.profile-details b {
    font-weight: 600;
    color: black;
}

.profile-section img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-bottom: 20px;
    border: 4px solid #fff;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    object-fit: cover;
}

.my_resume_title h3 {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 25px;
    text-align: center;
    letter-spacing: 0.8px;
    font-weight: 600;
}

.resume-section {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    background-color: #f4f4f4;
    padding: 30px;
    border-radius: 8px;
}

.resume-item {
    margin-bottom: 30px;
    text-align: center;
}

.resume-item img {
    width: 300px;
    height: 300px;
    object-fit: fill;
    cursor: pointer;
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin: 0 auto;
    border: 3px solid #ccc;
}

.resume-item img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.profile-btn {
    font-size: 3em;
    background-color: transparent;
    border: none;
    position: absolute;
    top: 10px;
    right: 40px;
    color: white;
    cursor: pointer;
    margin-bottom: 20px;
}

.profile-details {
    display: none;
    color: #333;
    margin-top: 20px;
    margin-bottom: 30px;
    text-align: left;
    padding: 15px;
    width: 100%;
    box-sizing: border-box;
    background-color: rgb(0, 200, 230); /* Optional background */
    border-radius: 8px;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.15);
}

    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <img src="rect1.png" alt="Logo">
        <h2>ME ON PAPER</h2>
        <div class="menu">
            <div class="menu-item"><a href="landing.php">HOME</a></div>
            <div class="menu-item"><a href="template.html">TEMPLATES</a></div>
            <div class="menu-item"><a href="interview_schedule.php">SCHEDULER</a></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Profile Section with Profile Icon Button -->
        <div class="profile-section">
            <!-- Profile Icon (Clickable) -->
            <button class="profile-btn" id="profile-btn">&#128100;</button>
            <div class="profile-details" id="profile-details">
                <h2>Name: <?php echo htmlspecialchars($fullname); ?></h2>
                <p><b>Bio:</b> <?php echo htmlspecialchars($bio); ?></p>
                <p><b>Profession:</b> <?php echo htmlspecialchars($profession); ?></p>
            </div>
        </div>

        <!-- My Resume Section -->
        <div class="my_resume_title"><h3>My Resume</h3></div>
        <div class="resume-section">
            <?php if (!empty($resumes)): ?>
                <?php foreach ($resumes as $resume): ?>
                    <div class="resume-item">
                        <a href="<?php echo htmlspecialchars($resume['image']); ?>" target="_blank">
                            <img src="<?php echo htmlspecialchars($resume['image']); ?>" alt="Resume Thumbnail">
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No resumes uploaded yet.</p>
            <?php endif; ?>
        </div>

    </div>

    <script>
        const profileButton = document.getElementById('profile-btn');
        const profileDetails = document.getElementById('profile-details');

        profileButton.addEventListener('click', () => {
            profileDetails.style.display = profileDetails.style.display === 'block' ? 'none' : 'block';
        });
    </script>
</body>
</html>
