<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link href="../img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
  <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
  <link rel="stylesheet" href="../css/luggage.css">

  
  <title>CornerStore</title>
</head>
<body onload="myFunction1()" id="myPage">
  <iframe id="loader" src="../loader/loader2.php" style="display: block; border: none; width: 100%; height: 100vh;"></iframe>
  <nav id="nav">
    <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="../img/cornericon.png" alt="CornerStore logo"
        style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Corner</span>Store<span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
        <div id="dropdown" class="dropdown" style="position: absolute;">
            <a href="male.php">Male</a>
            <a href="female.php">Female</a>
            <a href="kid.php">Kids</a>
           
        </div>
        <div class="cart-icon1" id="" onclick="goToCart()" data-count="0">
          <i class="fa-solid fa-cart-shopping" id="cart1" style="font-size: 22; color: #ff2929;"></i>
        </div>
</nav>
  <div id="n2">
    <div id="logo">
      <div id="search">
      <p style="font-size: 12;" id="re" ><i class="fa-solid fa-magnifying-glass"></i>Start searching</p>
      </div>
      <h3 id="lug" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="../img/cornericon.png" alt="CornerStore logo"
           style="width: 50px; border-radius: 10px; opacity: 0.9; position: relative; left: -10px;"><span style="color: wheat;">Corner </span>Store</h3>
  
          <div id="font">
              <i class="fa-sharp fa-solid fa-repeat"></i>
              <i class="fa-regular fa-heart"></i>
              <div class="cart-icon" id="cart-icon" onclick="goToCart()" data-count="0">
                <i class="fa-solid fa-cart-shopping" id="cart2" style="font-size: 22; color: #e1a409;"></i>
              </div>
          </div>
          
        
         
      </div>
    <ul id="sex">
      <li><a href="male.php">Male</a></li>
      <li><a href="female.php">Female</a></li>
      <li><a href="kid.php" style="background-color: rgb(207, 7, 7); padding: 13px; padding-top: 5px; color: white;">Kids</a></li>
     </ul>
    
   </div>
   <div id="crumb" class="mt-5">
    <ul class="breadcrumb ">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="../luggageapp.php">luggage</a></li>
        <li class="breadcrumb-item"><a href="kid.php">Kids</a></li>
       
    </ul>
    <h1 id="luggy" style="position: absolute; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Kids</h1>
</div>

  <div id="store">
   
    <div id="filter">
   
      <label for="brand">Brand:</label><br>
      <select id="brand" onchange="applyFilters()">
        <option value="">All Brands</option>
        <option value="Suitcase">Suitcase</option>
        <option value="Backpack">Backpack</option>
        <option value="Duffle Bag">Duffle Bag</option>
      </select><br>
      
      <label for="color">Color:</label>
      <select id="color" onchange="applyFilters()">
        <option value="">All Colors</option>
        <option value="Red">Red</option>
        <option value="Blue">Blue</option>
        <option value="Black">Black</option>
      </select><br>
      
      <label for="casing">Casing:</label>
      <select id="casing" onchange="applyFilters()">
        <option value="">All Casings</option>
        <option value="Hard">Hard</option>
        <option value="Soft">Soft</option>
      </select><br>
      
      <label for="price">Price:</label>
      <select id="price" onchange="applyFilters()">
        <option value="">All Prices</option>
        <option value="10">Less than $10</option>
        <option value="20">Less than $20</option>
        <option value="30">Less than $30</option>
        <option value="40">Less than $40</option>
        <option value="50">Less than $50</option>
      </select>
      
      <button id="rest" class="btn btn-dark bg-gradient" onclick="resetFilters()"> <i class="fa-sharp fa-solid fa-repeat"></i></button>
  
      <div class="accordion mt-3" id="accordionparent" style="position: absolute; width: 100%;">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" 
                data-bs-target="#collapseOne">Expandable</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionparent">
                <div class="accordion-body">
                    <p>Yes</p>
                    <p>No</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" 
                data-bs-target="#collapseTwo">Manufacturer</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse " data-bs-parent="#accordionparent">
                <div class="accordion-body">
                    <p>USA</p>
                    <p>CHINA</p>
                    <p>GERMANY</p>
                    <p>FRANCE</p>
                </div>
            </div>
        </div>
    </div>
    </div> 
    <div id="filt">
      <button class="btn" id="listViewBtn" onclick="toggleView('list')"><i class="fa-solid fa-list" style="font-size: 20;"></i></button>
      <button class="btn" id="gridViewBtn" onclick="toggleView('grid')"><i class="fa-solid fa-grip-lines" style="font-size: 20;"></i></button>
    </div>
    <div id="sort">
 sort by <select name="sort" style="margin-left: 5px;">
  <option value="">position</option>
  <option value="">product name</option>
  <option value="">product price</option>
