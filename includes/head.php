<?php

require_once('connection.php');
session_start();
if(isset($_SESSION['id'])){
    $uid = $_SESSION['id'];
    
    $sql = "SELECT * FROM user WHERE id = '$uid'";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_assoc($result);
    $username = $rows['username'];
    $phone = $rows['phone'];
    $email = $rows['email'];
    $pic = $rows['img'];

   $sql4 = "SELECT * FROM cart WHERE userid = '$uid'"; 
   $rez = mysqli_query($connect, $sql4);
   $row2 = mysqli_fetch_assoc($rez);
   $cid = $row2['id'];
   $userid = $row2['userid'];
   $dealerid = $row2['dealerid'];
   $bagid = $row2['bagid'];
   $brand = $row2['brand'];
   $sex = $row2['sex'];
   $color = $row2['color'];
   $designer = $row2['designer'];
   $price = $row2['price'];
   $img = $row2['img'];
}else{
    $error = 'Unauthorised Access';
    header('Location: ../BronxLuggage/login.php?error='.$error);
   
    return false; 
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <link href="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
  <link rel="stylesheet" href="./css/cart.css">
  <link rel="stylesheet" href="./css/item.css">
<style>
#n1{
    transition: 0.2s ease;
    
    position: relative;
    
}
#cart-items1 {
  
  width: 40%;
  margin: auto;
  margin-top: 200px;
  border: 1px solid #ccc;
  
}

#cart-items1 p {
  margin: 0;
}

#total-price1 {
  font-weight: bold;
  text-align: center;

}

#msg1 {
  font-weight: bold;
  padding-left: 20px;
  margin: auto;
  margin-top: 20px;
  width: 200px;
  
}





@media screen and (max-width: 700px){
    #logo{
  display: none;
}
}

</style>

</head>
<div id="logo">
      <div id="search">
      <p style="font-size: 12;" id="re" ><i class="fa-solid fa-magnifying-glass"></i>Start searching</p>
      </div>
      <h3 id="lug" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"
           style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: wheat;">Bronx </span>Luggage</h3>
  
         
          
        
         <a href="dashboard.php"><img src="../includes/dp/<?=$pic?>" alt="" style="border: 1px solid gold; position: absolute; margin-left: 200px; margin-top: 5px; border-radius: 100px; width: 40px; height: 40px;"></a>
      </div>

