<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refined Resume</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
    /* General Reset */
body, h1, h2, h3, h4, p, ul {
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background: #f9f9f9;
  color: #333;
  line-height: 1.6;
}
.back-btn {
  position: absolute;
  left: 20px;
  top: 23px;
  padding:10px  15px;
  font-size: 24px;
  background-color: black;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.back-btn:hover {
  background-color: lightgrey;
  color:black;
}
    .Title {
      width: 100%;
      background-color: rgb(0, 200, 230);
    }

    .Title h1 {
      color: black;
      padding: 20px;
      margin: 0;
      text-align: center;
    }
    .controls {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 20px auto; /* Center the section */
  gap: 20px;
  padding: 10px;
  flex-wrap: wrap;
  background-color: rgba(0, 199, 230, 0.423);
  width: fit-content; /* Shrink to fit the content */
}
p{
    color:#666;
}
.expertise li{
    color:#666;
}
.interests li{
    color:#666;
}

.resume-container {
  width: 85%;
  max-width: 900px;
  margin: 20px auto;
  background: #fff;
  padding: 20px;
}

/* Header Section */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  margin-left:40px; 
}

.info-column {
  flex: 2;
  text-align: left;
}

.info-column h1 {
  font-size: 28px;
  color: #333;
}

.info-column h2 {
  font-size: 18px;
  color: white;
  margin: 5px 0;
  background-color:#007bff;
  width:fit-content;
  padding:0px 10px;
}

.info-column p {
  font-size: 14px;
  color: #666;
  margin-bottom: 10px;
}

.contact-column {
  flex: 1;
  text-align: left;
  background-color:#007bff;
  padding-top:40px;
  padding-bottom:10px;
  padding-right 0px;
  padding-left:10px;
  margin-right:30px;
  margin-left:180px;
}

.contact-column p {
  font-size: 14px;
  margin-bottom: 5px;
  color:white;
}

/* Content Section */
.content {
  display: flex;
  gap: 20px;
}

.left-column {
  flex: 1;
  max-width: 35%;
  margin-left:40px; 
}
.color{
    background-color: #007bff;
    width:220px;
    height:30px;
    margin-bottom:0px;  
}

.photo {
  width: 250px;
  height: 250px;
  border-radius: 10px;
  border: 2px solid #007bff;
  margin-bottom: 20px;
  overflow: hidden;
  cursor: pointer; /* Makes the photo area clickable */
}

.photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.right-column {
  flex: 2;
  max-width: 65%;
}

h3 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #333;
}

/* Work Experience */
.work-experience .job {
  margin-bottom: 20px;
}

.work-experience .job p {
  font-size: 14px;
  color: #666;
}

.work-experience .job h4 {
  font-size: 16px;
  margin: 5px 0;
}
.job-row {
  display: flex;
  gap: 20px;
}

.job-year {
  flex: 1;
  max-width: 100px;
  font-size: 14px;
  color: #666;
  margin-top:8px;
}

.job-details {
  flex: 3;
}

.job-details h4 {
  font-size: 16px;
  margin: 5px 0;
}

.job-details p {
  font-size: 14px;
  color: #666;
}

/* Education, Reference, Expertise, and Interests */
.education, .reference, .expertise, .interests {
  margin-bottom: 20px;
}

.education p, .reference p, .expertise ul li, .interests ul li {
  font-size: 14px;
  margin-bottom: 5px;
}
.reference {
  margin-top: 20px;
}

.reference-container {
  display: flex;
  gap: 20px;
}

.reference-item {
  flex: 1;
  font-size: 14px;
  color: #666;
}

.reference-item p {
  margin-bottom: 5px;
}


.expertise ul, .interests ul {
  list-style-type: disc;
  margin-left: 20px;
}
.download-btn {
      width: 200px;
      padding: 15px 20px;
      margin: 10px 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
    }

    .download-btn:hover {
      background-color: #0056b3;
    }

select {
  appearance: none;
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 8px;
  font-size: 14px;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: border 0.3s ease;
}

select:focus {
  border-color: #007bff;
}

.color-picker {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  height: 40px;
  width: 40px;
  border: 1px solid #ccc;
  background-color: #fff;
  cursor: pointer;
  padding: 0px;
  border-radius: 50%;
}

.color-picker::-webkit-color-swatch-wrapper {
  border-radius: 50%;
}

