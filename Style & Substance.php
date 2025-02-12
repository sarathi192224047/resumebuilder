<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Style & Substance</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
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

.date {
  float: right;
  font-size: 14px;
  color: orange;
}


.resume-container {
  display: flex;
  max-width: 900px;
  margin: 20px auto;
  border-radius: 8px;
  overflow: hidden;
  background-color:white;
}

.left-section {
  width: 25%;
  background-color: #1e5c5b;
  color: white;
  padding: 20px;
  border-right: 5px solid orange;
}

.left-section h2 {
  font-size: 16px;
  margin-top: 30px;
  border-bottom: 1px solid #ddd;
}
.header h3{
    color:orange;
    font-size: 18px;
  margin: 5px 0;
}

.right-section {
  width: 70%;
  padding: 20px;
}

header h1 {
  font-size: 28px;
  margin: 0;
  color:#1e5c5b;
}
.skills {
  margin-top: 20px;
}

.skills h2 {
  font-size: 20px;
  font-weight: bold;
  color: #1e5c5b;
}

.skill-badges {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 10px;
}

.badge {
    background-color: #1e5c5b;
    color: white;
  padding: 8px 16px;
  border-radius: 20px;
  font-size: 14px;
  font-weight: 600;
  border: 1px solid #ddd;
  transition: background-color 0.3s, color 0.3s;
}

.languages ul,
.interests ul {
  list-style: none;
  padding: 0;
}
.languages ul li,
.interests ul li {
  margin-bottom: 5px;
}

.contact-info p {
  margin: 10px 0;
}

.job ul {
  list-style: disc inside;
  margin: 10px 0;
}
.job p{
    color:orange;
    font-size:14px;
    margin-top:4px;
}
.job h3{
    margin: 0px;
}
.job{
    margin-bottom:20px;
}
.right-section h2{
    color:#1e5c5b;
}
.left-section a{
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
      <div class="contact-info">
        <p><strong>Email:</strong> frank@novoresume.com</p>
        <p><strong>Phone:</strong> 123 444 555</p>
        <p><strong>Location:</strong> Montgomery, AL</p>
        <p><strong>LinkedIn:</strong> <a href="#">linkedin.com/in/frank.g</a></p>
      </div>
      <section class="conferences">
        <h2>CONFERENCES & COURSES</h2>
          <p>Sales Training for High Performing Teams <br><small><i><a href="#">Coursera</a></i></small></p>
          <p>Practical Sales Management Training <br><small>ShoPerfect Deluxe Mall</small></p>
          <p>Sales Training: Practical Sales Techniques <br><small><i><a href="#">Udemy</a></i></small></p>
      </section>
      <section class="education">
        <h2>EDUCATION</h2>
        <p><strong>Associate of Arts in Business Administration</strong></p>
        <p>University of Alabama at Birmingham</p>
      </section>
      <section class="languages">
        <h2>LANGUAGES</h2>
        <ul>
          <li>English <span class="proficiency">Native</span></li>
          <li>Spanish <span class="proficiency">Professional</span></li>
          <li>French <span class="proficiency">Proficient</span></li>
        </ul>
      </section>
      <section class="interests">
        <h2>INTERESTS</h2>
        <ul>
          <li>Blockchain Technologies</li>
          <li>Sailing</li>
          <li>Web 3.0</li>
          <li>Sustainability</li>
        </ul>
      </section>
    </div>
    <div class="right-section" contenteditable="true">
      <header class="header">
        <h1>Frank Graham</h1>
        <h3>Sales Associate</h3>
        <p>Accomplished, growth-focused professional with 8+ years of dynamic sales experience across multiple industries. Equipped a steadfast commitment to customer service excellence to enhance customer experience, maximize satisfaction, propel retention, achieve/exceed sales goals, and increase business revenue.</p>
      </header>
      <section class="skills">
  <h2>SKILLS</h2>
  <div class="skill-badges">
    <span class="badge">Sales Management</span>
    <span class="badge">Revenue Growth</span>
    <span class="badge">Customer Service</span>
    <span class="badge">Customer Needs Analysis</span>
    <span class="badge">Conflict Resolution</span>
    <span class="badge">Work Ethic & Professionalism</span>
    <span class="badge">Effective Sales Process</span>
    <span class="badge">Persuasive Selling Approach</span>
  </div>
</section>

      <section class="work-experience">
        <h2>WORK EXPERIENCE</h2>
        <div class="job">
          <h3>Sales Associate</h3>
          <h3>ShoPerfect Deluxe Mall</h3>
          <span class="date">Montgomery, AL</span>
          <p>11/2018 - Present</p>
          <p>Achievements</p>
          <ul>
            <li>Formulated and executed compelling seasonal sales promotions.</li>
            <li>Proactively interacted with customers to recommend products.</li>
            <li>Collaborated with a team of 8 sales associates to achieve goals.</li>
          </ul>
        </div>
        <div class="job">
          <h3>Retail Sales Associate</h3>
          <h3>Storefront Sports Solutions</h3>
          <span class="date">  Auburn, AL</span>
          <p>01/2015 - 10/2018</p>
          <p>Achievements</p>
          <ul>
            <li>Devised and implemented an effective sales process.</li>
            <li>Conceptualized a customer loyalty program.</li>
            <li>Performed strategic upselling and cross-selling of products.</li>
          </ul>
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
</script>
</body>
</html>
