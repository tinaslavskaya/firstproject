	let count = 1;
    
    function plus (elem) {
    	showDisplay(count += elem);
    }

	function showDisplay (elem) {
	
		let slide = document.getElementsByClassName("swiper-slide");
		
			for (let i = 0; i < slide.length; i++) {
				if (elem > slide.length) {
					count = 1;
				}

				if (elem < 1) {
					count = slide.length;
				}
				slide[i].style.display = "none";
			}
			
				slide[count - 1].style.display = "block";		
		
	}

	 
	showDisplay();
	








