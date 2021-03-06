/*
**	Инициализация выпадающего меню.
*/
	function mainMenu(){
		$(function () {
			var btn = $('#btn-menu');
			var menu = $('#menu');
			$(menu).hide();
			$(btn).on('click', function(){
				$(menu).slideToggle();
			});
		});
	};
	
/*
**Инициализация слайдера в Header
*/
	function bigHeadSlider() {
		$(function () {
		    var bigSwiper = new Swiper('#big-slider', {
				loop: true,
				initialSlide: 0,
				slidesPerView: 'auto',
				nextButton: '.big-slider-right',
				prevButton: '.big-slider-left',
				nested: true,
				autoplay: 5000
			})
		});	
	};
/*
**Инициализация слайдера с клиентами
*/
	function clientsSlider() {
		$(function() {
			var clientsSwiper = new Swiper ('#clients', {
				loop: true,
				initialSlide: 0,
				slidesPerView: 3,
				spaceBetween: 10,
				nextButton: '.slients-slider-right',
				prevButton: '.slients-slider-left',
				nested: true,
				autoplay: 3000,
				mousewheelControl: true
			});
		});
	};
/*
**Инициализация progressbar - panel
*/
	function progressPanel(container){
		$(function() {
			var block = $(container);
		 	var tr = $(block).children('tbody').children('tr');
		 	for(var i=0; i<tr.length; i++) {
		 		var colValue = $(tr).eq(i).children().eq(2);
		 		var colBar = $(tr).eq(i).children('td').eq(1);
		 		var div = document.createElement('div');
		 		var thisValue = parseInt(colValue.text());
		 		$(colBar).append(div);
		 		$(colBar.children()).progressbar({
		 			value: thisValue,
		 			max: 100
				});
		 	}
		});
	};
/*
**Инициализация Слайдера Team Skills
*/
	function teamSkillSlider(){
		$(function() {
			var teamSkillsSwiper = new Swiper ('#team', {
				loop: true,
				initialSlide: 0,
				spaceBetween: 10,
				nested: true,
				autoplay: 5000,
				pagination: '.swiper-pagination',
				effect: 'fade',
				fade: {
	 				crossFade: false
				}
			});
		});
	};


	/*
	**   Выпадающая карта
	*/
function openMap(){
	var map = $('#map').hide();
	var btn = $('#map-header');
	$(btn).on('click', function(){
		$(map).fadeToggle()
	});
};