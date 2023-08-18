<?php
require_once('connection.php');
if(isset($_POST['submit'])){
    $brand = isset($_POST['brand']) ? $_POST['brand'] : '';
    $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
    $casing = isset($_POST['casing']) ? $_POST['casing'] : '';
    $color = isset($_POST['color']) ? $_POST['color'] : '';
    $designer = isset($_POST['designer']) ? $_POST['designer'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $dealerid = isset($_POST['dealerid']) ? $_POST['dealerid'] : '';



    if($brand == "" || $sex == "" || $casing == "" || $color == "" || $designer == "" || $desc == "" || $price == ""){
        $error = 'All fields are required';
        header('Location: ../BronxLuggage/post.php?error='.$error);
        return false;
    }

    $brand = sanitize($connect, $brand);
    $sex = sanitize($connect, $sex);
    $casing = sanitize($connect, $casing);
    $color = sanitize($connect, $color);
    $designer = sanitize($connect, $designer);
    $desc = sanitize($connect, $desc);
    $price = sanitize($connect, $price);
    $today = date('Y-m-d');

    if(isset($_FILES['file'])){
        $allow = array('png', 'jpeg', 'jpg', 'gif', 'heic');
        $filename = $_FILES['file']['name'];
        $fileTmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $fileext = explode('.', $filename);
        $fileActualext = strtolower(end($fileext));
    
        if($filesize < 3000000){
           
            if(in_array($fileActualext, $allow)){
                $pic = uniqid('', true).'.'.$fileActualext;
                $Location = 'post/'.$pic;
                

          
               
            if(move_uploaded_file($fileTmp, $Location)){
                    $password = md5($password);
                    $sql = "INSERT INTO items(dealerid, brand, sex, casing, color, designer, description, img, createddate, price)
                    VALUES('$dealerid', '$brand', '$sex', '$casing', '$color', '$designer', '$desc', '$pic', '$today', '$price')";
                    $result = mysqli_query($connect, $sql);

                    if($result){
                        $success = 'Post created successful';
                        header('Location: ../BronxLuggage/post.php?success='.$success);
                        return false;
                    }else{
                        $error = 'error creating post';
                        header('Location: ../BronxLuggage/post.php?error='.$error);
                        return false;
                    }
                }else{
                    $error = 'error uploading file';
                    header('Location: ../BronxLuggage/post.php?error='.$error);
                    return false;
                }
            }else{
                $error = 'upload pictures only';
                header('Location: ../BronxLuggage/post.php?error='.$error);
                return false;
            }
        }else{
            $error = 'file upload is too large';
            header('Location: ../BronxLuggage/post.php?error='.$error);
            return false;
        }
      }
        
    
    

}else{
    $error = 'Unauthorised Access';
    header('Location: ../BronxLuggage/post.php?error='.$error);
   
    return false; 
}





?>