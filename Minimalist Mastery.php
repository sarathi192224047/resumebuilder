<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalist Mastery</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
 body{
    font-family:Arial,san-serif;
    margin:0px;
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
    font-size: 16px;
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
li{
    color:#666;
}
.header{
    border-bottom:2px solid black;
}
.header h1{
    text-align:center;
    margin-bottom:3px;
}
.header p{
    text-align:center;
    color:#666;
}
.header h2{
     font-size:18px;
     margin-bottom:5px;
}
.professional-experience{
    margin-top:10px;
}
.professional-experience h3{
     margin:0px;
     padding-bottom:3px;
}
.professional-experience ul,li{
    margin:5px;
}
.professional-experience ul{
    margin-top:10px;
}
.growthsi p{
    font-size:18px;
    font-weight:bold;
    margin:5px 0;
}
.education h2{
    border-bottom:2px solid black;
    padding-bottom:5px;
    font-size:18px;
}
.education h3{
    margin: 5px 0px;
}
.additional-information h2{
    border-bottom:2px solid black;
    padding-bottom:5px;
    font-size:18px;

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
        <header class="header">
            <h1>FIRST LAST NAME</h1>
            <h1>Senior Social Media Manager</h1>
            <p>New York City, NY 10000 • first.last@resumeworded.com • (123) 456-7890</p>
            <h2>PROFESSIONAL EXPERIENCE</h2>
        </header>

        <section class="professional-experience">
            <span class="date">San Francisco, CA and New York, NY </span>
            <h3>RESUME WRODED</h3>
            <span class="date">Aug 2016 - Jan 2018</span>
            <h3>Senior Social Media Manager (Associate)</h3>
            <span class="date">Aug 2016 - Jan 2018</span>
            <h3>Search Engine Optimization (SEO) Associate</h3>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit consequuntur voluptate facilis porro temporibus repudiandae ad commodi sunt iusto quas may kill each go want to eat a lot </li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam quia sit maiores itaque velit illum dolores ad, minima officia and ghost lab your may got it</li>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium aperiam esse asperiores mollitia reiciendis officiis quasi doloribus laudantium adipisci in the sea food taste good much heavy fish</li>
            </ul>
        </section>

        <section class="selected-project-experience">
            <h3>Selected Project Experience</h3>
            <ul>
            <li>Search Engine Optimization Leadership</li>
<ul>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate fugiat non, numquam vero praesentium ipsum repellendus. Ut sint officiis cumque</li>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem asperiores fugiat amet, sapiente fuga nisi porro quis et quos dignissimos</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod recusandae natus veritatis quibusdam consectetur impedit cupiditate praesentium maiores ipsa alias</li>
            </ul>
            <li>Launch of New AI Product</li>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga odit beatae quis at vitae tempore quia quam aperiam explicabo voluptatem</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo veritatis quod temporibus dicta accusantium quos perferendis amet quas illo asperiores</li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quisquam blanditiis eius reprehenderit error ea iusto, facilis non? Eum, officiis</li>
            </ul>
</ul>
        </section>

        <section class="growthsi">
            <p>GROWTHSI New York, NY</p>
            <span class="date"> 2012 - 2013</span>
            <p>Public Relations Specialist<p>
            <ul>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut cupiditate, consectetur voluptatem placeat consequatur id error totam accusantium nesciunt Ex</li>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam, et quibusdam. Voluptatum quae, cumque voluptates veniam inventore dolorem mollitia fugit</li>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel iure quo architecto nesciunt ipsam exercitationem distinctio! Pariatur mollitia ratione soluta</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo corrupti incidunt vel commodi fugit culpa.</li>
            </ul>
        </section>

        <section class="education">
            <h2>EDUCATION</h2>
            <span class="date">Eastbourne, England</span>
            <h3>GROWTHSI</h3>
            <span class="date">2017-19</span>
            <h3>Master of Science in Marketing; Major in International Management</h3>
            <ul>
            <li>Awards: Recipient of International Research Scholarship at the University of Brighton.</li>
            </ul>
            <span class="date">New York, NY</span>
            <h3>Resume Worded University</h3>
            <span class="date">2007-2011</span>
            <h3>Bachelor of Arts in Integrated Marketing Communications with Honors</h3>
        </section>

        <section class="additional-information">
            <h2>ADDITIONAL INFORMATION</h2>
            <ul>
                <li><strong>Technical Skills:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis doloremque modi molestias nam ipsum labore.</li>
                <li><strong>certifications:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio nisi dolor totam necessitatibus suscipit libero</li>
                <li><strong>Awards: </strong> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sunt tenetur aperiam sint porro officiis</li>
            </ul>
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