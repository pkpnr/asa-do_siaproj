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