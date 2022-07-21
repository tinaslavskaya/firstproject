<?php 
	$localhost = 'localhost';
	$login_name = 'root';
	$password = '';
	$data_name = 'myDB';
	$login_base = new mysqli ($localhost, $login_name, $password);
	$connect = new mysqli ($localhost, $login_name, $password, $data_name);	
 ?>