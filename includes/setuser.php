<?php
require_once('connection.php');
if(isset($_POST['submit'])){
  $username = isset($_POST['username']) ? $_POST['username'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $userid = $_POST['userid'];
  $img = $_POST['img'];

  if($email == "" || $username == "" || $phone == "" ){
    $error = 'All fields are required';
    header('Location: ../CornerLuggage/useredit.php?error='.$error);
    return false;
  }

  $email = sanitize($connect, $email);
  $username = sanitize($connect, $username);
  $phone = sanitize($connect, $phone);


 


// if a user uploaded a picture
  if($_FILES['file']['name'] != ''){
    $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
    $filename = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $filesize = $_FILES['file']['size'];
    $fileext = explode('.', $filename);
    $fileActualext = strtolower(end($fileext));

    if($filesize < 3000000){
        if(in_array($fileActualext, $allow)){
            $pic = uniqid('', true).'.'.$fileActualext;
            $Location = 'dp/'.$pic;
            
            if(move_uploaded_file($fileTmp, $Location)){
              
                $sql = "UPDATE `user` SET `name` = '$username', `phone` = '$phone', `email` = '$email', `img` = '$pic' WHERE id = '$userid' ";
                $result = mysqli_query($connect, $sql);
                if($result){
                    unlink('dp/'.$img);
                    $success = 'Profile updated';
                    header('Location: ../CornerLuggage/useredit.php?success='.$success);
                    return false;
                }else{
                    $error = 'error updating account';
                    header('Location: ../CornerLuggage/useredit.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'error uploading file';
                header('Location: ../CornerLuggage/useredit.php?error='.$error);
                return false;
            }
        }else{
            $error = 'upload pictures only';
            header('Location: ../CornerLuggage/useredit.php?error='.$error);
            return false;
        }
    }else{
        $error = 'file upload is too large';
        header('Location: ../CornerLuggage/useredit.php?error='.$error);
        return false;
    }
  }else{  // if user did not update image
    $sql = "UPDATE `user` SET `name` = '$username', `phone` = '$phone', `email` = '$email' WHERE id = '$userid' ";
   $result = mysqli_query($connect, $sql);
   if($result){
       $success = 'Profile updated';
       header('Location: ../CornerLuggage/useredit.php?success='.$success);
       return false;
   }else{
       $error = 'error updating account';
       header('Location: ../CornerLuggage/useredit.php?error='.$error);
       return false;
   }
  }
}else{
    $error = 'Unauthorised Access';
    header('Location: ../index.php?error='.$error);
    return false;
}




?>