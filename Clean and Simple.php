<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean and Simple</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #000;
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
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
        }
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 28px;
            margin: 0;
        }
        .header p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        hr {
            border: none;
            border-top: 2px solid black;
        }
        .section h2 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }
        .pro-head{
            font-size: 14px;
            color: #333;
        }
        .job-title {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-top: 10px;
        }
        .job-title h3 {
            font-size: 16px;
            margin: 0;
            color: #333;
        }
        .job-title .location {
            font-size: 14px;
            color: black;
            font-weight: bold;
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 8px;
        }
        .education, .additional-info {
            margin-top: 20px;
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
<h1>CREATE YOUR RESUME</h1></div>

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

  <button class="download-btn" onclick="downloadResume(),save">Download Resume</button>
  <button class="download-btn" onclick="saveResume()">Save Resume</button>
</div>
    <div class="resume-container" contenteditable="true">
        <div class="header">
            <h1>FIRST LAST</h1>
            <p>E-Commerce Chief Financial Officer</p>
            <p>New York City, NY 10000 • first.last@resumeworded.com • +1 (212) 123-4567</p>
        </div>
        <div class="pro-head"><h2>PROFESSIONAL EXPERIENCE</h2></div>
        <hr>
        <div class="section">
            <div class="job-title">
                <h3>RESUME WORDED</h3>
                <span class="location">San Francisco, CA and New York, NY | 2016-Present</span>
            </div>
            <h4>E-Commerce Chief Financial Officer</h4>
            <ul>
                <li>Increased company revenue from $2.5M to $20M per year through 5 targeted acquisitions and spearheading a lean management system across the business.</li>
                <li>Researched and secured a $2.3M line of credit; used resulting free cash flows to generate an additional $12M per year in revenue.</li>
                <li>Raised sales by 150% by analyzing existing programs, redesigning marketing, and advertising spending plans.</li>
                <li>Worked closely with 5 cross-functional teams to reverse a downward trend in past-due account collections with better automated outreach.</li>
                <li>Grew profit margin 25% in 13 months by shifting away from commodities and into new product development.</li>
                <li>Analyzed products and refocused business on higher-profit business areas, raising revenues by $1.5M per year.</li>
            </ul>

            <div class="job-title">
                <h3>GROWTH</h3>
                <span class="location">New York, NY | 2013-2016</span>
            </div>
            <h4>E-Commerce Executive Vice President</h4>
            <ul>
                <li>Opened 40 markets in 14 months for a national marketing company; closed $20M dollar deals with Fortune 500 accounts.</li>
                <li>Launched proof-of-concept digital textbook product line into 25 college markets in less than one year.</li>
                <li>Executed turnaround of near-bankrupt $100M multi-national company; grew revenues to $200M in 3 years.</li>
                <li>Expanded product line from 10 offerings to over 100, increasing vertical opportunity.</li>
                <li>Recruited to assume $25M P&L responsibility; developed strategic plans surrounding growth initiatives and performed operations improvements.</li>
            </ul>

            <div class="job-title">
                <h3>Director of Finance</h3>
                <span class="location">New York, NY | 2012-2013</span>
            </div>
            <ul>
                <li>Developed annual budgets and maintained ongoing analytics for a $700M company.</li>
                <li>Maintained department reporting productivity and met all deadlines during a 35% reduction in staff by implementing thorough staff cross-training.</li>
                <li>Designed and implemented new systems to drive efficiencies, increasing operating margin from 10% to 25%.</li>
            </ul>
        </div>

        <hr>

        <div class="section education">
            <h2>EDUCATION</h2>
            <div class="job-title">
                <h3>GROWTHSI BUSINESS SCHOOL</h3>
                <span class="location">San Francisco, CA | 2010-2012</span>
            </div>
            <p>Master of Finance</p>
            <div class="job-title">
                <h3>RESUME WORDED UNIVERSITY</h3>
                <span class="location">New York, NY | 2007-2011</span>
            </div>
            <p>Bachelor of Business, Major in Finance; Minor in Marketing</p>
        </div>

        <hr>

        <div class="section additional-info">
            <h2>ADDITIONAL INFORMATION</h2>
            <ul>
                <li>Techniques: Financial Analysis, Business Strategy, Forecasting, Auditing, Negotiation</li>
                <li>Technical Skills / Software: Management Information Systems (MIS), Microsoft Access, CRM</li>
                <li>Certifications: E-Commerce Chief Financial Officer Bootcamp (2016), Passed Resume Worded examinations</li>
            </ul>
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
