$(document).ready(function() {

	$('#header .search input').focus(function() {
		$(this).addClass('ie7-active');
	});

	$('#header .search input').blur(function() {
		$(this).removeClass('ie7-active');
	})

})