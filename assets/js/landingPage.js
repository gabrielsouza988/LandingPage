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