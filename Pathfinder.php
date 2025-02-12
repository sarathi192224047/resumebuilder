<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pathfinder</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
    font-family: Arial, sans-serif;
    padding: 0;
    margin: 0;
    background-color: #f9f9f9;
    color: black;
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
    max-width: 900px;
    margin: 20px auto;
    background: #fff;
    padding: 30px;
}
.header h4{
       margin: 30px 40px;
}
.header h1{
    margin: 0px 40px;
    font-size: 50px;
}
.contacts{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 10px 40px;
    border-top: 2px black solid;
    border-bottom: 2px black solid;
}
.experience {
    margin: 0 40px;
}
.experience h6{
    margin: 1px;
    font-size: 16px;
}
.experience p{
    margin-top:25px;
    margin-bottom:25px;
}
.education{
    margin:0px 40px;
}
.education p{
    margin: 1px;
}
.education h2{
    width:fit-content ;
    border-top: 2px black solid;
    padding-top:20px;
    margin-bottom: 20px;
}
.skills{
     margin: 0px 40px;
     display: flex;
     flex-direction: row;
     justify-content: space-around;
     flex: 4;

}
.skill h2{
    width: fit-content;
    border-top: 2px black solid;
    padding-top:20px;
    margin-top: 20px;
    margin-left: 40px;
}
.skills p{
    margin: 0px;
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
        <div class="header">
            <h1>Chanchal</h1>
            <h1>Sharma</h1>
            <h4>OFFICE MANAGER</h4>
        </div>
    <div class="contacts">
        <p>chachals@example.com</p>
        <p>+1234567890</p>
        <p>linkedin profile</p>
    </div>
    <div class="experience">
        <h2>EXPERIENCE</h2>
        <div class="experience-item">
        <h6>January 2022-Current</h6>
        <h6><strong>office manager</strong>, The Phone Company</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, incidunt culpa? Deleniti quasi, odio sapiente expedita numquam beatae dolores tenetur eius minima, accusantium labore illum veniam ea omnis modi officiis cupiditate distinctio vero maxime voluptatum! Sint a, soluta sequi deleniti atque id nesciunt voluptates molestiae eum ullam quia, delectus culpa.</p>
    </div>
    <div class="experience-item">
        <h6>January 2022-Current</h6>
        <h6><strong>office manager</strong>, The Phone Company</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, incidunt culpa? Deleniti quasi, odio sapiente expedita numquam beatae dolores tenetur eius minima, accusantium labore illum veniam ea omnis modi officiis cupiditate distinctio vero maxime voluptatum! Sint a, soluta sequi deleniti atque id nesciunt voluptates molestiae eum ullam quia, delectus culpa.</p>
    </div>
    <div class="experience-item">
        <h6>January 2022-Current</h6>
        <h6><strong>office manager</strong>, The Phone Company</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, incidunt culpa? Deleniti quasi, odio sapiente expedita numquam beatae dolores tenetur eius minima, accusantium labore illum veniam ea omnis modi officiis cupiditate distinctio vero maxime voluptatum! Sint a, soluta sequi deleniti atque id nesciunt voluptates molestiae eum ullam quia, delectus culpa.</p>
    </div>
</div>
<div class="education">
    <h2>EDUCATION</h2>
    <p>Sep 2018 - may 2021</p>
    <p><strong>Associate degree</strong>, HR Management, Bellows COllege</p>
</div>
<div class="skill"><h2>SKILLS</h2></div>
<div class="skills">
        <p>Project Management</p>
        <p>Organization</p>
        <p>Data Analytics</p>
        <p>Problem-solving</p>
        <p>Communication</p>
        <p>Management</p>
</div>
</div>
<script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
<script src="https://files.bpcontent.cloud/2024/11/19/09/20241119091811-LTYSS5JC.js"></script>
<script>
// Change font of the entire resume
fontSelect.addEventListener("change", () => {
const font = fontSelect.value;
document.querySelector(".resume-content").style.fontFamily = font;
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