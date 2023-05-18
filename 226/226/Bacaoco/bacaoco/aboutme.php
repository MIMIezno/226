<!DOCTYPE html>
<html>
<?php
include('header.php');
?>

<head>
  <meta charset="UTF-8">
  <title>About Me</title>
  <style>
    /* Style for the About Me section */
    .about-me {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 50px;
      background-color: #f7f7f7;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      text-align: center;
    }
    
    /* Style for the profile image */
    .profile-image {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="about-me">
    <img src="windowsblackwallcc.png" alt="Profile picture" class="profile-image">
    <div>
      <h1>About Me</h1>
      <p>Hi there! I'm Niño, I am fully committed to passing this course, and I believe that my dedication and hard work will help me achieve my goal. I am determined to succeed, and I am willing to put in the effort necessary to do so. I have set specific goals for myself, and I am constantly striving to improve my skills and knowledge. I am confident that I have the ability to pass this course, and I am eager to prove it to myself and to others. I am grateful for the opportunity to learn and grow, and I am excited to see where this journey takes me.</p>
    </div>
  </div>
</body>

<?php
include('footer.php');
?>
</html>