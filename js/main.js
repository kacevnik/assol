
	(function ($) {

	$('[href="//www.liveinternet.ru/click"]').find('img').height(0);

	$('.gsInformer').hover(function(){
		$(this).animate({left: "0px"}, 600);
	}, function(){
		$(this).animate({left: "-155px"}, 600);
	});

	$('.slider2').bxSlider({
		slideWidth: 193,
		minSlides: 2,
		maxSlides: 4,
		moveSlides: 1,
		slideMargin: 20
	});

	$(".fancy").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		padding : 10
	});

	$('.show_commit').click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active').text('Подробнее').parent().prev().animate({height: "38px"}, 600);
		}else{
			$(this).addClass('active').text('Свернуть').parent().prev().animate({height: $(this).parent().prev().find('p').height()}, 600);
		}
		return false;
	});
})(jQuery);
