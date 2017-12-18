<?php
session_start();

include '/connect_prop.php';
date_default_timezone_set('Europe/Moscow');
$date = date('Y-m-d H:i:s');

if(!empty($_POST["new_comment"])){    
    $post = "INSERT INTO `comment` (`id`, `user_id`, `comment`, `date`) 
    VALUES (NULL,'" . $_SESSION["id"] . "', '" . $_POST["new_comment"] . "', '" . $date . "')";    
    $conn->exec($post);
    header("LOCATION: /php_tut/?page=profile");
    
}
else
{
    header("LOCATION: /php_tut/?page=profile");
}