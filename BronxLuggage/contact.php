<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bronx</title>
    <link href="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
    <nav id="nav">
        <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"
            style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Bronx </span>Luggage <span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
            <div id="dropdown" class="dropdown" style="position: absolute;">
                <a href="index.php">Home</a>
                <a href="luggageapp.php">Luggage</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
               
            </div>
          
    </nav>
    <header>

       
    
        <div id="n1">
            <nav class="navbar" style="height: 60px;">
                <ul>
                    <li><a href="index.php" >Home</a></li>
                    <li class="dropdown1">
                      <a href="luggageapp.php">Luggage &#9662;</a>
                      <div class="dropdown-content">
                        <a href="./pages/male.php">Male</a>
                        <a href="./pages/female.php">Female</a>
                        <a href="./pages/kid.php">Kids</a>
                      </div>
                    </li>
                    <li><a href="about.php" >About</a></li>
                    <li><a href="contact.php" style="border-bottom: 2px solid black;">Contact</a></li>
                  </ul>
            </nav>
            
           </div>
      
      </header>
      <div class="contact-us">
        <h1>Contact Us</h1>
        <p style="text-align: center;  width: fit-content; margin: auto;">If you have any questions, concerns, or feedback regarding the Bronx website <br> or your shopping experience, 
           we are here to assist you. <br>
             Please feel free to reach out to us <br> using the contact information provided below:</p>
             <a href="#contact" style="color: white;"><i class="fa-solid fa-arrow-down" style="position: relative; color: rgb(245, 102, 19);  right: 10px; font-size: 30px;"></i></a>
      </div>
      <div >
        <div id="contact" class="container-fluid "  style="font-size: 13; 
      padding-bottom: 120px; padding-top: 50px; display: flex; justify-content: space-evenly; color: white; background-color: rgb(22, 21, 21);">
           <div class="u">
             <div >
               <i class="fa-solid fa-phone fa-bounce" style="margin-top: 80px; margin-bottom: 20px; font-size: 32;"></i>
               <h4 style="font-weight: bold; margin-bottom: 20px;">Phone</h4>
               <p style="font-weight: bold;
                font-size: 14; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">A wonderful serenity has take possession of my <br>
                   entire soul, like these.</p>
                   <a href="" style=" font-size: 14; font-weight: 600; text-decoration: none;">+9027292133</a>
              </div>
           </div>
         <div class="p">
           <div >
             <i class="fa-solid fa-envelope fa-fade" style="margin-top: 80px; margin-bottom: 20px; font-size: 32;"></i>
             <h4 style="font-weight: bold;  margin-bottom: 20px;">Email</h4>
             <p  style="font-weight: bold;
             font-size: 14; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">A wonderful serenity has take possession of my <br>
                 entire soul, like these.</p>
                 <a href="" style=" font-size: 14; font-weight: 600; text-decoration: none;">Cornelius@gmail.com</a>
            </div>
         </div>
            
            <div class="e">
             <div>
               <i class="fa-solid fa-location-arrow fa-flip" style="margin-top: 80px;  margin-bottom: 20px; font-size: 32;"></i>
               <h4 style="font-weight: bold; margin-bottom: 20px;">Location</h4>
               <p  style="font-weight: bold;
               font-size: 14; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">No 11 Okigwe RD Owerri Imo state, <br> 33342</p>
                   <a href="#map" style=" font-size: 14; font-weight: 600; text-decoration: none;">View on google map</a>
              </div>
               
            </div>              
        </div>
      </div>
      <div id="map" style="margin-top: -20px;"> <iframe src="https://www.google.com/maps?q=11+Okigwe+RD+Owerri+Imo+state+33342&output=embed" width="100%" height="400" frameborder="0" style="border:0; margin-top: 20px;" allowfullscreen></iframe></div>
      <div id="p" style="text-align: center; background-color: rgb(246, 246, 246); padding-top: 90px; padding-bottom: 30px;" >
      <form action="" class="source" >
        <h1 style=" font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Leave Us Your Info</h1>
        <h5 style="margin-bottom: 30px;">And We Will Get Back To You</h5>

        <input type="text" id="username" placeholder="Full Name*" required style="margin-bottom: 10px;"><br>
        <input type="email" id="email" placeholder="Email*" required style="margin-bottom: 10px;"><br>
        <input type="text" id="subject" placeholder="Subject*" required style="margin-bottom: 10px;"><br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message*"></textarea>
        <br><input type="submit" class="btn-primary " value="Submit Now" style="width: 50%; border: none; height: 40px; font-weight: bold; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">

      </form>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-linkedin"></i>
      <i class="fa-brands fa-instagram"></i>
    </div>
   <footer>
    <div id="holdfoot">
        <div id="info">
           
            <ul>
                <p>Information</p>
                <li><a href="">About Us</a></li>
                <li><a href="">Customer Service</a></li>
                <li><a href="">Template Settings</a></li>
                <li><a href="">Search Items</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Advanced search</a></li>
                <li><a href="">Orders and Returns</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        <div id="buy">
            
            <ul>
                <p>Who buy from us</p>
                <li><a href="">Shipping & Delivery</a></li>
                <li><a href="">Secure Payment</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Guarantee</a></li>
                <li><a href="">Terms And Conditions</a></li>
              
            </ul>
        </div>
        <div id="acc">
            
            <ul>
                <p>My account</p>
                <li><a href="">Sign In</a></li>
                <li><a href="">View Cart</a></li>
                <li><a href="">My Wishlist</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
        </div>
        <div id="contact">
        
            <ul>
                <p>Contacts</p> 
                <li><a href="">E-mail: bronxvil@org.com</a></li>
                <li><a href="">Telephone: +3(909) 2387-6534</a></li>
                <li><a href="">9am to 10pm everyday</a></li>
            </ul>
        </div>
        <div id="sign">
            <p>Sign Up for Our Newsletter</p>
            <table>
                <tr>
                    <td><input type="email" name="email" placeholder="Enter your email address" ></td>
                </tr>
                <tr>
                    <td><input id="suh" type="button" name="submit" value="Subscribe"></td>
                </tr>
            </table>
        </div>
    </div>  
      <div class="ticker">
      <p id="ticker-content"></p>
    </div>
   </footer>
</body>
<script src="./js/script.js"></script>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
     window.addEventListener('DOMContentLoaded', function() {
  const tickerContent = document.getElementById('ticker-content');

  function updateTicker() {
    // Get current date, time, and location
    const currentDate = new Date().toDateString();
    const currentTime = new Date().toLocaleTimeString();

    // Get current location
    getCurrentLocation(function(location) {
      // Update ticker content
      tickerContent.textContent = `Current Date: ${currentDate} | Current Time: ${currentTime} | Location: ${location}`;

      // Repeat the update every second
      setTimeout(updateTicker, 1000);
    });
  }

  function getCurrentLocation(callback) {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        function(position) {
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;

          // Fetch location data using latitude and longitude
          // Here, you can use any geolocation API or service to get the location information

          // For demonstration purposes, we'll use a simple example that displays latitude and longitude
          const location = `${latitude.toFixed(2)}, ${longitude.toFixed(2)}`;

          callback(location);
        },
        function(error) {
          console.error('Error occurred while retrieving location:', error);
          callback('Location not available');
        }
      );
    } else {
      callback('Location not available');
    }
  }

  updateTicker();
});

</script>
</html>