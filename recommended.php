<?php
// Database connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch templates data for the 'Professional' category
$sql = "SELECT temp_name, category, upload FROM template WHERE category = 'recommended'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Templates</title>
    <style>
        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body Styles */
        body {
            background-color:  rgb(0, 200, 230);
            color: black;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 20px;
        }
        
main {
  width: calc(100% - 240px);
  max-width: 680px;
  margin: 40px auto;
}

p {
  font-size: 18px;
  line-height: 28px;
}

* {
  scroll-behavior: smooth;
}

/* Menu code starts here */

#menuToggle
{
  display: block;
  /* You can also use relative/absolute here if you want to stay on the top */
  position: fixed;
  top: 50px;
  left: 50px;
  
  z-index: 1;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle a
{
  text-decoration: none;
  color: #232323;
  
  transition: color 0.3s ease;
}

#menuToggle a:hover
{
  color: tomato;
}


#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
  
  cursor: pointer;
  
  opacity: 0; /* hide this */
  z-index: 2; /* and place it over the hamburger */
  
  -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  
  background: black;
  border-radius: 3px;
  
  z-index: 1;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #232323;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  max-width: 400px;
  width: 100vw;
  max-height: 100vh;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;
  box-sizing: border-box;
  overflow-y: auto;
  background: rgba(0, 199, 230, 0.423);
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
}

#menu li label
{
  cursor: pointer;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}

        /* Main Container */
        .container {
            width: 100%;
            max-width: 1300px;
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            height: auto;
        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        /* Templates Section */
        .templates {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .template {
            text-align: center;
        }

        .template img {
            width: 70%;
            height: 400px;
            object-fit: fill;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .template h3 {
            font-size: 18px;
            font-weight: bold;
            color: #1c62c9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .templates {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .templates {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<nav role="navigation">
  <div id="menuToggle">
 
    <input type="checkbox" id="menuCheckbox" />
    
    <span></span>
    <span></span>
    <span></span>
    
    <ul id="menu">
    <li><label for="menuCheckbox"><a href="landing.php">Home</a></label></li>
      <li><label for="menuCheckbox"><a href="template.html">Templates</a></label></li>
      <li><label for="menuCheckbox"><a href="userprofile.php">My Account</a></label></li>
      <li><label for="menuCheckbox"><a href="interview_schedule.php">Interview Scheduler</a></label></li>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1>Recommended Templates</h1>
            <p>Explore our collection of Recommended templates designed to elevate your resume.</p>
        </div>
        
        <!-- Templates Section -->
        <div class="templates">
            <?php
            // Check if there are any templates in the database
            if ($result->num_rows > 0) {
                // Output data for each template
                while ($row = $result->fetch_assoc()) {
                    // Fetch template details
                    $temp_name = $row['temp_name'];
                    $upload = $row['upload'];

                    // Construct the relative image path for the browser
                    $imagePath = "uploads/" . basename($upload); // Relative path to the 'uploads' directory

                    // Specify the target page for the template
                    $targetPage = "$temp_name.php"; // Replace with the actual page name
                    // Display the template card
                    echo "<div class='template'>";
                    echo "<a href='" . htmlspecialchars($targetPage) . "?template=" . urlencode($temp_name) . "'>";
                    echo "<img src='" . htmlspecialchars($imagePath) . "' alt='" . htmlspecialchars($temp_name) . "'>";
                    echo "</a>";
                    echo "<h3>" . htmlspecialchars($temp_name) . "</h3>";
                    echo "</div>";
                }
            } else {
                echo "<p>No templates available</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
