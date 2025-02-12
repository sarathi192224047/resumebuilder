<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beginner Blueprint</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
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



    .resume-container {
      max-width: 9000px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      display: grid;
      grid-template-columns: 1fr 1fr; /* Equal size columns */
      gap: 20px;
    }

    /* Header Section */
    .header {
      grid-column: span 2;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .header-left {
      max-width: 70%;
    }

    .header-left h1 {
      font-size: 2.5em;
      margin: 0;
      color: #007acc;
    }

    .header-left p {
      margin: 5px 0;
      font-size: 1.1em;
      color: #555;
    }

    .summary {
      margin-top: 10px;
      font-size: 0.95em;
      color: #333;
    }

    .contact {
      max-width: 30%;
      font-size: 0.9em;
      text-align: right;
    }

    .contact p {
      margin: 5px 0;
      color: #555;
    }

    .contact a {
      color: #007acc;
      text-decoration: none;
    }

    .contact a:hover {
      text-decoration: underline;
    }

    /* Left Column Styles */
    .left-column {
      background: #f4f4f4;
      padding: 15px;
      border-radius: 8px;
    }
    .soft-skills ul {
  list-style-type: none; /* Remove bullet points */
  padding: 0;
}

.soft-skills li {
    width: fit-content;
  background-color: #007acc; /* Blue background */
  color: #fff; /* White text */
  padding: 8px 12px; /* Padding for better readability */
  margin-bottom: 5px; /* Space between items */
  border-radius: 5px; /* Rounded corners (optional) */
}



    .left-column h2 {
      font-size: 1.3em;
      margin-bottom: 10px;
      color: #007acc; /* Blue color for section titles */
      border-bottom: 2px solid #007acc;
      padding-bottom: 5px;
    }

    .left-column ul,
    .left-column p {
      margin: 10px 0;
    }

    .left-column ul {
      padding: 0 20px;
    }

    .left-column li {
      margin-bottom: 8px;
    }

    /* Right Column Styles */
    .right-column h2 {
      font-size: 1.3em;
      margin-bottom: 10px;
      color: #007acc; /* Blue color for section titles */
      border-bottom: 2px solid #007acc;
      padding-bottom: 5px;
    }

    .job {
      margin-bottom: 20px;
    }

    .job h3 {
      font-size: 1.2em;
      margin: 0;
    }

    .job p {
      font-size: 0.9em;
      color: #555;
      margin: 5px 0;
    }

    .job ul {
      margin: 10px 0;
      padding: 0 20px;
    }

    .job ul li {
      margin-bottom: 8px;
    }

    /* Link Styling */
    a {
      color: #007acc;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
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
    <header class="header" contenteditable="true">
      <div class="header-left">
        <h1>Michelle Johnson</h1>
        <p>AWS Certified DevOps Engineer</p>
        <p class="summary">
          DevOps engineer with <strong>8+ years of experience</strong> in supporting and automating critical deployments over big infrastructure. Proficient in Jenkins and AWS CodeDeploy. Led a team of 10 at Pear Computers Inc., accelerating the release time by 25%.
        </p>
      </div>
      <div class="contact" cont>
        <p>Email: <a href="mailto:michelle@novoresume.com">michelle@novoresume.com</a></p>
        <p>Phone: 123 444 555</p>
        <p>Location: Chicago, IL</p>
        <p>GitHub: <a href="https://github.com/michelle.johnson">github.com/michelle.johnson</a></p>
        <p>Website: <a href="#">michelle.johnson</a></p>
      </div>
    </header>

    <!-- Left Column -->
    <div class="left-column" contenteditable="true">
        <section class="work-experience">
            <h2>Work Experience</h2>
            <div class="job">
              <h3>DevOps Engineer</h3>
              <p><strong>Pear Computers Inc.</strong> (03/2018 - Present)</p>
              <ul>
                <li>Updated codes, automated security systems, <strong>cut risk of breaches by 60%.</strong></li>
                <li>Designed architectures in GCP for a lift-and-shift migration.</li>
                <li>Reduced monthly costs by <strong>$4,000</strong>.</li>
                <li>Improved cloud infrastructure on <strong>AWS</strong> and <strong>Jenkins</strong>.</li>
              </ul>
            </div>
            <div class="job">
              <h3>DevOps Engineer</h3>
              <p><strong>Minisoft Original Software</strong> (02/2015 - 01/2018)</p>
              <ul>
                <li>Maintained <strong>99% uptime</strong> for a network of 20+ servers.</li>
                <li>Automated CI/CD pipelines, eliminating <strong>70% of manual work.</strong></li>
                <li>Deployed clusters and apps using Kubernetes.</li>
              </ul>
            </div>
          </section>

      <section class="education">
        <h2>Education</h2>
        <p><strong>Master's in Computer Science</strong></p>
        <p>University of California, Berkeley</p>
        <p>2012 - 2014</p>
      </section>

      <section class="languages">
        <h2>Languages</h2>
        <ul>
          <li>English: Native Proficiency</li>
          <li>Spanish: Professional Proficiency</li>
          <li>Italian: Working Proficiency</li>
        </ul>
      </section>
    </div>

    <!-- Right Column -->
    <div class="right-column" contenteditable="true">
        <section class="technical-skills">
            <h2>Technical Skills</h2>
            <ul>
              <li><strong>Systems Administration:</strong> RedHat, Ubuntu, CentOS, Ansible, Bash Shell.</li>
              <li><strong>Cloud Infrastructure:</strong> AWS, GCP, Auto Scaling, EC2, ELB, Route 53.</li>
              <li><strong>Servers:</strong> Apache HTTP, MySQL, Load Balancing.</li>
              <li><strong>Networking:</strong> Nagios, Ping, Netstat, Address Resolution Protocol.</li>
              <li><strong>Containerization:</strong> Docker Swarm, Kubernetes, Hashicorp.</li>
            </ul>
          </section>

          <section class="soft-skills">
            <h2>Soft Skills</h2>
            <ul>
              <li>Verbal & Written Communication</li>
              <li>Flexibility</li>
              <li>Time Management</li>
              <li>Attention to Detail</li>
            </ul>
          </section>
          
      <section class="personal-projects">
        <h2>Personal Projects</h2>
        <ul>
          <li><a href="#">Microsoft Certified Solutions Developer</a></li>
          <li><a href="#">Google Cloud Certified - Associate Cloud Engineer</a></li>
          <li><a href="#">AWS Certification (Architecture and Development)</a></li>
          <li><a href="#">MySQL for Database Administrators</a></li>
        </ul>
      </section>

      <section class="communities">
        <h2>Organizations & Communities</h2>
        <ul>
          <li>Docker Community</li>
          <li>Association for DevOps Professionals</li>
          <li>Agile Alliance</li>
          <li>Cloud Native Computing Foundation</li>
        </ul>
      </section>
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
