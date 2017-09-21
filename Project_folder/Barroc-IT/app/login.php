<?php

require ('database.php');

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $isLoggedIn = false;
    $myusername = $_POST['user'];
    $mypassword = $_POST['pass'];
    $isvalid = 1;
    if (empty($_POST["user"]) || empty($_POST["pass"])) {
        //send to login page
        header("location:../public/login.php");
    }

    $sql = "SELECT * FROM user_info 
            WHERE username = '$myusername' &&
            password = '$mypassword' && valid = '$isvalid'";

    //mysqli type query. if you cant execut it: check database.php to see if it is also set to mysqli.
    $match = mysqli_query($db, $sql)->num_rows;

    //still needs a PDO execut query.


    if ($match == 1) {
        $username = "SELECT * FROM user_info 
            WHERE username = '$myusername'";

        $isLoggedIn = true;
        session_start();
        $_SESSION['valid'] = $isLoggedIn;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
    }
    //send to home page.
    header("location:../public/index.php");
}
