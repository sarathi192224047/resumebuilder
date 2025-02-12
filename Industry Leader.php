<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Industry Leader</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
    body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #f9f9f9;
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


.resume-container {
  display: flex;
  max-width: 1200px;
  margin: 40px auto;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
}

.left-column {
  flex: 2;
  border-right: 1px solid #ddd;
  padding: 20px;
}

.right-column {
  flex: 1;
  padding: 20px;
  background-color: #f0f8ff; /* Light blue background for right column */
  margin-top: 20px; /* Moves the right column down */
  border-radius: 8px;
}

h1.name {
  font-size: 32px;
  color: #0073b1;
  margin-bottom: 5px;
}

p.title {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 15px;
}

p.summary {
  margin-bottom: 20px;
}

.section {
  margin-bottom: 20px;
}

.section-title {
  font-size: 18px;
  font-weight: bold;
  color: #0073b1;
  margin-bottom: 10px;
  text-transform: uppercase;
}

.job,
.education {
  margin-bottom: 15px;
}

.job-title {
  font-weight: bold;
  font-size: 16px;
}

.date {
  float: right;
  font-size: 14px;
  color: #666;
}

.company {
  font-style: italic;
  margin-bottom: 5px;
}

ul.job-details,
ul.contact-details,
ul.skills,
ul.other-details {
  list-style: disc;
  padding-left: 20px; /* Indents the bullets */
  margin: 0;
}

.contact-section,
.skills-section,
.other-section {
  margin-bottom: 20px;
}

ul.skills strong {
  display: block;
  margin-bottom: 5px;
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
      <h1 class="name">First Last</h1>
      <p class="title">Data Scientist</p>
      <p class="summary">
        • Ex-Business Development and Product Marketer transitioning into a Data Scientist role after completing ABC Bootcamp.<br>
        • Over 5 years of experience managing global teams of 5-20 people and working with C-Suite Executives.<br>
        • Core skills include extrapolating data and providing actionable insights aligned with computer science, modeling, and statistics.
      </p>

      <section class="section">
        <h2 class="section-title">WORK EXPERIENCE</h2>
        <div class="job">
          <h3 class="job-title">Product Marketing Manager</h3>
          <span class="date">June 2018 – May 2022</span>
          <p class="company">Resume Worded, San Francisco, CA</p>
          <ul class="job-details">
            <li> Developed product strategies for lead Director and trained the team as it grew to 25 employees. Led redesign of mobile app and website.</li>
            <li> Designed training and peer-mentoring programs for the incoming class of 25 analysts in 2017; reduced onboarding time for new hires by 50%.</li>
            <li> Led the transition to a paperless practice by implementing an electronic booking system, reducing cost of labor by 30% and office overhead by 10%.</li>
            <li> Promoted within 18 months due to strong performance and organizational impact (one year ahead of schedule).</li>
          </ul>
        </div>
        <div class="job">
          <h3 class="job-title">Business Development Consultant</h3>
          <span class="date">August 2010 – January 2013</span>
          <p class="company">Resume Worded’s Exciting Company, New York, NY</p>
          <ul class="job-details">
            <li> Liaised with C-level executives to strengthen relationships with 6 strategic partners.</li>
            <li> Developed and executed customer referral program, leading to 50% increase in referral business and $2MM incremental revenue.</li>
          </ul>
        </div>
      </section>

      <section class="section">
        <h2 class="section-title">EDUCATION</h2>
        <div class="education">
        <span class="date">June 2022 – October 2022</span>
          <h3>Data Science Immersive (Student)</h3>
          <p>• Resume Worded Boot Camp, Online</p>
          <p>• Built Tableau dashboard using data from Amplitude and Segment to visualize core business KPIs, saving 10 hours/week of manual reporting work.</p>
        </div>
        <div class="education">
        <span class="date">May 2010</span>
          <h3>Bachelor of Engineering</h3>
          <p>• Resume Worded University</p>
          <p>• Major in Computer Science</p>
        </div>
      </section>
    </div>

    <div class="right-column" contenteditable="true">
      <section class="contact-section">
        <h2 class="section-title">CONTACT</h2>
        <ul class="contact-details">
          <li> Denver, OH (Open to Remote)</li>
          <li> +1-234-456-789</li>
          <li> email@resumeworded.com</li>
          <li> linkedin.com/in/username</li>
          <li> github.com/resumeworded</li>
        </ul>
      </section>

      <section class="skills-section">
        <h2 class="section-title">SKILLS</h2>
        <ul class="skills">
          <li> <strong>Data Visualization/Engineering:</strong> Tableau (Advanced), Looker (Experienced), Segment, Amplitude</li>
          <li> <strong>Techniques:</strong> Hypothesis Testing, Recommendation Engines, Customer Segmentation Analysis</li>
          <li> <strong>Tools and Frameworks:</strong> ElasticSearch, Python (Keras, Scikit-learn), Hadoop, MySQL</li>
        </ul>
      </section>

      <section class="other-section">
        <h2 class="section-title">OTHER</h2>
        <ul class="other-details">
          <li> Volunteered in a 3-month data science Project, run by ACB Corporation Inc.</li>
          <li> ABC Certification (2022)</li>
          <li> Completed 10+ competitions on Kaggle in 2021.</li>
          <li>Awards: Resume Worded Teaching Fellow, Dean’s List 2012 (Top 10%)</li>
        </ul>
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

</script>
</body>
</html>
