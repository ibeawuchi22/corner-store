<?php
require_once('../includes/head.php');
?>
<body>
    <nav id="nav" style="margin-top:0px;">
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
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
            </nav>
            
           </div>
         
      </header>
      <div id="crumb" >
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="luggageapp.php">luggage</a></li>
            <li class="breadcrumb-item"><a href="cart.php">cart</a></li>
           
        </ul>
       
    </div>

   
        
    <h1 style="margin-right: 30px; position: relative; top: 70px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Shopping Cart</h1>
    <i class="fa-solid fa-cart-shopping" style="position: absolute; top: 320px; left: 670px; font-size: 82px; color: #000000;"></i>
    <div id="cart-items1">
    <?php
            $sql2 = "SELECT * FROM cart WHERE userid = '$uid' ORDER BY userid DESC";
            $con = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($con) > 0){
              while($row = mysqli_fetch_assoc($con)){
                $id = $row['id'];
                $userid = $row['userid'];
                $dealerid = $row['dealerid'];
                $bagid = $row['bagid'];
                $brand = $row['brand'];
                $sex = $row['sex'];
                $color = $row['color'];
                $designer = $row['designer'];
                $price = $row['price'];
                $img = $row['img'];
                $total += $price;
                
          ?>
          <table style="margin: auto;">
                <tr>
                    <th>
                    <img src="../includes/post/<?=$img?>" alt="" style="width: 100px; height: 100px;">

                    </th>
                    <th><?=$designer?> <?=$brand?></th>
                    <th> - $<?=$price?></th>
                    <th> <a href="../includes/cartdelete.php?cid=<?=$cid?>" class="btn btn-danger bg-gradient">Remove Item</a></th>
                </tr>
              
          </table>
          
          <?php } }else{ ?>


  <p style = "color:red;">Cart empty</p>


<?php } ?>
    </div>
  <div id="cart-items" style="display: none;">
  
  </div>
 <p id="total-price1" style="">Total price: $<?=$total?></p>

 <p id="total-price" style="display: none;"></p>
  <div id="msg1" style="margin-top: 20px; width: 200px;"></div>
   
  <?php if(isset($_GET['error'])){ ?>
<div id="message-container" class="alert alert-danger alert-dismissible" style="width: fit-content; margin: auto; position: absolute; left: 600px; top: 150px;">

<p style="margin-left: 20px;"><?php echo $_GET['error']?></p>
</div>
<?php } else if(isset($_GET['success'])){ ?>
<div id="message-container"  class="alert alert-success alert-dismissible" style="width: fit-content; margin: auto; position: absolute; left: 600px; top: 150px;">

<p style="margin-left: 20px;"><?php echo $_GET['success']?></p>
</div>
<?php } ?>
  <a href="../includes/purchase.php?uid=<?=$uid?>" id="purchase-all-button" class="btn btn-success">Purchase all</a>

  <footer style="margin-bottom: 40px; margin-top: 50px;">
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
      <div class="ticker" style="bottom: 0px;">
      <p id="ticker-content"></p>
    </div>
   </footer>

</body>
<script src="./bootstrap/js/jquery.min.js"></script>
<script src="./js/cart.js"></script>
<script src="./js/script.js"></script>
<script>
    setTimeout(function(){
        $('#message-container').fadeOut('slow', function(){
            $(this).remove();
        });
    }, 600);
</script>

<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
