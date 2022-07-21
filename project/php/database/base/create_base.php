<?php require_once 'connect_base.php' ?>
<?php 
	$create_database = "CREATE DATABASE $data_name";

	if ($login_base->query($create_database)) {
		echo "Created " . $data_name . " successfully" . "<br>";
	} else {
		if ($create_database) {
			echo "Database " . $data_name . " already exists" . "<br>";
		} else {
			echo "Error created: " . $data_name . $connect->error . "<br>";
	    }
	}
 ?>