.color-picker::-webkit-color-swatch {
  border-radius: 50%;
}

.color-picker:focus {
  border-color: #007bff;
}

  </style>
</head>
<body>
<div class="Title">
     <button class="back-btn" onclick="goBack()"> < </button>
        <h1>CREATE YOUR RESUME</h1>
      </div>
      <div class="controls">
        <select class="font-select" id="fontSelect">
          <option value="Arial">Arial</option>
          <option value="Times New Roman">Times New Roman</option>
          <option value="Courier New">Courier New</option>
          <option value="Georgia">Georgia</option>
          <option value="Verdana">Verdana</option>
          <option value="Tahoma">Tahoma</option>
          <option value="Trebuchet MS">Trebuchet MS</option>
        </select>
    
        <select class="font-size-select" id="fontSizeSelect">
          <option value="14px">14px</option>
          <option value="16px">16px</option>
          <option value="18px">18px</option>
          <option value="20px">20px</option>
          <option value="22px">22px</option>
          <option value="24px">24px</option>
          <option value="26px">26px</option>
          <option value="28px">28px</option>
          <option value="32px">32px</option>
          <option value="48px">48px</option>
          <option value="56px">56px</option>
          <option value="72px">72px</option>
        </select>
    
        <input type="color" class="color-picker" id="colorPicker" value="#000000">
    
        <select id="formatSelect">
          <option value="png">PNG</option>
          <option value="jpg">JPG</option>
          <option value="pdf">PDF</option>
        </select>
    
        <button class="download-btn" onclick="downloadResume()">Download Resume</button>
        <button class="download-btn" onclick="saveResume()">Save Resume</button>
      </div>
  <div class="resume-container">
    <!-- Header Section -->
    <div class="header" contenteditable="true">
      <div class="info-column">
        <h1>Mathew Smith</h1>
        <h2>UI Designer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste, ratione.</p>
      </div>
      <div class="contact-column">
        <p><strong>Address:</strong><br> 55 Street City/Zip Code - 456</p>
        <p><strong>Phone:</strong><br> +000 123 456 789</p>
        <p><strong>Email:</strong><br> username@gmail.com</p>
      </div>
    </div>

    <!-- Main Resume Content -->
    <div class="content">
      <!-- Left Column -->
      <div class="left-column" contenteditable="true">
        <!-- Photo Section -->
        <div class="photo" onclick="triggerFileInput()">
          <img id="profileImage" src="profile-picture.jpg" alt="Profile Photo">
        </div>
        <!-- Hidden File Input -->
        <input type="file" id="uploadPhoto" accept="image/*" style="display: none;" onchange="previewImage(event)">
        <div class="education">
          <h3>Education</h3>
          <p><strong>Enter Your Major</strong></p>
          <p>Name of Your University<br>2005-2009</p>
          <p><strong>Enter Your Major</strong></p>
          <p>Name of Your University<br>2009-2011</p>
        </div>
        <div class="expertise">
          <h3>Expertise</h3>
          <ul>
            <li>Photoshop</li>
            <li>Illustrator</li>
            <li>InDesign</li>
            <li>PowerPoint</li>
          </ul>
        </div>
        <div class="color"></div>
      </div>

      <!-- Right Column -->
      <div class="right-column" contenteditable="true">
      <div class="work-experience">
  <h3>Work Experience</h3>
  <div class="job">
    <div class="job-row">
      <div class="job-year">
        <p><strong>2012-2014</strong></p>
      </div>
      <div class="job-details">
        <h4>Job Position Here</h4>
        <p>Company Name / California USA</p>
        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum.</p>
      </div>
    </div>
  </div>
  <div class="job">
    <div class="job-row">
      <div class="job-year">
        <p><strong>2014-2017</strong></p>
      </div>
      <div class="job-details">
        <h4>Job Position Here</h4>
        <p>Company Name / California USA</p>
        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum.</p>
      </div>
    </div>
  </div>
  <div class="job">
    <div class="job-row">
      <div class="job-year">
        <p><strong>2017-Present</strong></p>
      </div>
      <div class="job-details">
        <h4>Job Position Here</h4>
        <p>Company Name / California USA</p>
        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum.</p>
      </div>
    </div>
  </div>
