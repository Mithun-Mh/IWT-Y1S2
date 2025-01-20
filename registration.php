<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="registrationPage.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <script src="registrationPage.js"></script>
    
<!--Header-->
<div class="main">

  <div class = "top">

      <div class = "logo1">
          <a href="home.php"><img src = "image/6ea9d8d5ac75d9c5d7a2a567c1e2bbdf.jpg " width ="150px" height="150px"></a>
      </div>

      <div class = "text1">
          <div><h2 class = "logoh1">Event Horaizon</h2></div>
          <div><h4 class = "logoh4">Your events are managed in an advance procedure...</h4></div>
      </div>

      <div class = "login1">
          <div><button class = "bttn"><a href = "login.php">Login</a></button></div>
          <div><button class = "bttn"><a href = "registration.php">Sign up</a></button></div>
      </div>

      <div class = "propic">
          <a href="login.php"><img src = "image/user.png" width = "150px" height="150px"></a>
      </div>

  </div>

  <div class="navbar">
          
      <div class="menu">
          <ul>
          <li><a href="home.html">HOME</a></li>
                  <li><a href="login.php">View Profile</a></li>
                  <li><a href="event.php">Event</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="aboutUs.html">About us</a></li>
                  <li><a href="faq.html">FAQ</a></li>
          </ul>
      </div>
  </div> 
<!--Header-->






<div class="all1">

  <center>

    

  <div class="registration-form">

  <form method = "post" action="signupprocess.php">

            <h1>Registration</h1>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Enter your password" required>
              <label id="password" for="password">Re-Enter Password</label>
              <input type="password" id="password" name="password" placeholder="Re Enter your password" required>
            </div>

            <div class="form-group">
              <label for="user_type">User Type</label>
              <select id="user_type" name="user_type">
                <option value="organizer">Event Organizer</option>
                <option value="buyer">Ticket Buyer</option>
              </select>
            </div>

            <div class="form-group">
              <label>Registration Type</label>
              <div>
                
                      <input type="radio" id="free" name="registration-type" value="free" checked>
                      <label for="free" class="radio-label">Free</label>
                      <input type="radio" id="paid" name="registration-type" value="paid">
                      <label for="paid" class="radio-label">Paid</label>
              
              </div>
            </div>

            <div class="form-group">
              <input type="submit" value="submit">
            </div>
</form>
 <p class="liw">Or continue with</p>
                <div class="icons">
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>
  </div>
</center>
</div>
</body>










<footer class="footer-distributed">

  <div class="footer-left">

    <h3>Event<span>Horaizon</span></h3>

    <p class="footer-links">
    <a href="home.php" class="link-1">Home</a>
          
          <a href="login.php">Profile</a>
        
          <a href="event.php">Event</a>
        
          <a href="contact.html">Contact us</a>
          
          <a href="aboutUs.html">About us</a>
          
          <a href="faq.html">Faq</a>
    </p>

    <p class="footer-company-name">Company Name © 2023</p>
  </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Malabe</span>Sri Lanka</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>+94 123 456 789</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="eventhorizon@gmail.com">eventhorizon@gmail.com</a></p>
    </div>

  </div>

  <div class="footer-right">

    <p class="footer-company-about">
      <span>About the company</span>
      Event Horaizon.lk is growing to become the Sri Lanka’s leading ticket selling platform.
      We are the official marketplace provide you with a secure and safe platform to buy and sell tickets and remind events with a group of well-resourced professionals 
      their capabilities with the latest technology to meet international standards.</p>

    <div class="footer-icons">

      <a href="www.facebook.com/eventhorizon"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="www.instergram.com/eventhorizon"><ion-icon name="logo-instagram"></ion-icon></a>
      <a href="www.twitter.com"><ion-icon name="logo-twitter"></ion-icon></a>
      <a href="www.googleplus.com"><ion-icon name="logo-google"></ion-icon></a>
      <a href="www.skype.com"><ion-icon name="logo-skype"></ion-icon></a>

    </div>

  </div>

  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</footer>
</html>
