<?php
session_start();
$user_email = $_SESSION['email']; 

// Database connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data
$sql_users = "SELECT fullname, email, Bio, profession FROM signup";
$result_users = $conn->query($sql_users);

// Handle template form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['template-file'])) {
    // Get template form data
    $temp_name = $_POST['template-name'];
    $category = $_POST['template-category'];

    // Define the upload directory using an absolute path
    $upload_dir = __DIR__ . "/uploads/";  // Absolute path to the uploads folder
    
    // Check if the uploads folder exists, and create it if not
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);  // Create the uploads folder with proper permissions
    }

    // Handle template file upload
    if (isset($_FILES['template-file']['error']) && $_FILES['template-file']['error'] == 0) {
        $upload_file = $upload_dir . basename($_FILES['template-file']['name']);
        if (move_uploaded_file($_FILES['template-file']['tmp_name'], $upload_file)) {
            // Prepare the SQL insert statement for the template
            $sql = "INSERT INTO template (temp_name, category, upload) VALUES ('$temp_name', '$category', '$upload_file')";
            if ($conn->query($sql) === TRUE) {
                echo "<script> 
                alert('Template uploaded successfully to the $category category!');
                window.location.href = 'admin.php';
            </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your template file.";
        }
    }
}

// Handle template deletion
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Delete template from the database
    $sql = "DELETE FROM template WHERE id = '$delete_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('Template deleted successfully!');
        window.location.href = 'admin.php';
    </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Handle user deletion by email
