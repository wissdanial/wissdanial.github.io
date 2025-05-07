<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="about.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Smooth scroll behavior */
    html {
      scroll-behavior: smooth;
    }

    /* Section styling */
    .info-sections {
      display: none;
      padding: 30px;
      margin: 20px 0;
      background-color:rgb(6, 0, 70);
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: all 0.5s ease;
    }

    /* Sliding animation */
    .info-sections.show {
      display: block;
      transform: translateY(20px);
      opacity: 1;
    }

    .info-sections.hide {
      display: none;
      transform: translateY(-20px);
      opacity: 0;
    }
  </style>

<script>
  function showSection(section) {
    // Get all sections
    const sections = document.querySelectorAll('.info-sections');

    // Loop through all sections and hide them with a sliding effect
    sections.forEach(function(sec) {
      if (sec.id !== section) {
        sec.classList.remove('show');
        sec.classList.add('hide');
      }
    });

    // Get the clicked section
    const targetSection = document.getElementById(section);
    if (targetSection.classList.contains('hide')) {
      targetSection.classList.remove('hide');
      targetSection.classList.add('show');
      targetSection.style.visibility = 'visible'; // Make section visible
      targetSection.style.opacity = 1; // Make it fully visible
      targetSection.scrollIntoView({ behavior: 'smooth' }); // Scroll to the section
    } else {
      targetSection.classList.remove('show');
      targetSection.classList.add('hide');
      targetSection.style.visibility = 'hidden'; // Hide section
      targetSection.style.opacity = 0; // Make it invisible
    }
  }
</script>


</head>
<body>

  <!-- About Me Section -->
  <section class="about" id="about">
    <div class="about-container">
      <!-- Image -->
      <div class="about-image">
        <img src="83f2e434-1856-4e46-a160-9ab045a84eeb-Photoroom.png" alt="Arwiss Photo">
      </div>

      <!-- Content -->
      <div class="about-content">
        <h2>About Me</h2>
        <p>
          Hi, I'm Arwiss Danial! As a passionate web designer & developer with a background in Cybersecurity, I craft secure and user-friendly web experiences. 
          Currently a first-year Computer Science (Network Security) student at UTEM, I thrive on turning ideas into elegant solutions.
        </p>

        <!-- Navigation Panel Below About Me Title -->
        <div class="nav-panel">
          <a href="javascript:void(0);" onclick="showSection('experience')">Experience</a>
          <a href="javascript:void(0);" onclick="showSection('education')">Education</a>
          <a href="javascript:void(0);" onclick="showSection('skills')">Skills</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Work Experience Section -->
  <section id="experience" class="info-sections">
    <h2>Work Experience</h2>


<!-- Experience Entry 3: Nasi Kandar -->
<div class="experience-entry">
  <div class="logo-side">
    <img src="jamal.jpg" alt="Nasi Kandar Logo" class="section-logo">
  </div>
  <div class="experience-details">
    <span class="year">2020 (2 Months)</span>
    <h3 class="job-title">Cashier (Part-Time)</h3>
    <p class="company">Nasi Kandar Jamal Mohamed</p>
    <p class="description">
      - Managed customer transactions and ensured accuracy in cash handling.<br>
      - Assisted in maintaining inventory and restocking items.<br>
      - Provided customer service in a fast-paced environment.
    </p>
  </div>
</div>

<!-- Experience Entry 2: Security Analyst (SOC) -->
<div class="experience-entry">
  <div class="logo-side">
    <img src="images.png" alt="Nexagate Logo" class="section-logo">
  </div>
  <div class="experience-details">
    <span class="year">2023-2024</span>
    <h3 class="job-title">Security Analyst (Intern)</h3>
    <p class="company">Nexagate Sdn Bhd</p>
    <p class="description">
      - Monitored security incidents in a **24/7 Security Operations Center (SOC)** environment using **Splunk** to detect and analyze potential threats.<br>
      - Reviewed alerts and security events from various network devices, firewalls, and endpoint security systems to identify security incidents.<br>
      - Investigated incidents by analyzing **Splunk queries** to determine the severity and root cause of the issue.<br>
      - Opened and closed tickets for incidents based on the severity and response actions required.<br>
      - Played an active role in incident identification and triage, ensuring timely response and resolution.<br>
      - Worked with **Splunk's search processing language (SPL)** to query logs and detect malicious activity, unusual patterns, or security breaches.<br>
      - Communicated with clients regarding the status of their reported incidents and kept them informed of progress.<br>
      - Assisted in resolving security incidents by following established procedures and collaborating with senior analysts for escalation when needed.<br>
      - Provided basic analysis and troubleshooting for incidents, ensuring that they were either resolved or escalated properly.<br>
    </p>
  </div>
</div>


