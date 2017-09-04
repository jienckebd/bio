/**
 * @file
 * Handles AJAX fetching of views, including filter submission and response.
 */

(function ($, Drupal, drupalSettings) {
  'use strict';

  Drupal.behaviors.tm_theme_search = {
    attach: function (context, settings) {
      $('#header-search-toggle').hover(function () {
        $(this).addClass('active');
        $('#header-search-modal').addClass('active');
        $('#header-search-modal-inner input.form-search').focus();
      });
      $(document).on('click', function (e) {
        if ($(e.target).closest('#header-search-modal').length) {
          return;
        }
        $('#header-search-modal, #header-search-toggle').removeClass('active');
      });
    }
  };

  Drupal.behaviors.tm_theme = {
    attach: function (context, settings) {

      // Add active class to footer when scrolled past 200px.
      $(window).scroll(function () {
        var top = $(this).scrollTop();
        var header = $('#header');
        if (top > 100) {
          if (!header.hasClass('active')) {
            header.addClass('active');
          }
        }
        else {
          if (header.hasClass('active')) {
            header.removeClass('active');
          }
        }

        if (top <= 0) {
          $('#animated-banner img').attr('src', '/themes/custom/tm_theme/images/logo_animated.gif');
        }
      });

      $('#header-mobile-toggle').on('click', function (e) {
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
          $('header#header').removeClass('responsive');
        }
        else {
          $(this).addClass('active');
          $('header#header').addClass('responsive');
        }
      });

    }
  };

  Drupal.behaviors.tm_theme_sticky_scroll = {
    attach: function (context, settings) {

      $(window).scroll(function (event) {
        var y = $(this).scrollTop();

        $('.sticky-scroll').each(function () {
          var top = $(this).offset().top;
          if (!$(this).hasClass('active') && (y >= top - 70)) {
            $(this).addClass('active fixed');
          }
        });

        if ($(this).scrollTop() < 200) {
          $('.sticky-scroll').removeClass('active fixed');
        }

      });

    }
  };

  /**
   * Add necessary theming hooks.
   */
  $.extend(Drupal.theme, /** @lends Drupal.theme */ {

    /**
     * Renders an Ajax throbber.
     *
     * @return {string}
     *   The themed element.
     */
    ajaxThrobber: function () {
      return '<span class="ajax-progress"><i class="fa fa-refresh fa-spin"></i></span>';
    }

  });

})(jQuery, Drupal, drupalSettings);
