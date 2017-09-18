var text = $("#text");
$(".square").click(function() {
    // $(this).hide(); // Desaparece
    $(this).fadeOut(); // Desvanece lentamente
})

function disappear(time = 400) {
    text.fadeOut(time);
}

function reappear(){
    text.fadeIn();
}

$("#button").click(function() {
    disappear(800);
})

$("#button2").click(function() {
    reappear(); // Por defecto es 400 milisegundos
})

$("#button3").click(function() {
    if(text.css("display") != "none")
        text.fadeOut();
    else
        reappear();
})

$("#circle2").click(function(){
    $(this).animate(
        {
        width:"300px",
        height:"300px",
        marginLeft: "30px",
        marginTop: "30px"
        },1500, function(){
            $(this).css("background-color", "purple");
        });
})

/*$("#circle").click(function() {
    $("p").html("Este texto ha cambiado.");
    alert($("p").html());
})

$(".square").click(function() {
    alert($("body").css("width"));
    $(".square").css("background-color", "blue");
    // this solo hace referencia al propio elemento
    $(this).css("width", "300px");
})

$("#circle").hover(function() {
    $("p").html("Informacion: busca jQuery API en Google para maás información");
    $("iframe").attr("src", "https://www.ecowebhosting.co.uk/");
})*/

/*$("div").click(function() {
    alert("Click en el div");
})*/