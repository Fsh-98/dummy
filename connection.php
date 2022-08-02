<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!($con)) {
    // commit to check
    // message for connection error
    die("Connection error!");
    
}
