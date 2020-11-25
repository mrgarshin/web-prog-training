"use strict"

$("h1").css("text-align", "center");
console.log($("h1"));

$(".multi-span").css("color", "red");

$(".box").html("<p class=\"text-center text-white\"> Я квадрат </p>");

console.log($(".input").val());
$(".input").val("54321");

console.log($(".input").attr("type"));
$(".input").attr("title", "Это инпут, а вы что думали?");
$(".input").attr({
				"type": "number",
				"name" : "someInput",
				"tabIndex" : "1",
				"group" : "info",
			});
console.log($(".box").css("border-radius"));
$(".box").css("border-radius", "15%");
$(".box").css({
				"background-color" : "rgb(100, 155, 100)",
				"border" : "5px dashed yellow",
				"font-size" : "4em",
			});

$(".box").addClass("d-flex align-items-center p-3");
$(".box").removeClass("p-3");
$(".box").toggleClass("text-danger");

$(".box2").html("<p class=\"text-center text-white\"> Я квадрат </p>")
			.css({
				"background-color"  : "rgb(100, 155, 100)",
				"border" 			: "5px dashed yellow",
				"font-size" 		: "4em",
				"border-radius" 	: "15%",
			})
			.attr("title", "Это второй квадрат")
			.addClass("d-flex align-items-center p-3");


$(".my-button").click(function() {
	console.log(this);
	alert("Вы нажали на кнопку!");
});
function handler(event) {
	console.log(event)
	if($(this).hasClass("btn-primary")){
		$(this).removeClass("btn-primary").addClass("btn-warning");
	} else {
		$(this).removeClass("btn-warning").addClass("btn-primary");
	}
}
$(".my-button-2").on("click", handler);

$(".my-button-3").click(function() {
	$(".my-button").click(null);
	$(".my-button-2").off("click", handler);
});

setTimeout(() => {
  $(".box-3").css("position", "relative")
  infiniteMovement();
},3000)

function infiniteMovement() {
  $(".box-3").animate({
              "left" : "250px",
            }, 2000)
            .animate({
              "top" : "250px",
            }, 2000)
            .animate({
              "left" : 0,
            }, 2000)
            .animate({
              "top" : 0,
            }, 2000, infiniteMovement)
}



