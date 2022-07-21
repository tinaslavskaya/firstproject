
function validation () { 
	
	let userName = document.getElementById ('user-name');
	let subject = document.getElementById ('msg-subject');
	let textInput = document.getElementById ('msg-text');

	
		if (!userName.value) {
	 	  	document.querySelector('span[class="red1"]').innerHTML = '<span class="validation-error">: Add name</span>';
	    } 
	    else {
	        document.querySelector('span[class="validation-error"]').innerHTML = '';
	        document.querySelector('span[class="red1"]').innerHTML = '*';
	    }

	    if (!subject.value) {
	    	document.querySelector('span[class="red3"]').innerHTML = '<span class="validation-error">: Add subject</span>';
	    }  else {
	        document.querySelector('span[class="validation-error"]').innerHTML = '';
	        document.querySelector('span[class="red3"]').innerHTML = '*';
	    }

	    if (!textInput.value) {
	    	document.querySelector('span[class="red4"]').innerHTML = '<span class="validation-error">: Add comment</span>';
	    } else {
	    	document.querySelector('span[class="validation-error"]').innerHTML = '';
	        document.querySelector('span[class="red4"]').innerHTML = '*';
	    }
		
}

addEventListener('click', validation());
