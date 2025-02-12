<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NextGen Narrative</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
   body {
  margin: 0;
  padding: 0;
  font-family: "Arial", sans-serif;
  background-color: #f8f9fa;
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
    font-size: 14px;
    color: #1e5c5b;
    float: right;
    padding-top:0px;
}
.left-column p{
    font-size:12px;
    color:#1e5c5b;
}
.left-column h4{
           margin:0px;
    }
    .left-column h5{
        font-size:15px;
        color:#666;
        margin-top:3px;
    }

.resume-container {
  max-width: 900px;
  margin: 20px auto;
  background: #ffffff;
  padding: 20px;
  border-radius: 10px;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 2px solid #1e5c5b;
  padding-bottom: 20px;
  margin-bottom: 20px;
}
.contact p{
   padding:0px;
   margin:0px;
}

.header-left {
  display: flex;
  align-items: center;
  margin-right:60px;
}

.profile-photo {
  width: 170px;
  height: 100px;
  border-radius: 50%;
  border:3px solid #1e5c5b;
  overflow: hidden;
  margin-right: 20px;
  cursor:pointer;
}

.profile-photo img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.header-info h1 {
  font-size: 24px;
  margin: 0;
  color: #333;
}

.header-info h2 {
  font-size: 18px;
  margin: 5px 0;
  color: #1e5c5b;
}

.header-info p {
  font-size: 14px;
  color: #555;
  margin-top: 10px;
}

.contact {
  text-align: left;
  font-size: 14px;
  color: #555;
}

.main-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.left-column,
.right-column {
  padding: 10px;
}

section {
  margin-bottom: 20px;
}

section h3 {
  font-size: 18px;
  color: #1e5c5b;
  padding-bottom: 10px;
  border-bottom:3px solid #1e5c5b
}

ul {
  padding-left: 10px;
}

ul li {
  font-size: 14px;
  color: #555;
  margin-bottom: 5px;
}

.badges {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.badge {
  background: #1e5c5b;
  color: white;
  padding: 5px 10px;
  border-radius: 20px;
  font-size: 12px;
}
.languages span {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
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
  <header contenteditable="true">
    <div class="header-left">
    <div class="profile-photo">
  <label for="profile-upload">
    <img src="path-to-photo.jpg" alt="Dora Ware" id="profile-image">
  </label>
  <input type="file" id="profile-upload" accept="image/*" style="display: none;">
</div>

      <div class="header-info">
        <h1>Dora Ware</h1>
        <h2>Project Manager - Remote</h2>
        <p>Dynamic and goal-driven Project Manager with 10+ years of comprehensive background in Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nemo.</p>
      </div>
    </div>
    <div class="contact">
      <p><strong>Email : </strong>dora@novoresume.com</p> 
      <p><strong> Phone : </strong>123 444 555</p>
      <p><strong>Address : </strong> Miami, Working Remotely</p>
      <p>linkedin.com/in/dora.ware</p>
    </div>
  </header>

  <!-- Main Content Section -->
  <div class="main-content">
    <!-- Left Column -->
    <div class="left-column" contenteditable="true">
      <section>
      <section>
        <h3>WORK EXPERIENCE</h3>
        <h4>Project Manager</h4>
        <h5> GHG Logistics</h5>
        <span class="date">Miami, Working Remotely</span>
        <p>02/2018 - Present</p>
        <ul>
          <li>Oversee responsibility for technical initiatives...</li>
          <li>Developed PMO directory and reporting system...</li>
          <li>Ensure 100% client satisfaction...</li>
        </ul>
        <h4>Project Manager </h4>
        <h5>Amazing Creations International</h5>
        <span class="date">New York City, NY</span>
        <p>03/2012 - 12/2017 </p>
        <ul>
          <li>Tracked website performance for 40 projects...</li>
          <li>Generated in-depth reports...</li>
          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore nam id quas temporibus impedit at.</li>
        </ul>
        <h4>Assistant Project Manager</h4>
        <h5> Sunshine Big3 Enterprise</h5>
        <span class="date">New York City, NY</span>
        <p>02/2009 - 01/2012</p>
        <ul>
          <li>Demonstrated cross-functionality in proposals...</li>
          <li>Enhanced operational processes...</li>
        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa ex eos numquam officiis sit repellendus</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, molestias.</li>
        </ul>
      </section>
    </div>

    <!-- Right Column -->
    <div class="right-column" contenteditable="true">
      <section>
        <h3>AREAS OF EXPERTISE</h3>
        <div class="badges">
          <span class="badge">Project Analysis</span>
          <span class="badge">JIRA</span>
          <span class="badge">Github</span>
          <span class="badge">CMS</span>
          <span class="badge">KPI Management</span>
          <span class="badge">Digital Operations</span>
        </div>
      </section>

      <section>
        <h3>TRAINING AND CERTIFICATIONS</h3>
        <ul>
          <li>PMP Certification Training Course (2019)</li>
          <li>Strategic Workforce Planning Certified (2018)</li>
          <li>Lean Six Sigma Black Belt Certified (2016)</li>
          <li>Situational Leadership II Certification (2014)</li>
          <li>Project Management Specialist Certified (2012)</li>
        </ul>
      </section>

      <section>
        <h3>EDUCATION</h3>
        <h4>Master of Science in Project Management</h4>
        <p>New York University | 2010 - 2012</p>
      </section>
    
      <section>
        <h3>LANGUAGES</h3>
        <div class="languages">
          <span>English - Native/Bilingual Proficiency</span>
          <span>Spanish - Full Professional Proficiency</span>
          <span>Portuguese - Full Professional Proficiency</span>
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
const profileUpload = document.getElementById('profile-upload');
  const profileImage = document.getElementById('profile-image');

  profileUpload.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        profileImage.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });

</script>

</body>
</html>
