<?php
 
  
 session_start();

 require_once('connection.php');
 if(isset($_POST['login'])){

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
   

    if( $username == "" || $password == "" ){
        $error = 'All fields are required';
        header('Location: ../BronxLuggage/dealerlogin.php?error='.$error);
        return false;
      }


      $username = sanitize($connect, $username);
      $password = sanitize($connect, $password);


      
    $password = md5($password);
    $sql = "SELECT * FROM dealer WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($connect, $sql);
    if(mysqli_num_rows($res) > 0){
    $rows = mysqli_fetch_assoc($res);
    $_SESSION['id'] = $rows['id'];
    $_SESSION['username'] = $rows['username'];
    header('Location: ../BronxLuggage/dealerdash.php');
    
    }else{
    $error = 'User does not exist';
    header('Location: ../BronxLuggage/dealerlogin.php?error='.$error);
    return false;
    }

 }else{
    $error = 'Unauthorised Access';
    header('Location: ../BronxLuggage/dealerlogin.php?error='.$error);
   
    return false; 
}
 
 
 ?>