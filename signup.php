<?php
// Start session at the very beginning
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting user input
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $bio = $_POST['bio']; // Added bio field
    $profession = $_POST['profession']; // Added profession field
    $pwsd = $_POST['pwsd'];
    $cpswd = $_POST['cpswd'];

    // Function to validate the domain of the email
    function isValidDomain($email) {
        $allowedDomains = ['gmail.com', 'outlook.com', 'yahoo.com', 'hotmail.com'];
        $domain = substr(strrchr($email, "@"), 1); // Extract the domain from the email
        return in_array($domain, $allowedDomains);
    }

    // Check if any required fields are empty
    if (!empty($fullname) && !empty($email) && !empty($pwsd) && !empty($cpswd) && !empty($bio) && !empty($profession)) {
        // Validate email format and domain
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !isValidDomain($email)) {
            echo "<script>
                    alert('Invalid email.');
                    window.location.href = 'signup.html';
                </script>";
            exit; // Exit the script to prevent further execution
        }

        // Database connection details
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "mop";

        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            // Check if the email already exists
            $SELECT = "SELECT email FROM signup WHERE email = ? LIMIT 1";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            // If the email already exists, stop further execution
            if ($stmt->num_rows > 0) {
                echo "<script>
                        alert('Someone already registered using this email.');
                        window.location.href = 'signup.html';
                    </script>";
                $stmt->close();
                $conn->close();
                exit; // Exit the script to prevent further execution
            } else {
                // Check if passwords match
                if ($pwsd === $cpswd) {
                    // Proceed with inserting the new record
                    $INSERT = "INSERT INTO signup (fullname, email, bio, profession, pwsd, cpswd) VALUES (?, ?, ?, ?, ?, ?)";
                    $stmt->close(); // Close the previous statement

                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssssss", $fullname, $email, $bio, $profession, $pwsd, $cpswd);

                    if ($stmt->execute()) {
                        echo "<script>
                                alert('New record inserted successfully.');
                                window.location.href = 'login.html';
                            </script>";
                    } else {
                        echo "Error during insertion: " . $stmt->error;
                    }
                } else {
                    echo "<script>
                            alert('Passwords do not match.');
                            window.location.href = 'signup.html';
                        </script>";
                }
            }

            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
    } else {
        // If any field is empty, display an error
        echo "<script>
                alert('All fields are required.');
                window.location.href = 'signup.html';
            </script>";
        exit; // Exit the script if any field is missing
    }
}
?>
