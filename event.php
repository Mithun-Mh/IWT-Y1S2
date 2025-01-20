<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <!--link css font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--link css file-->
    <link rel="stylesheet" href="event.css">
</head>
<body>

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
                <li><a href="home.php">HOME</a></li>
                <li><a href="login.php">View Profile</a></li>
                <li><a href="event.php">Event</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="aboutUs.html">About us</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type To text">
            <a href="resultEvent.html"> <button class="btn">Search</button></a>
        </div>

    </div> 





<section class="home-event">

    <h1 class="heading-title">Top Events</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/localevent/kottuwa main chap 1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Kottuwa</h3>
                <p>Event code - 0001</p>
                <a href="paymentpage.php" class="btnn">Buy Tickets</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/localevent/marians thama 35 event new chap 3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Marians</h3>
                <p>Event code - 0002</p>
                <a href="paymentpage.php" class="btnn">Buy Tickets</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/localevent/noize main.jpg" alt="">
            </div>
            <div class="content">
                <h3>Noise</h3>
                <p>Event code - 0003</p>
                <a href="paymentpage.php" class="btnn">Buy Tickets</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/localevent/one mic main.jpg" alt="">
            </div>
            <div class="content">
                <h3>One Mic</h3>
                <p>Event code - 0004</p>
                <a href="paymentpage.php" class="btnn">Buy Tickets</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/localevent/sada le chap 1 main.jpg" alt="">
            </div>
            <div class="content">
                <h3>Ruu Sadha Leka</h3>
                <p>Event code - 0005</p>
                <a href="paymentpage.php" class="btnn">Buy Tickets</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/localevent/Tour Of Legends chap 3 gampaha main.jpg" alt="">
            </div>
            <div class="content">
                <h3>Tour Of Legends</h3>
                <p>Event code - 0006</p>
                <a href="paymentpage.php" class="btnn">Buy Tickets</a>
            </div>
        </div>

    </div>

</section>

<!--footer section start-->

<footer class="footer-distributed">

    <div class="footer-left">

      <h3>Event<span>Horaizon</span></h3>

      <p class="footer-links">
        <a href="home.php">Home</a>
        
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
        <p><span>Malbe</span>Sri Lanka</p>
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

        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="#"><ion-icon name="logo-google"></ion-icon></a>
          <a href="#"><ion-icon name="logo-skype"></ion-icon></a>

      </div>

    </div>

  </footer>

</body>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</html>