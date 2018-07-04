// Инициализация slick carousel
	$('.autoplay').slick({
	  slidesToShow: 8,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  responsive: [
    {
    breakpoint: 620,
      settings: {
        slidesToShow: 3,
             }
    }]
	});
	$('.header_slider').slick({
	  autoplay: true,
	  autoplaySpeed: 5000,
	});

// адаптивное меню
	$('#menu-burger').click(function() {
  var overlayMenu = $('#overlay-menu'),
      menuIconLines = $('#menu-burger .menu-icon'),
      menuBurger = $('#menu-burger');
  
  if(overlayMenu.hasClass('open')) {
    overlayMenu.removeClass('open');
    menuIconLines.removeClass('open');
    menuBurger.removeClass('open');
  }else{    overlayMenu.addClass('open');
            menuIconLines.addClass('open');
            menuBurger.addClass('open');
  };
})

// увеличение License
$(document).ready(function() { // Ждём загрузки страницы
	
	$(".license_img").click(function(){	// Событие клика на маленькое изображение
	  	var img = $(this);	// Получаем изображение, на которое кликнули
		var src = img.attr('src'); // Достаем из этого изображения путь до картинки
		$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
						 "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
						 "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
						 "</div>"); 
		$(".popup").fadeIn(800); // Медленно выводим изображение
		$(".popup_bg").click(function(){	// Событие клика на затемненный фон	   
			$(".popup").fadeOut(800);	// Медленно убираем всплывающее окно
			setTimeout(function() {	// Выставляем таймер
			  $(".popup").remove(); // Удаляем разметку всплывающего окна
			}, 800);
		});
	});
	
});