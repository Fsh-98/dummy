<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!($con)) {
    // commit to check
    die("Connection error!");
    
}
