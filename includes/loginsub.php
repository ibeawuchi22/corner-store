 <?php
 
  
 session_start();

 require_once('connection.php');
 if(isset($_POST['login'])){

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
   

    if( $email == "" || $password == "" ){
        $error = 'All fields are required';
        header('Location: ../CornerLuggage/login.php?error='.$error);
        return false;
      }


      $email = sanitize($connect, $email);
      $password = sanitize($connect, $password);


      
    $password = md5($password);
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($connect, $sql);
    if(mysqli_num_rows($res) > 0){
    $rows = mysqli_fetch_assoc($res);
    $_SESSION['id'] = $rows['id'];
    $_SESSION['email'] = $rows['email'];
    header('Location: ../CornerLuggage/dashboard.php');
    
    }else{
    $error = 'User does not exist';
    header('Location: ../CornerLuggage/login.php?error='.$error);
    return false;
    }

 }else{
    $error = 'Unauthorised Access';
    header('Location: ../CornerLuggage/login.php?error='.$error);
   
    return false; 
}
 
 
 ?>