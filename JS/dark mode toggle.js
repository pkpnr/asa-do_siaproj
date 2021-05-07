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

/*lite-mode*/

const liteSwitch = document.getElementById('lite-mode-switch');

liteSwitch.addEventListener('click',checkLite);

function checkLite(){
	console.log('checking');
	if(liteSwitch.checked){
		console.log('Lite on')
		liteModeOn();
	}
	else{
		console.log('lite off')
		liteModeOff();
	}
}

function liteModeOn(){
	document.body.classList.add("lite-mode");
}

function liteModeOff(){
	document.body.classList.remove("lite-mode");
}

/*lite-mode*/

const liteSwitch2 = document.getElementById('lite-mode-switch');

liteSwitch2.addEventListener('click',liteFunction);

function liteFunction() {


    for (let elem of document.querySelectorAll(".remove")) {
        elem.classList.toggle("hidden");
    }
}

