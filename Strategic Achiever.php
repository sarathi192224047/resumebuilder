<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strategic Achiever</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        /* styles.css */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
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
      padding: 30px;
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

.date {
  float: right;
  font-size: 14px;
  color: #666;
}

.resume-container {
    max-width: 900px;
    margin: 20px auto;
    background: #fff;
}

/* Header Section */
.header {
    display: flex;
    justify-content: space-between;
    border-bottom: 2px solid #ddd;
    padding-bottom: 20px;
    margin-left:25px;
    padding-top:20px;
}

.header-left h1 {
    font-size: 32px;
    margin: 0;
    color: #333;
}

.header-left .title {
    font-size: 20px;
    color: #d9534f;
    margin-top: 5px;
}

.header-left .description {
    font-size: 14px;
    margin-top: 10px;
    width:80%;
    color: #555;
}

.header-right ul {
    list-style: none;
    padding: 0;
    margin-top:10px;
    margin-right:15px;
    font-size: 14px;
}

.header-right ul li {
    margin-bottom: 5px;
}

/* Main Content Section */
.main-content {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.left-column, .right-column {
    width: 48%;
}

/* Section Styles */
h2 {
    font-size: 18px;
    color: #444;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
    margin-bottom: 15px;
    margin-left:25px;
}

h3 {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
    margin-left:25px;
}

.company {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
    margin-left:25px;
}

ul {
    padding: 0;
    margin-left:20px;
}

ul li {
    margin-bottom: 10px;
    margin-left:25px;
    font-size: 14px;
    color: #555;
}
/* Skills Section */
.skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-left:25px;
    margin-bottom:20px;
}

.skill-tags span {
    background: #545;
    color:white;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
}

/* Interests & Languages */
.interests, .languages p {
    font-size: 14px;
    margin: 5px 0;
}
.languages strong{
    color:#d9534f;
}
.work-experience .colour{
    width:20px;
    top:38px;
    position:relative;
    height:30px;
    margin-left:0px;
    background:red;
}
h5{
    margin-left:25px;
}
.education .colour{
    width:20px;
    top:38px;
    position:relative;
    height:30px;
    margin-left:0px;
    background:red;
}
.education strong{
    margin-left:25px;
}
.volunteer strong{
    margin-left:25px;
}
.interests p{
    margin-left:25px;
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
            <div class="header-left">
                <h1>Danilo Rivera</h1>
                <p class="title">Professional Waiter</p>
                <p class="description">Hardworking, self-motivated professional with 5+ years of exceptional customer service experience in a range of different food establishments...</p>
            </div>
            <div class="header-right">
                <ul class="contact-info">
                    <li>danilo@novoresume.com</li>
                    <li>123 455 124</li>
                    <li>Nashville, TN</li>
                    <li>linkedin.com/in/danilo.rivera</li>
                    <li>danilo.rivera</li>
                </ul>
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="main-content">
            <!-- Left Column -->
            <div class="left-column" contenteditable="true">
                <section class="work-experience">
                <div class="colour" ></div>
                    <h2>Work Experience</h2>
                    <div class="job">
                        <h3>Professional Waiter</h3>
                        <p class="company">Homey Hospitality Hotel & Restaurant <span>(09/2019 - Present | Nashville, TN)</span></p>
                        <ul>
                            <li>Demonstrate strong familiarity with the wine stocks and proper entrée pairings...</li>
                            <li>Competently utilize the POS to process customer orders...</li>
                            <li>Execute top-quality customer service, including greeting guests...</li>
                            <li>Maintain seamless day-to-day restaurant operations...</li>
                            <li>Design and deliver adequate training to 12 newly hired waiters/waitresses...</li>
                        </ul>
                    </div>
                    <div class="job">
                    <div class="colour" ></div>
                        <h3>Host & Waiter</h3>
                        <h5>Delightful Dining House</h5>
                        <p class="company">Delightful Dining House <span>(04/2015 - 08/2019 | Nashville, TN)</span></p>
                        <ul>
                            <li>Orchestrated exemplary services by greeting guests courteously...</li>
                            <li>Persuasively introduced new menu items, leading to a 15% increase...</li>
                            <li>Assisted in training the 7 newly-hired hosts and hostesses...</li>
                        </ul>
                    </div>
                </section>

                <section class="education">
                <div class="colour" ></div> 
                    <h2>Education</h2>
                    <p><strong>High School Diploma</strong></p>
                    <ul>
                        <li>Abraham Lincoln High School (2011 - 2015)</li>
                    </ul>
                    <p><strong>University</strong></p>
                    <ul>
                        <li>Abraham Lincoln University (2015 - 2019)</li>
                    </ul>
                </section>
            </div>

            <!-- Right Column -->
            <div class="right-column" contenteditable="true">
                <section class="skills">
                    <h2>Skills</h2>
                    <div class="skill-tags">
                        <span>Conflict Resolution</span>
                        <span>Superior Coordination Skills</span>
                        <span>Food Safety & Hygiene</span>
                        <span>Training & Development</span>
                        <span>Excellent Customer Service</span>
                        <span>Quality Assurance</span>
                        <span>Multitasking</span>
                        <span>Health & Safety Regulations Compliance</span>
                    </div>
                </section>

                <section class="courses">
                    <h2>Courses & Training</h2>
                    <ul>
                        <li>Waiter and Waitress Training 101 - Universal Class (04/2015 - 12/2015)</li>
                        <li>Food Hygiene Training - Universal Class (08/2015)</li>
                        <li>Health Certificate for Food Handlers (08/2015)</li>
                    </ul>
                </section>

                <section class="achievements">
                    <h2>Achievements</h2>
                    <ul>
                        <li>Star Employee of the Month (12/2019)</li>
                        <li>Super Host Award (02/2017)</li>
                    </ul>
                </section>

                <section class="volunteer">
                    <h2>Volunteer Experience</h2>
                    <p><strong>Volunteer Server</strong></p>
                    <ul>
                    <li>Bright Hope Baptist Soup Kitchen (05/2019 - Present)</li>
                    <li>Provide assistance during organizational events...</li>
                    </ul>
                </section>

                <section class="interests">
                    <h2>Interests</h2>
                    <p>Video Games, Cooking, Photography, Food Blogging</p>
                </section>

                <section class="languages">
                    <h2>Languages</h2>
                    <ul>
                    <li>English &nbsp<strong>(Native or Bilingual Proficiency)</strong></li>
                    <li>Spanish &nbsp<strong>(Native or Bilingual Proficiency)</strong></li>
                    <li>French &nbsp<strong>(Full Professional Proficiency)</strong></li>
                    </ul>
                </section>
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

</script>
</body>
</html>