<?php
session_start();
session_destroy();

session_start();
$_SESSION['valid'] = false;

//go to home page.
header("location:../public/index.php?");