<?php require_once('../includes/header2.php');?>


 <p class="greet">Hi <?=$username?>!</p>
      
 <?php
            $total = 0;
          $sql3 = "SELECT * FROM sold_items  WHERE dealerid = '$id'";
              $res3 = mysqli_query($connect, $sql3);
              ?>
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
                  $total += $price;
                
              
          ?> <span style="color: green;"></span>
               <?php } }else{  ?>
              
              <p id="amount" style = "">Sold Amount: <span style="color: red;">$0</span></p>
        
        <?php }   ?>

 
        <p id="amount">Sold Amount: <span style="color: green;">$<?=$total?></span></p>
    <section id="account" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    <a class="btn btn-warning bg-gradient" href="availitems.php">Available Items</a>
    <a href="solditems.php" class="btn btn-dark bg-gradient">Sold Items</a>
        <!-- Display user's personal information -->
        <h2 style="padding-top: 30px;">My Profile</h2>
        <!-- Placeholder content -->
        <p>Username: <?=$username?></p>
        <p>Email: <?=$email?></p>
        <p>Phone: <?=$phone?></p>
        <!-- Add more account information fields here -->

    </section>
    


  


    <?php require_once('../includes/footer.php');?>

</body>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>
</html>
