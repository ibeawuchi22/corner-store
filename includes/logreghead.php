<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="./img/cornericon.png" rel="icon" style="border-radius: 60px;">
    <title>Login/Register</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./fontawesome-free-6.3.0-web/css/all.min.css">
    <style>

        #back{
            transform: rotate(90deg);
        }
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
.reg{
        margin: auto;
        position: relative;
        top: 100px;
        border: none;
        /* box-shadow:  0px 0px 3px rgb(255, 255, 255); */
        height: fit-content;
        padding: 30px;
        padding-bottom: 20px;
        width: 40%;
        border-radius: 10px;
        background-color: rgba(0,0,0,0.7);
      }
      .log{
         
         margin: auto;
         position: relative;
         top: 100px;
         border: none;
         /* box-shadow:  0px 0px 5px rgb(255, 255, 255); */
         height: fit-content;
         padding: 30px;
         padding-bottom: 20px;
         width: 40%;
         border-radius: 10px;
         background-color: rgba(0,0,0,0.7);
         animation: warp 2s ease;
       }
       .email, .user, .password, .confirm{
        width: 100%;
        margin-bottom: 20px;
        /* border: 1px solid rgb(222, 222, 222); */
        height: 50px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background: black;
        color: gold;
       
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
        margin-bottom: 20px;
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
        padding-bottom: 30px;
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
    color: gold;
    /* border: 3px solid black; */
  }

body{
    background-image: linear-gradient(rgba(23, 22, 22, 0.7), rgba(23, 23, 22, 0.7)),url(./img/eduardo-casajus-gorostiaga-kevb79KpHls-unsplash.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

@keyframes warp {
  from{
    width: 0px;

  }
  to{
    width: 40%;
  
  }
}
  @media screen and (max-width: 700px){
    #holdfoot{
        flex-direction: column;
    }
    #n1{
        display: none;
    }
    #nav{
    
    display: block;
    position: fixed;
    /* width: fit-content; */
    /* border: 3px solid black; */
  
}
.log{
    width: 90%;
    animation: none;
}
.reg{
    width: 90%; 
    
}
#back{
    display: none;
}

@keyframes warp1 {
  from{
    width: 0px;

  }
  to{
    width: 90%;
  
  }
}
  }
    </style>
</head>

<body onload="myFunction()" id="myPage" style="">
<iframe id="loader" src="./loader/loader2.php" style="display: block; border: none; width: 100%; height: 100vh;"></iframe>
    <div id="n1" >
        <nav class="navbar bg-warning"  style="height: 70px;">
            <ul>
                <li><a href="index.php" id="home" >Home</a></li>
                <li class="dropdown1">
                  <a href="luggageapp.php">Luggage &#9662;</a>
                  <div class="dropdown-content">
                    <a href="./pages/male.php">Male</a>
                    <a href="./pages/female.php">Female</a>
                    <a href="./pages/kid.php">Kids</a>
                  </div>
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
        </nav>
        
    </div>
    <nav id="nav">
        <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><img src="./img/cornericon.png" alt="CornerStore logo"
            style="width: 50px; border-radius: 10px; opacity: 0.9;"><span style="color: rgb(172, 73, 73);">Corner</span>Store<span class="toggle"><i class="fa-solid fa-bars"></i></span> </h3>
            <div id="dropdown" class="dropdown" style="position: absolute;">
                <a href="index.php">Home</a>
                <a href="luggageapp.php">Luggage</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
               
            </div>
          
    </nav>