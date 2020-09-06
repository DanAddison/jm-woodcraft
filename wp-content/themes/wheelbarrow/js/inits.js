jQuery(function($){
  $('.carousel').slick({
		adaptiveHeight: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false,
		lazyLoad: 'ondemand'
  });
});

jQuery(function($){
  $('.single-project__image').slick({
		adaptiveHeight: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		lazyLoad: 'ondemand'
	});

	$('.single-project__gallery a').click(function(e){
		e.preventDefault();
		slideIndex = $(this).parent().index();
		$('.single-project__image').slick('slickGoTo', slideIndex);
	});
});

