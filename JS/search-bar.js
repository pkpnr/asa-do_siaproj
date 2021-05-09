/* dropdown mwnu */

function sortBy(){

	document.getElementById("sort-filter").classList.toggle("show");

}

function dropdownCategory(){

	document.getElementById("category-filter").classList.toggle("show");

}



window.onclick = function(event){
	if(!event.target.matches('.default-option')){
		var dropdown = document.getElementsByClassName("dropList");

		var i;
		for(i = 0; i < dropdown.length; i++){
			var openDropdowns= dropdown[i];

			if(openDropdowns.classList.contains('show')){
				openDropdowns.classList.remove('show');
			}
		}
	}
	else if(!event.target.matches('.sort-option')){
		var dropdowns = document.getElementsByClassName("sortList");

		var i;
		for(i = 0; i < dropdowns.length; i++){
			var openDropdown= dropdowns[i];

			if(openDropdown.classList.contains('show')){
				openDropdown.classList.remove('show');
			}
		}
	}
}

/*
function sortBy(){

	document.getElementById("sort-filter").classList.toggle("show");

}*/

/*
window.onclick = function(event){
	if(!event.target.matches('.sort-option')){
		var dropdowns = document.getElementsByClassName("sortList");

		var i;
		for(i = 0; i < dropdowns.length; i++){
			var openDropdown= dropdowns[i];

			if(openDropdown.classList.contains('show')){
				openDropdown.classList.remove('show');
			}
		}
	}
}*/

function mess(){
	 alert("you clicked this");
}
