<?php
require_once('connection.php');
if(isset($_POST['submit'])){
  $dealername = isset($_POST['username']) ? $_POST['username'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $dealerid = $_POST['dealerid'];
  $img = $_POST['img'];

  if($email == "" || $dealername == "" || $phone == "" ){
    $error = 'All fields are required';
    header('Location: ../CornerLuggage/dealeredit.php?error='.$error);
    return false;
  }

  $email = sanitize($connect, $email);
  $dealername = sanitize($connect, $dealername);
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
            $Location = 'dealerdp/'.$pic;
            
            if(move_uploaded_file($fileTmp, $Location)){
              
                $sql = "UPDATE `dealer` SET `username` = '$dealername', `phone` = '$phone', `email` = '$email', `img` = '$pic' WHERE id = '$dealerid' ";
                $result = mysqli_query($connect, $sql);
                if($result){
                    unlink('dealerdp/'.$img);
                    $success = 'Profile updated';
                    header('Location: ../CornerLuggage/dealeredit.php?success='.$success);
                    return false;
                }else{
                    $error = 'error updating account';
                    header('Location: ../CornerLuggage/dealeredit.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'error uploading file';
                header('Location: ../CornerLuggage/dealeredit.php?error='.$error);
                return false;
            }
        }else{
            $error = 'upload pictures only';
            header('Location: ../CornerLuggage/dealeredit.php?error='.$error);
            return false;
        }
    }else{
        $error = 'file upload is too large';
        header('Location: ../CornerLuggage/dealeredit.php?error='.$error);
        return false;
    }
  }else{  // if user did not update image
    $sql = "UPDATE `dealer` SET `username` = '$dealername', `phone` = '$phone', `email` = '$email' WHERE id = '$dealerid' ";
   $result = mysqli_query($connect, $sql);
   if($result){
       $success = 'Profile updated';
       header('Location: ../CornerLuggage/dealeredit.php?success='.$success);
       return false;
   }else{
       $error = 'error updating account';
       header('Location: ../CornerLuggage/dealeredit.php?error='.$error);
       return false;
   }
  }
}else{
    $error = 'Unauthorised Access';
    header('Location: ../index.php?error='.$error);
    return false;
}




?>