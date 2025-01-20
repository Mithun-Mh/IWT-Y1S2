<!DOCTYPE html>
<html>
<head>
  <title>Customer Profile Page</title>
  <link rel="stylesheet" href="customerProfile.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="main">
        <div class = "top">
            <div class = "logo1">
                <img src = "image/6ea9d8d5ac75d9c5d7a2a567c1e2bbdf.jpg" width ="150px" height="150px">
            </div>

            <div class = "text1">
                <div><h2 class = "logoh1">Event Horaizon</h2></div>
                <div><h4 class = "logoh4">Your events are managed in an advance procedure...</h4></div>
            </div>

            <div class = "propic">
                <img src = "user.png" width = "150px" height="150px">
            </div>
        </div>
    </div>

    <div class="profileCountdown">
        <div class ="scriptDemo">
            Your Soonly Upcomig Event!<br>
        <script src="customerProfile.js"></script>
        <span id="demo"></span><br>
            <img src="event.jpg">
        <p>
            Event 1<br>
            Event Descrition
        </p>
        </div>
    </div>
    <div class="profileblank">
        
        <marquee direction="right">  
        <center>
        <h2>Hello<br>Mr.Sam Fernando<br>Welcome<br>to<br><h1 font-weight="bold" font-family="sans-serif">Event Horaizon</h2><br></h2>
        </center>
        </marquee>
    </div>
    <div class="light">
    <div class="calendar">
        <div class="calendar-header">
            <span class="month-picker" id="month-picker">April</span>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2022</span>
                <span class="year-change" id="next-year">
                    <pre>></pre>
                </span>
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days"></div>
        </div>
       
        <div class="month-list"></div>
    </div>
    <script src="calendar.js"></script>
    </div>
    <div class="profileEvent">
        <center>
        Want to buy new Tickets for this month
        Tap here to Go to see Events<br>
    </center>
        <div class="container">
        
        <img src="holly.jpg" alt="event" class="image">
        
        <div class="overlay">
            <div class="text"><a href="#">Go to see Events</a></div>
          </div>
        </div>
    </div>
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
</body>
</html>
