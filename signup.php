<?php
session_start();
include "connection.php";
include "function.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        $user_id = rand(1, 100);
        $query = "insert into users(user_id, user_name, password) values('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        // redirect to login after a successful signin
        header("Location: login.php");
        die;

    } else {
        echo "please enter valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
</head>
<body>

<form method="post">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" name="user_name" class="form-control" />
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="password" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

  <!-- Register buttons -->
  <div class="text-center">
    <a href="login.php">Log in</a>
  </div>
</form>

</body>
</html>
