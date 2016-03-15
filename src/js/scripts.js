(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
		// Uso data-attr de js para pasar la url de la imagen y escalarla de manera adecuada para este proyecto
		var klkImage = $(".single-img-klk a").data("imgKlk");
		$(".single-img-klk").css("background","url("+klkImage+")")
		.css("background-size","cover");

		$(".menu-item").click(function(){

			// console.log("tt");
		});
		$("li.menu-item a").click(function(){
if ($(this).parent().has(".mp-level")){
var texto=$(this).text();
console.log(texto);
console.log($(this).next().find("h2.klk-icon").css("color","white").text(texto));
}
});
		});


} ( this, jQuery ));
