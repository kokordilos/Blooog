

<?php
session_start();

include '/connect_prop.php';

    


if(!empty($_POST["login"])) {
	//$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and pass = '". $_POST["pass"]."'");

    $result = $conn->prepare("SELECT * FROM users WHERE email='" . $_POST["email"] . "' and pass = '". $_POST["pass"]."'"); 
	$result -> execute();
	//$row  = mysqli_fetch_array($result);
	$row  = $result->fetch(PDO::FETCH_ASSOC);

	
	if(is_array($row)) {
    $_SESSION["id"] = $row['id'];
    header("LOCATION: /php_tut/?page=profile");
	} else {
	$message = "Invalid Username or Password!";
	}
}
/*if(!empty($_POST["logout"])) {
	$_SESSION["id"] = "";
	session_destroy();
}*/
?>




<h3>Login Page</h3>
<form action="" method="post" id="frmLogin">
	<div><?php if(isset($message)) { echo $message; } ?></div>				
	<div><input name="email" type="text"  placeholder = 'email'></div>		
	<div><input name="pass" type="password"  placeholder = 'pass'> </div>
	<div><input type="submit" name="login" value="Login"></div>    
	<div><a name="register" href="?page=register">Register</a></div>    
</form>





