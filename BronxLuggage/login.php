<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
    <title>Login/Register</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <style>
        .password-toggle {
    position: absolute;
    top: 320px;
    right: 580px;
    transform: translateY(-50%);
    cursor: pointer;
    animation: slide 0.6s ease;
    /* border: 3px solid black; */
  }
  @keyframes slide 
{
  0%{
  opacity: 0;
  }

100%{
opacity: 1;
}
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
        
       
    <div class="container">
    
        <div  id="loginContainer" class="form-container login">
           
            <form action="../includes/loginsub.php" method="POST" id="loginForm">
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
                <h2  style="color: white; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Login</h2>
             <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="loginEmail" name="email"  >
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" >
                </div>
                <div class="form-group">
                    <button type="submit"  class="btn-dark bg-gradient" style="color: gold;" name="login">Login</button>
                </div>
                <p style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Don't have an account? <a href="register.php">Register</a></p>
                </form>
                </div>
        <div  id="registerContainer" class="form-container register">
            <h2 style="color: white; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Register</h2>
            <form action="../includes/loginsub.php" method="POST" id="registerForm">
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
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="regName" name="name" placeholder="name*" required id="">
                </div>
                <div class="form-group">
                    <label for="name">Phone:</label>
                    <input type="text" id="regName" name="phone" placeholder="phone*" required id="">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="regEmail" name="email" placeholder="email*" required id="">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="regPassword" name="password" placeholder="password*" required id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-dark bg-gradient" style="color: gold;" name="submit">Register</button>
                </div>
                <p style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Already have an account? <a href="login.php">Login</a></p>
                
            </form>
                </div>
    </div>
    <span class="password-toggle">
                <i class="fa fa-eye" aria-hidden="true"></i>
                </span>
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
      showLogin();
   function showRegister() {
            document.getElementById("loginContainer").style.display = "none";
            document.getElementById("registerContainer").style.display = "block";
        }

        function showLogin() {
            document.getElementById("registerContainer").style.display = "none";
            document.getElementById("loginContainer").style.display = "block";
        }

        const passwordInput = document.getElementById("password");
const passwordToggle = document.querySelector(".password-toggle");

passwordToggle.addEventListener("click", function() {
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
  passwordToggle.querySelector("i").classList.toggle("fa-eye");
  passwordToggle.querySelector("i").classList.toggle("fa-eye-slash");
});
</script>
</html>
