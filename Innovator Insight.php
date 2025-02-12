<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovator Insight</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
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
    flex-wrap: wrap;
    max-width: 900px;
    margin: 20px auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
}

.header {
    width: 100%;
    background-color: #eee;
    padding:15px;
    border-radius:7px;
}

.header-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 15px;
    margin-bottom: 15px;
}

.header-left {
    max-width: 60%;
}
.summary p{
    text-align:justify;
}

.name {
    font-size: 2rem;
    margin: 0;
    color: #333;
}

.title {
    font-size: 1.2rem;
    color: #777;
    margin: 5px 0 0;
}

.header-right {
    text-align: right;
    font-size: 0.9rem;
}

.header-right p {
    margin: 5px 0;
    color: #555;
}

.summary {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

.main-content {
    width: 60%;
}

.sidebar {
    width: 35%;
    margin-left: 3%;
    background-color:#f8f8f8;
    padding:9px;
}

section h2 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #333;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
}

.job h3, .project h3 {
    margin: 10px 0 5px;
    font-size: 1rem;
    font-weight: bold;
}

.job p, .project p {
    font-size: 0.9rem;
    color: #555;
}

.date {
    font-size: 0.9rem;
    color: #999;
    float: right;
}

ul {
    margin: 10px 0;
    padding-left: 20px;
}

ul li {
    font-size: 0.9rem;
    margin-bottom: 5px;
}

.sidebar section {
    margin-bottom: 20px;
}

.sidebar ul {
    padding-left: 20px;
    list-style-type: circle;
}

.sidebar ul li {
    font-size: 0.9rem;
    margin-bottom: 5px;
}
.work-experience li{
    line-height:20px;
}
.projects p{
    line-height:20px;
}
.education{
    font-size: 0.9rem;
}
.languages{
    font-size: 0.9rem;
}
.awards{
    font-size: 0.9rem;
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
        <header class="header" contenteditable="true">
            <div class="header-top">
                <div class="header-left">
                    <h1 class="name">Jennifer Jobscan</h1>
                    <p class="title">Product Designer</p>
                </div>
                <div class="header-right">
                    <p>jennifer@jobscan.co</p>
                    <p>www.jenniferjobscan.co</p>
                    <p>123.456.7890</p>
                    <p>Seattle, WA, 90823, US</p>
                </div>
            </div>
            <div class="summary">
                <p>
                    Creative professional and collaborator with 15+ years experience devoted to product, 
                    10+ as a Product Manager and Lead. In-depth knowledge of manufacturing processes, 
                    materials, applications, licensing with external partners and approval standards.
                </p>
            </div>
        </header>
        <div class="main-content" contenteditable="true">
            <section class="work-experience">
                <h2>Work Experience</h2>
                <div class="job">
                    <h3>Design Directory Consultant</h3>
                    <p><i>Fashion Forum | Milan</i> <span class="date">Feb 2018 - Present</span></p>
                    <ul>
                        <li>Reviewed design concepts, critiqued, and designed fashion based tier 1 headwear that elevated product and brand expression.</li>
                        <li>Designed quick-to-market regionalized, premium, and mass product line for subsidiary brands under fashion umbrella.</li>
                        <li>Set up subsidiary brands under Hat Club with sourcing, and S.O.P.s for product creation and development.</li>
                    </ul>
                </div>
                <div class="job">
                    <h3>Assistant Manager (Design)</h3>
                    <p><i>StyleMe Inc | New York, NY</i> <span class="date">Aug 2016 - Jan 2018</span></p>
                    <ul>
                        <li>Influenced accounts, vendors, and internal stakeholders to support lifestyle product with trend presentation, selling tools, product curating, and exclusives.</li>
                        <li>Implemented quick-to-market system to react to trends, allowing for customization, low minimums and faster timelines.</li>
                        <li>Coordinated with factories ensuring proper execution, pricing, and delivery of prototypes and production samples.</li>
                    </ul>
                </div>
            </section>
            <section class="projects">
                <h2>Projects</h2>
                <div class="project">
                    <h3>User Story Development</h3>
                    <p class="date">Feb 2017 - Aug 2017</p>
                    <p>
                        Developed detailed user personas through extensive research and user interviews 
                        to empathize with target users' needs and behaviors. Utilized insights to create personas 
                        that informed design decisions, resulting in user-centric solutions that improved 
                        user experience and engagement.
                    </p>
                </div>
            </section>
        </div>
        <aside class="sidebar" contenteditable="true">
            <section class="core-skills">
                <h2>Core Skills</h2>
                <ul>
                    <li>Photoshop</li>
                    <li>Illustration</li>
                    <li>User Interface</li>
                    <li>User Experience</li>
                </ul>
            </section>
            <section class="education">
                <h2>Education</h2>
                <p><strong>New York University</strong></p>
                <p>Aug 2010 - Dec 2014</p>
                <p>Bachelor Fine Arts Management</p>
            </section>
            <section class="languages">
                <h2>Languages</h2>
                <p>English (<i>Native</i>)</p>
                <p>Italian (<i>Professional</i>)</p>
            </section>
            <section class="awards">
                <h2>Awards</h2>
                <p class="date">Feb 2024</p>
                <p><strong>Design Excellence</strong></p>
                <p><i>Milan Design Association</i></p>
            </section>
        </aside>
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
