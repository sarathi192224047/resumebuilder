<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Kickoff</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 40px auto;
    padding: 0;
    margin-top: 0;
    background-color: #f9f9f9;
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
    max-width: 900px;
    margin: 20px auto;
    background: #fff;
    padding: 30px;
}

/* Header Section */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}



.left-header h1 {
    font-size: 36px;
    margin: 0px;
    padding: 0px;
    letter-spacing: 8px;
}

.right-header {
    flex: 1;
    text-align: center;
    letter-spacing: 8px;
}

.profession-highlight {
    background-color: #f0f0f0;
    padding: 0px 10px;
    display: inline-block;
    margin-top: 35px;
    width: 600px;
    text-align: initial;
    letter-spacing: 8px;
    visibility: visible;
    font-size: 18px; /* Ensure font size is large enough */
}

.profession-highlight p {
    display: inline-block;
    font-size: 16px;
    letter-spacing: 8px; /* Fine-tune this for readability */
}

.profile-image {
    width: 170px;
    height: 170px;
    border-radius: 8px;
    overflow: hidden;
    border: 2px solid #ddd;
    cursor: pointer;
    border-bottom: 8px solid orange;
    margin-left: 50px;
    margin-top: 8px;
    display: block;
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Main Content Section */
.main-content {
    display: flex;
    gap: 20px;
}

.left-column {
    flex: 2;
    border-right: 3px solid #808080; 
    padding-right: 20px;
}

.right-column {
    flex: 1;
}

/* Sections Styling */
section {
    margin-bottom: 30px;
}

h2 {
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 8px;
    margin-bottom: 10px;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
}

ul {
    list-style-type: disc;
    margin-left: 20px;
}

ul li {
    margin-bottom: 5px;
}

/* Date Alignment */
.experience h3 {
    display: flex;
    justify-content: space-between;
    font-size: 16px;
}

.date {
    font-size: 14px;
    color: #666;
}

.contact ul, .skills ul, .reference ul {
    font-size: 14px;
}
.education {
    display: flex;
    flex-direction: row;
    background-color: #fdfdfd;
    border-left: 4px solid #808080; 
    padding: 10px;
    margin: 0px;
    list-style: none;
}

.education-items {
    justify-content: space-between; /* Ensures they are side by side with space between */
    gap: 20px; /* Optional: adds spacing between the items */
}

.education-item {
    flex: 1; /* Makes sure both items take equal width */
}

.education-item ul {
    padding: 0;
}

.education-item li {
    margin-bottom: 5px; /* Adds space between list items */
}
.skills h3{
    letter-spacing: 8px;
    text-align: center;
}

.skills h2{
    text-align: center;
}
.contact h2{
    text-align: center;
}
.reference h2{
    text-align: center;
}
.experience{
    background-color: #fdfdfd;
    border-left: 4px solid#808080; 
    padding: 10px;
}
.profile ul{
    background-color: #fdfdfd;
    border-left: 4px solid #808080; 
    padding: 10px;
    margin: 0px;
    list-style: none;
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
        <!-- Header Section -->
        <div class="header" >
            <div class="left-header" contenteditable="true">
                <span><h1>Ava </h1>
               <h1> Amelia</h1></span>
                <div class="profession-highlight">
                    <p>Job Profession Here / 23 Years Old</p>
                </div>
            </div>
            <div class="right-header">
                <div class="profile-image" onclick="triggerFileInput()">
                    <img id="profile-img" src="placeholder.jpg" alt="Profile Image">
                </div>
                <input type="file" id="file-input" accept="image/*" style="display: none;" onchange="uploadImage(event)">
            </div>
        </div>

        <!-- Main Content Section -->
        <div class="main-content">
            <!-- Left Column -->
            <div class="left-column" contenteditable="true">
                <section class="profile">
                    <h2>PROFILE</h2>
                    <ul>
                        <li>Lorem ipsum dolor sit amet am consed meerunti atiemquunti totaturmee epera coreicae nam volorisci pro vid quideriorit limmin erspelqiiliui maiorum liendita iur.</li>
                    </ul>
                </section>

                <section class="professional-experience">
                    <h2>PROFESSIONAL EXPERIENCE</h2>
                    <div class="experience">
                        <h3>Job Position Here <span class="date">2017 - 2018</span></h3>
                        <p>Company Name / Location</p>
                        <ul>
                            <li>Nullam varius, turpis et commodo pharetra, est eros bibendumle iele eitoile.</li>
                            <li>Curabitur pretium tincidunt lacusulla gravida orci a odio ulikur iluoeleeoem.</li>
                        </ul>
                    </div>
                    <div class="experience">
                        <h3>Job Position Here <span class="date">2017 - 2018</span></h3>
                        <p>Company Name / Location</p>
                        <ul>
                            <li>Nullam varius, turpis et commodo pharetra, est eros bibendumle iele eitoile.</li>
                            <li>Curabitur pretium tincidunt lacusulla gravida orci a odio ulikur iluoeleeoem.</li>
                        </ul>
                    </div>
                </section>
                <h2>EDUCATION</h2>
                <section class="education">
                    <div class="education-item">
                        <ul>
                            <li>Enter Your Degree</li>
                            <li>University Name / Location</li>
                            <li>Jun 2013 – Jun 2015</li>
                        </ul>
                    </div>
                    <div class="education-item">
                 <ul>
                            <li>Enter Your Degree</li>
                            <li>University Name / Location</li>
                            <li>Jun 2013 – Jun 2015</li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Right Column -->
            <div class="right-column" contenteditable="true">
                <section class="contact">
                    <h2>CONTACT</h2>
                    <ul>
                        <li>✉️ infomai@gmail.com</li>
                        <li>📞 +62 899 0980811</li>
                        <li>📍 PO BOX 123 NY, USA</li>
                    </ul>
                </section>

                <section class="skills">
                    <h2>SKILLS</h2>
                    <h3>PROFESSIONAL</h3>
                    <ul>
                        <li>Budgeting And Planning</li>
                        <li>Workhard</li>
                        <li>Social Media Marketing</li>
                    </ul>
                    <h3>LANGUAGES</h3>
                    <ul>
                        <li>English</li>
                        <li>French</li>
                        <li>Indonesian</li>
                    </ul>
                </section>

                <section class="reference">
                    <h2>REFERENCE</h2>
                    <ul>
                        <li>Reference Name</li>
                        <li>Manager | Company Name</li>
                        <li>✉️ info@mail.com</li>
                        <li>📞 +62 12345 9859</li>
                    </ul>
                </section>
                <section class="reference">
                    <h2>REFERENCE</h2>
                    <ul>
                        <li>Reference Name</li>
                        <li>Manager | Company Name</li>
                        <li>✉️ info@mail.com</li>
                        <li>📞 +62 12345 9859</li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdn.botpress.cloud/webchat/v2.2/inject.js"></script>
    <script src="https://files.bpcontent.cloud/2024/11/19/09/20241119091811-LTYSS5JC.js"></script>
    <script>
           function triggerFileInput() {
            document.getElementById('file-input').click();
        }

        function uploadImage(event) {
            const img = document.getElementById('profile-img');
            img.src = URL.createObjectURL(event.target.files[0]);
        }
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
}function goBack() {
  window.history.back();
}

    </script>
</body>
</html>
