<?php require_once('../includes/header1.php');?>
    <header style="position: fixed; width:100%; z-index: 1; top: 0; margin-top: -50;">
  <a href="luggageapp.php" id="goto"><p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; position: absolute; right: 300px; top: 40px;">Go to store   <i class="fa-sharp fa-solid fa-door-open"></i></p></a>
        <!-- Display user's name and profile picture -->
         <h1 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; text-align: left; position: absolute; top: 40px; left: 70px; color: wheat;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"  style="width: 50px; border-radius: 10px; opacity: 0.9; position: absolute; margin-left: -50px; margin-top: 0px;">Bronx</h1>
        <h1 style="color: gold; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Hi <?=$name?>!</h1>
        <img src="../includes/dp/<?=$pic?>" alt="Profile Picture" style="width: 103px; height: 90px; border: 1px solid gold;">
        <nav>
        <!-- Quick access links to dashboard sections -->
        <ul>

            <li><a href="../includes/logout.php">Logout</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>

        </ul>
    </nav>
    </header>

    <div class="reg" style="position: relative; top: 250px; margin-bottom: 300px;">
<form action="../includes/setuser.php" method="POST" enctype="multipart/form-data" >
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
<h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Edit Profile</h3>
<p>Fill the form to Edit Your profile</p>

<label for="email">Email Address <span style="color:red;">*</span></label><br>
<input type="hidden" name="name" value="<?=$name?>" required id="">
<input type="hidden" name="userid" value="<?=$uid?>" id="">
<input type="hidden" name="img" value="<?=$pic?>" id="">
<input type="email" id="email" class="email" name="email" placeholder="<?=$email?>" required><br>
<label for="user" >Username <span style="color:red;">*</span></label><br>
<input type="text" id="user" class="user" name="username" placeholder="<?=$name?>" required><br>
<label for="phone" >Phone <span style="color:red;">*</span></label><br>
<input type="text" id="" class="user" name="phone" placeholder="<?=$phone?>" required><br>

<label for="pic" >Upload pic <span style="color:red;">*</span></label><br>
<input type="file" id="" class="user" name="file" ><br>
<input type="submit" class="btn btn-primary" name="submit" value="Post" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
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
              <table style="border: none;">
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
