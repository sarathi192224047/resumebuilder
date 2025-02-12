<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinnacle Profile</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
  margin: 20px auto; /* Center the section */
  gap: 20px;
  padding: 10px;
  flex-wrap: wrap;
  background-color: rgba(0, 199, 230, 0.423);
  width: fit-content; /* Shrink to fit the content */
}


        .resume-container {
            display: grid;
            grid-template-columns: 0.6fr 3fr;
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
        }
        .left-column {
            padding-right: 15px;
            border-right: 1px solid #ddd;
            text-align: right;
            position: relative;
        }
        .right-column {
            padding-left: 15px;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .avatar {
            width: 60px;
            height: 60px;
            border: 2px solid #1c62c9;
            border-radius: 50%;
            text-align: center;
            line-height: 56px;
            font-size: 24px;
            font-weight: bold;
            color: #1c62c9;
            margin-right: 15px;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
            color: #1c62c9;
        }
        .header p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        .contact-info {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .left-section-title {
            font-size: 16px;
            font-weight: bold;
            color: #1c62c9;
            margin-bottom: 15px;
            position: relative;
            top: 0;
            transform: translateY(-50%);
            text-align:right:
        }
        .left-section {
            margin-bottom: 60px;
            position: relative;
        }
        .section ul{
            margin-top:37px;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            color: #1c62c9;
            margin-bottom: 10px;
        }
        .section-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .section-content ul li {
            margin: 5px 0;
            padding-left: 20px;
            position: relative;
        }
        .section-content ul li::before {
            content: "•";
            color: #1c62c9;
            position: absolute;
            left: 0;
        }
        .timeline-item {
            margin-bottom: 20px;
        }
        .timeline-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .timeline-header h4 {
            font-size: 14px;
            margin: 10px;
            color: #333;
        }
        .timeline-header span {
            font-size: 12px;
            color: black;
        }
        .timeline-item ul {
            margin-top: 5px;
        }
        .skills-grid {
            display: grid;
            margin-top:0px;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }
        .skills-grid ul {
            padding-left: 41px;
            margin-top:20px;
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
      border-radius: 50%; /* Make the color picker circular */
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
    <!-- Font selection -->
    <select class="font-select" id="fontSelect">
      <option value="Arial">Arial</option>
      <option value="Times New Roman">Times New Roman</option>
      <option value="Courier New">Courier New</option>
      <option value="Georgia">Georgia</option>
      <option value="Verdana">Verdana</option>
      <option value="Tahoma">Tahoma</option>
      <option value="Trebuchet MS">Trebuchet MS</option>
    </select>

    <!-- Font size selection -->
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

    <!-- Color picker -->
    <input type="color" class="color-picker" id="colorPicker" value="#000000">

    <!-- Format select for download -->
    <select id="formatSelect">
      <option value="png">PNG</option>
      <option value="jpg">JPG</option>
      <option value="pdf">PDF</option>
    </select>

    <!-- Download button -->
    <button class="download-btn" onclick="downloadResume()">Download Resume</button>
    <button class="download-btn" onclick="saveResume()">Save Resume</button>
  </div>
    <div class="resume-container">
        <!-- Left Column -->
        <div class="left-column" contenteditable="true">
            <div class="left-section" style="top: 102px;">
                <div class="left-section-title">Professional <br>Summary</div>
            </div>
            <div class="left-section" style="top: 99px;">
                <div class="left-section-title">Summary of<br> Qualifications</div>
            </div>
            <div class="left-section" style="top: 83px;">
                <div class="left-section-title">Skills</div>
            </div>
            <div class="left-section" style="top: 80px;">
                <div class="left-section-title">Work History</div>
            </div>
            <div class="left-section" style="top: 456px;">
                <div class="left-section-title">Education</div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="right-column" contenteditable="true">
            <div class="header">
                <div class="avatar">CW</div>
                <div>
                    <h1>Chris Wood</h1>
                    <p>Deerfield Beach, FL 33442 • 555 555 5555 • example@example.om</p>
                </div>
            </div>

            <div class="section">
                <p>High-energy, resourceful and detail-oriented Personal Assistant with background working with executives and real estate agencies. Exceeds expectations for maximizing group performance and overseeing efficient calendars. Strengths include advanced computer skills and strong research ability.</p>
            </div>

            <div class="section">
                <ul>
                    <li>Bilingual in Spanish and English</li>
                    <li>Skilled at researching and assembling a proper portfolio for presentation</li>
                    <li>Ability to multitask multiple projects and assess daily priorities to continue on schedule</li>
                </ul>
            </div>

            <!-- Split Skills Section -->
            <div class="section">
                <div class="skills-grid">
                    <ul>
                        <li>Executive presentations</li>
                        <li>Childcare experience</li>
                        <li>Meeting planning</li>
                    </ul>
                    <ul>
                        <li>Errands</li>
                        <li>Communication</li>
                        <li>Travel administration</li>
                    </ul>
                </div>
            </div>

            <div class="section">
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-header">
                            <h4>Personal Assistant | Noble Hearts HR Counseling</h4>
                            <span>Boca Raton, FL | 04/2019 to CURRENT</span>
                        </div>
                        <ul>
                            <li>Produce files, updated spreadsheets and crafted presentations to support executives and boost team efficiency.</li>
                            <li>Respond to emails and other correspondence to facilitate communication and enhance business processes.</li>
                            <li>Assess plans for three executives and coordinated their schedules and calendars to align with meetings and personal plans.</li>
                        </ul>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-header">
                            <h4>Junior Assistant | Cutting Edge Recruiting Solutions</h4>
                            <span>Boca Raton, FL | 09/2017 to 03/2019</span>
                        </div>
                        <ul>
                            <li>Prepared and proofread professional business correspondence and memos.</li>
                            <li>Delivered administrative support to office staff, and assured and timeliness excellence in office operations.</li>
                            <li>Set appointments and maintained electronic filing system to easily retrieve documents upon request.</li>
                        </ul>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-header">
                            <h4>Personal Assistant Intern | Hampton Real Estate</h4>
                            <span>Pompano Beach, FL | 08/2016 to 09/2017</span>
                        </div>
                        <ul>
                            <li>Managed residential property issues and prepared homes prior to client arrival.</li>
                            <li>Answered 25-30 daily phone calls from inquiring clients about specific properties and open house dates.</li>
                            <li>Handled confidential client information and put it into the system to qualify clients for purchase.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section">
                <p><strong>High School Diploma</strong></p>
                <p>Deerfield Beach High School, Deerfield Beach | 06/2016</p>
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
