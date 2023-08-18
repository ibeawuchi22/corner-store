<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
    <title>login</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
   
    <style>
        .log{
         
        margin: auto;
        position: relative;
        top: 100px;
        border: none;
        /* box-shadow:  0px 0px 5px rgb(255, 255, 255); */
        height: fit-content;
        padding: 30px;
        padding-bottom: 20px;
        width: 40%;
        border-radius: 10px;
      }
      .reg{
        border: none;
        box-shadow:  0px 0px 5px rgb(255, 255, 255);
        height: fit-content;
        padding: 30px;
        padding-bottom: 20px;
        width: 45%;
        border-radius: 10px;
      }
      .email, .user, .password, .confirm{
        width: 100%;
        margin-bottom: 20px;
        border: 1px solid rgb(222, 222, 222);
        height: 50px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
       
      }
      #email:focus{
        outline: none;
      }
      #search:focus{
        outline: none;
      }
      .email, .user, .password, .confirm:focus{
        outline: none;
      }
      label{
        margin-bottom: 20px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }
      input[type = 'checkbox']{
        width: fit-content;
        margin-right: 3px;
        height: fit-content;
      }
      input[type = 'submit']{
        width: fit-content;
        margin-bottom: 10px;
        padding-bottom: 30px;
        border-radius: 0;
      }
      input[type = 'button']{
        width: fit-content;
      }
      button[type = 'submit']{
        width: fit-content;
       
        /* border   : 2px solid white; */
      }
      
  .password-wrapper {
    position: relative;
    /* border: 2px solid black; */
    
  }
   
  /* .password-input {
    padding-right: 40px;
  } */
  
  .password-toggle {
    position: absolute;
    top: 38%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    /* border: 3px solid black; */
  }
    </style>
</head>

<body onload="myFunction()" id="myPage" style="background-color: grey;">
<iframe id="loader" src="./loader/loader2.php" style="display: block; border: none; width: 100%; height: 100vh;"></iframe>
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
       <h1 style="color: white; position: absolute; top: 150px; left: 100px; font-size: 90px; opacity: 0.3;
       font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">BRONX<sup style="font-size: 19px; position: absolute;  ">tm</sup></h1>
        
       
    
        <div class="log bg-dark bg-gradient" >
            <form action="../includes/dealerlog.php" method="POST" enctype="multipart/form-data">
            <?php if(isset($_GET['error'])){ ?>
<div class="alert alert-danger alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['error']?></p>
</div>
<?php } else if(isset($_GET['success'])){ ?>
<div class="alert alert-success alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['success']?></p>
</div>
<?php } ?>
                <h3 style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Login</h3>
                <label for="username" >Username *</label><br>
                <input type="text" id="username" class="user" name="username" placeholder="Username" required><br>
                <label for="pass">Password *</label><br>
                <div class="password-wrapper">
                  <input type="password" id="pass" name="password" class="password" placeholder="Password" required><br>
                  <span class="password-toggle">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                  </span>
                </div>
                <label for="remember" ><input type="checkbox" id="remember">Remember me</label><br>
                <input type="submit" class="btn btn-warning bg-gradient" name="login" value="Login" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><br>
                <a href="" style="color: white; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Lost your password?</a>
                <p style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Don't have an account? <a href="dealerreg.php">Register</a></p>
            </form>
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
         
       </footer>
</body>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/loader.js"></script>
<script>
   

        const passwordInput = document.getElementById("pass");
const passwordToggle = document.querySelector(".password-toggle");

passwordToggle.addEventListener("click", function() {
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
  passwordToggle.querySelector("i").classList.toggle("fa-eye");
  passwordToggle.querySelector("i").classList.toggle("fa-eye-slash");
});
</script>
</html>
