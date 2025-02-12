
<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $pwsd = $_POST['pwsd'];
    
    // Database connection settings
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "mop"; // Replace with your actual database name
    
    // Create connection
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM signup WHERE fullname = '$fullname' AND pwsd = '$pwsd'";
    
    // Execute the query
    $result = $conn->query($sql);

    // Check if a user with the given credentials exists
    if ($result->num_rows == 1) {
        // User is authenticated, set session variable to indicate login
        $_SESSION["logged_in"] = true;
        $userInfo = $result->fetch_assoc();
        $_SESSION["email"] = $userInfo["email"];
      
        if ($fullname == "admin") {
            header("Location: admin.php");
            exit();
        } else {
            header("Location: landing.php");
            exit();
        }
    } else {
        // Invalid credentials, show an error message
        echo "<script type='text/javascript'>alert('Invalid Username and Password');window.location.href='login.html';</script>";
    }

    // Close the database connection
    $conn->close();
}
?>
