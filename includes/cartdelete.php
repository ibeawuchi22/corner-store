<?php
require_once('connection.php');

if(isset($_GET['cid'])){
    $cid = $_GET['cid'];
 
    $sql = "DELETE FROM cart WHERE id = '$cid'";
    $res = mysqli_query($connect, $sql);
    if($res){
        $success = 'Item Removed';
        header('Location: ../BronxLuggage/cart.php?success=' . $success);
        return false;
    }else{
        $error = 'Error deleting item';
        header('Location: ../BronxLuggage/cart.php?error=' . $error);
        return false;
    }
}else{
    header('Location: ../');
    return false;

}

?>