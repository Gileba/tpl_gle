var $hamburger = jQuery(".hamburger");
var $offcanvas = jQuery("#offcanvas");
	$hamburger.on("click", function(e) {
	$hamburger.toggleClass("is-active");
	$offcanvas.toggleClass("open");
});
