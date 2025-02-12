<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fresh Perspective</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
    body {
      margin: 0;
      font-family: "Arial", sans-serif;
      line-height: 1.5;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start; /* Allow content to align at the top */
      min-height: 100vh; /* Ensure body fills the screen height */
      background-color: #f4f4f4;
      overflow-y: auto; /* Allow page to scroll */
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

    .Title  {
      width: 100%; /* Ensure it spans the full width */
      background-color:  rgb(0, 200, 230); /* Background color of the title */
    }

    .contact p{
        text-align: center;
    }
    .Title h1 {
      color: black;
      padding: 30px;
      margin: 0; /* Remove default margin to ensure it fills the space properly */
      text-align: center;
    }
    .controls {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      margin-bottom: 6px;
      gap: 20px;
      padding: 10px;
      flex-wrap: wrap;
      background-color: rgba(0, 199, 230, 0.423);
    }
    .format-select, .font-select, .font-size-select, .color-picker {
      padding: 10px;
      font-size: 14px;
      margin: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      background-color: #fff;
      cursor: pointer;
    }
    .font-select, .font-size-select {
      font-family: "Arial", sans-serif;
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

    .container {
      display: flex;
      flex: 1;
      width: 80%;
      max-width: 1000px;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      gap: 20px;
      margin-top: 20px; /* Add top margin to give space between controls and resume */
    }

    .resume-display {
      flex: 1;
      padding: 30px;
      width: 100%;
      background-color: #fff;
    }

    .resume-display h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 5px;
      text-align: center;
    }

    .resume-display .address {
      text-align: center;
      margin-bottom: 20px;
    }

    .resume-display p {
      margin: 5px 0;
    }

    .resume-display h2 {
      font-size: 20px;
      margin-top: 20px;
      border-bottom: 1px solid #000;
      padding-bottom: 5px;
    }

    .resume-display h3 {
      font-size: 16px;
      margin-top: 15px;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
    }

    .resume-display ul {
      margin: 5px 0 15px 20px;
      padding: 0;
    }

    .resume-display ul li {
      margin-bottom: 8px;
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

  <div class="container">
    <div class="resume-display" id="resume" contenteditable="true">
        <h1>FIRST LAST</h1>
        <div class="contact"><p>London, UK | P: +44 123456789 | first.last@resumeworded.com | linkedin.com/in/url</p></div>
    
        <div class="section">
          <h2>Experience</h2>
    
          <div class="job">
            <h3>
              RESUME WORDED & CO. – London, United Kingdom
              <span>Apr 2017 – Present</span>
            </h3>
            <p>Senior Analyst, Business Development & Operations</p>
            <ul>
              <li>Managed cross-functional team of 10 in 3 locations (London, Mumbai, New York), ranging from entry-level analysts to vice presidents, and collaborated with business development, data science, and operations.</li>
              <li>Launched Miami office with lead Director and recruited and managed a new team of 10 employees; grew office revenue by 200% in the first nine months (representing 20% of company revenue).</li>
              <li>Designed training and peer-mentoring programs for the incoming class of 25 analysts in 2017; reduced onboarding time for new hires by 50%.</li>
              <li>Overhauled the obsolete legacy source code of two production applications, resulting in increased usability and reduced run time performance by 50%.</li>
            </ul>
          </div>
    
          <div class="job">
            <h3>
              INSTAMAKE – Sydney, Australia
              <span>Apr 2013 – Jun 2015</span>
            </h3>
            <p>Operations Manager</p>
            <ul>
              <li>Trained and led a team of 25 junior employees in day-to-day operations.</li>
              <li>Introduced new strategies that improved lead generation by 35% and increased social media engagement by 30%.</li>
            </ul>
          </div>
    
        </div>
    
        <div class="section">
          <h2>Education</h2>
    
          <h3>Bachelor of Business Administration (BBA)</h3>
          <p>University of Sydney, Australia</p>
          <p>Graduated with Honors – May 2012</p>
    
          <h3>Master of Business Administration (MBA)</h3>
          <p>University of London, United Kingdom</p>
          <p>Graduated – July 2015</p>
        </div>
    </div>
  </div>

  <script>
    fontSizeSelect.addEventListener('change', () => {
      const selectedSize = fontSizeSelect.value;
      const selection = window.getSelection();
      const range = selection.getRangeAt(0);
      const selectedText = selection.toString();
    
      // Check if selected text is wrapped in a span with font-size
      const currentSpan = range.startContainer.parentNode;
    
      // If the selected text is not already wrapped in a span with font-size, wrap it
      if (currentSpan.nodeName !== 'SPAN' || currentSpan.style.fontSize !== selectedSize) {
        const span = document.createElement('span');
        span.style.fontSize = selectedSize;
        span.textContent = selectedText;
    
        range.deleteContents();
        range.insertNode(span);
      } else {
        // Otherwise, just update the font size directly on the span
        currentSpan.style.fontSize = selectedSize;
      }
    });
    function downloadResume() {
  const format = formatSelect.value;

  if (format === "png" || format === "jpg") {
    html2canvas(resume, {
      backgroundColor: null, // Ensure no background color is added
      scale: 2, // Increase rendering scale for better quality
      scrollX: -window.scrollX, // Adjust for scroll position
      scrollY: -window.scrollY,
      useCORS: true // Allow cross-origin for any external assets
    }).then((canvas) => {
      const link = document.createElement("a");
      link.download = `resume.${format}`;
      link.href = canvas.toDataURL(`image/${format}`);
      link.click();
    });
  } else if (format === "pdf") {
    const { jsPDF } = window.jspdf;
    const pdf = new jsPDF("p", "pt", "a4");
    const resumeElement = document.getElementById("resume");

    // Adjust the scale and margins for better rendering
    pdf.html(resumeElement, {
      x: 20,
      y: 20,
      width: 550,
      windowWidth: resumeElement.scrollWidth, // Account for element's width
      callback: function (doc) {
        doc.save("resume.pdf");
      },
    });
  }
}
function saveResume() {
  html2canvas(resume, {
    backgroundColor: null,
    scale: 2,
    scrollX: -window.scrollX,
    scrollY: -window.scrollY,
    useCORS: true
  }).then((canvas) => {
    const dataURL = canvas.toDataURL("image/jpeg");
    const email = "user@example.com"; // Replace with the actual user's email

    // Send the dataURL to the backend (PHP)
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
          alert("Failed to save resume.");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("An error occurred while saving the resume.");
      });
  });
}

  // Apply color to selected text only
  colorPicker.addEventListener("change", () => {
    const color = colorPicker.value;
    const selection = window.getSelection();

    if (!selection.rangeCount) return; // No selection

    const range = selection.getRangeAt(0);
    const selectedText = selection.toString();

    // Create a new span element with the selected color
    const span = document.createElement("span");
    span.style.color = color;
    span.textContent = selectedText;

    // Delete the selected content and insert the colored span
    range.deleteContents();
    range.insertNode(span);

    // After applying color, collapse the selection to the end of the inserted span
    selection.removeAllRanges();
    const newRange = document.createRange();
    newRange.setStartAfter(span);
    newRange.setEndAfter(span);
    selection.addRange(newRange);
  });


    fontSelect.addEventListener("change", () => {
      const font = fontSelect.value;
      resume.style.fontFamily = font;
    });
    function goBack() {
  window.history.back();
}

    </script>
    
</body>
</html>
