<?php require_once('../includes/header2.php');?>


<?php
          $sql2 = "SELECT * FROM items  WHERE dealerid = '$id' AND deleted = 1";
              $res2 = mysqli_query($connect, $sql2);
              
              ?>
    
       <h3 id="avail">Available Items(<?=mysqli_num_rows($res2)?>)</h3>
     
       <div id="products" style="margin-bottom: 0;">
       <?php
       if(mysqli_num_rows($res2) > 0){
                while($rows = mysqli_fetch_assoc($res2)){
                  $iid = $rows['id'];
                  $brand = $rows['brand'];
                  $sex = $rows['sex'];
                  $casing = $rows['casing'];
                  $color = $rows['color'];
                  $designer = $rows['designer'];
                  $desc = $rows['description'];
                  $iimg = $rows['img'];
                  $price = $rows['price'];
          ?>
       <div class="product" data-brand="<?=$brand?>" data-color="<?=$color?>" data-casing="<?=$casing?>" data-price="<?=$price?>">
        <img src="../includes/post/<?=$iimg?>" alt="<?=$brand?>">
        <div id="card">
          <h4><?=$designer?> <?=$brand?></h4>
          <p>$<?=$price?>.00</p>

          <a class="btn btn-danger bg-gradient" href="" style="margin-bottom: 10px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Remove</a><br>
         
        </div>
        </div>
        <?php  }}else{  ?>
              
                  <p style = "color:red;">no item uploaded yet...</p>
              
            <?php }   ?>
    </div>
    <?php
          $sql3 = "SELECT * FROM sold_items  WHERE dealerid = '$id'";
              $res3 = mysqli_query($connect, $sql3);
              ?>
<?php require_once('../includes/footer.php');?>
</body>
        <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
        </html>