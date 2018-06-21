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
})
