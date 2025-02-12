<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colourful Creativity</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
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
    max-width: 800px;
    margin: 20px auto;
    background: #fff;
    padding: 20px;
}

.header {
    text-align: center;
    background-color: #ffcc33;
    padding: 20px;
    margin-bottom: 20px;
}

.header h1 {
    margin: 0;
    font-size: 28px;
    color: #333;
    letter-spacing: 2px;
}

.header p {
    margin: 5px 0;
    font-size: 14px;
}

.section {
    margin-bottom: 20px;
}

.section h2 {
    background-color: #f2f2f2;
    padding: 10px;
    margin: 0 -20px 10px;
    font-size: 18px;
}

.job, .education {
    margin-bottom: 15px;
    position: relative;
}

.job h3 {
    margin: 0;
    font-size: 16px;
    color: #555;
}

.job p, .education p {
    margin: 3px 0;
    font-size: 14px;
}

.date {
    float: right;
    font-size: 14px;
    color: #666;
}

ul {
    padding-left: 20px;
    list-style-type: disc;
}

.skills {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 5px;
}

.skills li {
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
        <header class="header">
            <h1>CARTER MILLER</h1>
            <p>Phoenix, AZ 85054 • 555 555 555 • C:(555) 555-5555 • example@example.com</p>
        </header>

        <section class="section">
            <h2>PROFESSIONAL SUMMARY</h2>
            <p>
                Motivated retail sales associate with a proven record of boosting sales and customer loyalty 
                through individualized service. Resourceful individual skillful in learning customer needs, 
                directing to desirable merchandise and upselling to meet sales quotas. Committed to strengthening 
                customer experiences with positivity and professionalism when answering requests and processing sales.
            </p>
        </section>

        <section class="section">
            <h2>WORK HISTORY</h2>
            <div class="job">
                <h3>Lead Retail Sales Associate</h3>
                <p>Macy's - Phoenix, AZ <span class="date">03/2021 - Current</span></p>
                <ul>
                    <li>Coach 20 sales associates in product specifications, sales incentives and selling techniques increasing 45% of customer satisfaction ratings.</li>
                    <li>Offer hands-on assistance to up to 40 customers daily, assessing needs and maintaining current knowledge of consumer preferences.</li>
                    <li>Submit sales reports to management to aid in business decision-making and planning.</li>
                </ul>
            </div>

            <div class="job">
                <h3>Retail Sales Associate</h3>
                <p>Kohl's - Phoenix, AZ <span class="date">09/2016 - 02/2021</span></p>
                <ul>
                    <li>Helped an average of 200 customers per week complete purchases, locate items and join reward programs boosting sales by 35%.</li>
                    <li>Monitored 25% of sales floor and merchandise displays for presentable condition, taking corrective action such as restocking or reorganizing products.</li>
                    <li>Worked with loss prevention in monitoring shopper behavior reducing 40% of loss merchandise.</li>
                </ul>
            </div>

            <div class="job">
                <h3>Greeter</h3>
                <p>Burlington Stores Inc. - Phoenix, AZ <span class="date">06/2012 - 08/2016</span></p>
                <ul>
                    <li>Display friendly and energetic behavior and greeted an average of 130 incoming customers per shift.</li>
                    <li>Answered customer questions and pointed individuals in the right directions.</li>
                    <li>Helped keep entryway and front line clean, organized and fully stocked with inventory.</li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h2>SKILLS</h2>
            <ul class="skills">
                <li>Inventory procedures</li>
                <li>Sales expertise</li>
                <li>Building customer relationships and loyalty</li>
                <li>Computer proficiency and Microsoft Office</li>
                <li>POS system operation</li>
                <li>Locating merchandise</li>
                <li>Communication and conflict resolution</li>
                <li>Time management</li>
            </ul>
        </section>

        <section class="section">
            <h2>EDUCATION</h2>
            <div class="education">
                <p>Bachelor of Science: Business Administration <span class="date">06/2018</span></p>
                <p>Grand Canyon University - Phoenix, AZ</p>
            </div>
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
