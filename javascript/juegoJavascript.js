 var initialTime = new Date().getTime();
var form = document.getElementById("form");

function calculateTime() {
    var endTime = new Date().getTime();
    return (endTime - initialTime) / 1000;
}

function randomColor() {
    var letter = "0123456789ABCDEF".split("");
    var color = "#"
    for(var i = 0; i < 6; i++) {
        var position = Math.round(Math.random() * letter.length);
        color += letter[position];
    }
    return color;
}

function reset() {
    var top = Math.random() * document.body.clientHeight;
    var left = Math.random() * document.body.clientWidth;
    var width = Math.random() * 300 + 20;

    if(Math.random() > 0.5){
        form.style.borderRadius = "50%";
    } else {
        form.style.borderRadius = "0%";
    }

    form.style.top = top + "px";
    form.style.left = left + "px"; 
    form.style.width = width + "px";
    form.style.height = width + "px";
    form.style.backgroundColor = randomColor();
    form.style.display = "block";
    initialTime = new Date().getTime();
}

function randomTime() {
    setTimeout(reset(), Math.random() * 2000);
}

form.onclick = 
   function() {
    form.style.display = "none";
    document.getElementById("reactionTime").innerHTML = calculateTime() + " s";
    randomTime();
}