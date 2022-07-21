let section = document.querySelectorAll('.section');
let menu_nav = document.querySelectorAll('.class-link');
let container_box = document.querySelectorAll ('.container-box');

let height_wind = screen.availHeight;
let height_doc = document.body.clientHeight;

console.log (height_wind);
console.log (height_doc);

let doc = document.documentElement.getBoundingClientRect().bottom;
let elem = document.documentElement.clientHeight;

 
let c = 1;

// for (let i = 0; i < menu_nav.length; i++) {
// 	let ofset = section[i].contentDocument;

// 	container_box.forEach ((item) => {
       
// 		document.addEventListener ('scroll', (e) => {
// 			//console.log (window.pageYOffset);
// 			if(doc > elem && section[i].id == menu_nav[i].id) {
// 				//menu_nav[i].classList.add('active-link');
// 				console.log (section[i].id);
// 			} else {
// 				console.log ('no');
// 				console.log (item.id);
// 			}	

// 		});
		
// 	});	
		

	
	// container_box.forEach ((item) => {
	// 	item.addEventListener('mouseover', (e) => {

	// 		if (section[i+1] == e.target  && e.target.id ) {
	// 			menu_nav[i].classList.add('active-link');
	// 			console.log (menu_nav[i]);
	// 		} 
		
	// 	});	
	// 	item.removeEventListener('mouseover', (e) => {
	// 		if (section[i+1] == e.target  && e.target.id && menu_nav[i].scrollTop == 0) {
	// 			menu_nav[i].classList.add('active-link');
	// 			console.log (menu_nav[i]);
	// 		} 
		
	// 	});

		
		 // 	if (section[i] == e.target || menu_nav[i].type == 'click' ) {
		
			// } 
			
		// });
		// item.addEventListener('transitionend', (e) => {
		// 	if (!e.target.id ) {
		// 		menu_nav[i].classList.remove('active-link');
		// }
		// });

		
		// let height_elem =  section[i].clientHeight;
		// if (height_elem == e.target.clientHeight) {
		// 	console.log (height_elem == e.target.clientHeight);
		// 	menu_nav[i - 1].classList.add ('active-link');
		// } else {
		// 	menu_nav[i].classList.remove('active-link');
		// }
		
		
		
	
	
//}

























// 	menu_nav.forEach ((link) => {

// 		section.forEach ((elem) => {
// 		elem.addEventListener('mouseover', (event) => {
// 		let height_docum = document.body.clientHeight;	
// 		let height_elem =   elem.clientHeight;
// 		let height_bottom = height_docum - height_elem;
// 		let position_elem = height_docum - height_bottom; 
// 		console.log ('Height window: ' + height_docum);	
// 		console.log ('Height element: ' + height_elem);
// 		console.log ('Height bottom: ' + height_bottom);	
// 		console.log ('Position element: ' + position_elem);

		

// 		if (position_elem == height_elem) {

// 		}
			
				
// 		});
// 	});	

// });

				
			
			
	