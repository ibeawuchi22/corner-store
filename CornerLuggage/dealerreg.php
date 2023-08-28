<?php
require_once('../includes/logreghead.php');
?>
       <h1 id="back" style="color: white; position: absolute; top: 300px; left: 100px; font-size: 90px; opacity: 0.3;
       font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">CornerStore<sup style="font-size: 19px; position: absolute;  ">tm</sup></h1>
        
       
    
        <div class="reg">
<form action="../includes/dealerregsub.php" method="POST" enctype="multipart/form-data" >
<?php if(isset($_GET['error'])){ ?>
<div class="alert   alert-warning  alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['error']?></p>
</div>
<?php } else if(isset($_GET['success'])){ ?>
<div class="alert alert-success alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['success']?></p>
</div>
<?php } ?>
<h3 style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Register</h3>
<label for="email" >Email Address *</label><br>
<input type="email" id="email" class="email" name="email" placeholder="Email" required><br>
<label for="user" >Username *</label><br>
<input type="text" id="user" class="user" name="username" placeholder="Username" required><br>
<label for="phone" >Phone *</label><br>
<input type="text" id="" class="user" name="phone" placeholder="Phone No" required><br>
<label for="password" >Password *</label><br>
<div class="password-wrapper">
  <input type="password" id="password" name="password" class="password" placeholder="Password" required><br>
  <span class="password-toggle">
    <i class="fa fa-eye" aria-hidden="true"></i>
  </span>
</div>
<label for="pic" >Upload pic *</label><br>
<input type="file" id="" class="user" name="file" required><br>

<input type="submit" class="btn btn-warning bg-gradient" name="submit" value="Register" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
<p style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Already have an account? <a href="dealerlogin.php">Login</a></p>
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
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/loader.js"></script>
<script src="./js/script.js"></script>
<script>
   

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
