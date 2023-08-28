<?php






   require_once('../../includes/header3.php');

?>
<?php if(isset($_GET['error'])){ ?>
<div class="alert   alert-warning  alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['error']?></p>
</div>
<?php } else if(isset($_GET['success'])){ ?>
<div class="alert alert-success alert-dismissible" style="width: fit-content; margin: auto; position: absolute; left: 600px; top: 120px;">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['success']?></p>
</div>
<?php } ?>
    <div class="product" data-brand="Suitcase" data-color="Blue" data-casing="Soft" data-price="100">
        <img src="../../includes/post/<?=$img?>" alt="Suitcase">
        <div id="det">
            <p><i class="fa-solid fa-check"></i> In Stock</p>
            <span  style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">BKU 5443</span>
          <h2 id="ser"><?=$designer?> <?=$brand?></h2>
          <div id="rate">
            <p >Rating:</p>
            <div class="rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9734;</span>
          </div>
          <?php
          $checkrev = "SELECT * FROM reviews  WHERE bagid = '$bid'";
              $ans = mysqli_query($connect, $checkrev);
              ?>
          <a href="#reviews-content"><?=mysqli_num_rows($ans)?> Review</a>
          <a href="#chat">Add your review</a>
          </div>
          <p id="ir"><?=$description?></p>
          <p id="ie">$<?=$price?>.00</p>
          <p id="br">Brand: <?=$designer?></p>
          <label id="lab" for="" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">size: <br><select name="" id="size">
            <option value="">--Please Select--</option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
          </select></label>
          <br>
          <label for="">Quantity: <br><input type="number" placeholder="1"></label><br>
          <form action="../../includes/addtocart.php" method="POST">
                <input type="hidden" name="userid" value="<?=$uid?>">
        <input type="hidden" name="dealerid" value="<?=$dealerid?>">
        <input type="hidden" name="bagid" value="<?=$id?>">
        <input type="hidden" name="brand" value="<?=$brand?>">
        <input type="hidden" name="sex" value="<?=$sex?>">
        <input type="hidden" name="color" value="<?=$color?>">
        <input type="hidden" name="designer" value="<?=$designer?>">
        <input type="hidden" name="price" value="<?=$price?>">
        <input type="hidden" name="img" value="<?=$img?>">
          <button  class="btn" name="add">add to cart</button>
          </form>
          
          <i style="position: relative; top: -40px;" class="fa-regular fa-heart"></i>
        </div>
       
      </div>
      <div id="buttons">
        <button  onclick="showContent('details')" id="btn-details"  style="margin-left: 20px;">Details</button>
        <button  onclick="showContent('info')" id="btn-info">More Information</button>
        <button  onclick="showContent('reviews')" id="btn-reviews" class="active">Reviews (<?=mysqli_num_rows($ans)?>)</button>
    </div>

    <div id="content" class="content">
        <div id="details-content"  style="padding-top: 20px; font-size: 14; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; background-color: rgb(255, 254, 254);">
<?=$description?>

        </div>
        <div id="info-content">
          
            <table class="table table-bordered table-striped table-hover" style="width: 70%; font-size: 14; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-top: 20px;">
                
                <tbody>
                  <tr>
                  <td>Manufacturer</td>
                  <td>China</td>
                 </tr>
                 <tr>
                  <td>Features</td>
                  <td>Top and side ergonomic flat handles for comfortable and easy lifting. Push Button Locking internal retractable trolley system</td>
                 </tr>
                 <tr>
                  <td>Material</td>
                  <td>Made from a sleek and durable polyester material</td>
                 </tr>
                 <tr>
                 <td>Wheels</td>
                  <td>Hard shell spinners</td>
                 </tr>
                 <tr>
                  <td>Casing</td>
                   <td>Soft</td>
                  </tr>
                  <tr>
                    <td>Security code</td>
                     <td>No</td>
                    </tr>
                    <tr>
                      <td>Water Resistant</td>
                       <td>Yes</td>
                      </tr>
                      <tr>
                        <td>Expandable</td>
                         <td>No</td>
                        </tr>
                        <tr>
                          <td>Warranty</td>
                           <td>1month</td>
                          </tr>
                  
                 
             
              </tbody>
                    
                </table>
        </div>
        
        <div id="reviews-content" class="show">
          
        <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Customer Reviews</h4>
        
         <?php  require_once('../../includes/review.php'); ?>
          <h4 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-top: 20px;">You're reviewing: <?=$designer?> <?=$brand?></h4>
          
          
<form id="chat" action="../../includes/postrev.php" method="POST" style="width: fit-content; ">
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
  <label for="" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Nickname <span style="color: rgb(170, 1, 1);">*</span> <input style="width: 140%; margin-bottom: 10px; border: 1px solid rgb(186, 186, 186);" type="text" id="name" name="name" required></label><br>
          <input type="hidden" name="img" value="<?=$upic?>" id="">
          <input type="hidden" name="uid" value="<?=$uid?>" id="">
          <input type="hidden" name="bid" value="<?=$bid?>" id="">

          <label for="" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Summary<span style="color: rgb(170, 1, 1);">*</span> <input style="width: 146%; margin-bottom: 10px; border: 1px solid rgb(186, 186, 186);" type="text" id="summary" name="summary" required></label><br>
          <label for="" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Review <span style="color: rgb(170, 1, 1);">*</span> <textarea style="width: 107%; border: 1px solid rgb(186, 186, 186);" name="review" id="review" cols="30" rows="5"></textarea></label>
<button id="reev" class="btn " name="submit" style="width: 50%; margin-top: 20px;">Submit Review</button>
     

</form>

       





         
        
        </div>
    </div>


    <footer style="margin-bottom: 0px;">
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
  
    <script>
        function showContent(contentId) {
            const contentDivs = document.getElementsByClassName("content")[0].getElementsByTagName("div");
            const buttons = document.getElementById("buttons").getElementsByTagName("button");

            for (let i = 0; i < contentDivs.length; i++) {
                contentDivs[i].classList.remove("show");
            }

            for (let i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }

            const selectedContent = document.getElementById(contentId + "-content");
            const selectedButton = document.getElementById("btn-" + contentId);
            
            if (selectedContent) {
                selectedContent.classList.add("show");
            }
            
            if (selectedButton) {
                selectedButton.classList.add("active");
            }
        }
        var ratings = {}; // Object to store ratings

function rate(group, stars) {
  ratings[group] = stars + 1;

  var allStars = document.querySelectorAll('[data-group="' + group + '"] .star2');
  for (var i = 0; i < allStars.length; i++) {
    if (i === 0) {
      if (stars === 0) {
        allStars[i].classList.remove('filled');
      } else {
        allStars[i].classList.add('filled');
      }
    } else if (i <= stars) {
      allStars[i].classList.add('filled');
    } else {
      allStars[i].classList.remove('filled');
    }
  }
}










    </script>
     
</body>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/items.js"></script>
<script src="../js/script.js"></script>
</html>