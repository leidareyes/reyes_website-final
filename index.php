<!DOCTYPE html>
<html>
<head>
  <title>Personal Website</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="login.css">
  
  <style>
    body, h1,h2,h3,h4,h5,h6 {font-family: "Helvetica", sans-serif;}
    .w3-row-padding img {margin-bottom: 12px;}
    .bgimg {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url('lei.jpg'); /* Replace 'lei.jpg' with your actual image file name */
      min-height: 100%;
      transition: transform 0.3s ease; /* Adding a smooth transition effect */
      overflow: hidden; /* Hide overflow to remove scrollbar */
      background-color: #dcfaff; /* Change background color to dirty white */
      box-shadow: 10px 0 15px rgba(0, 0, 0, 0.3); /* Add shadow to the right side */
    }
/* Adding hover effect */
.bgimg:hover {
  transform: scale(1.1); /* You can adjust the scale value as per your preference */
  overflow: hidden; /* Hide overflow to remove scrollbar */
}
/* Make lines darker */
hr {
  border-color: #333;
}
/* Make text darker */
body, p {
  color: #333;
}
/* Make button text darker */
.w3-button {
  color: #333 !important;
}
  </style>
</head>

<body>
<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Portfolio</a>
    <a href="#about" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">About</a>
    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Contact</a>
    <a href="#contact" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Login</a>
  </div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo"><b>Hi! I am Leida Reyes</b></h1>
    <p>Information Technology Student</p>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
    <h2>About Me</h2>
    <hr class="w3-opacity">
    <p> "Greetings, esteemed individuals! Allow me to introduce myself with utmost delight – I am Leida Reyes, a 19-year-old enthusiast currently pursuing a degree in BSIT (Bachelor of Science in Information Technology). Beyond the realm of academia, my heart finds its rhythm in the world of music, where I immerse myself in the beauty of various instruments.
        Additionally, I have a profound passion for photography, where I explore the world through the lens of my camera. With each click, I seek to capture the essence of fleeting moments, freezing them in time to be revisited and cherished. Through photography, I express my creativity and share my unique perspective with the world.
        In addition to navigating the intricate landscapes of technology and capturing the nuances of sound and melody, I proudly embrace the role of a furmom to a charming Shih Tzu named Choobie. Her delightful presence adds an extra layer of joy to my daily adventures.
        Join me on this multifaceted journey, where we blend the harmonies of technology, the expressive power of music, the captivating artistry of photography, and the boundless love of a furball. Together, let's weave a tapestry of memorable experiences that transcends the ordinary. Here's to the extraordinary moments we're destined to create!"</p>
    <h3 class="w3-padding-16">My Skills</h3>
    <p class="w3-wide">Playing Musical Instruments</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:95%">95%</div>
    </div>
    <p class="w3-wide">UI/UX Design</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:70%">70%</div>
    </div>
    <p class="w3-wide">Photography</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-dark-grey" style="width:80%">80%</div>
    </div><br>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>

  <!-- End About Section -->
  </div>  
  
  <!-- Contact Section -->
<div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
  <h2>Contact Me</h2>
  <hr class="w3-opacity">

  <div class="w3-section">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Rodriguez Rizal, Philippines</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +63 9193568563</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: leidareyes28@gmail.com</p>
  </div>

  <!-- Dark Line -->
  <hr style="border-color: #333;">

  <!-- Login Form -->
  <div class="container">
    <div class="box">
      <h2>Login</h2>
      <form action="login.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      <p> Don't have an account? <a href="registration.php">Create an account.</a></p>
    </div>
  </div>
  <!-- End Login Form -->

<!-- End Contact Section -->
</div> 
  
  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
  <p style="color: #333;">2024 Leida Reyes &copy; All Rights Reserved</p>
  <a href="https://www.instagram.com/zljdnn/" target="_blank" class="fa fa-instagram w3-hover-opacity" style="font-size: 24px; color: #333; margin-right: 10px; text-decoration: none;"></a>
  <a href="https://www.facebook.com/leidareyes.28" target="_blank" class="fa fa-facebook-official w3-hover-opacity" style="font-size: 24px; color: #333; margin-right: 10px; text-decoration: none;"></a>
  <a href="https://github.com/leidareyes" target="_blank" class="fa fa-github w3-hover-opacity" style="font-size: 24px; color: #333; margin-right: 10px; text-decoration: none;"></a>
  </footer> 
<!-- END PAGE CONTENT -->
</div>



<script>
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>