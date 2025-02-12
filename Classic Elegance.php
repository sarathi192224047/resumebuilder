<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classic Elegance</title>
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
      background-color: #f4f4f4;
      overflow-y: auto; /* Ensure vertical scrolling */
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
      margin-top: 20px;
      margin-bottom: 20px;
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
      flex-direction: column;
      width: 80%;
      max-width: 1000px;
      margin-bottom: 20px; /* Add space at the bottom for better scrolling */
    }

    .resume-display {
      width: 100%;
      padding: 30px;
      background-color: #fff;
      margin-bottom: 20px; /* Add spacing to prevent clipping */
    }

    .resume-display h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 5px;
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

    <button class="download-btn" onclick="downloadResume()">Download Resume</button>
    <button class="download-btn" onclick="saveResume()">Save Resume</button>
  </div>

  <div class="container">
    <!-- Resume Display Area -->
    <div class="resume-display" id="resume" contenteditable="true">
      <h1>FIRST LAST</h1>
      <div class="address">
        <p class="contact">New York City, NY • (212) 123-4567 • first.last@resumeworded.com • linkedin.com/in/username</p>
      </div>

      <div class="section">
        <h2>Professional Experience</h2>
        <h3>
          Resume Worded Consulting Group
          <span>San Francisco, CA and New York, NY<br>
          2024-Present<br>
          2015-2024</span>
        </h3>
        <h3>Engagement Manager</h3>
        <ul>
          <li>Launched Miami office with lead Director and recruited and managed new team of 10 employees; grew office revenue by 200% in first nine months (representing 20% of company revenue).</li>
          <li>Developed strategic insights for 20+ companies in banking, consumer goods, and technology industries.</li>
        </ul>
        <div class="sub-section">
          <h3>Selected Project Experience</h3>
          <ul>
            <li>
              <strong>Market Entry Strategy for Launch of New E-commerce Website:</strong> Analyzed data from 25,000 monthly active users and used outputs to guide marketing and product strategies; increased average app engagement time by 2x and 30% decrease in drop-off rate.
            </li>
            <li>
              <strong>Operations Improvement Project for Top 5 Hospital in USA:</strong> Drove redevelopment of internal tracking system, resulting in 20+ new features and a 15% reduction in operation time.
            </li>
            <li>
              <strong>Growth Strategy for Travel Agency:</strong> Spearheaded major pricing restructure by focusing on consumer willingness to pay, increasing average sale by 35%.
            </li>
          </ul>
        </div>
      </div>

      <div class="section">
        <h2>Education</h2>
        <h3>
          Legends University
          <span>San Francisco, CA<br>
          2018-2021</span>
        </h3>
        <p>Master of Science in Management with Honors; Major in Management</p>
        <p>Awards: Bill & Melinda Gates Fellow (only 5 awarded to class), Director’s List 2017 (top 10%)</p>
      </div>

      <div class="section">
        <h2>Additional Information</h2>
        <ul>
          <li><strong>Technical Skills:</strong> Java, PHP, JavaScript, HTML/CSS, MATLAB</li>
          <li><strong>Languages:</strong> Fluent in French (native), English; Conversational Proficiency in Chinese</li>
          <li><strong>Awards:</strong> RW’s Top 30 Under 30 (2011); Won nationwide case competition out of 500+ participants</li>
        </ul>
      </div>
    </div>
  </div>
        <!-- Chatbot Integration -->
        <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
        <script src="https://files.bpcontent.cloud/2024/11/19/09/20241119091811-LTYSS5JC.js"></script>
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
