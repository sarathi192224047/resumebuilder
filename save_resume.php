<?php
// Start the session to access session variables
session_start();

// Database connection
$servername = "localhost";
$username = "root";   // Default XAMPP username
$password = "";       // Default XAMPP password is empty
$dbname = "mop";      // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email is stored in the session
if (!isset($_SESSION['email'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in.']);
    exit;
}

// Get the email from session
$email = $_SESSION['email'];

// Get the POST data for the resume image
$data = json_decode(file_get_contents("php://input"), true);
$resume_image = $data['resume_image'];

// Validate input
if (empty($resume_image)) {
    echo json_encode(['success' => false, 'message' => 'Invalid resume image data.']);
    exit;
}

// Save the image in the database
$sql = "INSERT INTO resumes (email, resume_image) 
        VALUES (?, ?)
        ON DUPLICATE KEY UPDATE resume_image = VALUES(resume_image)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $resume_image);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Resume saved successfully.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error saving resume.']);
}

$stmt->close();
$conn->close();
?>
