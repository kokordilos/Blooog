
<?php
include	'/views/header.php';

	if(!empty($_GET['page'])){
		include '/views/' . $_GET['page'] . '.php';
	}


include '/views/footer.php';
?>






