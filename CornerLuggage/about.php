<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CornerStore</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
 <link href="./img/cornericon.png" rel="icon" style="border-radius: 60px;">
  <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">

  <link rel="stylesheet" href="./css/about.css">

</head>

<body onload="myFunction()" id="myPage">
  <iframe id="loader" src="./loader/loader.php" style="display: block; border: none; width: 100%; height: 100vh;"></iframe>
  <nav id="nav">
    <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/cornericon.png" alt="CornerStore logo"
        style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Corner</span>Store<span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
        <div id="dropdown" class="dropdown" style="position: absolute;">
          <a href="index.php">Home</a>
          <a href="luggageapp.php">Luggage</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
        </div>
       
</nav>
  <header>

       
    
    <div id="n1">
        <nav class="navbar bg-warning"  style="height: 60px;">
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
                <li><a href="about.php" style="border-bottom: 2px solid black;">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
        </nav>
        
       </div>
  
  </header>

  <main>
    <section id="hero">
      <h1>Welcome to CornerStore World</h1>
      <p>Your Perfect Travel Companion</p>
    </section>

    <section id="about">
      <div class="container">
        <h2>About Us</h2>
        <p>At <span class="company-name">CornerStore Luggage</span>, we are passionate about travel and believe that the right luggage can enhance your journey. We are an online destination for all your luggage needs, offering a wide range of high-quality bags, suitcases, backpacks, and travel accessories. Our goal is to provide you with the perfect travel companion that combines functionality, durability, and style.</p>
      </div>
    </section>

    <section id="why-choose">
      <div class="container">
        <h2>Why Choose Us</h2>
        <ul>
          <li>
            <h3>Quality</h3>
            <p>We are committed to offering only the highest quality products.</p>
          </li>
          <li>
            <h3>Variety</h3>
            <p>We offer a diverse range of products to suit different travel preferences.</p>
          </li>
          <li>
            <h3>Expert Advice</h3>
            <p>Our team of travel experts is always available to provide personalized assistance.</p>
          </li>
          <li>
            <h3>Secure and Convenient Shopping</h3>
            <p>Our website provides a seamless and secure shopping experience.</p>
          </li>
          <li>
            <h3>Customer Satisfaction</h3>
            <p>Your satisfaction is our top priority, and we value your feedback.</p>
          </li>
        </ul>
      </div>
    </section>
  </main>


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
                <li><a href="">E-mail: CornerStorevil@org.com</a></li>
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
   
   </footer>
  

</body>
<script src="./js/loader.js"></script>
<script src="./js/script.js"></script>
<script src="./js/index.js"></script>

</html>
