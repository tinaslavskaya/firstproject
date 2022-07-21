
function item_portfolio () {
	let portfolio_item = document.querySelectorAll('.portfolio-item');
	let portfolio_btn = document.querySelectorAll('.portfolio-btn');
		portfolio_btn.forEach((e) => {
			e.addEventListener('click', (btn) => {
				portfolio_item.forEach ((item) => {
					if (e.id == item.id) {
						item.style.display = 'block';
					} else if(e.id == 'all') {
						item.style.display = 'block';
					}else {
						item.style.display = 'none';
					}
				});
			});		
		});
}

item_portfolio();




function show_portfolio (item) {
	portfolio_item.forEach((e) => {
		if (e.className == 'col-12 col-sm-6 col-lg-4 portfolio-item ' + item) {
			e.style.display = 'block';
		} else {
			e.style.display = 'none';
		}
	});
}
	
//show_portfolio('programming');

	 
	 	
	 

		