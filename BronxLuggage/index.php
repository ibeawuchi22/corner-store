<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
 

    <title>Bronx </title>
    
</head>
<body onload="myFunction()" id="myPage">
  <iframe id="loader" src="./loader/loader.php" style="display: block; border: none; width: 100%; height: 100vh;"></iframe>

    <nav id="nav">
        <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"
            style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Bronx </span>Luggage <span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
            <div id="dropdown" class="dropdown" style="position: absolute;">
              <a href="index.php">Home</a>
              <a href="luggageapp.php">Luggage</a>
              <a href="about.php">About</a>
              <a href="contact.php">Contact</a>
            </div>
            <div class="cart-icon1" id="" onclick="goToCart()" data-count="0">
            <i class="fa-solid fa-cart-shopping" id="cart1" style="font-size: 22; color: #ff2929;"></i>
            </div>
    </nav>
   
   <header>
    <div id="welcome">
        <p  id="w2" style="margin-left: 40px; font-size: 12; color: white;" class="nav-item">Welcome to Bronx online store</p>
        <p  style="margin-left: 750px; font-size: 12;"><a id="w1" href="login.php" class="nav-item"><i class="fa-solid fa-user-plus"></i>Sign in <span style="color: grey;">or</span> Create account</a></p>
        
    </div>
    <div id="logo">
    <div id="search">
    <p style="font-size: 12;" id="re" ><i class="fa-solid fa-magnifying-glass"></i>Start searching</p>
    </div>
    <h3 id="lug" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"
         style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: wheat;">Bronx </span>Luggage</h3>

        <div id="font">
            <i class="fa-sharp fa-solid fa-repeat"></i>
            <i class="fa-regular fa-heart"></i>
            <div class="cart-icon" id="cart-icon" onclick="goToCart()" data-count="0">
              <i class="fa-solid fa-cart-shopping" id="cart" style="font-size: 22; color: #ffffff;"></i>
            </div>
        </div>
        
        <div class="logo-container">
    
          <p style="position: fixed; color: #333;">Vi</p> <span id="visitor-count" class="fa-fade">0</span>
      
       </div>
       
    </div>
   <div id="n1">
    <nav class="navbar">
        <ul>
            <li><a href="index.php" id="home" >Home</a></li>
            <li class="dropdown1">
              <a href="luggageapp.php">Luggage &#9662;</a>
              <div class="dropdown-content">
                <a href="./pages/male.php">Male</a>
                <a href="./pages/female.php">Female</a>
                <a href="./pages/kid.php">Kids</a>
              </div>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
    </nav>
    
   </div>
  
   </header>
   <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin: auto;">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="img1"></div>
        <div class="carousel-caption">
          <div id="cap">
            <h1 style="color: rgb(242, 239, 236);">Modern <span style="font-weight: bold; color: gold;">Classics</span></h1>
            <p style="margin-left: 34px;"> Luggage to have and hold season after season</p>
          </div>
          <a href="luggageapp.php"><input id="shop" type="button" name="button" value="Shop Now" ></a>
        </div>
      </div>
      <div class="carousel-item">
      <div class="img2"></div>
      <div class="carousel-caption">
        <div id="cap">
          <h1 style="color: rgb(242, 239, 236);">Modern <span style="font-weight: bold; color: gold;">Classics</span></h1>
          <p style="margin-left: 34px;"> Luggage to have and hold season after season</p>
        </div>
        <a href="luggageapp.php"><input id="shop" type="button" name="button" value="Shop Now" ></a>
      </div>
      </div>
      <div class="carousel-item">
   <div class="img3"></div>
   <div  class="carousel-caption">
    <div id="cap">
      <h1 style="color: rgb(242, 239, 236);">Modern <span style="font-weight: bold; color: gold;">Classics</span></h1>
      <p style="margin-left: 34px;"> Luggage to have and hold season after season</p>
    </div>
   
    <a href="luggageapp.php"><input id="shop" type="button" name="button" value="Shop Now" ></a>
  </div>
      </div>
    </div>
  
    <!-- Controls -->
    <a style="display: none;" class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a style="display: none;" class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <div id="sec1">
      <div class="flex-items0"><h4 style="font-weight: bold;">+3(985) 5463-6859</h4></div>
      <div class="flex-items"><h4><span style="font-weight: bold;">Free</span> Delivery</h4> <p>on orders over $50</p></div>
      <div class="flex-items0"><h4><span style="font-weight: bold;">Free</span> Returns</h4></div>
    </div>

    <div id="luggage" >
       <div class="typ1"><div><h1>Luggage</h1></div><a href="luggageapp.php" style="text-decoration: none; "><p id="view">View Collection <i class="fa-solid fa-play"></i></p></a></div>
       <div class="typ2"><div><h1>Kids Luggage </h1></div><a href="luggageapp.php"  style="text-decoration: none;"><p id="view1">View Collection <i class="fa-solid fa-play"></i></p></a></div>
      </div>
      
      <div id="luggage2">
        <div class="typ3"><div><h1>Backpack</h1></div><a href="./luggageapp.php"  style="text-decoration: none;"><p id="view2">View Collection <i class="fa-solid fa-play"></i></p></a></div>
        <div class="typ4"><div><h1>Accessories</h1></div><a href="./luggageapp.php"  style="text-decoration: none;"><p id="view3">View Collection <i class="fa-solid fa-play"></i></p></a></div>
      </div>

      <div id="sec">
        <div id="ad">
          <h1>Best Sellers</h1>
        </div>
        <div id="items">
          <div class="item1">
            <img src="./img/cyberbackpack-com-Pmr1tg3NThk-unsplash.jpg" alt="">
            <p class="bag" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Portable Cyber Backpack</p>
            <span id="price">$20</span><br>
            <i id="ic" class="fa-regular fa-heart"></i>
            <i id="ic" style="margin-left: 20px;" class="fa-sharp fa-solid fa-repeat"></i>
          </div>
          <div class="item2">
            <img src="./img/wiser-by-the-mile-SwWCo1k92M4-unsplash.jpg" alt="">
            <p class="bag" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Red Leather Backpack</p>
            <span id="price">$20</span><br>
            <i class="fa-regular fa-heart"></i>
            <i style="margin-left: 20px;" class="fa-sharp fa-solid fa-repeat"></i>
          </div>
          <div class="item3">
            <img src="./img/cyberbackpack-com-B_BVXEQsGog-unsplash.jpg" alt="">
            <p class="bag" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Portable Cyber Backpack</p>
            <span id="price">$20</span><br>
            <i class="fa-regular fa-heart"></i>
            <i style="margin-left: 20px;" class="fa-sharp fa-solid fa-repeat"></i>
          </div>
          <div class="item4">
            <img src="./img/oliur-1JNk998-g70-unsplash.jpg" alt="">
            <p class="bag" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Duffel Bag</p>
            <span id="price">$30</span><br>
            <i class="fa-regular fa-heart"></i>
            <i style="margin-left: 20px;" class="fa-sharp fa-solid fa-repeat"></i>
          </div>
        </div>
   
        <div id="sec2">
          <div class="secitem1">
            <img src="./img/kawica-stewart-3wcfuygszjU-unsplash (1).jpg" alt="">
            <a href="luggageapp.php"><h2>Travel Backpacks <span style="font-size: 20;"><i class="fa-solid fa-play"></i></span></h2></a>
            <p>All popular brands on sale now</p>
          </div>
          <div class="secitem2">
            <a href="luggageapp.php"><h2>New Arrivals <span style="font-size: 20;"><i class="fa-solid fa-play"></i></span></h2></a>
            <p>For your adventure</p>
            <img src="./img/suitcase6.jpg" alt="">
            
          </div>
          <div class="secitem3">
            <img src="./img/redduffel1.jpg" alt="">
            <a href="luggageapp.php"><h2>Travel Accessories <span style="font-size: 20;"><i class="fa-solid fa-play"></i></span></h2></a>
            <p>The perfect must-have accessories</p>
          </div>
      </div>
     
      <div id="gallery">
        <h1 style="margin-bottom: 20px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Gallery</h1>
        <div id="g1">
