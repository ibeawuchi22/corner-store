<?php
require_once('connection.php');
session_start();
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM dealer WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_assoc($result);
    $username = $rows['username'];
    $phone = $rows['phone'];
    $email = $rows['email'];
    $pic = $rows['img'];

   
}else{
    $error = 'Unauthorised Access';
    header('Location: ../CornerLuggage/dealerlogin.php?error='.$error);
   
    return false; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dealer Dashboard - CornerStore</title>
    <link href="../CornerLuggage/img/cornericon.png" rel="icon">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    
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

#account{
padding-top: 300px;
/* border: 2px solid black; */
margin-bottom: -180px;
}

#sold{
padding-top: 300px;
margin-left: 100px;
}
#avail{
padding-top: 300px;
margin-left: 100px;
}
         #products {
    
    /* background-color: #a3a1a1; */
     position: relative;
     /* border: 3px solid black; */
     width: 900px;
     display: flex;
     flex-wrap: wrap;
     justify-content: space-evenly;
     margin-bottom: -180px;
   }

   #amount{
     
    /* border: 3px solid black;  */
    position: absolute;  
    top: 240px; 
    left: 22px;
   }
        .product {
        box-shadow: 0px 0px 10px rgb(202, 201, 200);
        margin: 20px auto;
        text-align: center;
        width: fit-content;
        border-radius: 10px;
        position: relative;
        transition: 1s;
      }
      .product img{
        background-size: contain;
        border-radius: 10px;  
        width: 230px;
        height: 200px;
      }
 .product #p{
  position: relative;
  /* border: 3px solid black; */
  font-size: 20;
  bottom: 20px;
 }

 .greet{
            display: none;
            position: relative;
            top: 100px;
            left: 20px;
            width: fit-content;
            /* border: 3px solid black; */
        }
 .reg{
        margin: auto;
        position: relative;
        top: 230px;
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

        .greet{
            display: block;
        }
        #products{
            flex-direction: column;
           margin: auto;
            width: fit-content;
           
        }
    #holdfoot{
  flex-direction: column;
}

#nav{
    
    display: block;
    position: fixed;
    /* border: 3px solid black; */
  
}
#head{
    display: none;
}

#account{
    padding-top: 130px;
}
#sold{
padding-top: 130px;
}
#avail{
padding-top: 130px;
}
#holdfoot{
  flex-direction: column;
}
.reg{
    width: 100%;
  top: 90px;
}

#amount{
    top: 100px;
    left: 212px; 
}
  }
    </style>
</head>
<body>
<header class="bg-dark" id="head" style="position: fixed; width:100%; z-index: 1;">
    <h4 style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align: left; position:absolute; top: 40px; left: 40px; color: wheat;"><img src="./img/cornericon.png" alt="CornerStore logo"  style="width: 50px; border-radius: 10px; opacity: 0.9;">CornerStore</h4>
        <!-- Display user's name and profile picture -->
        <h3  style="color: gold;  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Hi <?=$username?>!</h3>
        <img src="../includes/dealerdp/<?=$pic?>" alt="Profile Picture" style="height:50px; width: 50px; border: 1px solid gold;">
        <nav>
        <!-- Quick access links to dashboard sections -->
        <ul>
            <li><a href="post.php">Post Item</a></li>
            <li><a href="dealerdash.php">My Profile</a></li>
            <li><a href="dealeredit.php">Edit Profile</a></li>
            <!-- <li><a href="#settings">Settings</a></li> -->
            <li><a href="../includes/logout1.php">Logout</a></li>

        </ul>
    </nav>
    </header>
    <nav id="nav">
    <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/cornericon.png" alt="CornerStore logo"
        style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Corner</span>Store<span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
        <div id="dropdown" class="dropdown" style="position: absolute;">
        <a href="post.php">Post Item</a>
        <a href="dealerdash.php">My Profile</a>
        <a href="dealeredit.php">Edit Profile</a>
            <a href="../includes/logout1.php">Logout</a>
        </div>
      
        <img src="../includes/dealerdp/<?=$pic?>" alt="Profile Picture" style="height: 30px; width: 30px; position: absolute; left: 320px; top: 6px;">   
</nav>

