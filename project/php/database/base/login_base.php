<?php require_once "connect_base.php" ?>
<?php 

	if ($login_base->connect_errno) {
		throw new RuntimeException ('Connection error: ' . $login_base->connect_error);
	} 
 ?>