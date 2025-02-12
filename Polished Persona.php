<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polished Persona</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
    /* styles.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
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
  max-width: 1200px;
  margin: 20px auto;
  overflow: hidden;
  background-color:white;
}

.left-section {
  width: 35%;
  background-color: #2b2f36;
  color: #ffffff;
  padding: 20px;
  padding-left:40px;
}

.profile-photo img {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  cursor: pointer;
  display: block;
  margin: 0 auto;
  border:2px solid white;
}


section h2 {
  font-size: 16px;
  margin-bottom: 10px;
  border-bottom: 1px solid #fff;
  padding-bottom: 5px;
}

section ul, section p {
  font-size: 14px;
  line-height: 1.6;
}

.right-section {
  width: 65%;
  padding: 20px;
}

.header h1 {
  font-size: 28px;
  margin: 0;
  color: #333;
}

.header h3 {
  font-size: 18px;
  color: #777;
  margin: 5px 0;
}
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom:60px;
  margin-top:10px;
}
.contact-info p {
  font-size: 14px;
  margin: 10px 0;
  text-align: right;
}

.work-experience .experience-item, .education .education-item {
  margin-bottom: 20px;
}

/* General Styling for Skills and Languages */
.skills-container, .languages-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.skill-item, .language-item {
  width: calc(50% - 10px); /* Two items per row */
}

.skill-bar, .language-bar {
  background: #ddd;
  height: 6px;
  border-radius: 3px;
  position: relative;
  margin-top: 5px;
}

.skill-bar .fill, .language-bar .fill {
    display: block;
      height: 100%;
      background-color: #2b2f36;
      border-radius: 3px;
}

section h2 {
  font-size: 16px;
  margin-bottom: 10px;
  border-bottom: 1px solid #ddd;
  padding-bottom: 5px;
}

.experience-item, .education-item {
  display: flex;
  align-items: flex-start;
  gap: 20px;
}

.experience-item h4, .education-item h4 {
  width: 150px; /* Adjust based on your design */
  font-size: 16px;
  color: #333;
  margin: 0;
}

.experience-item p, .education-item p {
  width: 200px;
  font-size: 14px;
  color: #777;
  margin:0px;
}

