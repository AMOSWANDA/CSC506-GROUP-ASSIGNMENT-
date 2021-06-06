<?php

include "config.php";

if(isset($_POST['submit'])){
    
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

    $query = mysqli_query($connection, "INSERT INTO users (first_name, last_name, username, password, email, phone_number, address)
     VALUES ('$fname', '$lname', '$username', '$password', '$email', '$phone_number', '$address')");


     if($query){

         header('location: login.php');
     }
}

?>