</div>
<div class="reference">
  <h3>Reference</h3>
  <div class="reference-container">
    <div class="reference-item">
      <p><strong>Glenin M. Gregory</strong></p>
      <p>Director, Matrix Media Ltd.</p>
      <p>Phone: +555 123 454</p>
    </div>
    <div class="reference-item">
      <p><strong>Jennifer S. Gavin</strong></p>
      <p>Director, Matrix Media Ltd.</p>
      <p>Phone: +555 123 454</p>
    </div>
  </div>
</div>


        <div class="interests">
          <h3>Interests</h3>
          <ul>
            <li>Travel</li>
            <li>Music</li>
            <li>Writing</li>
            <li>Chess</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
  <script src="https://files.bpcontent.cloud/2024/11/19/09/20241119091811-LTYSS5JC.js"></script>
  <script>
  // Change font of the entire resume
fontSelect.addEventListener("change", () => {
  const font = fontSelect.value;
  document.querySelector(".resume-container").style.fontFamily = font;
});

// Apply selected font size to highlighted text
fontSizeSelect.addEventListener("change", () => {
  const selectedSize = fontSizeSelect.value;
  const selection = window.getSelection();

  if (selection.rangeCount === 0) return; // No text selected

  const range = selection.getRangeAt(0);
  const selectedText = range.toString();

  // Wrap selected text in a span with font size
  const span = document.createElement("span");
  span.style.fontSize = selectedSize;
  span.textContent = selectedText;

  range.deleteContents();
  range.insertNode(span);
});

// Apply color to selected text only
colorPicker.addEventListener("input", () => {
  const color = colorPicker.value;
  const selection = window.getSelection();

  if (!selection.rangeCount) return; // No text selected

  const range = selection.getRangeAt(0);
  const selectedText = range.toString();

  // Wrap selected text in a span with color
  const span = document.createElement("span");
  span.style.color = color;
  span.textContent = selectedText;

  range.deleteContents();
  range.insertNode(span);
});

// Download the resume in the selected format
function downloadResume() {
  const format = document.getElementById("formatSelect").value;
  const resume = document.querySelector(".resume-container");

  if (format === "png" || format === "jpg") {
    // Ensure `html2canvas` works correctly
    html2canvas(resume, {
      backgroundColor: null, // Transparent background
      scale: 2, // Higher resolution
      scrollX: -window.scrollX, // Handle scrolling
      scrollY: -window.scrollY,
      useCORS: true, // Cross-origin support
    })
      .then((canvas) => {
        const link = document.createElement("a");
        link.download = `resume.${format}`;
        link.href = canvas.toDataURL(`image/${format}`);
        link.click();
      })
      .catch((error) => console.error("Error generating image:", error));
  } else if (format === "pdf") {
    // Ensure `jspdf` works correctly
    const { jsPDF } = window.jspdf;
    const pdf = new jsPDF("p", "pt", "a4");

    pdf.html(resume, {
      x: 10,
      y: 10,
      width: 550, // Width of the content in PDF
      windowWidth: resume.scrollWidth, // Match resume's width
      callback: function (doc) {
        doc.save("resume.pdf");
      },
    }).catch((error) => console.error("Error generating PDF:", error));
  }
}
const resume = document.querySelector(".resume-container"); // Ensure this exists

function saveResume() {
  html2canvas(resume, {
    backgroundColor: null,
    scale: 2,
    scrollX: -window.scrollX,
    scrollY: -window.scrollY,
    useCORS: true,
  }).then((canvas) => {
    const dataURL = canvas.toDataURL("image/jpeg"); // Convert to base64 image data
    const email = "user@example.com"; // Replace with actual email or input value

    fetch("save_resume.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ email: email, resume_image: dataURL }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert("Resume saved successfully!");
        } else {
          alert("Failed to save resume: " + data.message);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("An error occurred while saving the resume.");
      });
  });
}
function goBack() {
  window.history.back();
}
    // Function to trigger the hidden file input
    function triggerFileInput() {
      document.getElementById('uploadPhoto').click();
    }

    // Function to preview the selected image
    function previewImage(event) {
      const file = event.target.files[0];
      const reader = new FileReader();

      reader.onload = function(e) {
        const image = document.getElementById('profileImage');
        image.src = e.target.result;  // Update the image source to show the uploaded photo
      };

      reader.readAsDataURL(file);
    }
  </script>
</body>
</html>
