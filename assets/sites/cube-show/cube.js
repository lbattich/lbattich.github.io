var box = $("#cube");

function swirl() {
	box.attr("class","turn-a");
	setTimeout(function (){box.attr("class","turn-b");}, 8000); 
	setTimeout(swirl, 16000); 
}

function paintme() {
	var schema = Math.floor(Math.random()*4);

	//horizontal: 1,1,1,4,1,1,1 | vertical: 1 1/2,1 1/2,1 1/2,4,1/2,1/2,1/2
	if (schema == 0) {
		$(".colour1").css("background-color", colourize());
		$(".colour2").css("background-color", colourize());
		$(".colour3").css("background-color", colourize());
		$(".colour4").css("background-color", colourize());

	}

	//horizontal: 2,1,4,1,2 | vertical: 3,1 1/2,4,1/2,1
	else if (schema == 1) {
		var shared = colourize();
		$(".colour1").css("background-color", shared);
		$(".colour2").css("background-color", shared);
		$(".colour3").css("background-color", colourize());
		$(".colour4").css("background-color", colourize());
	}

	//horizontal: 1,2,4,2,1 | vertical: 1 1/2,3,4,1,1/2
	else if (schema == 2) {
		var shared = colourize();
		$(".colour1").css("background-color", colourize());
		$(".colour2").css("background-color", shared);
		$(".colour3").css("background-color", shared);
		$(".colour4").css("background-color", colourize());
	}

	//horizontal: 1,1,6,1,1 | vertical: 1 1/2,1 1/2,6,1/2,1/2
	else if (schema == 3) {
		var shared = colourize();
		$(".colour1").css("background-color", colourize());
		$(".colour2").css("background-color", colourize());
		$(".colour3").css("background-color", shared);
		$(".colour4").css("background-color", shared);
	}
	setTimeout(paintme, 3000); 
}

function colourize() {
	var r = Math.floor(256*Math.random());
	var g = Math.floor(256*Math.random());
	var b = Math.floor(256*Math.random());
	var colour = "rgb("+r+", "+g+", "+b+")";
	return colour;
}

window.addEventListener( "DOMContentLoaded", paintme, false);