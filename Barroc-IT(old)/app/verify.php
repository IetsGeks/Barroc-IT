<?php

require ('database.php');

if (isset($_GET['email']) && isset($_GET['hash'])){

    $email = $_GET['email'];

    $hash = $_GET['hash'];

    $sql = "SELECT * FROM user_info WHERE email = '$email' && hash = '$hash' && valid = 0";

    //mysqli type query. if you cant execut it: check database.php to see if it is also set to mysqli.
    $match = mysqli_query($db, $sql)->num_rows;

    //still needs a PDO execut query.


    if ($match == 1){
        $sql = "UPDATE user_info SET valid='1' WHERE email='$email' AND hash ='$hash' AND valid=0";
        //mysqli type query. if you cant execut it: check database.php to see if it is also set to mysqli.
        mysqli_query($db, $sql);

        //still needs a PDO execut query.
    }
}

header("location:../public/index.php?");
