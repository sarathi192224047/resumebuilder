<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Startup Spirit</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<style>
body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f3f3f3;
  display: flex;
  flex-direction: column;
  align-items: center;
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
  background-color:  rgb(0, 200, 230);
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
  margin-top: 10px;
  margin-bottom: 20px;
  gap: 20px;
  padding: 10px;
  flex-wrap: wrap;
  background-color: rgba(0, 199, 230, 0.423); 
}

.resume-container {
  display: flex;
  max-width: 900px;
  background-color: white;
  margin: 0px;
}

/* Left Section */
.left-section {
  background-color: white;
  border-right: 2px solid #d6336c;
  color: #333;
  width: 35%;
  padding: 30px 20px;
  box-sizing: border-box;
}

.left-section h2 {
  font-size: 20px;
  margin-bottom: 0px;
  color: #d6336c;
}

.left-section .contact, .skills, .languages, .honor-awards, .interests, .certificates {
  margin-top: 0px;
}

.left-section .languages {
  margin-top: 40px;
}

.left-section .honor-awards {
  margin-top: 40px;
}

.left-section .interests {
  margin-top: 40px;
}

.left-section .skills {
  margin-top: 0px;
}

.contact p, .skills div, .languages ul li, .honor-awards ul li, .interests ul li, .certificates p {
  margin: 8px 0px;
}

.skills .skill-badge {
  background-color: #d6336c;
  color: white;
  padding: 8px;
  border-radius: 5px;
  display: inline-block;
  margin-bottom: 8px;
  text-align: center;
}

.left-section ul {
  padding-left: 20px;
}

/* Right Section */
.right-section {
  width: 65%;
  padding: 30px;
  box-sizing: border-box;
}

.header h1 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 5px;
}

.header .subtitle {
  font-size: 16px;
  color: #d6336c;
  margin-bottom: 15px;
  font-weight: 500;
}

.header p {
  font-size: 14px;
  color: #555;
  margin-bottom: 25px;
  line-height: 1.6;
}

.section-title {
  font-size: 18px;
  font-weight: 700;
  color: #d6336c;
  margin-bottom: 10px;
  text-transform: uppercase;
  display: inline-block;
}

.job {
  margin-bottom: 20px;
}

.job h3 {
  font-size: 16px;
  font-weight: 700;
  color: #333;
  margin-bottom: 5px;
}

.job .company {
  color: #888;
  font-size: 14px;
  margin-bottom: 5px;
  font-style: italic;
}

.job .date-location {
  font-size: 13px;
  color: #555;
  margin-bottom: 10px;
}

.job ul {
  padding-left: 20px;
  margin: 0;
}

.job ul li {
  font-size: 14px;
  color: #555;
  margin-bottom: 8px;
  line-height: 1.6;
}

.education, .certification {
  margin-bottom: 20px;
}

.education p, .certification p {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
  margin: 5px 0;
}

.certification .certificate-item {
  margin-bottom: 10px;
}

.certification .certificate-item a {
  font-size: 14px;
  color: #d6336c;
  text-decoration: none;
}

.certification .certificate-item a:hover {
  text-decoration: underline;
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

  <div class="resume-container" contenteditable="true">
    <!-- Left Section -->
    <div class="left-section">
      <div class="contact">
        <p>&#9993; loraine@novoresume.com</p>
        <p>&#9742; 123 445 222</p>
        <p>&#128205; Philadelphia, PA</p>
        <p>&#128279; linkedin.com/in/loraine.hudson</p>
        <p>&#128172; loraine.hudson</p>
      </div>

      <div class="skills">
        <h2>SKILLS</h2>
        <div class="skill-badge">Cash Drawer Balancing</div><br>
        <div class="skill-badge">Cash Handling Skills</div><br>
        <div class="skill-badge">Complex Problem-Solving</div><br>
        <div class="skill-badge">Staff Training & Development</div><br>
        <div class="skill-badge">Exceptional Customer Service</div><br>
        <div class="skill-badge">Analytical & Critical Thinking</div>
      </div>

      <div class="languages">
        <h2>LANGUAGES</h2>
        <ul>
          <li><strong>English:</strong> Native or Bilingual</li>
          <li><strong>Spanish:</strong> Full Proficiency</li>
          <li><strong>French:</strong> Working Proficiency</li>
        </ul>
      </div>
      <div class="honor-awards">
        <h2>HONOR AWARDS</h2>
        <ul><li>Bank Teller of the Year (2019)</li>
        <li>The Employee of the Month - 8 times in 4 years</li></ul>
      </div>
  
      <div class="interests">
        <h2>INTERESTS</h2>
        <ul><li>Mediation</li>
        <li>Archery</li> 
        <li>Gardening</li>
        <li>Photography</li></ul>
      </div>
    </div>

    <!-- Right Section -->
    <div class="right-section">
      <div class="header">
        <h1>Loraine Hudson</h1>
        <p class="subtitle">CUSTOMER SERVICE SPECIALIST</p>
        <p>
          Self-motivated Customer Service Specialist with over 7 years of experience in retail and customer
          service environments. Strong record of supporting team needs by ensuring proper training and mentoring.
        </p>
      </div>

      <div class="work-experience">
        <h2 class="section-title">Work Experience</h2>

        <div class="job">
          <h3>Customer Service Specialist</h3>
          <p class="company">Huntington Bank - Mayfield Heights, OH</p>
          <p class="date-location">Dec 2018 - Present</p>
          <ul>
            <li>
              Provided extensive training and mentoring for new hires and exceeded company goals for
              productivity and customer satisfaction.
            </li>
            <li>
              Increased credit card enrollments 20% by leveraging an excellent grasp of customer needs and
              expectations.
            </li>
            <li>Delivered exceptional service levels during high call volumes.</li>
          </ul>
        </div>

        <div class="job">
            <h3>Bank Teller/Lead</h3>
            <p class="company">Bank of Pennsylvania, Lancaster Branch</p>
            <p class="date-location">07/2013 - 06/2017 | Lancaster, PA</p>
            <ul>
              <li>Demonstrated leadership in implementing adequate training to team members, resulting in improved performance and customer service delivery, which increased the existing client base by more than 30%.</li>
              <li>Provided efficient support to the Assistant Manager in overseeing the day-to-day operations to ensure an efficient and productive business workflow.</li>
            </ul>
          </div>
        </div>
    
        <div class="education">
          <h2 class="section-title">EDUCATION</h2>
          <p><strong>MS. in Banking and Finance</strong><br>
          The University of Philadelphia<br>
          2010 - 2012</p>
        </div>
    
        <div class="certification">
          <h2 class="section-title">CERTIFICATES</h2>
          <div class="certificate-item">
            <p><strong>Certified Bank Teller (06/2013)</strong><br>
            Bank of Pennsylvania Training Center</p>
          </div>
          <div class="certificate-item">
            <p><strong>Teller Specialist Certificate Program (06/2013)</strong><br>
            Independent Community Bankers of America (ICBA)</p>
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

</script>
</body>
</html>
