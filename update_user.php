<?php
session_start();
include "config.php";

if(isset($_POST['submit'])){
$id = $_SESSION['user_id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

$query = mysqli_query($connection, "UPDATE users SET first_name ='$fname', last_name ='$lname', username= '$username', email ='$email', phone_number='$phone_number', address ='$address' WHERE user_id='$id'");
if ($query){
    header('Location: profile.php');
    reload
}
}
?>