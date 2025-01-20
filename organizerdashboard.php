<!DOCTYPE html>
<html>
<head>
  <title>Event Organizer Dashboard</title>
  <link rel="stylesheet" href="organizerdashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

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


  <header>
    <h1>Event Organizer Dashboard</h1>
    <div id="notification-icon">
      <i class="fas fa-bell"></i>
      <span id="notification-count">0</span>
    </div>
  </header>

  <body>
<div class="bg">
  <br>
  <div class="container">
    <div id="line-graph-container">
      <h2>Sales Overview</h2>
      <canvas id="line-graph"></canvas>
      <div id="chooser">
        <label>
          <input type="radio" name="sales-type" value="net-sales" checked>
          Net Sales
        </label>
        <label>
          <input type="radio" name="sales-type" value="today-sales">
          Today's Sales
        </label>
        <label>
          <input type="radio" name="sales-type" value="week-sales">
          This Week's Sales
        </label>
      </div>
    </div> 
  </div>
  
  <div class="container2">
    <div class="ticket-details">
      <div class="ticket-info">
        <h3>Total Sold Tickets</h3>
        <p id="total-sold-tickets">250</p>
      </div>
      <div class="ticket-info">
        <h3>Total Sold Tickets<br>This Week</h3>
        <p id="total-sold-tickets-week">50</p>
      </div>
      <div class="ticket-info">
        <h3>Full Sold Tickets<br>This Month</h3>
        <p id="full-sold-tickets-month">120</p>
      </div>
    </div>
  
    <div class="pie-chart">
      <h3>Ticket Distribution</h3>
      <canvas id="pie-chart-canvas"></canvas>
      <p id="total-issued-tickets">Total Issued Tickets: 500</p>
    </div>
  </div>
  <a href ="eventupload.php"><button>Add New Event</button></a>
  <div class="container3">
    <span id="ttopic"><center>Recent Sales</center></span>
    <table id="customers">
      <th>Name</th>
      <th>Bought Tickets</th>
      <tr>
        <td>Nimal Perera</td>
        <td>10</td>
      </tr>
      <tr>
        <td>Dasun Shanaka</td>
        <td>04</td>
      </tr>
      <tr>
        <td>Nirosh Chaminda</td>
        <td>02</td>
      </tr>
      <tr>
        <td>Dushen Asantha</td>
        <td>01</td>
      </tr>
      <tr>
        <td>Athur Dias</td>
        <td>01</td>
      </tr>
      
    </table>

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
  <script src="script.js"></script>
</body>
</html>
