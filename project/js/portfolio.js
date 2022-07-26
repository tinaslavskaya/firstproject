let portfolio_btn = document.querySelectorAll('.portfolio-btn');

function item_portfolio () {
	let portfolio_item = document.querySelectorAll('.portfolio-item');
		portfolio_btn.forEach((e, ind) => {
			e.addEventListener('click', () => {
				portfolio_item.forEach ((item) => {
				if (e.id == item.id) {
					item.style.display = 'block';
				} else if(e.id == 'all') {
					item.style.display = 'block';
				} 
				
				else {
					item.style.display = 'none';	
				}
			});
		});	
		
	});
}

item_portfolio();






	 
	 	
	 

		