<!-- Experience Entry 1: Ciptra Collection -->
<div class="experience-entry">
  <div class="logo-side">
    <img src="ciptra.jpg" alt="Ciptra Collection Logo" class="section-logo">
  </div>
  <div class="experience-details">
    <span class="year">2024 (1 Month)</span>
    <h3 class="job-title">Sales Assistant (Part-Time)</h3>
    <p class="company">Ciptra Collection</p>
    <p class="description">
      - Assisted customers with product selection.<br>
      - Maintained product displays and organized the sales floor.<br>
      - Handled point-of-sale transactions and provided excellent customer service.
    </p>
  </div>
</div>

<!-- Experience Entry 4: Admin Manager -->
<div class="experience-entry">
  <div class="logo-side">
    <img src="logo sasb.png" alt="Star Advice Logo" class="section-logo">
  </div>
  <div class="experience-details">
    <span class="year">2024 (3 Months)</span>
    <h3 class="job-title">Admin Manager (Part-Time)</h3>
    <p class="company">Star Advice Sdn Bhd</p>
    <p class="description">
      - Managed administrative operations and ensured the smooth running of office tasks.<br>
      - Coordinated schedules, appointments, and meetings for the senior management team.<br>
      - Handled customer inquiries via email, phone, and in-person, ensuring prompt responses and satisfaction.<br>
      - Maintained office supplies inventory and placed orders as needed to ensure operations ran without interruption.<br>
      - Assisted in preparing reports, documents, and presentations for various internal and client-facing meetings.<br>
      - Supported HR functions by maintaining employee records and assisting with recruitment processes.<br>
      - Implemented efficient filing and document management systems to improve team productivity.
    </p>
  </div>
</div>
</section>


 <!-- Education Section -->
<section id="education" class="info-sections">
  <h2>Education</h2>

  <!-- Education Entry 1 -->
  <div class="experience-entry">
    <div class="logo-side">
      <img src="utem.png" alt="UTEM Logo" class="section-logo">
    </div>
    <div class="experience-details">
      <span class="year">2024-2027</span>
      <h3 class="job-title">Bachelor’s Degree in Computer Science (Network Security)</h3>
      <p class="company">Universiti Teknikal Malaysia Melaka (UTEM)</p>
      <p class="description">
        - Focus on cybersecurity, ethical hacking, cryptography, and network security.<br>
        - Preparing for a career in securing digital systems and infrastructures.
      </p>
    </div>
  </div>

  <!-- Education Entry 2 -->
  <div class="experience-entry">
    <div class="logo-side">
      <img src="PUO_Logo.png" alt="Politeknik Ungku Omar Logo" class="section-logo">
    </div>
    <div class="experience-details">
      <span class="year">2020-2023</span>
      <h3 class="job-title">Diploma in Information Technology (Digital Technology)</h3>
      <p class="company">Politeknik Ungku Omar</p>
      <p class="description">
        - Learned software development, networking, and digital technology.<br>
        - Gained practical skills in IT infrastructure, programming, and troubleshooting.
      </p>
    </div>
  </div>

  <!-- Education Entry 3 -->
  <div class="experience-entry">
    <div class="logo-side">
      <img src="smkbs.gif" alt="SMK Bukit Sentosa Logo" class="section-logo">
    </div>
    <div class="experience-details">
      <span class="year">2016-2020</span>
      <h3 class="job-title">Secondary School</h3>
      <p class="company">SMK Bukit Sentosa</p>
      <p class="description">
        - Gained foundational knowledge in subjects like mathematics, science, and languages.<br>
        - Developed critical thinking and problem-solving skills that prepared me for my higher studies.
      </p>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="info-sections">
  <h2>Skills</h2>

  <!-- Skills Entry 1 -->
  <div class="experience-entry">
    <div class="logo-side">
      <img src="web_dev_logo.png" alt="Web Development Icon" class="section-logo">
    </div>
    <div class="experience-details">
      <span class="year">Web Development</span>
      <h3 class="job-title">HTML, CSS, JavaScript</h3>
      <p class="description">
        - Strong proficiency in building responsive, user-friendly websites.<br>
        - Experience in creating dynamic web applications with JavaScript and enhancing web functionality.
      </p>
    </div>
  </div>

  <!-- Skills Entry 2 -->
  <div class="experience-entry">
    <div class="logo-side">
      <img src="cybersecurity_logo.png" alt="Cybersecurity Icon" class="section-logo">
    </div>
    <div class="experience-details">
      <span class="year">Cybersecurity</span>
      <h3 class="job-title">Penetration Testing, Network Security</h3>
      <p class="description">
        - Conducted vulnerability assessments and penetration testing to identify security flaws.<br>
        - Hands-on experience securing networks, data, and digital infrastructures from cyber threats.
      </p>
    </div>
  </div>

  <!-- Skills Entry 3 -->
  <div class="experience-entry">
    <div class="logo-side">
      <img src="programming_logo.png" alt="Programming Icon" class="section-logo">
    </div>
    <div class="experience-details">
      <span class="year">Programming</span>
      <h3 class="job-title">Python, C++</h3>
      <p class="description">
        - Experience in Python for scripting, automation, and data analysis.<br>
        - Proficient in C++ for system-level programming and high-performance applications.
      </p>
    </div>
  </div>
</section>


</body>
</html>
