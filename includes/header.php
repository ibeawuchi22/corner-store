<?php

require_once('connection.php');
session_start();
if(isset($_SESSION['id'])){
    $uid = $_SESSION['id'];
    $sql = "SELECT * FROM user WHERE id = '$uid'";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_assoc($result);
    $name = $rows['name'];
    $phone = $rows['phone'];
    $email = $rows['email'];
    $pic = $rows['img'];

   
}else{
    $error = 'You need to login to access the store';
    header('Location: ../BronxLuggage/login.php?error='.$error);
   
    return false; 
}




?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link href="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
  <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
  <link rel="stylesheet" href="./css/luggage.css">

  
  <title>Bronx</title>
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
  </style>
</head>
<body onload="myFunction1()" id="myPage">
  <iframe id="loader" src="./loader/loader2.php" style="display: block; border: none; width: 100%; height: 100vh;"></iframe>
  <nav id="nav">
    <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"
        style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Bronx </span>Luggage <span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
        <div id="dropdown" class="dropdown" style="position: absolute;">
            <a href="./pages/male.php">Male</a>
            <a href="./pages/female.php">Female</a>
            <a href="./pages/kid.php">Kids</a>
           
        </div>
      
        <?php
          $checkrev = "SELECT * FROM cart  WHERE userid = '$uid'";
              $ans = mysqli_query($connect, $checkrev);
              ?>    
        <div class="cart-icon1" id="" onclick="goToCart()" count="<?=mysqli_num_rows($ans)?>">
          <i class="fa-solid fa-cart-shopping" id="cart1" style="font-size: 22; color: #ff2929;"></i>
        </div>
</nav>
  <div id="n2">
    <div id="logo">
      <div id="search">
      <p style="font-size: 12;" id="re" ><i class="fa-solid fa-magnifying-glass"></i>Start searching</p>
      </div>
      <h3 id="lug" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"
           style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: wheat;">Bronx </span>Luggage</h3>
  
          <div id="font">
              <i class="fa-sharp fa-solid fa-repeat"></i>
              <i class="fa-regular fa-heart"></i>
        
             
              <div class="cart-icon" id="cart-icon" onclick="goToCart()" count="<?=mysqli_num_rows($ans)?>">
                <i class="fa-solid fa-cart-shopping" id="cart2" style="font-size: 22; color: #e1a409;"></i>
              </div>

              
          </div>
          
        
         <a href="dashboard.php" style=""><img src="../includes/dp/<?=$pic?>" alt="" style="border: 1px solid gold; position: absolute; margin-left: 200px; margin-top: 5px; border-radius: 100px; width: 40px; height: 40px;"></a>
      </div>
    <ul id="sex">
      <li><a href="./pages/male.php">Male</a></li>
      <li><a href="./pages/female.php">Female</a></li>
      <li><a href="./pages/kid.php">Kids</a></li>
     </ul>
    
   </div>
   <div id="crumb" class="mt-5">
    <ul class="breadcrumb ">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="luggageapp.php">luggage</a></li>

       
    </ul>
    <h1 id="luggy" style="position: absolute; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Luggage</h1>
</div>