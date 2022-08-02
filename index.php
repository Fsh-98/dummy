<?php
session_start();
include "connection.php";
include "function.php";

$user_date = check_login($con);

// echo "Welcome {$user_date['user_name']}";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>
</head>
<body>
    <h1> <?php echo "Welcome {$user_date['user_name']}"; ?> </h1>
    <a href="logout.php">Log out</a>

</body>
</html>