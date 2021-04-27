const colorSwitch = document.getElementById('input-color-switch');

colorSwitch.addEventListener('click',checkMode);

function checkMode(){
	console.log('checking');
	if(colorSwitch.checked){
		console.log('dark on')
		darkModeOn();
	}
	else{
		console.log('dark off')
		darkModeOff();
	}
}

function darkModeOn(){
	document.body.classList.add("dark-mode");
}

function darkModeOff(){
	document.body.classList.remove("dark-mode");
}