<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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

            <form method = "post" action="paymentprocess.php">
        
                <div class="row">
        
                    <div class="col">
        
                        <h3 class="title">billing address</h3>
        
                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" name="uname" placeholder="Kamal Fernando" required>
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" name="uemail" placeholder="kamalfernando@gmail.com" required>
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" name="uadress" placeholder="No 1 Main Rd,Collombo 11" required>
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input type="text" name="ucity" placeholder="Colombo 11" required>
                        </div>
        
                        <div class="flex">
                            <div class="inputBox">
                                <span>state :</span>
                                <input type="text" name="ustate" placeholder="Sri Lanka" required>
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input type="number" name="uzip" placeholder="123 456" required>
                            </div>
                        </div>
        
                    </div>
        
                    <div class="col">
        
                        <h3 class="title">payment</h3>
        
                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="image/card_img.png" alt="bank cards">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" name="unameoncard" placeholder="Mr. Kamal Fernando" required>
                        </div>
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input type="number" name="ucardnumber" placeholder="1111-2222-3333-4444" required>
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <input type="text" name="uexpmonth" placeholder="january" required>
                        </div>
        
                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="number" name="uexpyear" placeholder="2025" required>
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="number" name="ucvv" placeholder="1234" required>
                            </div>
                        </div>
        
                    </div>
            
                </div>
        
                <input type="submit" value="proceed to checkout" class="submit-btn">
        
            </form>
        
        </div>    
        </center>


    </div>

        


<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Event<span>Horaizon</span></h3>

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

        <a href="www.facebook.com/eventhorizon"><ion-icon name="logo-facebook"></ion-icon></a>
          <a href="www.instergram.com/eventhorizon"><ion-icon name="logo-instagram"></ion-icon></a>
          <a href="www.twitter.com"><ion-icon name="logo-twitter"></ion-icon></a>
          <a href="www.googleplus.com"><ion-icon name="logo-google"></ion-icon></a>
          <a href="www.skype.com"><ion-icon name="logo-skype"></ion-icon></a>

        </div>

      </div>

    </footer>


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>