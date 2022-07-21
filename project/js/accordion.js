
function accordion() {

	let collapsed = document.getElementsByClassName ('collapsed');
	let showList = document.getElementsByClassName ('showList');

	for (let i = 0; i < collapsed.length; i++) { 
		if (showList[i].style.maxHeight) {
		
				showList[i].style.maxHeight = null;
				collapsed[i].classList.remove ("active");
		}
		
		collapsed[i].addEventListener ("click", () => {

			if (showList[i].style.maxHeight == 0) {
				showList[i].style.maxHeight = showList[i].scrollHeight + "px";
				collapsed[i].classList.toggle ("active");
			} else {

				showList[i].style.maxHeight = null;
				collapsed[i].classList.remove ("active");
			}
		});

	}
		
		
}



