
var firstName = ["Name 1", "Name 2", "Name 3", "Name 4", "Name 5",
				"Name 6", "Name 7", "Name 8", "Name 9", "Name 10", "Name 11",
				"Name 12", "Name 13", "Name 14","Name 15","Name 16","Name 17",
				"Name 18","Name 19","Name 20","Name 21","Name 22","Name 23","Name 24",
				"Name 25","Name 26","Name 27","Name 28", "Name 29", "Name 30" , "Name 31", 
				"Name 32", "Name 33", "Name 34", "Name 35", "Name 36", "Name 37", "Name 38", 
				"Name 39", "Name 40" ];

function getName() {
	var name = firstName[Math.floor(Math.random() * firstName.length)];
	return name;
}

function nameQty(){
	var userQty = document.querySelector('.qty').value;
	document.querySelector('.nameList').innerHTML = '';
	if (userQty > 10) {
		document.querySelector('.nameList').innerHTML = 'Only 10 winners can be picked';
	}
	else{
		for (var i = 0; i < userQty; i++) {
			document.querySelector('.nameList').innerHTML += getName() + '<br>';
		}
	}
}