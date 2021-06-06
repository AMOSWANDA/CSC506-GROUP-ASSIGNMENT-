<?php 
session_start();
include "config.php";
?>
<link rel="stylesheet" href="profile.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous"></script>
 <?php
if(isset( $_SESSION['user_id'])){

$id = $_SESSION['user_id'];
  $query = mysqli_query($connection, "SELECT *  FROM users  WHERE user_id='$id'");
  $row = mysqli_fetch_array($query);
?>
<?php
?> 
              <from action = "upload.php"method="POST" enctype="multipart/from-data">
              <input type="File"name="File"><br><br>
              <input type="submit" vaule="submit">
              </form?
<div class="charles">

<form action="update_user.php" method="POST" id="profile-form">
<div class="form-group">
<label for="fname">Firstname</label>
<input type="text" name="fname" value="<?php echo $row['first_name']; ?>">
</div>
<div class="form-group">
<label for="lname">Last Name</label>
<input type="text" name="lname" value="<?php echo $row['last_name']; ?>"> 
</div>

<div class="form-group">
<label for="username">Username</label>
<input type="text" name="username" value="<?php echo $row['username']; ?>">
</div>
<div class="form-group">
<label for="">Email</label>
<input type="email" name="email" value="<?php echo $row['email']; ?>">
</div>
<div class="form-group">
<label for="">Phone Number</label>
<input type="number" name="phone_number" value="<?php echo $row['phone_number']; ?>"> <br />
</div>
<input type="submit" name="submit" value="Update" >
</form>

</div>
<?php } ?>