<?php require_once('../includes/header2.php');?>
<?php
          $sql3 = "SELECT * FROM sold_items  WHERE dealerid = '$id'";
              $res3 = mysqli_query($connect, $sql3);
              ?>
    <h3 id="sold">Sold Items(<?=mysqli_num_rows($res3)?>)</h3>

    <div id="products" style="margin-bottom: -100px;">
     <?php
       if(mysqli_num_rows($res3) > 0){
                while($rows = mysqli_fetch_assoc($res3)){
                  $id = $rows['id'];
                  $userid = $rows['userid'];
                  $dealerid = $rows['dealerid'];
                  $bagid = $rows['bagid'];
                  $brand = $rows['brand'];
                  $sex = $rows['sex'];
                  $color = $rows['color'];
                  $designer = $rows['designer'];
                  $price = $rows['price'];
                  $img = $rows['img'];
                  $solddate = $rows['solddate'];

                  $sql4 = "SELECT * FROM user where id = '$userid'";
                  $res4 = mysqli_query($connect, $sql4);
                  $row4 = mysqli_fetch_assoc($res4);
                  $username = $row4['name'];
                  $phone = $row4['phone'];
                  $email = $row4['email'];
                  $pic = $row4['img'];
              
          ?>
          
       <div class="product" data-brand="Suitcase" data-color="Blue" data-casing="Soft" data-price="100">
       <p>Sold to: <?=$username?></p>
          <p>Phone: <?=$phone?></p>
          <p>Date: <?=$solddate?></p>
       <img src="../includes/post/<?=$img?>" alt="<?=$brand?>">
        <div id="card">
          <h4><?=$designer?> <?=$brand?></h4>
          <p>$<?=$price?></p>
          <a class="btn btn-danger bg-gradient" href="" style="margin-bottom: 10px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Remove</a><br>

         
        </div>
        </div>
        <?php  }}else{  ?>
              
                  <p style = "color:red;">no item sold yet...</p>
            
            <?php }   ?>
    </div>
    <?php require_once('../includes/footer.php');?>
        </body>
        <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
        </html>