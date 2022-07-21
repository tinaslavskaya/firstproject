function menu_bar () {
	let menu_navbar = document.querySelectorAll('.class-link');
		
		menu_navbar.forEach ((elem) => {
		elem.addEventListener('mouseover', (event) => {
			event.target.style.color = "orange";
			event.target.classList.add('active-link');		
		});
		
		elem.addEventListener('transitionend', (event) => {
			event.target.style.color = "";
			event.target.classList.remove('active-link');
		});
	
		});

}

menu_bar();





