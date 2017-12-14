
<?php
include	'/views/header.php';

	if(!empty($_GET['page'])){
		include '/views/' . $_GET['page'] . '.php';
	}


include '/views/footer.php';

/*^this is all u need in index so far
fix all pages and register
make the header and footer to look like a shitty page to start :P*/
?>







