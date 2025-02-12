<!DOCTYPE html>
<html>
<head>
    <title>Modern Minimalist</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
    font-family:  sans-serif;
    margin: 0;
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
      padding: 35px;
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
    font-size: 16px;
    color: #999;
    float: right;
    padding-top:3px;
}

.resume-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 40px;
    border-radius: 5px;
    line-height:20px;
    background-color:white;
}

header {
    text-align: left;
    margin-bottom: 20px;
}

h1 {
    font-size: 24px;
    margin-bottom: 9px;
    color: darkblue;
}
 h4{
    font-size:19px;
    color:#aaa;
    margin:0px;
    padding:0px;
}

p {
    margin: 5px 0;
}

ul {
    padding-left: 40px;
}

li {
    margin-bottom: 10px;
    color:grey;
}

section {
    margin-bottom: 20px;
}

h2 {
    font-size: 20px;
    padding-bottom: 5px;
    margin-bottom: 10px;
    color: darkblue;
    border-bottom:2px solid #ccc;
}

h3 {
    font-size: 18px;
    margin-bottom: 10px;
}
.summary{
    color:grey;
}
.skills p{
    color:grey;
}
.education p{
    color:grey;
}
.headers p{
    color:grey;
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
        <header class="headers">
            <h1>First Last</h1>
            <h4>Software Engineering Lead</h4>
            <p>Bay Area, California • +1-234-456-7890 • professionalmail@resumeworded.com • linkedin.com/in/username</p>
        </header>
        <div class="summary">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus magni blanditiis atque a quasi mollitia, voluptatum vero illum similique, ipsum et molestiae minus vel odio quod facere deserunt ipsam laborum nostrum tenetur. Reprehenderit officia architecto unde, vero commodi ipsam omnis fugit mollitia dolores voluptate quia atque repellendus possimus sed sequi itaque eaque totam cum saepe laudantium soluta pariatur molestiae. Facere!
        </div>

        <section class="work-experience">
            <h2>Work Experience</h2>
            <span class="date">Aug 2016 - Jan 2018</span>
            <h3>Software Engineering Manager and Data Science Manager</h3>
            <p>Resume Worded, New York, NY </p>
            <ul>
                <li>Launched Miami office with lead Director and recruited a new team of 10 employees, grew office revenue by 200% in first nine months (representing 20% of company revenue).</li>
                <li>Co-managed analytics and engineering teams.</li>
                <li>Led the first major effort to A/B test the company's e-commerce sales page and optimize it for customer acquisition, resulted in a 7.5% increase in conversions.</li>
                <li>Built Tableau dashboard using data from Amplitude and Segment to visualize core business KPIs (e.g. Monthly Recurring Revenue), saving 10 hours per week of manual reporting work.</li>
                <li>Reduced signup drop-offs from 65% to 15% and increased user engagement by 40%, through a combination of hypothesis testing, segmentation analysis and machine learning algorithms.</li>
            </ul>
             
            <span class="date">Aug 2016 - Jan 2018</span>
            <h3>Software Engineering Manager and Data Science Manager</h3>
            <p>Resume Worded, New York, NY </p>
            <ul>
                <li>Launched Miami office with lead Director and recruited a new team of 10 employees, grew office revenue by 200% in first nine months (representing 20% of company revenue).</li>
                <li>Co-managed analytics and engineering teams.</li>
                <li>Led the first major effort to A/B test the company's e-commerce sales page and optimize it for customer acquisition, resulted in a 7.5% increase in conversions.</li>
            </ul>
            
            <span class="date">Aug 2016 - Jan 2018</span>
            <h3>Software Engineering Manager and Data Science Manager</h3>
            <p>Resume Worded, New York, NY</p>
            <ul>
                <li>Launched Miami office with lead Director and recruited a new team of 10 employees, grew office revenue by 200% in first nine months (representing 20% of company revenue).</li>
                <li>Co-managed analytics and engineering teams.</li>
                <li>Led the first major effort to A/B test the company's e-commerce sales page and optimize it for customer acquisition, resulted in a 7.5% increase in conversions.</li>
            </ul>
        </section>

        <section class="education">
            <h2>Education</h2>
            <h3>Resume Worded University, New York, NY</h3>
            <p>Bachelor of Engineering Computer Science</p>
        </section>

        <section class="skills">
            <h2>Skills & Other</h2>
            <h3>Data Visualization/Engineering</h3>
            <p>Tableau (Advanced), Looker (Experienced), Segment, Amplitude</p>
            <h3>Techniques</h3>
            <p>Hypothesis Testing, Recommendation Engines, Customer Segmentation Analysis (Advanced)</p>
            <h3>Tools and Frameworks</h3>
            <p>ElasticSearch, Python (Keras, Scikit-learn), Hadoop, Python, Databases (MySQL)</p>
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