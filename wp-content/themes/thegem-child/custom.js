jQuery(document).ready(function ($) {
  // mobile menu I/O
  $('#primary-navigation button').toggle(function () {
    $('body').addClass('fixed')
  },function () {
    $('body').removeClass('fixed')
  })

  $('.js-scroll-to-top').on('click', function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
  })

  // desktop - remove last menu item
  $('.menu-item-cart').remove()

  // inject 2 menu items for mobile
  if ($(document).width() < 768) {
    // inject custom menu
    const menuItems = `<li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81 megamenu-first-element"><a target="_blank" href="mailto:press@joycewang.com">PRESS</a></li>
                      <li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81 megamenu-first-element"><a target="_blank" href="mailto:info@joycewang.com">CONTACT</a></li>`;
    $('#menu-item-81').after(menuItems)

    // add custom clost button
    $('#primary-menu').after('<div class="closs-menu-button"></div>')
    // click custom clost button trigger hide original one
    $('.closs-menu-button').on('click', function () {
      $('body.fixed .menu-toggle').trigger('click').hide()
      setTimeout(function(){
        // show original button again
        $('.menu-toggle').show();
      }, 500);
    })
  }
  // animation for homepage
  if ($('body.home').length) {
    // homepage slide in element
    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);

      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
            (element_top_position <= window_bottom_position)) {
          $element.addClass('in-view').fadeIn();
        } else {
          $element.removeClass('in-view');
        }
      });
    }
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
  }

  // check Safari
  const isSafari = navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1
  if (isSafari) {
    $('body').addClass('is-safari')
  }
})
