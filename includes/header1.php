<?php
require_once('connection.php');
session_start();
if(isset($_SESSION['id'])){
    $uid = $_SESSION['id'];
    $sql = "SELECT * FROM user WHERE id = '$uid'";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_assoc($result);
    $name = $rows['name'];
    $phone = $rows['phone'];
    $email = $rows['email'];
    $pic = $rows['img'];

   
}else{
    $error = 'Unauthorised Access';
    header('Location: ../BronxLuggage/login.php?error='.$error);
   
    return false; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Bronx</title>
    <link href="../BronxLuggage/img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" rel="icon">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
#goto{
    color: white;
}

        #goto:hover{
            color: gold;
        }

        .content {
  margin-left: 40px;
  width: 90%;
  height: 300px;
  
  
}

.content div {
  display: none;
}

.content div.show {
  display: block;
}

.active {
  background-color: gold;
  color: black;
  padding: 10px; 
}
nav {
    background-color: brown;
    padding: 10px;
  }
nav li a{
    cursor: pointer;
}
nav li a:hover{
    color: black;
    cursor: pointer;
}


.reg{
        margin: auto;
        position: relative;
        top: 50px;
        border: none;
        box-shadow:  0px 0px 7px grey;
        height: fit-content;
        padding: 30px;
        padding-bottom: 20px;
        width: 40%;
        border-radius: 10px;
      }
      .email, .user, .password, select, .confirm{
        width: 100%;
        margin-bottom: 20px;
        border: 1px solid rgb(222, 222, 222);
        height: 50px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
       
      }
      textarea{
        width: 100%;
        margin-bottom: 20px;
        border: 1px solid rgb(222, 222, 222); 
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        height: 100px;
      }
      #email:focus{
        outline: none;
      }
      #search:focus{
        outline: none;
      }
      .email, .user, .password, .confirm:focus{
        outline: none;
      }
      label{
        margin-bottom: 10px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }
      input[type = 'checkbox']{
        width: fit-content;
        margin-right: 3px;
        height: fit-content;
      }
      input[type = 'submit']{
        width: fit-content;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-radius: 0;
      }
      input[type = 'button']{
        width: fit-content;
      }
      button[type = 'submit']{
        width: fit-content;
       
        /* border   : 2px solid white; */
      }
      
  .password-wrapper {
    position: relative;
    /* border: 2px solid black; */
    
  }
   
  /* .password-input {
    padding-right: 40px;
  } */
  
  .password-toggle {
    position: absolute;
    top: 38%;
    right: 10px;
    transform: translateY(-50%);
    cursor: pointer;
    /* border: 3px solid black; */
  }

  input[type = 'file']{
      padding-top: 10px;
      }

footer{
    
    background-color: rgb(21, 21, 21);
    /* border: 4px solid green; */
   margin-top: 240px;
    padding-top: 40px;
    padding-bottom: 20px;
  }
  
  /* html{
     border: 3px solid blue; 
    height: fit-content;
    background-color: rgb(10, 12, 21);
  } */
  #holdfoot{
    display: flex;
    justify-content: space-evenly;
    margin-bottom: 0;
    
  }
  
  #holdfoot ul {
    margin-bottom: 0;
  
  }
  #sign td > input{
    background-color:  rgb(21, 21, 21);
    color: #fff;
  } 
  
  #sign td > input:focus{
  outline: none;
  } 
  #sign td > #suh{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-top: 10px;
    border-radius: 5px;
    padding: 5px;
    color: #000000;
    font-size: 20;
    background-color:  rgb(123, 122, 122);
  } 
  #sign p, #contact p, #acc p, #buy p, #info p{
    color: white;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   
  }
  
  #info li a, #buy li a, #acc li a, #contact li a{
    color: white;
    text-decoration: none;
    font-size: small;
    
  }
  #info li a:hover, #buy li a:hover, #acc li a:hover, #contact li a:hover{
    color: rgb(188, 39, 39);
  }
  #info ul, #buy ul, #acc ul, #contact ul{
    list-style-type: none;
  }
  @media screen and (max-width: 700px){
    #holdfoot{
  flex-direction: column;
}
  }
    </style>
</head>
<body>