<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signature Success</title>
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
      max-width: 850px;
      margin: 20px auto;
      background: #ffffff;
      padding: 20px;
      border-radius: 8px;
      border-left:60px solid #e74c3c;
    }

    .header {
      color: black;
      padding: 10px 0px;
      margin-bottom: 20px;
      text-align: left;
    }

    .header h1 {
      margin: 0;
      font-size: 56px;
      letter-spacing: 2px;
    }

    .header .contact {
      margin-top: 5px;
      font-size: 14px;
      font-weight:bold;
    }

    .section {
      margin-bottom: 20px;
    }
    .section p{
        color:#555;
        line-height:20px;
    }

    .section h2 {
      font-size: 20px;
      color: #333;
      padding-bottom: 5px;
      margin-bottom: 10px;
    }

    .section ul {
      padding-left: 15px;
      margin: 0;
    }

    .section ul li {
      margin-bottom: 10px;
      line-height: 1.6;
      font-size: 14px;
      color: #555;
    }

    .experience-item h3 {
      margin: 0;
      font-size: 16px;
      color: #333;
    }

    .experience-item span {
      display: block;
      font-size: 14px;
      color: #555;
      margin-top:8px;
      margin-bottom: 5px;
      font-weight:bold;
    }
    .experience-item.p{
        line-height:20px;
    }

    .education-item,
    .skills-item {
      font-size: 14px;
      color: #555;
    }
    .education-item span {
      display: block;
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
      font-weight:bold;
    }
    .education-item h3{
        margin-bottom:5px;
    }
    .skills-list {
  list-style-type: disc;
  padding-left: 20px;
  font-size: 14px;
  color: #555;
  column-count: 2; /* Split into 2 columns */
  column-gap: 20px; /* Add space between columns */
}

.skills-list li {
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
    <ul>
    <!-- Header -->
    <div class="header">
      <h1>DONNA ROBBINS</h1>
      <div class="contact">
        4567 Main Street, Detroit, MI 48127 | (313) 555-0100 | donna@example.com | www.greatsiteaddress.com
      </div>
    </div>

    <!-- Summary -->
    <div class="section">
      <p>
        Analytical, organized, and detail-oriented accountant with GAAP expertise and experience in the full spectrum
        of public accounting. Collaborative team player with ownership mentality and a track record of delivering
        high-quality strategic solutions to resolve challenges and propel business growth.
      </p>
    </div>

    <!-- Experience -->
    <div class="section">
      <h2>EXPERIENCE</h2>
      <div class="experience-item">
        <h3>20XX – Present</h3>
        <span>Accountant | Trey Research | San Francisco, CA</span>
          <p>
            Working in a mid-sized public accounting firm to provide professional accounting services for individuals and business clients.
          Provide full range of services, including income tax preparation, audit support, preparation of financial statements, pro forma budgeting, general ledger accounting, and bank reconciliation.</li>
</p>
      </div>
      <div class="experience-item">
        <h3>20XX – 20XX</h3>
        <span>Bookkeeper | Bander Real Estate | Berkeley, CA</span>
          <p>In-house bookkeeper for a real estate development company.
          Maintained financial books, tracked expenses, prepared and submitted invoices, and oversaw payroll.</p>
      </div>
      <div class="experience-item">
        <h3>December 20XX – April 20XX </h3>
        <span>Accounting Intern | Olson Harris Ltd. | Vallejo, CA</span>
          <p>Assisted with payroll and pensions service management for 150+ employees. Prepared invoices for more than 200 clients. Assisted with bill payments, records organization, and preparation, and other office duties to support financial and accounting operations.</p>
      </div>
    </div>

    <!-- Education -->
    <div class="section">
      <h2>EDUCATION</h2>
      <div class="education-item">
        <h3>June 20XX</h3>
        <span>Bachelor of Science in Accounting, Minor in Business Administration | Bellows College</span>
        <ul>
          <li>Distinguished member of university’s Accounting Society</li>
          <li>Relevant coursework: Advanced Financial Accounting and Reporting</li>
          <li>GPA: 3.8</li>
        </ul>
      </div>
    </div>

    <!-- Skills -->
      <div class="section">
  <h2>SKILLS</h2>
  <ul class="skills-list">
    <li>Microsoft NAV Dynamics</li>
    <li>Bookkeeping</li>
    <li>Cashflow planning & management</li>
    <li>Exceptional communication</li>
    <li>State & federal tax codes</li>
    <li>Fluent in German</li>
  </ul>
</div>

      </div>
    </div>
  </div>
</ul>
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
