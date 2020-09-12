$(document).on('click', 'nav.mobile', function (){
	var listMenu = $('nav.mobile ul');
	var icon = $('.button-menu-mobile svg');

	if (listMenu.is(':hidden')) {
		icon.removeClass('fa-bars');
		icon.addClass('fa-times');
	} else {
		icon.removeClass('fa-times');
		icon.addClass('fa-bars');
	}

	listMenu.slideToggle();
});

if ($('target').length > 0) {
	// O elemento existe, potanto precisamos dar o scroll
	var	elemento = '#'+$('target').attr('target');
	var scroll = $(elemento).offset().top
	$('html,body').animate({'scrollTop':scroll}, 500);
}

var curSlide = 0;

var maxSlide = $('.banner-single').length - 1;

var delay = 3;

initSlider();
changeSlide();

function initSlider(){
	$('.banner-single').hide();
	$('.banner-single').eq(0).show();
}

function changeSlide(){
	setInterval(function(){
		$('.banner-single').eq(curSlide).fadeOut(2000);
		curSlide++;
		if (curSlide > maxSlide) {
			curSlide = 0;
		}
			$('.banner-single').eq(curSlide).fadeIn(2000);

	},delay * 1000);
}