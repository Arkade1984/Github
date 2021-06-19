$(function() {
	$(".btn").css("opacity","0.7");
	$(".btn").hover(function () {		 
		$(this).stop().animate({
		opacity: 1.0
		}, 500);
	},
	function () {
		$(this).stop().animate({
		opacity: 0.7
		}, 500);
	});
});