</select>
    </div>
    <div id="show">
  show<select name="show">
  <option value="">9</option>
  <option value="">15</option>
  <option value="">30</option>
</select>
    </div>
    <div class="products">
      <div class="product" data-brand="Suitcase" data-color="Blue" data-casing="Soft" data-price="100">
        <img src="../img/suitcase2.avif" alt="Suitcase">
        <div id="card">
          <h4>Suitcase</h4>
          <p>$100.00</p>
          <a class="btn btn-secondary bg-gradient" href="case1.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Suitcase', 100.00, './img/suitcase2.avif')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Backpack" data-color="Black" data-casing="Hard" data-price="30">
        <img src="../img/cyberbackpack-com-B_BVXEQsGog-unsplash.jpg" alt="Backpack">
        <div>
          <h4>Backpack</h4>
          <p>$30.00</p> 
          <a class="btn btn-secondary bg-gradient" href="case2.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Backpack', 30.00, './img/cyberbackpack-com-B_BVXEQsGog-unsplash.jpg')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Duffle Bag" data-color="Red" data-casing="Hard" data-price="20">
        <img src="../img/alvaro-serrano-pFLNV4gkXsc-unsplash.jpg" alt="Duffle Bag">
        <div>
          <h4>Duffle Bag</h4>
          <p>$20.00</p>
          <a class="btn btn-secondary bg-gradient" href="case3.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Duffle Bag', 20.00, './img/alvaro-serrano-pFLNV4gkXsc-unsplash.jpg')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Duffle Bag" data-color="Black" data-casing="Soft" data-price="20">
        <img src="../img/duffel.jpg" alt="Duffle Bag">
        <div>
          <h4>Duffle Bag</h4>
          <p>$20.00</p>
          <a class="btn btn-secondary bg-gradient" href="case4.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Duffle Bag', 20.00, './img/duffel.jpg')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Backpack" data-color="Blue" data-casing="Soft" data-price="30">
        <img src="../img/pursuit-retro--miQCjAA3EY-unsplash.jpg" alt="Backpack">
        <div>
          <h4>Backpack</h4>
          <p>$30.00</p> 
          <a class="btn btn-secondary bg-gradient" href="case5.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Backpack', 30.00, './img/pursuit-retro--miQCjAA3EY-unsplash.jpg')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Suitcase" data-color="Red" data-casing="Hard" data-price="50">
        <img src="../img/suitcase3.webp" alt="Suitcase">
        <div id="card">
          <h4>Suitcase</h4>
          <p>$50.00</p>
          <a class="btn btn-secondary bg-gradient" href="case6.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Suitcase', 50.00, './img/suitcase3.webp')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Suitcase" data-color="Red" data-casing="Hard" data-price="50">
        <img src="../img/amy-shamblen-E2qx9Ed2qIQ-unsplash.jpg" alt="Suitcase">
        <div id="card">
          <h4>Suitcase</h4>
          <p>$50.00</p>
          <a class="btn btn-secondary bg-gradient" href="case7.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Suitcase', 50.00, './img/amy-shamblen-E2qx9Ed2qIQ-unsplash.jpg')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Backpack" data-color="Red" data-casing="Soft" data-price="30">
        <img src="../img/wiser-by-the-mile-SwWCo1k92M4-unsplash.jpg" alt="Backpack">
        <div>
          <h4>Backpack</h4>
          <p>$30.00</p> 
          <a class="btn btn-secondary bg-gradient" href="case8.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Backpack', 30.00, './img/wiser-by-the-mile-SwWCo1k92M4-unsplash.jpg')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <div class="product" data-brand="Duffle Bag" data-color="Black" data-casing="Hard" data-price="20">
        <img src="../img/duffel3.jpg" alt="Duffle Bag">
        <div>
          <h4>Duffle Bag</h4>
          <p>$20.00</p>
          <a class="btn btn-secondary bg-gradient" href="case9.php" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
          <button id="bt" class="btn btn-add-to-cart" onclick="addToCart('Duffle Bag', 20.00, './img/duffel3.jpg')">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
    </div>
      
    </div>
    <div id="pagi" class="mt-5">
      <ul class="pagination">
        <li class="page-item active"><a href="#/!" class="page-link bg-dark" onclick="previousPage()">Previous</a></li>
        <li class="page-item"><a href="#!next" class="page-link" onclick="nextPage()">2</a></li>
        <li class="page-item"><a href="#" class="page-link" onclick="nextPage()">3</a></li>
        <li class="page-item"><a href="#" class="page-link" onclick="nextPage()">4</a></li>
        <li class="page-item"><a href="#" class="page-link" onclick="nextPage()">Next</a></li>
      </ul>
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
        <div class="ticker">
        <p id="ticker-content"></p>
      </div>
     </footer>
</body>
<script src="../js/loader.js"></script>
<script src="../js/app.js"></script>
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/script.js"></script>
</html>
