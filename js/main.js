$( document ).ready(function() {
	$('.gsInformer').hover(function(){
		$(this).animate({left: "0px"}, 600);
	}, function(){
		$(this).animate({left: "-155px"}, 600);
	});
});