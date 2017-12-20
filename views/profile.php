
<?php


session_start();

include '/connect_prop.php';

$sql_users = "SELECT u.*, p.* FROM users AS u INNER JOIN profile AS p ON u.id = p.user_id WHERE u.id = ". $_SESSION["id"]; 
$result_users = $conn->prepare( $sql_users ); 
$result_users -> execute();
$row_users = $result_users->fetch(PDO::FETCH_ASSOC);


$sql_pictures = "SELECT * FROM `profile` ORDER BY `id`ASC ";
$result_pictures =$conn->prepare($sql_pictures);
$result_pictures -> execute();


$sql_comments = "SELECT * FROM `comment` ORDER BY `id`ASC ";
$result_comments = $conn->prepare($sql_comments);
$result_comments -> execute();




if(!empty($_POST["logout"])) {
	$_SESSION["id"] = "";
    session_destroy();
    header("LOCATION: /php_tut/?page=login");
}


?>

<h3>Comments</h3>

<div class= "dashboard">
<div class= "left_user_list">
<?php

while($row_pictures  = $result_pictures->fetch(PDO::FETCH_ASSOC))
{
    
    echo '<div class="image_box"><img class="profile_img" src='.$row_pictures['picture'].' ></div>';
}

?>



</div>
<div class="user_dashboard">


<div class="profile_info">

Welcome <?php echo ucwords($row_users['name']); ?>,
You have successfully logged in!<br>
Click to 
<form action="" method="post" id="frmLogout">

<input type="submit" name="edit" value="Edit" >
<input type="submit" name="logout" value="Logout" >.
</form>
<?php
if(!empty($_POST["edit"])) {
    
    
    ?> 
    <form action="save.php" method="POST"> 
    <div>name<input name="name" type="text"  value = "<?= $row_users['name'] ?>"> </div>
	<div>email<input name="email" type="text"  value = "<?= $row_users['email'] ?>"> </div>
    <div>password<input name="pass" type="password"  value = "<?= $row_users['pass'] ?>"></div>
    <div>picture<input name="picture" type="text"  value = "<?= $row_users['picture'] ?>"> </div>
    <div>iq<input name="iq" type="text"  value = "<?= $row_users['iq'] ?>"> </div>
    <div>age<input name="age" type="text"  value = "<?= $row_users['age'] ?>"> </div>

    <input type="submit" name="save" value="Save"> 
    </form>
    <?php

    }

    

?>
</div>
<!--Comment part here-->

<div class= "comment_dashboard">




<div class= "comment_area">


<?php




while($row_comments  = $result_comments->fetch(PDO::FETCH_ASSOC))
{
    $index = $row_comments["user_id"];
    
    echo    '<div class="comment">
                        <div class="comment_text">
                            '.$row_comments["comment"].
                        '</div> 
                <div class="comment_detail">
                    <div class="comment_username">
                        by_'.$sql_users[$index].
                    '</div>
                    <div class="comment_date">
                        '.$row_comments["date"].
                    '</div>
                </div><hr>
            </div>';
}
?>
</div>
</div> 
<!--Comment part here-->



<!--Post part here-->

<form action="post_redirect.php" method="POST">
<div class= "post_comment">
    <div class= "msg_box"><input class= "msg"  type= "text" name= "new_comment"></div>
    <div class= "submit_btn"> <input type="submit" name="submit" > </div>
</div>
</form>

<!--Post part here-->



</div>
</div>

