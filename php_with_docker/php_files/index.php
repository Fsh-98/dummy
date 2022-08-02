<?php
$dbhost = "db";
$dbuser = "user";
$dbpass = "demo";
$dbname = "demo_db";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_error) {
    // commit to check
    echo "Connection failed.".$con->connect_error; 
}else{
    echo "Connection sucessful.";
}

?>
