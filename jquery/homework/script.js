"use strict"

setTimeout(() => {
  $(".worm").css("transform", "scale(1, 1)");
  $("h1").html("Червячок ползёт обратно!");
},5000)


$(".worm").animate({
              "left" : "91%",
            }, 5000)
            .animate({
              "left" : 0,
            }, 5000);

