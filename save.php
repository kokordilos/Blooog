<?php 
session_start();

include '/connect_prop.php';

if(!empty($_POST["save"])){

    $prof_upd = "UPDATE `profile` SET 
        `picture`= '".$_POST['picture']."',
        `iq`= '".$_POST['iq']."',
        `name`= '".$_POST['name']."',
        `age`= '".$_POST['age']."'
        WHERE `user_id`=  '".$_SESSION['id'] ."'
        ";
    $user_upd = "UPDATE `users` SET 
        `email`= '".$_POST['email']."',
        `pass`= '".$_POST['pass']."'        
        WHERE `id`=  '".$_SESSION['id'] ."'
        ";
        
        $conn->exec($prof_upd);
        $conn->exec($user_upd);
        header("LOCATION: /php_tut/?page=profile");
    
}
else
{
    header("LOCATION: /php_tut/?page=profile");
}