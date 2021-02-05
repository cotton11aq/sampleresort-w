function slideSwitch() {

  // hotelスライドショー
  var jQueryactiveHotel = jQuery('#slideshow_hotel img.active');

  if ( jQueryactiveHotel.length == 0 ) jQueryactiveHotel = jQuery('#slideshow_hotel img:last');

  var jQuerynextHotel =  jQueryactiveHotel.next().length ? jQueryactiveHotel.next(): jQuery('#slideshow_hotel img:first');

  jQueryactiveHotel.addClass('last_active');

  jQuerynextHotel.css({opacity: 0.0})
  .addClass('active')
  .animate({opacity: 1.0}, 1000, function() {
    jQueryactiveHotel.removeClass('active last_active');
  });

  // villaスライドショー
  (function(jQuery){
  var jQueryactiveVilla = jQuery('#slideshow_villa img.active');

  if ( jQueryactiveVilla.length == 0 ) jQueryactiveVilla = jQuery('#slideshow_villa img:last');

  var jQuerynextVilla =  jQueryactiveVilla.next().length ? jQueryactiveVilla.next(): jQuery('#slideshow_villa img:first');

  jQueryactiveVilla.addClass('last_active');

  jQuerynextVilla.css({opacity: 0.0})
  .addClass('active')
  .animate({opacity: 1.0}, 1000, function() {
    jQueryactiveVilla.removeClass('active last_active');
  });
  })(jQuery);
}

jQuery(function() {
  setInterval( "slideSwitch()", 3500 );
});

jQuery(function() {
  let paraPosi = 0;

	jQuery(window).scroll(function () {
		paraPosi = jQuery(document).scrollTop();
        jQuery('.para1').stop(true, true).animate({
			'background-position-y': -paraPosi / 2 + 'px'
    }, 500);
  });
});

// restaurant スクロールイン
jQuery(function() {
  jQuery(window).scroll(function() {
    jQuery('.fadein').each(function() {
      var elemPos = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();

      if (scroll > elemPos - windowHeight + 250) {
        jQuery(this).addClass('scrollin');
      }
    });
  });
});


// ハンバーガーメニュー
jQuery(function() {
  jQuery(function () {
    jQuery('#menu_icon').on('click', function() {
      jQuery('header').toggleClass('open');
    });
  });
});


// トップへもどるボタン
jQuery(function() {
  var pagetop = jQuery('#page_top');   
  pagetop.hide();
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 800) {
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });

  pagetop.click(function () {
      jQuery('body,html').animate({
          scrollTop: 0
      }, 500); 
      return false;
  });
});
