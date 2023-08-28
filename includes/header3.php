<?php

require_once('../../includes/connection.php');
session_start();
if(isset($_GET['bid'])){
    $bid = $_GET['bid'];
    $sql_propt = "SELECT * FROM items WHERE id = $bid";
    $res = mysqli_query($connect, $sql_propt);
    $row = mysqli_fetch_assoc($res);
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
                  // get dealer that posted the item 
  $sql_agent = "SELECT * FROM dealer WHERE id = $dealerid";
  $res2 = mysqli_query($connect, $sql_agent);
        $row2 = mysqli_fetch_assoc($res2);
        $did =$row2['id'];
        $dusername = $row2['username'];
        $dphone = $row2['phone'];
        $demail = $row2['email'];
        $dpic = $row2['img'];
  

        if(isset($_SESSION['id'])){
            $uid = $_SESSION['id'];
            $sql = "SELECT * FROM user WHERE id = '$uid'";
            $result = mysqli_query($connect, $sql);
            $rows = mysqli_fetch_assoc($result);
            $uname = $rows['name'];
            $uphone = $rows['phone'];
            $uemail = $rows['email'];
            $upic = $rows['img'];
        
           
        }else{
            $error = 'You need to login to access the store';
            header('Location: ../CornerLuggage/login.php?error='.$error);
           
            return false; 
        }
  }else{
    $error = 'Unauthorised Access';
       header('Location: ../CornerLuggage/login.php?error='.$error);
       return false;
     }
     
  


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CornerStore</title>
    <link href="../img/cornericon.png" rel="icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="../css/item.css">


    <style>
         .cart-icon {
        
        position: fixed;
        z-index: 2;
        top: 25px;
        right: 190px;
        display: inline-block;
        margin-left: 10px;
        cursor: pointer;
      }
      .cart-icon::after {
        content: attr(count);
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: red;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        font-size: 14px;
      }

      .cart-icon1 {
        position: fixed;
        display: inline-block;
        margin-left: 10px;
        cursor: pointer;
        z-index: 2;
      }
      .cart-icon1::after {
        content: attr(count);
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: red;
        color: white;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        font-size: 14px;
      }
      @media screen and (max-width: 700px){
        #sign, #contact, #acc, #buy, #info{
  margin-bottom: 20px;
}
#sign{
  margin-left: 30px;
}
footer{
  margin-bottom: 0px;
}
      }
    </style>
</head>
<body>
  <nav id="nav">
    <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="../img/cornericon.png" alt="CornerStore logo"
        style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Corner</span>Store<span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
        <div id="dropdown" class="dropdown" style="position: absolute;">
          <a href="male.php">Male</a>
          <a href="female.php">Female</a>
          <a href="kid.php">Kids</a>
           
        </div>
        <?php
          $checkrev = "SELECT * FROM cart  WHERE userid = '$uid'";
              $ans = mysqli_query($connect, $checkrev);
              ?>    
        <div class="cart-icon1" id="" onclick="goToCart()" count="<?=mysqli_num_rows($ans)?>">
          <i class="fa-solid fa-cart-shopping" id="" style="font-size: 22; color: #ff2929;"></i>
        </div>
</nav>
  <div id="n2">
    <div id="logo">
      <div id="search">
      <p style="font-size: 12;" id="re" ><i class="fa-solid fa-magnifying-glass"></i>Start searching</p>
      </div>
      <h3 id="lug" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="../img/cornericon.png" alt="CornerStore logo"
           style="width: 50px; border-radius: 10px; opacity: 0.9; position: relative; left: -10px;"><span style="color: wheat;">Corner </span>Store</h3>
  
          <div id="font">
              
          <?php
          $checkrev = "SELECT * FROM cart  WHERE userid = '$uid'";
              $ans = mysqli_query($connect, $checkrev);
              ?>    
        <div class="cart-icon1" id="" onclick="goToCart()" count="<?=mysqli_num_rows($ans)?>">
          <i class="fa-solid fa-cart-shopping" id="" style="font-size: 22; color: #e1a409;"></i>
        </div>
          </div>
          
        
          <a href="../dashboard.php" style=""><img src="../../includes/dp/<?=$upic?>" alt="" style="border: 1px solid gold; position: absolute; margin-left: 200px; margin-top: 5px; border-radius: 100px; width: 40px; height: 40px;"></a>
      </div>
    <ul id="sex">
      <li><a href="male.php">Male</a></li>
      <li><a href="female.php">Female</a></li>
      <li><a href="kids.php">Kids</a></li>
     </ul>
    
   </div>

   <div id="crumb" class="mt-5">
    <ul class="breadcrumb ">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="../luggageapp.php">luggage</a></li>
        <li class="breadcrumb-item"><a href="case1.php?bid=<?=$bid?>">Preview</a></li>
       
    </ul>
    <h1 id="luggy" style="position: absolute; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Preview</h1>
</div>

