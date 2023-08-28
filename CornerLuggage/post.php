<?php require_once('../includes/header2.php');?>

<div class="reg" style="">
<form action="../includes/dpost.php" method="POST" enctype="multipart/form-data" >
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
<h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Upload Item</h3>
<p>Fill the form to post an item</p>
<label for="brand" >Brand *</label><br>
<select name="brand" id="" required>
    <option value="Suitcase">Suitcase</option>
    <option value="Backpack">Backpack</option>
    <option value="Duffel Bag">Duffel Bag</option>
</select><br>
<input type="hidden" name="dealerid" value="<?=$id?>">
<label for="sex" >Sex *</label><br>
<select name="sex" id="" required>
    <option value="male">male</option>
    <option value="female">female</option>
</select><br>
<label for="casing" >Casing *</label><br>
<select name="casing" id="" required>
    <option value="Hard">Hard</option>
    <option value="Soft">Soft</option>
</select><br>
<label for="color" >Color *</label><br>
<select name="color" id="" required>
    <option value="Red">Red</option>
    <option value="Black">Black</option>
    <option value="Blue">Blue</option>
</select><br>
<label for="designer" >Designer *</label><br>
<input type="text" id="" class="email" name="designer" placeholder="designer" required><br>
<label for="description" >Description *</label><br>
<textarea name="desc" id="" cols="30" rows="10" required></textarea><br>
<label for="pic" >Upload pic *</label><br>
<input type="file" id="" class="user" name="file" required><br>
<label for="price" >Price *</label><br>
<input type="number" id="" class="user" name="price" placeholder="price" required><br>
<input type="submit" class="btn btn-primary" name="submit" value="Post" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
</form>
        </div>
        <?php require_once('../includes/footer.php');?>

</body>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./js/script.js"></script>

</html>