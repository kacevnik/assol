$( document ).ready(function() {

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

});