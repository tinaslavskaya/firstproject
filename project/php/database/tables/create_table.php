<?php require_once "../base/connect_base.php" ?>
<?php 
	$guests = "Guests";
	$sql_table = "CREATE TABLE $guests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	user_name VARCHAR (30) NOT NULL,
	user_email VARCHAR (50) NOT NULL,
	subject_msg VARCHAR (200) NOT NULL,
	user_msg VARCHAR (250) NOT NULL,
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

	if ($connect->query($sql_table)) {
		echo "Created table " . $guests . " successfully" . "<br>";
	} else {
		if ($sql_table) {
			echo "Table " . $guests . " already exists" . "<br>";
		} else {
			echo "Error created " . $guests . $connect->connect_error . "<br>";
		}
	}

 ?>