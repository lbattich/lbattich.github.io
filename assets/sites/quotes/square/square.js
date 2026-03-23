var sq1 = document.getElementById("colour1");
var sq2 = document.getElementById("colour2");
var sq3 = document.getElementById("colour3");
var sq4 = document.getElementById("colour4");
// document.getElementsByTagName("div").onclick = generate();

window.onload = generate();


function generate() {

  var schema = Math.floor(Math.random()*4);

  //horizontal: 1,1,1,4,1,1,1 | vertical: 1 1/2,1 1/2,1 1/2,4,1/2,1/2,1/2
  if (schema == 0) {
    sq1.style.backgroundColor = colourize();
    sq2.style.backgroundColor = colourize();
    sq3.style.backgroundColor = colourize();
    sq4.style.backgroundColor = colourize();

  }

  //horizontal: 2,1,4,1,2 | vertical: 3,1 1/2,4,1/2,1
  else if (schema == 1) {
    var shared = colourize();
    sq1.style.backgroundColor = shared;
    sq2.style.backgroundColor = shared;
    sq3.style.backgroundColor = colourize();
    sq4.style.backgroundColor = colourize();
  }

  //horizontal: 1,2,4,2,1 | vertical: 1 1/2,3,4,1,1/2
  else if (schema == 2) {
    var shared = colourize();
    sq1.style.backgroundColor = colourize();
    sq2.style.backgroundColor = shared;
    sq3.style.backgroundColor = shared;
    sq4.style.backgroundColor = colourize();
  }

  //horizontal: 1,1,6,1,1 | vertical: 1 1/2,1 1/2,6,1/2,1/2
  else if (schema == 3) {
    var shared = colourize();
    sq1.style.backgroundColor = colourize();
    sq2.style.backgroundColor = colourize();
    sq3.style.backgroundColor = shared;
    sq4.style.backgroundColor = shared;
  }

  setTimeout(generate,2600);
}

function colourize() {
  var r = Math.floor(256*Math.random());
  var g = Math.floor(256*Math.random());
  var b = Math.floor(256*Math.random());
  var colour = "rgb("+r+", "+g+", "+b+")";
  return colour;
}