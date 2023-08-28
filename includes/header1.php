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
    header('Location: ../CornerLuggage/login.php?error='.$error);
   
    return false; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - CornerStore</title>
    <link href="../CornerLuggage/img/cornericon.png" rel="icon">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">

    <style>
                  #nav{
      display: none;
      position: fixed;
      background-color: white;
      width: 100%;
      z-index: 1;
      /* margin-top: 0px; */
  }
  .dropdown {
    display: none;
    position: fixed;
    background-color: #fffefe;
    
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-left: 100px;
    transition: all 0.3s ease; /* Add transition effect */
    transform-origin: top;
    opacity: 0;
}

.dropdown a {
    color: rgb(6, 6, 6);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.dropdown a:hover {
    background-color: #f1f1f1;
}

.dropdown.show {
    opacity: 1;
    transform: translateY(10px); /* Adjust the value based on your preference */
}

.toggle{
  margin-left: 80px;
  cursor: pointer;
}

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

.content2{
  position: relative;
  top: -140px;
  margin: auto;
  margin-bottom: -370px;
  width: 90%;
  height: 900px;
  display: none;
  overflow: auto;
}
.content2 div {
margin-bottom: 100px;
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
#head{
  display: none;
}
.content{
  display: none;
}
.content2{
  display: block;
}
#nav{
    
    display: block;
    position: fixed;
    /* border: 3px solid black; */
  
}
#hold{
  display: none;
}
.reg{
  width: 90%;
 /* border: 2px solid blue; */


}
#sign, #contact, #acc, #buy, #info{
  margin-bottom: 20px;
}
#sign{
  margin-left: 30px;
}
footer{
  margin-bottom: 0px;
}
  }
    </style>
</head>
<body>
<nav id="nav">
    <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/cornericon.png" alt="CornerStore logo"
        style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Corner</span>Store<span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
        <div id="dropdown" class="dropdown" style="position: absolute;">
      
       <a href="../includes/logout.php">Log out</a>
       <a href="dashboard.php">Dashboard</a>
        </div>
      
        <img src="../includes/dp/<?=$pic?>" alt="Profile Picture" style="height: 30px; width: 30px; position: absolute; left: 320px; top: 11px;"> 
        <a href="luggageapp.php" id="goto"><p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; position: absolute; right: 200px; top: 60px;  color: black;">Go to store   <i class="fa-sharp fa-solid fa-door-open"></i></p></a>  
</nav>