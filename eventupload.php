<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="eventupload.css">
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
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 

    <div class = "bodypay">

        <center>
        <form method = "post" action="usereventupload.php">

            <div class="form">

                <div class="container">

                    <form action="/action_page.php">

                        <div class="row">

                            <h2 class = "topic">Event Details</h2>

                            <div class="col-25">
                                <label for="etitle">Enter Title*</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="etitle" name="etitle" required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-25">
                                <label for="uploadiov">Upload Image or Video*</label>
                            </div>
                            <div class="col-75">
                                <input type="file" id="uploadiov" name="Uploadiov" accept="image/*,video/*" required>
                                <input type="submit">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-25">
                                <label for="Sdate">Start Date & Time*</label>
                            </div>
                            <div class="col-75">
                                <input type="number" id="year" name="year" placeholder="Year" min="1" required>
                                <input type="number" id="month" name="month" placeholder="Month" min="1" max="12" required>
                                <input type="number" id="date" name="date" placeholder="Date" min="1" max="31" required>
                                <input type="number" id="hour" name="hour" placeholder="Hour" min="1" max="12" required>
                                <input type="number" id="minutes" name="minutes" placeholder="Min" min="1" max="60" required>
                                
                                
                                <select id="am_pm" name="AM_PM" style = "width : 75px">
                                    <option value="am">AM</option>
                                    <option value="pm">PM</option> 
                                </select>
                                

                            </div>

                            </div>

                            <div class="row">
    
                                <div class="col-25">
                                    <label for="etitle">Ticket Price*</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" id="tprice" name="tprice" min="1" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                <label for="ecap">Event Caption*</label>
                                </div>
                                <div class="col-75">
                                <textarea id="ecap" name="ecap" placeholder="Write Caption.." style="height:200px" required></textarea>
                                </div>
                            </div>
                            
                            <div class="row">

                                <div class="col-25">
                                    <label for="location">Location*</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="location" name="location" required>
                                </div>
                            </div>

                        
                        <div class="row">

                            <h2 class = "topic">Your Details</h2>

                            <div class="col-25">
                                <label for="name">Name*</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="name" name="name" required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-25">
                                <label for="pnumber">Phone Number*</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="pnumber" name="pnumber" required>
                            </div>
                        </div>
                      
                        <div class="row">

                            <div class="col-25">
                                <label for="eaddress">Email Address*</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="eaddress" name="eaddress" required>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                          <input type="submit" value="Submit">
                        </div>
                      
                    </form>

                </div>

            </div>
        </form
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


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>