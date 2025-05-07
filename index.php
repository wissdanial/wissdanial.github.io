<?php include('header.php'); ?>

<!-- Hero Section -->
<section id="home" class="hero">
  <!-- Video Background -->
  <video class="hero-video" autoplay loop muted>
    <source src="12118424_1920_1080_30fps.mp4" type="video/mp4"> <!-- Insert your video file path here -->
    Your browser does not support the video tag.
  </video>

  <!-- Hero Content -->
  <div class="hero-content">
    <span>Hello Everyone</span>
    <h1>ARWISS DANIAL</h1>
    <h2>WELCOME TO MY WEBSITE</h2>
    <p>Hello peeps, I’m Arwiss Bin Abdullah. My background education is Cybersecurity. Now I am a first-year degree student at UTEM in Bachelor of Computer Science (Network Security).</p>
    <a href="#about" class="btn">GET TO KNOW ME</a>
  </div>
</section>

<!-- About Section -->
<section id="about">
  <?php include('about.php'); ?>
</section>

<!-- Projects Section -->
<section id="projects">
  <?php include('projects.php'); ?>
</section>

<!-- Achievements Section -->
<section id="achievements">
  <?php include('Achievements.php'); ?>
</section>

<!-- Contact Section -->
<section id="contact">
  <?php include('contact.php'); ?>
</section>

</body>
</html>
