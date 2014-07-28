var slides = [];

$(document).ready(function() {

	jQuery.support.placeholder = false;
	test = document.createElement('input');
	if('placeholder' in test) jQuery.support.placeholder = true;

	var slideshow = $('#homepage_slideshow').atdSlide({
		'slides'	: slides,
		'shown'		: 1,
		'speed'		: 1000,
		'autoplay'	: 5000,
		'loop'		: true,
		'onComplete': function() {
			if ($('#homepage_slideshow .slides li.new').length > 0) {
				var name = $('#homepage_slideshow .slides li.new').attr('data-name');
				var link = $('#homepage_slideshow .slides li.new').attr('data-link');
				var desc = $('#homepage_slideshow .slides li.new').attr('data-desc');
			} else {
				var name = $('#homepage_slideshow .slides li').attr('data-name');
				var link = $('#homepage_slideshow .slides li').attr('data-link');
				var desc = $('#homepage_slideshow .slides li').attr('data-desc');
			}
			$('.description h3').text(name);
			$('.description .desc').text(desc);
			if (link) {
				$('.description .learn_more').attr('href', link).addClass('active');
			} else {
				$('.description .learn_more').removeClass('active');
			}
		}
	});

	$('#menu-main_menu').superfish({
		autoArrows:	false,
		animation:	{opacity:'show',height:'show'},
		speed:		'fast'
	});

	$('a.fancybox').fancybox();

})

$(function() {
	if(!$.support.placeholder) { 
		var active = document.activeElement;
		$(':text').focus(function () {
			if ($(this).attr('placeholder') != '' && $(this).val() == $(this).attr('placeholder')) {
				$(this).val('').removeClass('hasPlaceholder');
			}
		}).blur(function () {
			if ($(this).attr('placeholder') != '' && ($(this).val() == '' || $(this).val() == $(this).attr('placeholder'))) {
				$(this).val($(this).attr('placeholder')).addClass('hasPlaceholder');
			}
		});
		$(':text').blur();
		$(active).focus();
		$('form:eq(0)').submit(function () {
			$(':text.hasPlaceholder').val('');
		});
	}
});

/* FlexSlider */
jQuery(window).load(function(){
  jQuery('.flexslider').flexslider({
    animation: "slide",
    controlNav: false,
    prevText: "‹",           
	nextText: "›", 
  });
});

/* FlexSlider */
jQuery(document).ready(function () {
    jQuery('nav#nav').meanmenu();
});