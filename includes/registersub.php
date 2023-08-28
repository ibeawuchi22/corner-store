<?php
require_once('connection.php');
if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';


    if($name == "" || $phone == "" || $email == ""){
        $error = 'All fields are required';
        header('Location: ../CornerLuggage/register.php?error='.$error);
        return false;
    }

    $name = sanitize($connect, $name);
    $phone = sanitize($connect, $phone);
    $email = sanitize($connect, $email);
    $password = sanitize($connect, $password);
    $today = date('Y-m-d');

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($connect, $sql);
    if(mysqli_num_rows($res) > 0){
        $error = 'Email address already taken';
        header('Location: ../CornerLuggage/register.php?error='.$error);
        return false;
    }
    if(isset($_FILES['file'])){
        $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
        $filename = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $fileext = explode('.', $filename);
        $fileActualext = strtolower(end($fileext));
    
        if($filesize < 900000){
           
            if(in_array($fileActualext, $allow)){
                $pic = uniqid('', true).'.'.$fileActualext;
                $Location = 'dp/'.$pic;
                

          
               
            if(move_uploaded_file($fileTmp, $Location)){
                    $password = md5($password);
                    $sql = "INSERT INTO user(name, phone, email, password, img, createddate)
                    VALUES('$name', '$phone', '$email', '$password', '$pic', '$today')";
                    $result = mysqli_query($connect, $sql);

                    if($result){
                        $success = 'registration successful';
                        header('Location: ../CornerLuggage/login.php?success='.$success);
                        return false;
                    }else{
                        $error = 'error creating account';
                        header('Location: ../CornerLuggage/register.php?error='.$error);
                        return false;
                    }
                }else{
                    $error = 'error uploading file';
                    header('Location: ../CornerLuggage/register.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'upload pictures only';
                header('Location: ../CornerLuggage/register.php?error='.$error);
                return false;
            }
        }else{
            $error = 'file upload is too large';
            header('Location: ../CornerLuggage/register.php?error='.$error);
            return false;
        }
      }
        
    
    

}else{
    $error = 'Unauthorised Access';
    header('Location: ../CornerLuggage/register.php?error='.$error);
   
    return false; 
}





?>