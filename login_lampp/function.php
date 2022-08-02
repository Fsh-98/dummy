<?php
// functions for the daabase connection

function check_login($con)
{
    if (isset($_SESSION["user_id"])) {
        $id = $_SESSION["user_id"];

        $query = "select * from users where user_id = '$id'";

        $res = mysqli_query($con, $query);

        if ($res) {
            $user_data = mysqli_fetch_assoc($res);

            return $user_data;
        }
    }

    // redirect to login page

    header("Location: login.php");
    die;
}
