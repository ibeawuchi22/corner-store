<?php
require_once('connection.php');
if(isset($_POST['submit'])){
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';


    if($username == "" || $phone == "" || $email == "" || $password == ""){
        $error = 'All fields are required';
        header('Location: ../BronxLuggage/dealerreg.php?error='.$error);
        return false;
    }

    $username = sanitize($connect, $username);
    $phone = sanitize($connect, $phone);
    $email = sanitize($connect, $email);
    $password = sanitize($connect, $password);
    $today = date('Y-m-d');

    $sql = "SELECT * FROM dealer WHERE email = '$email'";
    $res = mysqli_query($connect, $sql);
    if(mysqli_num_rows($res) > 0){
        $error = 'Email address already taken';
        header('Location: ../BronxLuggage/dealerreg.php?error='.$error);
        return false;
    }
    if(isset($_FILES['file'])){
        $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
        $filename = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $fileext = explode('.', $filename);
        $fileActualext = strtolower(end($fileext));
    
        if($filesize < 1900000){
           
            if(in_array($fileActualext, $allow)){
                $pic = uniqid('', true).'.'.$fileActualext;
                $Location = 'dealerdp/'.$pic;
                

          
               
            if(move_uploaded_file($fileTmp, $Location)){
                    $password = md5($password);
                    $sql = "INSERT INTO dealer(username, phone, email, password, img, createddate)
                    VALUES('$username', '$phone', '$email', '$password', '$pic', '$today')";
                    $result = mysqli_query($connect, $sql);

                    if($result){
                        $success = 'registration successful';
                        header('Location: ../BronxLuggage/dealerlogin.php?success='.$success);
                        return false;
                    }else{
                        $error = 'error creating account';
                        header('Location: ../BronxLuggage/dealerreg.php?error='.$error);
                        return false;
                    }
                }else{
                    $error = 'error uploading file';
                    header('Location: ../BronxLuggage/dealerreg.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'upload pictures only';
                header('Location: ../BronxLuggage/dealerreg.php?error='.$error);
                return false;
            }
        }else{
            $error = 'file upload is too large';
            header('Location: ../BronxLuggage/dealerreg.php?error='.$error);
            return false;
        }
      }
        
    
    

}else{
    $error = 'Unauthorised Access';
    header('Location: ../BronxLuggage/dealerreg.php?error='.$error);
   
    return false; 
}





?>