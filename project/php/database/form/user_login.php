<?php require_once 'user_form.php' ?>
<?php 

function validate_email () {
	switch (isset($_POST['email'])) {
		case '':
			echo '<span class="test">Введите адрес электронный почты</span>' . '<br>';
			break;
		case strlen($_POST['email']) < 8:	
		    echo '<span class="test">Твой login должен быть 8 или более символов</span>' . '<br>';
		    break;
		case preg_match('/^(\w+)@(\w+)\.(\w{2,3})$/', $_POST['email']) == FALSE :  
			echo '<span class="test">Электронный адрес имеет неверный формат</span>' . '<br>';
			break;  	
		default:
			echo '';
			break;
	}
	
}


function validate_password () {
	switch (isset($_POST['password'])) {
		case '':
			echo '<span class="test">Введите пароль</span>' . '<br>';
			break;
		case strlen($_POST['password']) < 8 :
			echo '<span class="test">Твой password должен быть 8 или более символов</span>' . '<br>';	
			break;
		case preg_match('/^(\w+[A-Z]+\d+)$/', $_POST['password']) == FALSE: 
			echo '<span class="test">Password должен содержать большие, маленькие буквы и цифры</span>' . '<br>';	
			break;
		default:
			echo '';
			break;	
	}
}


function disabled_button () {
	if((!empty($_POST['email']) && validate_email () == FALSE) && (!empty($_POST['password']) && validate_password () == FALSE)) {
			header('Location: ../tables/users/users.php');
	} else {
		 validate_email();
		 validate_password();
	}
}
disabled_button();

?>


