<?php

require_once('connection.php');
if(isset($_POST['add'])){
    $userid = $_POST['userid'];
    $dealerid = $_POST['dealerid'];
    $bagid = $_POST['bagid'];
    $brand = $_POST['brand'];
    $sex = $_POST['sex'];
    $color = $_POST['color'];
    $designer = $_POST['designer'];
    $price = $_POST['price'];
    $img = $_POST['img'];



    $sql = "INSERT INTO cart (userid, dealerid, bagid, brand, sex, color, designer, price, img) VALUES 
('$userid', '$dealerid', '$bagid', '$brand', '$sex', '$color', '$designer', '$price', '$img')";

$result = mysqli_query($connect, $sql);

if($result){
    $success = 'Item added to cart';
    header('Location: ../BronxLuggage/luggageapp.php?success='.$success);
    return false;
}else{
    $error = 'Error adding item to cart';
    header('Location: ../BronxLuggage/luggageapp.php?error='.$error);
    return false;
}
}else{
    
    header('Location: ../');
    return false;
}




?>


