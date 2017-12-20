<?php
session_start();

include '/connect_prop.php';
date_default_timezone_set('Europe/Moscow');
$date = date('Y-m-d H:i:s');


if(!empty($_POST["new_comment"])){ 
    $comment =   $_POST["new_comment"] ;
    $post = "INSERT INTO `comment` (`id`, `user_id`, `comment`, `date`) 
    VALUES (NULL,'" . $_SESSION["id"] . "', :comment , '" . $date . "')";

    var_dump($comment);    
    var_dump(htmlentities($post));
    $post= $conn->prepare($post);
    $post->bindParam(':comment', $comment);
    $post->execute();
    
    header("LOCATION: /php_tut/?page=profile");
    
}
else
{
    header("LOCATION: /php_tut/?page=profile");
}