if (isset($_GET['delete_email'])) {
    $delete_email = $_GET['delete_email'];

    // Delete user from the database based on email
    $sql = "DELETE FROM signup WHERE email = '$delete_email'";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('User  deleted successfully!');
        window.location.href = 'admin.php';
    </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Handle feedback deletion
if (isset($_GET['delete_feedback_id'])) {
    $delete_feedback_id = $_GET['delete_feedback_id'];

    // Delete feedback from the database
    $sql = "DELETE FROM feedback WHERE id = '$delete_feedback_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script> 
        alert('Feedback deleted successfully!');
        window.location.href = 'admin.php?section=feedback';
    </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Check if "Manage Templates", "Manage Users", or "Manage Feedback" section is active
$section = isset($_GET['section']) ? $_GET['section'] : 'templates';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Resume Builder</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f4f4f4;
      color: #333;
    }

    /* Navbar Styles */
    .navbar {
      background-color: #007bff;
      color: white;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar h1 {
      font-size: 20px;
    }

    .navbar .logout-btn {
      background-color: #ff4d4d;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    .navbar .logout-btn:hover {
      background-color: #cc0000;
    }

    /* Sidebar Styles */
    .sidebar {
      width: 250px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: absolute;
      top: 70px;
      left: 0;
      padding-top: 20px;
      height: calc(100vh - 60px);
      overflow-y: auto;
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar li {
      padding: 15px 20px;
      cursor: pointer;
      font-size: 16px;
      border-bottom: 1px solid #ddd;
      transition: background 0.3s;
    }

    .sidebar li:hover {
      background-color: #f1f1f1;
    }

    .sidebar li.active {
      background-color: #007bff;
      color: white;
    }

    .sidebar a {
      text-decoration: none;
      color: black;
    }

    /* Main Content Styles */
    .main-content {
      margin-left: 260px;
      padding: 20px;
      background-color: #f8f9fa;
      min-height: 100vh;
    }

    .main-content h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      margin-bottom: 20px;
    }

    a {
      color: blue;
      text-decoration: none;
    }

    /* Manage Templates Section Styles */
    #templates .card {
      margin-bottom: 30px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      width: 80%;
      margin-left: auto;
      margin-right: auto;
    }

    #templates form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    #templates label {
      font-size: 16px;
      font-weight: bold;
    }

    #templates input[type="text"], #templates select, #templates input[type="file"] {
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ddd;
      border-radius: 5px;
      width: 100%;
    }

    #templates table {
      margin-top: 30px;
      width: 100%;
      border-collapse: collapse;
    }

    #templates th, #templates td {
      padding: 12px 15px;
      text-align: left;
    }

    #templates .delete-btn {
      background-color: #ff4d4d;
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      color: white;
      cursor: pointer;
      text-decoration: none;
    }

    #templates .delete-btn:hover {
      background-color: #cc0000;
    }

    /* Manage Users Section Styles */
    #users table {
      margin-top: 30px;
      width: 100%;
      border-collapse: collapse;
    }

    #users th, #users td {
      padding: 12px 15px;
      text-align: left;
    }

    #users .delete-btn {
      background-color: #ff4d4d;
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      color: white;
      cursor: pointer;
      text-decoration: none;
    }

    #users .delete-btn:hover {
      background-color: #cc0000;
    }

    /* Manage Feedback Section Styles */
    #feedback table {
      margin-top: 30px;
      width: 100%;
      border-collapse: collapse;
    }

    #feedback th, #feedback td {
      padding: 12px 15px;
      text-align: left;
    }

    #feedback .delete-btn {
      background-color: #ff4d4d;
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      color: white;
      cursor: pointer;
      text-decoration: none;
    }

    #feedback .delete-btn:hover {
      background-color: #cc0000;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <div class="navbar">
    <h1>Admin Dashboard</h1>
    <a href="login.html"><button class="logout-btn">Logout</button></a>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <ul>
      <li class="<?= ($section == 'templates') ? 'active' : '' ?>"><a href="?section=templates">Manage Templates</a></li>
      <li class="<?= ($section == 'users') ? 'active' : '' ?>"><a href="?section=users">Manage Users</a></li>
      <li class="<?= ($section == 'feedback') ? 'active' : '' ?>"><a href="?section=feedback">Manage Feedback</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <?php if ($section == 'templates'): ?>
      <div id="templates">
        <h2>Manage Templates</h2>
        <div class="card">
          <form action="admin.php" method="POST" enctype="multipart/form-data">
            <label for="template-name">Template Name</label>
            <input type="text" id="template-name" name="template-name" required>
            
            <label for="template-category">Category</label>
            <select id="template-category" name="template-category" required>
              <option value="Recommended">Recommended</option>
              <option value="Professional">Professional</option>
              <option value="Modern">Modern</option>
            </select>

            <label for="template-file">Template File</label>
            <input type="file" id="template-file" name="template-file" required>
            
            <button type="submit">Upload Template</button>
          </form>
        </div>
        
        <h3>Uploaded Templates</h3>
        <table>
          <thead>
            <tr>
              <th>Template Name</th>
              <th>Category</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql_templates = "SELECT * FROM template";
              $result_templates = $conn->query($sql_templates);
              while ($row = $result_templates->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo $row['temp_name']; ?></td>
                <td><?php echo $row['category']; ?></td>
                <td><a href="?delete_id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php elseif ($section == 'users'): ?>
      <div id="users">
        <h2>Manage Users</h2>
        <table>
          <thead>
            <tr>
              <th>Full Name</th>
              <th>Email</th>
              <th>Bio</th>
              <th>Profession</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result_users->fetch_assoc()) { ?>
              <tr>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['Bio']; ?></td>
                <td><?php echo $row['profession']; ?></td>
                <td><a href="?delete_email=<?php echo $row['email']; ?>" class="delete-btn">Delete</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php elseif ($section == 'feedback'): ?>
      <div id="feedback">
        <h2>Manage Feedback</h2>
        <table>
          <thead>
            <tr>
              <th>Rating Stars</th>
              <th>Submission Datetime</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql_feedback = "SELECT * FROM feedback";
              $result_feedback = $conn->query($sql_feedback);
              while ($row = $result_feedback->fetch_assoc()) {
            ?>
              <tr>
                <td><?php echo str_repeat('⭐', $row['stars']); ?></td>
                <td><?php echo $row['sub_time']; ?></td>
                <td><a href="?delete_feedback_id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>

</body>
</html>

<?php
$conn->close();
?>