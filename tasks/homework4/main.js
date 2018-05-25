var sedan = document.getElementById('sedan');
var getCar = document.getElementById('getCar');
var position = 0;
var id;

getCar.onmouseover = function(){

	sedan.style.transform = 'scale(1, 1)';
	if (id) clearInterval(id);
	id = setInterval(toDriveRight, 1);
}


getCar.onmouseout = function(){
	sedan.style.transform = 'scale(-1, 1)';
	clearInterval(id);
	id = setInterval(toDriveLeft, 1);
}

function toDriveRight() {
	if (position == 1360) {
		clearInterval(id);
	} else {
		position ++;
		sedan.style.left = position + 'px';
	}
}

function toDriveLeft() {
	if (position == 0) {
		clearInterval(id);
		sedan.style.transform = 'scale(1, 1)';
	} else {
		position --;
		sedan.style.left = position + 'px';
	}
}