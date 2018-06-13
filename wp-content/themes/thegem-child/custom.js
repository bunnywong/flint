jQuery(document).ready(function ($) {
  // mobile menu I/O
  $('#primary-navigation button').toggle(function () {
    console.log('show menu');
    $('body').addClass('fixed')
  },function () {
    console.log('hide menu');
    $('body').removeClass('fixed')
  })
})
