function hundred (num) {
	let sixty = document.querySelector ('.hundred');
	sixty.innerHTML = '<sup class="plan-currency">$</sup>' + num;
}

function thousand (num) {
	let ninety = document.querySelector ('.thousand');
		ninety.innerHTML = '<sup class="plan-currency">$</sup>' + num;
}


function switch_pricing () {
	let swith_btn = document.querySelectorAll ('.swith-btn');
	let swith_left = document.querySelector ('.swith-left');
	let swith_right = document.querySelector ('.swith-right');

	swith_btn.forEach ((event) => {
		event.addEventListener ('click', () => {
			if (event == swith_right) {
				event.classList.add ('switch-pricing-active');
				swith_left.classList.remove ('switch-pricing-active');
				hundred (690); 
				thousand (1200);
					 
			} else if (event == swith_left) {
				event.classList.add ('switch-pricing-active');
				swith_right.classList.remove ('switch-pricing-active');
				hundred (60);
				thousand (96);
			}
		});

	});
}

switch_pricing ();