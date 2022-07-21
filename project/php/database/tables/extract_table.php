<?php require_once "create_table.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Nunito:wght@400;500;600;700;800;900&display=swap">
	<link rel="stylesheet" href="../../../css/extract_table.css">
	<title>View data</title>
</head>
<body>
	<table class="table-guests">
		<tr>
			<th>ID</th>
			<th>user_name</th>
			<th>user_email</th>
			<th>subject_msg</th>
			<th>user_msg</th>
			<th>time</th>
		</tr>
		<?php 
			$table_guests = $connect->query ("SELECT * FROM $guests");
			//$table_guests = mysqli_fetch_all($table_guests);
			foreach ($table_guests as $guest) {
				 	
		?>	
		   <tr class="color-table">
		   	<td><?=$guest['id'] ?></td>
		   	<td><?= $guest['user_name'] ?></td>
		   	<td><?=$guest['user_email'] ?></td>
		   	<td><?=$guest['subject_msg'] ?></td>
		   	<td><?=$guest['user_msg'] ?></td>
		   	<td><?=$guest['reg_date'] ?></td>
		   </tr>			
		<?php  
			
			}
		?>	
	</table>
</body>
</html>