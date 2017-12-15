
<?php

date_default_timezone_set('Europe/Moscow');
$date = date('Y-m-d H:i:s');
session_start();

include '/connect_prop.php';

$sql = "SELECT u.*, p.* FROM users AS u INNER JOIN profile AS p ON u.id = p.user_id WHERE u.id = ". $_SESSION["id"]; 

$result = $conn->prepare( $sql ); 
$result -> execute();
$row  = $result->fetch(PDO::FETCH_ASSOC);


if(!empty($_POST["logout"])) {
	$_SESSION["id"] = "";
    session_destroy();
    header("LOCATION: /php_tut/?page=login");
}


?>
<h3>Comments</h3>

<form action="" method="post" id="frmLogout">
<div class= "dashboard">
<div class= "left_user_list">
<img src= "<?= $row['picture'] ?>" style="width:100;height:100px;">
<img src= "<?= $row['picture'] ?>" style="width:100;height:100px;">
<img src= "<?= $row['picture'] ?>" style="width:100;height:100px;">
<img src= "<?= $row['picture'] ?>" style="width:100;height:100px;">


</div>
<div class="user_dashboard">


<div class="profile_info">

Welcome <?php echo ucwords($row['name']); ?>,
You have successfully logged in!<br>
Click to 
<input type="submit" name="edit" value="Edit" >
<input type="submit" name="logout" value="Logout" >.

<?php
if(!empty($_POST["edit"])) {
    
    
    ?>  
    <div>name<input name="name" type="text"  value = "<?= $row['name'] ?>"> </div>
	<div>email<input name="email" type="text"  value = "<?= $row['email'] ?>"> </div>
    <div>password<input name="pass" type="password"  value = "<?= $row['pass'] ?>"></div>
    <div>picture<input name="picture" type="text"  value = "<?= $row['picture'] ?>"> </div>
    <div>iq<input name="iq" type="text"  value = "<?= $row['iq'] ?>"> </div>
    <div>age<input name="age" type="text"  value = "<?= $row['age'] ?>"> </div>

    <div><input type="submit" name="save" value="Save"></div>  
    <?php

    }
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
    
/*


*/
?>
</div>
<!--Comment part here-->

<div class= "comment_dashboard">

<div class="comment">

</div>
</div>
<!--Comment part here-->

<!--Post part here-->

<div class= "post_comment">
<input class= "msg" type= "text" name= "new_comment">
<input type="submit" name="post" value="Post" >


<?php
    
    
if(!empty($_POST["post"])){
    
   // $date = ($date);
    $post = "INSERT INTO `comment` (`id`, `user_id`, `comment`, `date`) 
    VALUES (NULL,'" . $_SESSION["id"] . "', '" . $_POST["new_comment"] . "', '" . $date . "')";    
    $conn->exec($post);
   
    //echo "By "; echo ucwords($row['name']); echo " "; echo  $date;

}
?>



</div>
<!--Post part here-->


</div>

</div>
</form>
