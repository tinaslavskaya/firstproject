let baget_button = document.querySelector ('.baget-button');
let	baget_span = document.querySelectorAll ('.baget-span');
let invisibly_wraper = document.querySelector ('.invisibly-wraper');
let invisibly_navbar = document.querySelector ('.invisibly-navbar');
	

function baget_header_add () {
	baget_button.children[0].classList.toggle('baget-span-show1');
	baget_button.children[1].classList.toggle('baget-span-show2');
	baget_button.children[2].classList.toggle('baget-span-show3');
	invisibly_wraper.classList.toggle('invisibly-wraper-block');
} 

function baget_header () {
	baget_button.addEventListener ('click', () => {
		baget_header_add();	
	});		
	baget_button.removeEventListener ('click', () => {
		baget_header_add();			
	});
}
	
baget_header ();


