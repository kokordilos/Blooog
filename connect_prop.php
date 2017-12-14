<?php

$servername = "localhost";
$username = "root";
$password= "";
$dbname = "blooooog";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$message="";

?>