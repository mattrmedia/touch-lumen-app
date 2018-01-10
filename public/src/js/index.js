const $ = require('jquery');

$(function () {

  function slideUp(element) {
    element.addClass('active');
  }

  function slideDown(element) {
    element.removeClass('active');
  }

  function toggleDrawer() {
    const $ele = $(this).parent();
    const active = $ele.hasClass('active');

    if (active) {
      slideDown($ele);
    } else {
      slideUp($ele);
    }
  }

  $('.js-toggle').on('click', toggleDrawer);
});
