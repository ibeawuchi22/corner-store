<?php require_once('../includes/header1.php');?>
    <header style="position: fixed; width:100%; z-index: 1;">
  <a href="luggageapp.php" id="goto"><p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; position: absolute; right: 300px; top: 40px;">Go to store   <i class="fa-sharp fa-solid fa-door-open"></i></p></a>
        <!-- Display user's name and profile picture -->
         <h1 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; text-align: left; position: absolute; top: 40px; left: 70px; color: wheat;"><img src="./img/WhatsApp Image 2023-06-22 at 13.52.40.jpg" alt="bronx logo"  style="width: 50px; border-radius: 10px; opacity: 0.9; position: absolute; margin-left: -50px; margin-top: 0px;">Bronx</h1>
        <h3 style="color: gold; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Hi <?=$name?>!</h3>
        <img src="../includes/dp/<?=$pic?>" alt="Profile Picture" style="width: 103px; height: 90px; border: 1px solid gold;">
        <nav>
        <!-- Quick access links to dashboard sections -->
        <ul id="buttons">
            <li><a onclick="showContent('overview')" id="btn-overview" class="active">Overview</a></li>
            <li><a onclick="showContent('account')" id="btn-account">Profile</a></li>
            <li><a onclick="showContent('orders')" id="btn-orders">Order History</a></li>
            <li><a onclick="showContent('settings')" id="btn-settings">Settings</a></li>
            <li><a href="../includes/logout.php">Logout</a></li>

        </ul>
    </nav>
    </header>

 <div id="content" class="content" style="padding-top: 250px;">

 <div id="overview-content" class="show" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
      
          <!-- Display summary of recent activities -->
          <h2>Recent Activities</h2>
        <!-- Placeholder content -->
        <?php
          $sql2 = "SELECT * FROM sold_items  WHERE userid = '$uid'";
              $res2 = mysqli_query($connect, $sql2);
              ?>
              <?php
          $sql3 = "SELECT * FROM cart  WHERE userid = '$uid'";
              $res3 = mysqli_query($connect, $sql3);
              ?> 
        <p>Recent orders: (<?=mysqli_num_rows($res2)?>)</p>
        <p>Cart items: (<?=mysqli_num_rows($res3)?>)</p>
      
</div>

    <div id="account-content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <!-- Display user's personal information -->
        <h2>My Profile</h2>
        <!-- Placeholder content -->
        <p>Name: <?=$name?></p>
        <p>Email: <?=$email?></p>
        <p>Phone: <?=$phone?></p>
        <a href="useredit.php" class="btn btn-success">Edit Profile</a>
        <!-- Add more account information fields here -->
</div>

    <div id="orders-content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <!-- Display a table of past orders -->
        <h2>Order History</h2>
        <!-- Placeholder content -->
        <table>
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123456789</td>
                    <td>2023-07-12</td>
                    <td>Shipped</td>
                </tr>
                <!-- Add more order rows here -->
            </tbody>
        </table>
</div>

 

    <div id="settings-content" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
        <!-- Display user settings and preferences -->
        <h2>Settings</h2>
        <!-- Placeholder content -->
        <p>Email Notifications: ON</p>
        <p>Language: English</p>
        <!-- Add more settings options here -->
</div>
 </div>

 <?php require_once('../includes/footer.php');?>
 

</body>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
       function showContent(contentId) {
            const contentDivs = document.getElementsByClassName("content")[0].getElementsByTagName("div");
            const buttons = document.getElementById("buttons").getElementsByTagName("a");

            for (let i = 0; i < contentDivs.length; i++) {
                contentDivs[i].classList.remove("show");
            }

            for (let i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }

            const selectedContent = document.getElementById(contentId + "-content");
            const selectedButton = document.getElementById("btn-" + contentId);
            
            if (selectedContent) {
                selectedContent.classList.add("show");
            }
            
            if (selectedButton) {
                selectedButton.classList.add("active");
            }
        }
</script>
</html>
