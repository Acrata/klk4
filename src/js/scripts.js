(function( root, $, undefined ) {
	"use strict";

	$(function () {
		// DOM ready, take it away
		var klkImage = $(".single-img-klk a").data("imgKlk");
		$(".single-img-klk").css("background","url("+klkImage+")")
		.css("background-size","cover");
	});

} ( this, jQuery ));
