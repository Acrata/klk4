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
var texto=$(this).text(),
 		liItem=$(this).parent(),
 		titleMenu=$(this).next().find("h2.klk-icon");
		console.log(liItem);
var iconClass = $(this).parent().attr("class");
	if (/fa/.test(iconClass) ) {
		var iconClass2 = $(this).parent().attr("class").split(' ')[0];
		console.log("succes");
		// return iconClass2;
	}
		liItem.removeClass(iconClass2);
// $(this).next().find("h2.klk-icon").text(texto);
		titleMenu.text(texto);
		titleMenu.addClass("fa "+iconClass2);
		console.log(iconClass2);
}
});
		});


} ( this, jQuery ));
