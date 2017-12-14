<?php

include '/connect_prop.php';
if(!empty($_POST["register"])){
if ("" || $_POST["email"] == ""  || $_POST["pass"] == "" )
{
   echo "Fuck You. Go";

    ?>
    
   <a name='back' href='?page=register'>back</a>


     <?php
    return;
  


}
else {
$sql = "INSERT INTO `users` (`id`, `email`, `pass`) 
VALUES (NULL,'" . $_POST["email"] . "', '" . $_POST["pass"] . "')";
$sql1 = "INSERT INTO `profile`(`id`, `picture`, `user_id`, `iq`, `name`, `age`)
VALUES (null,'empty',LAST_INSERT_ID(),0,'" . $_POST["name"] . "',0)";
// use exec() because no results are returned
$conn->exec($sql);
$conn->exec($sql1);
echo "New record created successfully";

}}


/*INSERT INTO `users`(`id`, `email`, `pass`, `name`) VALUES ([value-1],[value-2],[value-3],[value-4]) 
///INSERT INTO `users`(`id`, `email`, `pass`, `name`) 
VALUES (null,"c@","vzxcvasdf","c") ;

INSERT INTO `profile`(`id`, `picture`, `user_id`, `iq`, `name`, `age`)
VALUES (null,null,LAST_INSERT_ID(),200,"c_1",123);*/
 

?>
      
<h3>Register page</h3>
<form action="" method="post" id="frmRegister">
    <div><input name="name" type="text"  placeholder = 'name'></div>						
	<div><input name="email" type="text"  placeholder = 'email'></div>		
	<div><input name="pass" type="password"  placeholder = 'pass'> </div>
	<div><input type="submit" name="register" value="Register"></div>    
	<div><a name="back" href="?page=login">Back</a></div>    
</form



