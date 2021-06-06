<?php
 include "config.php";
session_start();

 if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

 $query = mysqli_query($connection, "SELECT * FROM users WHERE email ='$email'");
 
 $count = mysqli_num_rows($query);
 
 $row = mysqli_fetch_array($query);

 if(!$count = ""){

    $_SESSION['user_id'] =  $row['user_id'];
     header('location: profile.php' );

 }

 }



?>