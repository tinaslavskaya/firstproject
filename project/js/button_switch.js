
function button_switch (btn, clas) {
	$(btn).click((event) => {
		$(btn).removeClass (clas);
		$(event.target).addClass(clas);
	});
}

button_switch (portfolio_btn, 'portfolio-btn-active');