<?php


$connection = mysqli_connect('localhost', 'web_app', 'web_app', 'web_application_db');

if ($connection == false){

    die(mysqli_connect_error());
}
