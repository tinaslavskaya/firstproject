function closeEye() {
    let current = document.querySelector ('input[name=password]');
	let eye = document.getElementById ('eye');
	let show = document.querySelector ('span[class="show"]');
	eye.addEventListener ('click', () => {
	  if (document.querySelector('.fa-eye-slash')) {
	    eye.classList.remove('fa-eye-slash');
	  	eye.classList.add('fa-eye');
	  	show.innerHTML = 'show';
	  	current.type = 'text';
	  	console.log (eye);
	  } else {
	  	eye.classList.remove('fa-eye');
	  	eye.classList.add('fa-eye-slash');
	  	show.innerHTML = 'hide';
	  	current.type = 'password';
	  }
	});
}
 
closeEye ();


function inpValue () {
	let currentEmail = document.getElementById ('current-email');
	let solidOk = document.querySelector ('.solid-ok');
	currentEmail.addEventListener ('blur', () => {
		if (currentEmail.value.length < 8 || currentEmail.value.length == 0) {
			console.log (currentEmail.value.length);
			solidOk.classList.remove ('fa-solid', 'fa-circle-check');
			solidOk.classList.add ('fa-solid', 'fa-circle-exclamation');
			console.log (solidOk);
		} else {
			console.log (currentEmail.value.length);
			solidOk.classList.remove ('fa-solid', 'fa-circle-exclamation');
			solidOk.classList.add ('fa-solid', 'fa-circle-check');
		}
	} );
		
	
}
inpValue();
