<?php
session_start();
$_SESSION;
include "connection.php";
include "function.php";
// echo "Log in.";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        // $user_id = rand(1,100);
        $query = "select * from users where user_name = '$user_name' ";

        $res = mysqli_query($con, $query);

        if ($res && (mysqli_num_rows($res) > 0)) {
            $user_data = mysqli_fetch_assoc($res);
            if ($user_data['password'] === $password && $user_data['user_name'] === $user_name) {
                $_SESSION['user_id'] = $user_data['user_id'];
                echo "Log in Successful";
                header("Location: index.php");
                die;
            } else {
                echo "Wrong Information, please try again.";
            }
        }

    } else {
        echo "please enter valid information!";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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
  <button type="submit" class="btn btn-primary btn-block mb-4">Log in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="signup.php">Sign Up</a></p>
  </div>
</form>

</body>
</html>
