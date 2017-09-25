<?php

$host = "localhost";
$dbname = "rio";
$user = "root";
$pass = "";

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "database connected to: $dbname";