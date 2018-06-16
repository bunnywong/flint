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
  let menuItems = `<li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81 megamenu-first-element"><a target="_blank" href="mailto:press@joycewang.com">PRESS</a></li>
                    <li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81 megamenu-first-element"><a target="_blank" href="mailto:info@joycewang.com">CONTACT</a></li>`;
  if ($(document).width() < 768) {
    $('.menu-item-cart').after(menuItems)
  }
  }
})
