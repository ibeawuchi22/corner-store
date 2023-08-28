<?php
require_once('connection.php');
if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $summary = isset($_POST['summary']) ? $_POST['summary'] : '';
    $review = isset($_POST['review']) ? $_POST['review'] : '';
    $img = $_POST['img'];
    $uid = $_POST['uid'];
    $bid = $_POST['bid'];


    if($name == "" || $summary == "" || $review == ""){
        $error = 'All fields are required';
        header('Location: ../CornerLuggage/pages/case1.php?error='.$error);
        return false;
    }

    $name = sanitize($connect, $name);
    $summary = sanitize($connect, $summary);
    $review = sanitize($connect, $review);
    $today = date('Y-m-d');

    $sql = "INSERT INTO reviews(userid, bagid, name, summary, review, img, createddate)
    VALUES('$uid', '$bid', '$name', '$summary', '$review', '$img', '$today')";
    $result = mysqli_query($connect, $sql);

    if($result){
        $success = 'review sent successfully';
        header('Location: ../CornerLuggage/pages/case1.php?success='.$success.'&bid='.$bid);
        exit();
    }else{
        $error = 'error sending review';
        header('Location: ../CornerLuggage/pages/case1.php?error='.$error.'&bid='.$bid);
        exit();
    }
    
    

}





?>