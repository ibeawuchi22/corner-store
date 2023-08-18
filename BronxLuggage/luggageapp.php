<?php require_once('../includes/header.php');?>
<?php if(isset($_GET['error'])){ ?>
<div id="message-container" class="alert alert-danger alert-dismissible" style="width: fit-content; margin: auto; position: absolute; left: 600px; top: 109px;">

<p style="margin-left: 20px;"><?php echo $_GET['error']?></p>
</div>
<?php } else if(isset($_GET['success'])){ ?>
<div id="message-container" class="alert alert-success alert-dismissible" style="width: fit-content; margin: auto; position: absolute; left: 600px; top: 109px;">

<p style="margin-left: 20px;"><?php echo $_GET['success']?></p>
</div>
<?php } ?>
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
    <?php
            $sql2 = "SELECT * FROM items WHERE id > 0 ORDER BY id DESC";
            $con = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($con) > 0){
              while($row = mysqli_fetch_assoc($con)){
                $id = $row['id'];
                $dealerid = $row['dealerid'];
                $brand = $row['brand'];
                $sex = $row['sex'];
                $casing = $row['casing'];
                $color = $row['color'];
                $designer = $row['designer'];
                $description = $row['description'];
                $img = $row['img'];
                $price = $row['price'];
          
          ?>
      <div class="product" data-brand="<?=$brand?>" data-color="<?=$color?>" data-casing="<?=$casing?>" data-price="<?=$price?>">
        <img src="../includes/post/<?=$img?>" alt="<?=$brand?>">
        <div id="card">
          <h4><?=$designer?> <?=$brand?></h4>
          <p>$<?=number_format($price)?>.00</p>
          <a class="btn btn-secondary bg-gradient" href="./pages/case1.php?bid=<?=$id?>" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">preview</a><br>
                <form action="../includes/addtocart.php" method="POST">
                <input type="hidden" name="userid" value="<?=$uid?>">
        <input type="hidden" name="dealerid" value="<?=$dealerid?>">
        <input type="hidden" name="bagid" value="<?=$id?>">
        <input type="hidden" name="brand" value="<?=$brand?>">
        <input type="hidden" name="sex" value="<?=$sex?>">
        <input type="hidden" name="color" value="<?=$color?>">
        <input type="hidden" name="designer" value="<?=$designer?>">
        <input type="hidden" name="price" value="<?=$price?>">
        <input type="hidden" name="img" value="<?=$img?>">
          <button id="bt" class="btn btn-add-to-cart" name="add">add to cart <i class="fa-solid fa-cart-shopping" style="font-size: 20;"></i></button>
          </form>
          <i id="p" class="fa-sharp fa-solid fa-repeat" style="margin-right: 30px;"></i>
          <i id="p" class="fa-regular fa-heart"></i> 
        </div>
      </div>
      <?php } }else{ ?>


<p style = "color:red;">no item uploaded yet...</p>


<?php } ?>
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
<script src="./js/app.js"></script>
<script src="../includes/cart.js"></script>

<script src="./bootstrap/js/bootstrap.min.js"></script>
<script src="./js/script.js"></script>
<script>
    setTimeout(function(){
        $('#message-container').fadeOut('slow', function(){
            $(this).remove();
        });
    }, 600);
</script>
</html>
