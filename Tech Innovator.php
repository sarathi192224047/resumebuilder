<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tech Innovator</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
    body {
  font-family: Arial, sans-serif;
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
.resume-container {
  display: flex;
  max-width: 900px;
  margin: 20px auto;
  background: white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.left-column {
  width: 30%;
  background-color: #f4f4f4;
  padding: 20px;
}

.profile-pic {
  text-align: center;
  margin-bottom: 20px;
}

.upload-circle {
  width: 120px;
  height: 120px;
  border: 2px solid #ccc;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
  cursor: pointer;
}

.upload-circle img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.upload-circle:hover {
  border-color: #333;
}

.right-column {
  width: 70%;
}

.right-column .header {
  margin-bottom: 20px;
}

.right-column .header h1 {
  font-size: 26px;
  margin: 0;
}

.right-column .header .subtitle {
  font-size: 16px;
  color: gray;
  margin-top: 5px;
}

.left-column h2 {
  font-size: 18px;
  margin-bottom: 10px;
  padding-top:10px;
  color:#555;
  border-top: 2px solid #e0e0e0;
}
.right-column h2 {
  font-size: 18px;
  margin-bottom: 10px;
  padding-bottom:5px;
  color:#555;
  border-bottom: 2px solid #e0e0e0;
}
.header{
    background-color:#f4f4f4;
    margin-top:20px;
    padding:8px;
    padding-top: 20px;
    padding-left:20px;
}
.header h1{
    color:#555;
}
.right-column li{
    color:#666;
}
.right-column p{
    color:#666;
}
.left-column li{
    color:#666;
}
.left-column p{
    color:#666;
}
.right-column section{
    margin-left:20px;
}
.reference p{
    margin:0px;
    line-height:25px;
}
.links a {
    text-decoration:none;
    color:#666;
}
.skills-container {
  display: flex;
  gap: 20px;
}

.skill-column {
  width: 50%;
}

.skill-bar {
  margin-bottom: 10px;
}

.bar {
  background: #f0f0f0;
  height: 8px;
  border-radius: 4px;
  position: relative;
}

.progress {
  background: #666;
  height: 8px;
  border-radius: 4px;
}
.hobbies ul{
    line-height:30px;
    padding:0px;
    margin-left:20px;
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
    <div class="left-column" contenteditable="true">
      <div class="profile-pic">
        <label for="upload-photo">
          <div class="upload-circle">
            <img id="profile-img" src="profile-pic.jpg" alt="Rachel Green">
          </div>
        </label>
        <input type="file" id="upload-photo" accept="image/*" style="display: none;" onchange="updatePhoto(event)">
      </div>
      <section class="contact-info">
        <p><strong>📞</strong> +1 234 567 890</p>
        <p><strong>✉</strong> rachel.green@gmail.com</p>
        <p><strong>📍</strong> New York, USA, New York, 10001, USA</p>
      </section>
      <section class="links">
        <h2>Links</h2>
        <p>LinkedIn: </p><a href="https://www.linkedin.com/in/rachelgreen">linkedin.com/in/rachelgreen</a></p>
        <p>Twitter: </p><a href="https://www.twitter.com/rachelgreen">twitter.com/rachelgreen</a></p>
      </section>
      <section class="languages">
        <h2>LANGUAGES</h2>
        <p>English</p>
        <p>French</p>
      </section>
      <section class="reference">
        <h2>REFERENCE</h2>
        <p>Monica Geller</p>
        <p>Central Perk Corporation</p>
        <p>monica.geller@gmail.com</p>
        <p>+1 234 567 891</p>
      </section>
      <section class="hobbies">
        <h2>HOBBIES</h2>
        <ul>
          <li>Cooking</li>
          <li>Fashion Designing</li>
          <li>Travelling</li>
        </ul>
      </section>
    </div>
    <div class="right-column" contenteditable="true">
      <div class="header">
        <h1>Rachel Green</h1>
        <p class="subtitle">ATS Templates Specialist</p>
      </div>
      <section class="about">
        <h2>ABOUT ME</h2>
        <p>A highly experienced ATS Templates Specialist with a strong background in software development and database management. Proven track record in developing and implementing ATS strategies, training staff, and managing ATS-related issues.</p>
      </section>
      <section class="work-experience">
        <h2>WORK EXPERIENCE</h2>
        <div class="job">
          <h3>Senior ATS Specialist</h3>
          <p>Central Perk Corporation / New York / Jan 2015 - Dec 2021</p>
          <ul>
            <li>Developed and implemented ATS strategies</li>
            <li>Trained staff on ATS usage</li>
            <li>Managed ATS-related issues</li>
          </ul>
        </div>
        <div class="job">
          <h3>ATS Consultant</h3>
          <p>Bloomingdale's / New York / Jan 2010 - Dec 2014</p>
          <ul>
            <li>Provided ATS solutions</li>
            <li>Conducted ATS workshops</li>
            <li>Assisted in ATS integration</li>
          </ul>
        </div>
      </section>
      <section class="education">
        <h2>EDUCATION</h2>
        <div class="degree">
          <h3>Master's in Computer Science</h3>
          <p>New York University / New York / 2009</p>
          <ul>
            <li>Specialized in Software Development</li>
            <li>Completed a project on ATS</li>
          </ul>
        </div>
        <div class="degree">
          <h3>Bachelor's in Computer Science</h3>
          <p>New York University / New York / 2007</p>
          <ul>
            <li>Focused on Database Management</li>
            <li>Undertook an internship in ATS</li>
          </ul>
        </div>
      </section>
      <section class="skills">
  <h2>SKILLS</h2>
  <div class="skills-container">
    <div class="skill-column">
      <div class="skill-bar">
        <p>ATS Management</p>
        <div class="bar"><div class="progress" style="width: 90%;"></div></div>
      </div>
      <div class="skill-bar">
        <p>Database Management</p>
        <div class="bar"><div class="progress" style="width: 80%;"></div></div>
      </div>
      <div class="skill-bar">
        <p>Project Management</p>
        <div class="bar"><div class="progress" style="width: 85%;"></div></div>
      </div>
    </div>
    <div class="skill-column">
      <div class="skill-bar">
        <p>Software Development</p>
        <div class="bar"><div class="progress" style="width: 75%;"></div></div>
      </div>
      <div class="skill-bar">
        <p>Team Leadership</p>
        <div class="bar"><div class="progress" style="width: 70%;"></div></div>
      </div>
      <div class="skill-bar">
        <p>Communication</p>
        <div class="bar"><div class="progress" style="width: 95%;"></div></div>
      </div>
    </div>
  </div>
</section>

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
    function updatePhoto(event) {
      const reader = new FileReader();
      reader.onload = function () {
        const img = document.getElementById("profile-img");
        img.src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</body>
</html>
