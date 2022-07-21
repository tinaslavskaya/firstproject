function video_show () {
	let play_video = document.querySelector (".play-video");
	play_video.classList.toggle ('play-show');
}

function block_button_video () {
	let block_button = document.querySelector (".block-button-video");
	block_button.classList.toggle ('block-button-video-hidden');
}

function dagger_show () {
	let button_dagger = document.querySelector (".button-dagger");
	button_dagger.classList.toggle ('hidden-dagger');
}


function player () {
	let ahref = document.querySelector (".ahref");
	ahref.addEventListener ('click', () => {
		video_show ();
		block_button_video ();
		dagger_show ();
	});
}

player ();

function button_video_hidden () {
	let dagger = document.querySelector (".open-dagger"); 
	dagger.addEventListener ('click', () => {
		video_show();
		document.location.reload();
		block_button_video ();
		dagger_show ();
	});
}

button_video_hidden ();