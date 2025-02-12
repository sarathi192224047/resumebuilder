<?php
// Database connection parameters
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mop";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session
session_start();

// Check if the rating is sent via POST
if (isset($_POST['rating'])) {
    $rating = $_POST['rating'];
    $sub_time = date('Y-m-d H:i:s');  // Current timestamp

    // Insert rating into the feedback table
    $query = "INSERT INTO feedback (stars, sub_time) VALUES ('$rating', '$sub_time')";
    if (mysqli_query($conn, $query)) {
        echo "Rating saved successfully!";
    } else {
        echo "Error saving rating: " . mysqli_error($conn);
    }
}

// Fetch the average rating
$avg_rating_query = "SELECT AVG(stars) as average_rating FROM feedback";
$avg_result = mysqli_query($conn, $avg_rating_query);
$average_rating = 0;

if ($avg_result && mysqli_num_rows($avg_result) > 0) {
    $row = mysqli_fetch_assoc($avg_result);
    $average_rating = round($row['average_rating'], 1);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOP Resume Builder</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header Styling */
        header {
            display: flex;
            justify-content: space-between;
            background-color: white;
            align-items: center;
            padding: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 60px;
        }

        .logo div {
            display: flex;
            flex-direction: column;
            align-items: start;
        }

        .logo h1, .logo h2, .logo h6 {
            margin: 0;
            color: black;
        }

        .logo h1 {
            font-size: 1.5em;
            font-weight: bold;
        }

        .logo h2 {
            font-size: 1em;
            font-weight: bold;
        }

        .logo h6 {
            font-size: 0.8em;
            font-weight: normal;
        }

        .right-container {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .right-container button:hover {
            background-color: #0063ccd8;
        }

        .profile-icon a {
    text-decoration: none;
    color: black;
    font-weight: bold;
    height: auto;
    margin-right: 30px;
    cursor: pointer;    
    transition: transform 0.3s ease; /* Ensure transform has a smooth transition */
    display: inline-block; /* Add this line */
}

.profile-icon a:hover {
    transform: scale(1.2);
}


        /* Main Content Styling */
        .main-content {
    text-align: center;
    background-image: url("background resume3.png");
    background-repeat: no-repeat;
    background-size: cover;
    color: #fff;
    padding: 60px 20px;
    flex-grow: 1;
}


        .main-content h2 {
            font-size: 30.9px;
            font-weight: 1000;
            line-height: 1.5;
            color: #000;
        }

        .main-content span {
            font-weight: bold;
            color: white;
        }

        .resume-button {
            background-color: #000;
            color: #fff;
            padding: 20px 40px;
            border: 5px solid rgba(0, 199, 230, 0.423);
            font-weight: bold;
            font-size: 16px;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.76);
        }

        .main-content button:hover {
            background-color: rgb(31, 31, 31);
        }

        /* Features Section */
        .features-section {
            text-align: center;
            padding: 50px 20px;
            background-color: white;
        }

        .features-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 40px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-item {
            background: rgba(0, 199, 230, 0.423);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
        }

        .feature-item img {
            width: 100px;
            margin-bottom: 15px;
        }

        .feature-item h3 {
            font-size: 18px;
            color: black;
            margin: 10px 0;
        }

        .feature-item p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        /* Rating Section */
/* Enhanced Rating Section */
.rating-section {
    margin: 0px;
    width: 100%;
}

.rating-section p {
    padding-left:0px;
    font-size: 22px;
    font-weight: 700;
    margin-bottom:0px;
    margin-top:40px;
    color: #444;
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.stars {
    display: flex;
    gap: 12px;
    margin-bottom:30px;
    margin-left:0px;
}

.stars span {
    font-size: 40px;
    color:white ;
    cursor: pointer;
    transition: transform 0.2s ease, color 0.3s ease, box-shadow 0.2s ease;
}

.stars span:hover,
.stars span:hover ~ span {
    color: #ffc107;
    transform: scale(1.2);
}

.stars span.selected {
    color: #ffc107;
    text-shadow: 0 1px 3px rgba(255, 193, 7, 0.5);
}
.average-rating {
            font-size: 18px;
            color: #444;
            margin-top: 10px;
            font-weight: bold;
        }

        /* Footer Styling */
        footer {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color:  rgba(0, 199, 230, 0.300);
            padding: 20px;
            color: black;
            box-shadow: 0 2px 10px rgba(255, 193, 7, 0.4);
        }

        footer p {
            margin: 5px 0;
            font-size: 14px;
            text-align: center;
        }

        .social-icons {
            display: flex;
            gap: 40px;
            margin: 10px 0;
        }

        .social-icons a {
            display: flex;
            align-items: center;
        }

        .social-icons img {
            width: 30px;
            height: 30px;
        }
        .image img{
            Width:70%;
            margin-left:15%;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        .image h1{
            font-size:32px;
            color: darkblue;
            text-align: center;
            margin-bottom:60px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
         }
        .image{
            padding:50px;
            background-color:#e9e9e9;
        }
        .image img:hover {
         box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
         transform: translateY(-15px);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

.resume-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 50px;
  background-color: rgb(0, 200, 230);
  color: #fff;
}

.content {
  max-width: 40%;
  margin-right:0px;
}

.content h1 {
  font-size: 2.5rem;
  margin-bottom: 30px;
  margin-right:0px;
  color:black;
  text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
}

.content p {
  font-size: 1rem;
  margin-bottom: 1.5rem;
  margin-right:0px;
  color:black;
  line-height:25px;
  font-weight:bold;
  font-size:18px;
}

.rating {
  margin-top: 1rem;
}

.rating span {
  color: #2ed573;
  font-size: 1.2rem;
}

.carousel {
  position: relative;
  display: flex;
  align-items: center;
  width: 50%;
  overflow: hidden;
  margin-left:0%;
}

.carousel-track {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

.carousel-track img {
  max-width: 60%;
  margin-right: 10px;
}

.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  border: none;
  padding: 10px;
  cursor: pointer;
  font-size: 1.5rem;
  z-index: 10;
}

.arrow.left {
  left: 10px;
}

.arrow.right {
  right: 10px;
}

.arrow:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="rect1.png" alt="Logo" />
            <div>
                <h1>MOP</h1>
                <h2>RESUME BUILDER</h2>
                <h6>Me On Paper</h6>
            </div>
        </div>
        <div class="right-container">
            <div class="profile-icon">
                <a href="template.html">Templates</a>
                <a href="userprofile.php">My Account</a>
                <a href="interview_schedule.php">Interview Scheduler</a>
                <a href="login.html">Login</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
    <section class="main-content">
        <h2>A great resume doesn’t just tell them<br>what you’ve done, <span>it shows them what you can do.</span></h2>
        <a href="template.html"><button class="resume-button">CREATE NEW RESUME</button></a>
    </section>
</main>
<section class="image">
    <h1>AI Chatbot integration to get more tailored content</h1>
    <img src="chatbbot home.png">
    </section>
    <!--Template display-->
    <section class="resume-section">
    <div class="content">
    <h1>Amazing CV templates that are organized for customization</h1>
      <p>
      Take advantage of the free resume templates that are <br>ATS-friendly and are provided with sample information <br>that are already installed. You can download your <br>resumes in PDF, PNG, and JPG formats. Save the<br> resume to be accessed at any time on this website.
      </p>
       <!-- Rating Section -->
        <section class="rating-section">
                <p>Rate your experience</p>
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
            </section>
    </main>
</div>
    <div class="carousel">
      <button class="arrow left" onclick="moveSlide(-1)">&#10094;</button>
      <div class="carousel-track">
        <img src="uploads/template9.jpg" alt="Resume 1">
        <img src="uploads/professional3.jpg" alt="Resume 2">
        <img src="uploads/modern 6.png" alt="Resume 3">
        <img src="uploads/modern 2.png" alt="Resume 4">
        <img src="uploads/professional1.jpg" alt="Resume 5">
        <img src="uploads/template4.png" alt="Resume 6">
      </div>
      <button class="arrow right" onclick="moveSlide(1)">&#10095;</button>
    </div>
  </section>
  <script src="script.js"></script>

<!-- Features Section -->
<section class="features-section">
    <h2 class="features-title">Functionalities offering to acquire your dream position</h2>
    <div class="features-grid">
        <div class="feature-item">
            <img src="ATS logo.png" alt="Automatic spell-checker">
            <h3>ATS Friendly Templates</h3>
            <p>All the templates available in our website are <strong>ATS Friendly </strong>that helps in increasing the odds of employment.</p>
        </div>
        <div class="feature-item">
            <img src="chatbot logo.png" alt="Automatic summary generator">
            <h3>AI chatbot integration</h3>
            <p>Create a powerful resume with tailored content using our AI chatbot. Writer's block is no longer an obstacle.</p>
        </div>
        <div class="feature-item">
            <img src="resume builder simple logo.png" alt="Easy online resume builder">
            <h3>Simple online resume construction tool</h3>
            <p>Without ever leaving your browser, create a fantastic resume in a matter of minutes.</p>
        </div>
        <div class="feature-item">
            <img src="password logo.png" alt="Your data is safe">
            <h3>Guaranteed security for your data</h3>
            <p>Your data is private, secure, and protected. We use advanced encryption and follow strict privacy standards.</p>
        </div>
        <div class="feature-item">
            <img src="approved logo.png" alt="Approved templates">
            <h3>Acknowledged template designs</h3>
            <p>Expertly crafted resume examples and templates. With an intuitive and easy-to-use interface Simply edit your resume and get it within five minutes.</p>
        </div>
        <div class="feature-item">
            <img src="download logo.png" alt="Multiple export formats">
            <h3>Different download formats</h3>
            <p>Get a JPG, PNG, or PDF version of your resume. Select the format that works best for you so that sharing and printing are simple. Create your CV stand out by downloading right away.</p>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer>
        <div class="social-icons">
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
            <a href="#"><img src="whatsapp.png" alt="whatsapp"></a>
            <a href="#"><img src="youtube.png" alt="youtube"></a>
            <a href="#"><img src="linkedin-logo.png" alt="LinkedIn"></a>
            <a href="#"><img src="instagram.png" alt="Instagram"></a>
        </div>
        <p><strong>------------- ME ON PAPER -------------</strong></p>
        <p style="color:grey">Copyright © 2024 MOP Resume Builder. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript for handling star rating and storing it in the database
        const stars = document.querySelectorAll('.stars span');
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                // Get the rating value from the clicked star
                const rating = index + 1;

                // Send the rating to the server via AJAX
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "", true); xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert('Thank you for your rating!');
                    }
                };
                xhr.send("rating=" + rating);

                // Highlight the selected stars
                stars.forEach((s, i) => {
                    s.style.color = i < rating ? '#FFD700' : '#0077ff80'; // Gold for selected, default for unselected
                });
            });
        });
        let currentSlide = 0;

function moveSlide(direction) {
  const track = document.querySelector('.carousel-track');
  const slides = document.querySelectorAll('.carousel-track img');
  const totalSlides = slides.length;

  // Update slide index
  currentSlide += direction;
  if (currentSlide < 0) {
    currentSlide = totalSlides - 1; // Loop to last slide if going left from the first slide
  } else if (currentSlide >= totalSlides) {
    currentSlide = 0; // Loop to the first slide if going right from the last slide
  }

  // Move the carousel
  const slideWidth = slides[0].clientWidth;
  track.style.transform = `translateX(-${currentSlide * (slideWidth + 10)}px)`;
}

// Function to automatically move the carousel at a set interval
function autoMoveSlide() {
  moveSlide(1); // Move to the next slide
}

// Start the automatic slide movement every 5 seconds (5000 ms)
setInterval(autoMoveSlide, 5000);

// Optional: Initialize carousel to a specific starting position
document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.carousel-track');
  track.style.transition = 'transform 0.5s ease-in-out'; // Apply transition to smoothen movement
});


    </script>
</body>
</html>

