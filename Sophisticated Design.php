<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sophisticated Design</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #333;
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

.date {
  float: right;
  font-size: 14px;
  color: #666;
}
.resume-container {
    max-width: 900px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
}

.header {
    display: flex;
    align-items: center;
    border-bottom: 2px solid #ccc;
    padding-bottom: 20px;
}

.profile-pic-label {
    cursor: pointer;
    display: inline-block;
    text-align: center;
}

.profile-pic-container {
    width: 100px;
    height: 100px;
    margin-right:10px;
    margin-top:15px;
    border: 2px solid #ccc; /* Dashed border for placeholder effect */
    border-radius: 50%; /* Circular border */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    background-color: #f8f8f8; /* Light background for placeholder */
}

.profile-pic {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: none; /* Hidden until an image is uploaded */
}

.profile-pic-placeholder {
    font-size: 12px;
    color: #aaa;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.profile-pic-container img:not([src="placeholder.jpg"]) {
    display: block; /* Show image if it's not the placeholder */
}

.header-text h1 {
    font-size: 24px;
    margin-right: 0;
}

.header-text p {
    margin: 5px 0;
    font-weight: bold;
}

.contact-info {
    text-align: left;
    font-size: 14px;
    margin-top:10px;
    
}
.contact-info ul{
    margin-left:270px;
}
.contact-info ul li{
    list-style-type: none;
}

.columns {
    display: flex;
    margin-top: 20px;
}

.left-column {
    width: 30%;
    padding-right: 20px;
    border-right: 2px solid #ccc;
}

.right-column {
    width: 70%;
    padding-left: 20px;
}

section {
    margin-bottom: 20px;
}

h2 {
    font-size: 18px;
    margin-bottom: 10px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 5px;
}

.progress {
    background: #e0e0e0;
    border-radius: 5px;
    overflow: hidden;
    height: 8px;
    margin: 5px 0;
}

.progress div {
    background: #333;
    height: 100%;
}

ul {
    padding: 0;
    margin-left:20px;
}

ul li {
    margin-bottom: 5px;
}
.links a{
    text-decoration:none;
    color:black;
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
    <div class="header" contenteditable="true">
    <label for="profile-upload" class="profile-pic-label">
        <div class="profile-pic-container">
            <img src="placeholder.jpg" alt="Profile Picture" class="profile-pic" id="profile-pic-preview">
        </div>
        <input type="file" id="profile-upload" accept="image/*" style="display: none;">
    </label>
    <div class="header-text">
        <h1>DON DRAPER</h1>
        <p>ATS TEMPLATES SPECIALIST</p>
    </div>
    <div class="contact-info">
        <ul>
        <li><strong>New York, USA, New York, 10001, USA</strong></li>
        <li>+1-202-555-0173</li>
        <li>don.draper@example.com</li>
        </ul>
    </div>
</div>
        <div class="columns">
            <div class="left-column" contenteditable="true">
                <section class="links">
                    <h2>LINKS</h2>
                    <p><a href="#">LinkedIn: https://www.linkedin.com/in/don-draper</a></p>
                    <p><a href="#">Twitter: https://twitter.com/don_draper</a></p>
                </section>
                <section class="languages">
                    <h2>LANGUAGES</h2>
                    <p>English</p>
                    <div class="progress"><div style="width: 100%;"></div></div>
                    <p>French</p>
                    <div class="progress"><div style="width: 70%;"></div></div>
                    <p>Spanish</p>
                    <div class="progress"><div style="width: 50%;"></div></div>
                </section>
                <section class="reference">
                    <h2>REFERENCE 1</h2>
                    <p><strong>Roger Sterling</strong></p>
                    <p>Sterling Cooper & Partners</p>
                    <p>P: +1-202-555-0167</p>
                    <p>E: rogersterling@example.com</p>
                </section>
                <section class="reference">
                    <h2>REFERENCE 2</h2>
                    <p><strong>Roger Sterling</strong></p>
                    <p>Sterling Cooper & Partners</p>
                    <p>P: +1-202-555-0167</p>
                    <p>E: rogersterling@example.com</p>
                </section>
                <section class="hobbies">
                    <h2>HOBBIES</h2>
                    <ul>
                        <li>Photography</li>
                        <li>Reading</li>
                        <li>Traveling</li>
                        <li>Art Appreciation</li>
                        <li>Cooking</li>
                    </ul>
                </section>
            </div>

            <div class="right-column" contenteditable="true">
                <section class="about">
                    <h2>ABOUT ME</h2>
                    <p>Experienced ATS Templates Specialist with a demonstrated history of working in the advertising industry. Skilled in ATS Systems, Graphic Design, Typography, and Leadership. Strong professional with a Bachelor's Degree in Graphic Design and an Associate's Degree in Advertising from City College of New York.</p>
                </section>
                <section class="work-experience">
                    <h2>WORK EXPERIENCE</h2>
                    <div class="job">
                        <h3>Senior ATS Templates Specialist | Jan 2012 - Dec 2020</h3>
                        <p><strong>Sterling Cooper & Partners, New York</strong></p>
                        <ul>
                            <li>Developed and implemented ATS-friendly resume templates.</li>
                            <li>Led a team of junior specialists to ensure high-quality output.</li>
                        </ul>
                    </div>
                    <div class="job">
                        <h3>ATS Templates Specialist | Jan 2007 - Dec 2011</h3>
                        <p><strong>Sterling Cooper Draper Pryce, New York</strong></p>
                        <ul>
                            <li>Created ATS-friendly resume templates for various industries.</li>
                            <li>Collaborated with the creative team to design visually appealing templates.</li>
                        </ul>
                    </div>
                </section>
                <section class="education">
                    <h2>EDUCATION</h2>
                    <div class="degree">
                        <h3>Bachelor's Degree in Graphic Design | 1949</h3>
                        <p><strong>City College of New York, New York</strong></p>
                        <ul>
                            <li>Focused on typography and layout design.</li>
                            <li>Graduated with honors.</li>
                        </ul>
                    </div>
                    <div class="degree">
                        <h3>Associate's Degree in Advertising | 1947</h3>
                        <p><strong>City College of New York, New York</strong></p>
                        <ul>
                            <li>Studied principles of advertising and marketing.</li>
                            <li>Completed a successful internship at a local advertising agency.</li>
                        </ul>
                    </div>
                </section>
                <section class="skills">
                    <h2>SKILLS</h2>
                    <div class="skill">
                        <p>ATS Systems</p>
                        <div class="progress"><div style="width: 100%;"></div></div>
                    </div>
                    <div class="skill">
                        <p>Typography</p>
                        <div class="progress"><div style="width: 90%;"></div></div>
                    </div>
                    <div class="skill">
                        <p>Graphic Design</p>
                        <div class="progress"><div style="width: 85%;"></div></div>
                    </div>
                    <div class="skill">
                        <p>Leadership</p>
                        <div class="progress"><div style="width: 80%;"></div></div>
                    </div>
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
    document.getElementById('profile-upload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-pic-preview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

</body>
</html>
