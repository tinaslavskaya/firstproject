<?php require_once 'user_login.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Nunito:wght@400;500;600;700;800;900&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../../css/user_login.css">
</head>
<body>
	<div class="container-form">
		<div class="container-reg">
			<form action="user_login.php" class="form-registr" method="POST">
			<div class="block">
				<div>
					<h1 class="header-title">login</h1>
				</div>
				<div class="word">
					<label for="current-email">email</label>
					<span class="span-right text">need an account?
						<span class="sign"> sign up</span>
					</span>
				</div>
				<div class="current">
					<input type="text" name="email" id="current-email"  maxlength="30">
					<i class="solid-ok"></i>
				</div>
				
			</div>
			<div class="block">
				<div class="word">
					<label for="current-password">password</label>
					<span class="text" id="text"><i class="fa-solid fa-eye-slash" id="eye"></i></span>
					<span class="show"> hide</span>
				</div>
				<div class="current">
					<input type="password" name="password" id="current-password" minlength="8" maxlength="30">
				</div>
				<div>
					<button type="submit" name="submit" class="btn btn-info">
						<span>login</span>
					</button>
				</div>
			</div>
		</form>
		</div>
	</div>
<script src="../../../js/user_login.js"></script>	
</body>
</html>