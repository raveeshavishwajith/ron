<?php
    $hostname = 'localhost';
    $username = 'ron';
    $password = 'ReachOutNow@123';
    $database = 'ron';

    $con = mysqli_connect($hostname,$username,$password,$database);

    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }
?>