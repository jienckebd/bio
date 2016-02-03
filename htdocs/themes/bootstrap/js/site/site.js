(function ($, Drupal, drupalSettings) {

  $(document).ajaxStart(function() {
    $('#ajax-spinner').addClass('ajax-active');
    $('#ajax-overlay').addClass('ajax-active');
  });

  $(document).ajaxComplete(function() {
    $('#ajax-spinner').removeClass('ajax-active');
    $('#ajax-overlay').removeClass('ajax-active');
    $('.cycle-slideshow').cycle();
  });
    "use strict";
    /**
     * Attaches the JS test behavior to weight div.
     */
    Drupal.behaviors.site = {
        attach: function(context, settings) {

          $('a').attr('data-toggle', 'tooltip').attr('data-placement', 'bottom');

            $('a.scroll-link').click(function() {
                var jump = $(this).attr('href');
                scrollToElement(jump, 1000, -60);
                return false;
            });

            // adding classes on scroll
            $(window).scroll(function(){
            var $header = $('#header-fixed');
            if ($(this).scrollTop() > 200){
              if(!$header.hasClass('scrolled')) {
                  $header.addClass("scrolled");
              }
            }
            else{
              if($header.hasClass('scrolled')) {
                $header.removeClass("scrolled");
              }
            }

          });

            $('#header-icon-search').click(function() {
              $('#header-fixed #header-hidden-search').toggleClass('header-search-menu-active');
              $('#header-fixed navigation').toggleClass('header-search-menu-active');
              return false;
            });

            // mobile menu
            $('#mobile-menu-toggle').click(function() {
              $('#mobile-menu').addClass('mobile-menu-active');
              return false;
            });
            $('#mobile-menu-close').click(function() {
              $('#mobile-menu').removeClass('mobile-menu-active');
              return false;
            });
        }

    };

})(jQuery, Drupal, drupalSettings);

function scrollToElement(selector, time, verticalOffset) {
  time = typeof(time) != 'undefined' ? time : 1000;
  verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
  element = jQuery(selector);
  offset = element.offset();
  offsetTop = offset.top + verticalOffset;
  jQuery('html, body').animate({
    scrollTop: offsetTop
  }, time, 'easeInOutQuint');
};

(function($) {
        $.fn.scrollToElement = function(selector, time, verticalOffset) {
                time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = jQuery(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    jQuery('html, body').animate({
      scrollTop: offsetTop
    }, time, 'easeInOutQuint');
        };
})(jQuery);
