<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="paymentpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

  <div class="main">

        <div class = "top">

            <div class = "logo1">
                <img src = "image/6ea9d8d5ac75d9c5d7a2a567c1e2bbdf.jpg " width ="150px" height="150px">
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
                <img src = "image/user.png" width = "150px" height="150px">
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

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="resultEvent.html"> <button class="btn">Search</button></a>
            </div>

        </div> 

    <div class = "bodypay">
        <center>

          <div class="container">

            <form method = "post" action="paymentpageprocess.php">

                <h1>Payment Dashboard</h1>
            
            
                <div class="form-group">
                <label for="event-name">Event Name:</label>
                <input type="text" id="event-name" name="event-name" required>
                </div>

                <div class="form-group">
                    <label for="event-code">Event Code:</label>
                    <input type="text" id="event-code" name="event-code" required>
                </div>
                
                <div class="form-group">
                <label for="event-type">Event Type:</label>
                <select id="event-type" name="event-type" required>
                    <option value="musical">Musical</option>
                    <option value="concert">Concert</option>
                    <option value="drama">Drama</option>
                    
                </select>
                </div>
                
                <div class="form-group">
                <label for="ticket-quantity">Number of Tickets:</label>
                <input type="number" id="ticket-quantity" name="ticket-quantity" min="1" required>
                </div>

                
                <div class="form-group">
                <button type="submit">Calculate</button>
                </div>

                

            <div id="event-details">
                <h2>Event Details</h2>
                <p id="event-name-display"></p>
                <p id="event-code-display"></p>
                <p id="event-type-display"></p>
                <p id="ticket-quantity-display"></p>
                <p id="total-price-display"></p>
            </div>

            

        </form>
        </div>   
         
        </center>


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

    </footer>

   <script src="paymentpage.js"></script>
   <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>       