.experience-item ul, .education-item ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
  flex: 1;
  font-size: 14px;
  line-height: 1.6;
}
.left-section h2{
    margin-top:40px;
}
.hobbies li{
    line-height:30px;
}
.links a{
    text-decoration:none;
    color:white;
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
    <div class="left-section" contenteditable="true">
    <div class="profile-photo">
  <label for="imageUpload">
    <img id="profileImage" src="profile-photo.jpg" alt="Profile Photo">
  </label>
  <input type="file" id="imageUpload" accept="image/*" onchange="previewImage(event)" style="display: none;">
</div>
      <section class="about">
        <h2>ABOUT ME</h2>
        <p>Highly experienced ATS Templates Specialist with a strong background in managing and optimizing Applicant Tracking Systems. Proven ability to train teams and collaborate effectively with IT departments. Known for meticulous attention to detail and problem-solving skills.</p>
      </section>
      <section class="links">
        <h2>LINKS</h2>
        <p><strong>LinkedIn:</strong> <a href="#">https://www.linkedin.com/in/sherlockholmes</a></p>
        <p><strong>Twitter:</strong> <a href="#">https://twitter.com/sherlockholmes</a></p>
      </section>
      <section class="reference">
        <h2>REFERENCE</h2>
        <p><strong>Dr. John Watson</strong><br>Private Practice<br>T: +44 20 7935 1200<br>E: john.watson@doctor.com</p>
      </section>
      <section class="hobbies">
        <h2>HOBBIES</h2>
        <ul>
          <li>Violin Playing</li>
          <li>Chemistry</li>
          <li>Boxing</li>
          <li>Fencing</li>
          <li>Cryptography</li>
        </ul>
      </section>
    </div>
    <div class="right-section" contenteditable="true">
    <header class="header">
  <div>
    <h1>SHERLOCK <br>HOLMES</h1>
    <h3>ATS Templates Specialist</h3>
  </div>
  <div class="contact-info">
    <p><strong>Address:</strong> 221B Baker Street, London, NW1 6XE, UK</p>
    <p><strong>Phone:</strong> +44 20 7224 3688</p>
    <p><strong>Email:</strong> sherlock.holmes@detective.com</p>
  </div>
</header>

      <section class="work-experience">
  <h2>WORK EXPERIENCE</h2>
  <div class="experience-item">
    <div>
      <h4>ATS Templates Specialist</h4>
      <p>Jan 2018 - Dec 2022</p>
    </div>
    <ul>
      <li>Assisted in the development and implementation of ATS templates.</li>
      <li>Conducted regular template testing and optimization.</li>
      <li>Provided training to HR team on ATS usage.</li>
      <li>Collaborated with IT team to troubleshoot and resolve ATS issues.</li>
    </ul>
  </div>
  <div class="experience-item">
    <div>
      <h4>Junior ATS Specialist</h4>
      <p>Jan 2015 - Dec 2017</p>
    </div>
    <ul>
      <li>Assisted in managing the ATS system.</li>
      <li>Conducted regular system audits.</li>
      <li>Assisted in training new employees on ATS usage.</li>
      <li>Collaborated with senior ATS specialists on various projects.</li>
    </ul>
  </div>
</section>

      <section class="education">
        <h2>EDUCATION</h2>
        <div class="education-item">
          <h4>Bachelor's Degree in Computer Science</h4>
          <p><strong>University of Cambridge</strong><br>2014</p>
          <ul>
            <li>Specialized in software development.</li>
            <li>Completed a project on Applicant Tracking Systems.</li>
          </ul>
        </div>
        <div class="education-item">
          <h4>A-Level in Computer Science</h4>
          <p><strong>Eton College, Windsor</strong><br>2011</p>
          <ul>
            <li>Focused on programming and database management.</li>
            <li>Developed a basic job application tracking system.</li>
          </ul>
        </div>
      </section>
      <section class="skills">
        <h2>SKILLS</h2>
        <div class="skills-container">
          <div class="skill-item">
            <p>ATS Management</p>
            <div class="skill-bar"><span class="fill" style="width: 100%;"></span></div>
          </div>
          <div class="skill-item">
            <p>Template Design</p>
            <div class="skill-bar"><span class="fill" style="width: 100%;"></span></div>
          </div>
          <div class="skill-item">
            <p>System Auditing</p>
            <div class="skill-bar"><span class="fill" style="width: 95%;"></span></div>
          </div>
          <div class="skill-item">
            <p>Training</p>
            <div class="skill-bar"><span class="fill" style="width: 90%;"></span></div>
          </div>
          <div class="skill-item">
            <p>Collaboration</p>
            <div class="skill-bar"><span class="fill" style="width: 85%;"></span></div>
          </div>
          <div class="skill-item">
            <p>Collaboration</p>
            <div class="skill-bar"><span class="fill" style="width: 80%;"></span></div>
          </div>    
        </div>
      </section>
      <section class="skills">
  <h2>LANGUAGE</h2>
  <div class="skills-container">
    <div class="skill-item">
      <p>English</p>
      <div class="skill-bar"><span class="fill" style="width: 90%;"></span></div>
    </div>
    <div class="skill-item">
      <p>French</p>
      <div class="skill-bar"><span class="fill" style="width: 80%;"></span></div>
    </div>
    <div class="skill-item">
      <p>Tamil</p>
      <div class="skill-bar"><span class="fill" style="width: 75%;"></span></div>
    </div>
    <div class="skill-item">
      <p>Telugu</p>
      <div class="skill-bar"><span class="fill" style="width: 90%;"></span></div>
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
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
      const imgElement = document.getElementById('profileImage');
      imgElement.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>
</body>
</html>
