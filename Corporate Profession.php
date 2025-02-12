<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <title>Corporate Profession</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
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
    margin: 0 auto;
    background: #fff;
    padding: 20px;
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.header h1 {
    font-size: 24px;
    margin-bottom: 5px;
}

.header p {
    font-size: 14px;
    color: #666;
}

.section {
    margin-bottom: 20px;
}

.section h2 {
    font-size: 18px;
    margin-bottom: 10px;
    text-transform: uppercase;
    border-bottom: 2px solid #333;
    padding-bottom: 5px;
}

.education-item, .experience-item {
    margin-bottom: 15px;
}

.education-item h3, .experience-item h3 {
    font-size: 16px;
    font-weight: bold;
    color: #333;
}

.education-item p, .experience-item p, .education-item ul, .experience-item ul {
    margin: 5px 0;
}

.education-item ul, .experience-item ul {
    list-style-type: disc;
    padding-left: 20px;
}

.experience-item h4 {
    font-size: 14px;
    font-weight: normal;
    margin: 5px 0;
}

ul {
    margin-top: 10px;
}

strong {
    font-weight: bold;
}

.other-section {
    margin-bottom: 20px;
}

.other-section h2 {
    font-size: 18px;
    margin-bottom: 10px;
    text-transform: uppercase;
    border-bottom: 2px solid #333;
    padding-bottom: 5px;
}
.other-section ul{
    margin-left:17px;
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
        <header class="header">
            <h1>FIRST LAST</h1>
            <p>New York City, NY • first.last@resumeworded.com • (212) 123-4567 • linkedin.com/in/username</p>
        </header>
        <section class="section">
            <h2>EDUCATION</h2>
            <div class="education-item">
            <span class="date">San Francisco,CA | May 2019</span>
                <h3>RESUME WORDED BUSINESS SCHOOL</h3>
                <p>Master of Business Administration Candidate; Major in Business Analytics</p>
                <ul>
                    <li>Awards: Bill & Melinda Gates Fellow (only 5 awarded to class), Director’s List 2017 (top 10%)</li>
                    <li>Leadership: Resume Worded Investment Club (Board Member), Consulting Club (Engagement Manager)</li>
                    <li>[Add coursework or projects that are relevant to the job you are applying to]</li>
                </ul>
            </div>
            <div class="education-item">
            <span class="date">San Francisco,CA | May 2019</span>
                <h3>RESUME WORDED UNIVERSITY</h3>
                <p>Bachelor of Engineering, Major in Computer Science; Minor in Mathematics</p>
                <ul>
                    <li>Summa Cum Laude with Honors; Cumulative GPA: 3.8/4.0; Dean’s List (2010, 2011)</li>
                    <li>President of the RW Business Networking Club (500+ members), Women’s Ice Hockey Club member</li>
                </ul>
            </div>
        </section>
        <section class="section">
            <h2>PROFESSIONAL EXPERIENCE</h2>
            <div class="experience-item">
                <h3>RESUME WORDED CO. <span>(50+ employee venture-backed recruitment startup)</span></h3>
                <span class="date">San Francisco,CA | May 2019</span>
                <h4>Manager, Business Development</h4>
                <ul>
                    <li>Managed cross-functional team of 10 in 3 locations (London, Mumbai and New York), ranging from entry-level analysts to vice presidents, and collaborated with business development, operations and marketing</li>
                    <li>Launched Miami office with lead Director and recruited and managed new team of 10 employees; grew office revenue by 200% in first nine months (representing 20% of company revenue)</li>
                    <li>Designed training and peer-mentoring programs for the incoming class of 25 analysts in 2017; reduced onboarding time for new hires by 50%</li>
                    <li>Analyzed data from 25000 monthly active users and used outputs to guide marketing and product strategies; increased average app engagement time by 2x, 30% decrease in drop off rate, and 3x shares on social media</li>
                    <li>Promoted within 12 months due to strong performance and organizational impact (one year ahead of schedule)</li>
                </ul>
            </div>
            <div class="experience-item">
            <span class="date">San Francisco,CA | May 2019</span>
                <h3>INSTAMAKE</h3>
                <h4>Product Manager</h4>
                <ul>
                    <li>Spearheaded a major pricing restructure by redirecting focus on consumer willingness to pay instead of product cost; implemented a three-tiered pricing model which increased average sale 35% and margin 12%</li>
                    <li>Identified steps to reduce return rates by 10% resulting in an eventual $75K cost savings</li>
                    <li>Analyzed data from 25000 monthly active users and used outputs to guide marketing and product strategies; increased average app engagement time by 2x, 30% decrease in drop off rate, and 3x shares on social media</li>
                    <li>Drove redevelopment of internal tracking system in use by 125 employees, resulting in 20+ new features, reduction of 20% in save/load time and 15% operation time</li>
                </ul>
            </div>
        </section>
        <section class="other-section">
            <h2>OTHER</h2>
            <ul>
                <li><strong>Technical Skills:</strong> Technical Skills: Python, MATLAB, Excel, [other skills from the job description]</li>
                <li><strong>Languages:</strong> Fluent in French (native), English; Conversational Proficiency in Chinese</li>
                <li><strong>Certifications:</strong> CFA Level 2 (August 2016), Machine Learning Certificate (January 2020) [can be an online course or certificate]</li>
            </ul>
        </section>
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