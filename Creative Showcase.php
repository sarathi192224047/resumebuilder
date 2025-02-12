<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Showcase</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    color: #333;
    background-color: #f8f8f8;
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
    width: 80%;
    max-width: 900px;
    margin: 20px auto;
    background: #fff;
    padding: 20px 40px;
}

.resume-header {
    text-align: center;
    border-bottom: 2px solid #0074D9;
    margin-bottom: 20px;
    padding-bottom: 10px;
}

.name {
    font-size: 2rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 0;
}

.highlight {
    color: #0074D9;
}

.contact-info {
    font-size: 0.9rem;
    margin-top: 10px;
    color: #555;
    text-align:center;
}

.contact-info a {
    color: #0074D9;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

section {
    margin-bottom: 20px;
}

h2 {
    font-size: 1.2rem;
    color: #0074D9;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

.job h3 {
    font-size: 1rem;
    margin: 5px 0;
}

.job p {
    font-size: 0.9rem;
    color: #555;
    margin: 5px 0;
}

ul {
    padding-left: 20px;
    margin: 5px 0;
}

ul li {
    margin-bottom: 5px;
}

.skills-list {
    display: flex;
    flex-wrap: wrap;
    padding: 0;
    margin-left:20px;
}
.skills-list li {
    width: 45%;
    margin-bottom: 5px;
    color: #555;
}

.degree p {
    margin: 5px 0;
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
        <header class="resume-header">
            <h1 class="name">ELODI <span class="highlight">BROWN</span></h1>
        </header>
        <main>
        <p class="contact-info">
                Pittsburgh, PA 15204 • Home: 555 555 555 • Cell: (555) 555-5555 • 
                <a href="mailto:example@example.com">example@example.com</a>
            </p>
            <section class="summary">
                <h2>Professional Summary</h2>
                <p>
                    Committed and hardworking cashier with experience processing transactions and assisting customers.
                    Dedicated to resolving issues, answering customer questions and ringing up customers. Creative
                    problem-solver versed in sales and customer service.
                </p>
            </section>
            <section class="work-history">
                <h2>Work History</h2>
                <div class="job">
                    <h3>Cashier Team Lead | 07/2018 to Current</h3>
                    <p><strong>Target</strong> - Pittsburgh, PA</p>
                    <ul>
                        <li>Monitor self-checkout systems and provide help to up to 80 customers daily in resolving complex problems.</li>
                        <li>Supervise 10 cashiers to boost customer service levels, check the accurate balance for transactions, and promote smooth operations boosting customer satisfaction by 35%.</li>
                        <li>Conduct cashier drops, cash control, and vault monitoring.</li>
                    </ul>
                </div>
                <div class="job">
                    <h3>Cashier | 09/2013 to 10/2018</h3>
                    <p><strong>Walmart</strong> - Pittsburgh, PA</p>
                    <ul>
                        <li>Processed an average of 200 POS transactions, including checks, cash, and credit purchases or refunds.</li>
                        <li>Maintained an accurate cash draw of over $2,500 per shift.</li>
                        <li>Answered customers' questions, replenished sales floor merchandise, and organized shelves, racks, and bins for optimal appearance.</li>
                    </ul>
                </div>
                <div class="job">
                    <h3>Part-Time Cashier | 06/2011 to 08/2013</h3>
                    <p><strong>Burlington</strong> - Pittsburgh, PA</p>
                    <ul>
                        <li>Helped an average of 40 customers per shift complete purchases, locate items, and join reward programs.</li>
                        <li>Answered questions about promotions and store policies and addressed customer concerns.</li>
                        <li>Operated cash register for cash, check, and credit card processing with excellent accuracy levels.</li>
                    </ul>
                </div>
            </section>
            <section class="skills">
                <h2>Skills</h2>
                <ul class="skills-list">
                    <li>Customer relations</li>
                    <li>POS systems and cash register</li>
                    <li>Promotions and sales expertise</li>
                    <li>MS Office</li>
                    <li>Bagging and packaging</li>
                    <li>Attention to detail</li>
                    <li>Phone etiquette</li>
                    <li>Time management</li>
                </ul>
            </section>
            <section class="education">
                <h2>Education</h2>
                <div class="degree">
                    <p><strong>Associate of Arts</strong> - Business Management | 06/2019</p>
                    <p>CCAC Office of College Services - Pittsburgh, PA</p>
                </div>
            </section>
        </main>
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
