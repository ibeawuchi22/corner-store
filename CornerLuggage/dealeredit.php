<?php require_once('../includes/header2.php');?>

<div class="reg" style="">
<form action="../includes/setdealer.php" method="POST" enctype="multipart/form-data" >
<?php if(isset($_GET['error'])){ ?>
<div class="alert   alert-warning  alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['error']?></p>
</div>
<?php } else if(isset($_GET['success'])){ ?>
<div class="alert alert-success alert-dismissible">
<button class="btn-close" data-bs-dismiss="alert"></button>
<p><?php echo $_GET['success']?></p>
</div>
<?php } ?>
<h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Edit Profile</h3>
<p>Fill the form to Edit Your profile</p>

<label for="email">Email Address <span style="color:red;">*</span></label><br>
<input type="hidden" name="dealername" value="<?=$username?>" required id="">
<input type="hidden" name="dealerid" value="<?=$id?>" id="">
<input type="hidden" name="img" value="<?=$pic?>" id="">
<input type="email" id="email" class="email" name="email" placeholder="<?=$email?>" required><br>
<label for="user" >Username <span style="color:red;">*</span></label><br>
<input type="text" id="user" class="user" name="username" placeholder="<?=$username?>" required><br>
<label for="phone" >Phone <span style="color:red;">*</span></label><br>
<input type="text" id="" class="user" name="phone" placeholder="<?=$phone?>" required><br>

<label for="pic" >Upload pic <span style="color:red;">*</span></label><br>
<input type="file" id="" class="user" name="file" ><br>
<input type="submit" class="btn btn-primary" name="submit" value="Post" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
</form>
        </div>
        <?php require_once('../includes/footer.php');?>

</body>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>

</html>