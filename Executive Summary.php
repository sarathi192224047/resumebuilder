<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Simplicity</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
    /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body Styling */
body {
  font-family: 'Arial', sans-serif;
  line-height: 1.6;
  background-color: #f4f4f9;
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

/* Container Styling */
.resume-container {
  width: 100%;
  max-width:900px;
  margin: auto;
  background: #ffffff;
  padding: 20px;
}

/* Header Styling */
header {
  text-align: center;
  margin-bottom: 20px;
}

header h1 {
  font-size: 1.8rem;
  font-weight: bold;
  margin-bottom: 5px;
}

header p {
  font-size: 0.9rem;
  color: #555;
}

/* Section Headings */
h2 {
  font-size: 1.2rem;
  color: #2a2a2a;
  margin-bottom: 10px;
  text-transform: uppercase;
  border-bottom: 1px solid #ccc;
  padding-bottom: 5px;
}

/* Summary Section */
.summary {
  margin-bottom: 20px;
}

.summary p {
  font-size: 0.9rem;
  color: #444;
  line-height: 1.5;
}

/* Skills Section */
.skills {
  margin-bottom: 20px;
}

.skills-list {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 15px;
}

.skills-list ul {
  list-style: disc;
  padding-left: 20px;
}

.skills-list li {
  margin-bottom: 5px;
  font-size: 0.9rem;
}

/* Experience Section */
.experience {
  margin-bottom: 20px;
}

.experience h3 {
  font-size: 1rem;
  color: #2a2a2a;
  margin-bottom: 5px;
}

.experience p {
  font-size: 0.9rem;
  color: #555;
  margin-bottom: 10px;
}

.experience ul {
  list-style: disc;
  padding-left: 20px;
}

.experience li {
  margin-bottom: 5px;
  font-size: 0.9rem;
}

/* Education Section */
.education {
  margin-bottom: 20px;
}

.education p {
  font-size: 0.9rem;
  color: #444;
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
  <div class="resume-container" contenteditable="true">
    <!-- Header Section -->
    <header>
      <h1>FIRST LAST</h1>
      <p>Bay Area, California • +1-234-456-789 • professionalemail@resumeworded.com • linkedin.com/in/username</p>
    </header>

    <!-- Summary Section -->
    <section class="summary">
      <h2>SUMMARY</h2>
      <p>NB: The Summary section is completely optional. Your resume is already a summary of your accomplishments and you usually should not re-summarize it in paragraph form. However, if you are changing careers (i.e., you have skills for the job which are not expressed below) or you have valuable experience that doesn’t fit in your experience section below, it can be useful to include one. If you include one, keep it to 3–6 lines long (6 lines max) + use keywords from the job description.</p>
    </section>

    <!-- Skills Section -->
    <section class="skills">
      <h2>SKILLS</h2>
      <div class="skills-list">
        <ul>
          <li>Keyword</li>
          <li>Keyword</li>
          <li>Keyword</li>
          <li>Keyword</li>
</ul>
<ul>
          <li>Keyword</li>
          <li>Add</li>
          <li>Keywords</li>
          <li>From</li>
          </ul>
        <ul>
          <li>Job</li>
          <li>Description</li>
          <li>Using Targeted Resume</li>
          <li>One line per Keyword</li>
        </ul>
      </div>
    </section>

    <!-- Experience Section -->
    <section class="experience">
      <h2>EXPERIENCE</h2>
      <article>
      <span class="date">Jan 2015 – May 2018</span>
        <h3>Resume Worded, New York, NY</h3>
        <p><strong>Product Manager</strong></p>
        <ul>
          <li>Led the transition to a paperless practice by implementing an electronic booking system.</li>
          <li>Reduced cost of labor by 30% and office overhead by 10%.</li>
          <li>Designed training and peer-mentoring programs for new hires.</li>
          <li>Promoted within 18 months due to strong performance and organizational impact.</li>
        </ul>
      </article>
      <article>
      <span class="date">Jan 2015 – May 2018</span>
        <h3>Second Company, New York, NY</h3>
        <p><strong>Creative Director</strong></p>
        <ul>
          <li>Designed, executed, and optimized digital marketing campaigns on Google AdWords.</li>
          <li>Increased ROI by 20% through effective campaign strategies.</li>
        </ul>
      </article>
      <article>
      <span class="date">Jan 2015 – May 2018</span>
        <h3>Third Company, San Diego, CA</h3>
        <p><strong>Product Manager</strong></p>
        <ul>
          <li>Promoted within 18 months due to strong performance and organizational impact.</li>
          <li>Developed and optimized internal workflows to increase productivity by 15%.</li>
        </ul>
      </article>
      <article>
      <span class="date">Jan 2015 – May 2018</span>
        <h3>Junior Product Manager</h3>
        <p><strong>Freelance</strong></p>
        <ul>
          <li>Designed, executed, and optimized digital marketing campaigns on Google AdWords.</li>
          <li>Increased ROI by 20% through effective campaign strategies.</li>
        </ul>
      </article>
    </section>

    <!-- Education Section -->
    <section class="education">
      <h2>EDUCATION</h2>
      <span class="date">August 2010 – January 2013</span>
      <p><strong>Resume Worded University, San Francisco, CA</strong></p>
      <p>Master of Business Administration Candidate; Major in Business Analytics | May 2010</p>
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
