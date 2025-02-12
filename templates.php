<?php
// Database connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mop";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get category from URL parameter (default to 'Modern')
$category = $_GET['category'] ?? 'Modern';

// Fetch templates based on category
$sql = "SELECT * FROM template WHERE category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $category);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($category); ?> Templates</title>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
    }

    h1 {
      text-align: center;
      color: #333;
      margin: 20px 0;
    }

    /* Navbar Styles */
    .navbar {
      background-color: #007bff;
      padding: 15px;
      color: white;
      display: flex;
      justify-content: center;
      font-size: 18px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    /* Table Styles */
    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      background: white;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border: 1px solid #ddd;
    }

    th {
      background-color: #007bff;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #f1f7ff;
    }

    a.download-btn {
      color: white;
      background-color: #007bff;
      padding: 8px 12px;
      border-radius: 5px;
      text-decoration: none;
    }

    a.download-btn:hover {
      background-color: #0056b3;
    }

    /* Footer Styles */
    footer {
      text-align: center;
      padding: 10px 0;
      background: #333;
      color: white;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="templates.php?category=Modern">Modern Templates</a>
    <a href="templates.php?category=Professional">Professional Templates</a>
    <a href="templates.php?category=Recommended">Recommended Templates</a>
  </div>

  <!-- Page Content -->
  <h1><?php echo htmlspecialchars($category); ?> Templates</h1>

  <table>
    <thead>
      <tr>
        <th>Template Name</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . htmlspecialchars($row['temp_name']) . "</td>";
              echo "<td><a href='" . htmlspecialchars($row['upload']) . "' class='download-btn' download>Download</a></td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='2'>No templates found in this category</td></tr>";
      }
      ?>
    </tbody>
  </table>

  <!-- Footer -->
  <footer>
    &copy; <?php echo date("Y"); ?> Resume Builder | All Rights Reserved
  </footer>

</body>
</html>
