<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontential Unlocked</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
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
  background-color:rgba(0, 199, 230, 0.423);
  width: fit-content; /* Shrink to fit the content */
}

.resume-container {
    max-width: 800px;
    margin: 20px auto;
    background: #fff;
    padding: 20px 40px;
}

.header {
    text-align: center;
    margin-bottom: 30px;
}

.header h1 {
    margin: 0;
    font-size: 30px;
    color: #444;
    letter-spacing: 1px;
}

.header p {
    font-size: 14px;
    margin: 5px 0;
}

.header .contact {
    font-size: 14px;
    color: black;
    margin: 20px auto; /* Center the section */
    background-color: rgb(161, 0, 210);
    width: fit-content; /* Shrink to fit the content */
    justify-content: center;
    padding: 10px 40px;
    border-radius: 10px;
}

.section {
    margin-bottom: 30px;
}

.section h2 {
    font-size: 18px;
    margin-bottom: 10px;
    border-bottom: 2px solid #ddd;
    padding-bottom: 5px;
}

.job, .certifications {
    margin-bottom: 20px;
}

.job h3 {
    margin: 0;
    font-size: 16px;
    color: #444;
}

.job p, .certifications p {
    margin: 5px 0;
    font-size: 14px;
    position: relative;
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

ul li {
    margin-bottom: 5px;
}

.certifications ul {
    margin-top: 5px;
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
            <h1>Anna Baker</h1>
            <p>Creative growth manager in the SaaS domain, delivering user base growth of up to 35% YoY and churn reduction of 20%. Specializes in growth hacking, social media user acquisition, and PR.</p>
            <p class="contact">📞 (000) 000 0000 • ✉️ email@email.com • 🌐 linkedin.com/in/anna_baker</p>
        </header>

        <section class="section">
            <h2>Key Skills</h2>
            <p>Social Media Marketing | Paid Media | Influencer Outreach | Digital PR | Community Management</p>
        </section>

        <section class="section">
            <h2>Work Experience</h2>
            <div class="job">
                <h3>SaaS Subscription Company, Superstition, Arizona</h3>
                <p>Growth Manager <span class="date">Nov 2017 – Present</span></p>
                <ul>
                    <li>Worked with cross-functional teams to gather and analyze customer sentiment and products in our niche and developed targeted strategies.</li>
                    <li>Increased website conversion rates by optimizing blog headers, resulting in reviews on blogs with 100k+ monthly visits.</li>
                    <li>Created and implemented email campaigns that resulted in featuring in product reviews on Forbes, Fast Company and other top-tier publications.</li>
                    <li>Increased the user base by 35% within one year.</li>
                </ul>
            </div>

            <div class="job">
                <h3>Food Mobile App, Phoenix, Arizona</h3>
                <p>Social Media Marketing Manager <span class="date">May 2015 – October 2017</span></p>
                <ul>
                    <li>Designed and executed social media campaigns to optimize Twitter, Facebook and Instagram accounts.</li>
                    <li>Analyzed social media data to identify trends and opportunities for customer growth, boosting engagement by 20% YoY.</li>
                    <li>Managed $15k/month advertising budgets for influencer marketing and targeted ads.</li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h2>Professional Certificates and Training</h2>
            <div class="certifications">
                <p><strong>Certifications:</strong></p>
                <ul>
                    <li>HubSpot Social Media Certification - 2016</li>
                    <li>Facebook Ads Certification - 2017</li>
                </ul>

                <p><strong>Training:</strong></p>
                <ul>
                    <li>Social Media for Professionals: Engaging Audiences completed in December 2017 at coursera.org, offered by Facebook.</li>
                    <li>Growth Marketing Bootcamp completed in April 2018 at coursera.org, offered by Rutgers, the State University of New Jersey.</li>
                    <li>Viral Marketing and How to Craft Contagious Content completed in June 2018 at coursera.org, offered by Wharton School of Business.</li>
                </ul>
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