<img src="./img/american-green-travel-ji5XMfO3dXY-unsplash.jpg" alt="">
<img src="./img/american-green-travel-6N-VKagcHqc-unsplash.jpg" alt="">
<img src="./img/american-green-travel-P9pDbPR4t2o-unsplash.jpg" alt="">
        </div>
        <div id="g2">
<img src="./img/american-green-travel-WOJmVxmjgFM-unsplash.jpg" alt="">
<img src="./img/cyberbackpack-com-p8zYPbcVMt8-unsplash.jpg" alt="">
<img src="./img/liu-revutska-uUWD7fsh9tg-unsplash.jpg" alt="">
        </div>

        <div id="g3">
<img src="./img/harsh-jadav-BvTUSOqEcGE-unsplash.jpg" alt="">
<img src="./img/jed-owen-PpzBE1hWeGI-unsplash.jpg" alt="">
<img src="./img/duong-chung--cItKmBrXN8-unsplash.jpg" alt="">
        </div>
      </div>
      <button id="scroller" class="btn btn-dark bg-gradient" onclick="move()" >
        <i class="fa-solid fa-chevron-up"></i>
    </button>
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
<script src="./bootstrap/js/jquery.min.js"></script>
<script src="./js/loader.js"></script>
<script src="./js/script.js"></script>
<script src="./js/index.js"></script>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  window.addEventListener('DOMContentLoaded', function() {
  const visitorCountElement = document.getElementById('visitor-count');

  // Load visitor count from storage or set it to 0 if it doesn't exist
  let visitorCount = localStorage.getItem('visitorCount') || 0;

  // Increment visitor count and update display
  visitorCount++;
  visitorCountElement.textContent = 'Visitor-count: '+ visitorCount;

  // Save updated visitor count to storage
  localStorage.setItem('visitorCount', visitorCount.toString());
});

function move(){
        window.scrollTo(0,0);
    }
</script>

</html>