const $ = require('jquery');
const toggle = require('./toggle.js');
const menu = require('./menu.js');
const carousel = require('./carousel.js');
const hammer = require('hammerjs');

$(function () {
  const carouselContainer = document.getElementById('carouselContainer');
  if (carouselContainer) {
    const mc = new Hammer(carouselContainer);
    const cards = $(carouselContainer).children();
    const length = cards.length;
    const active = cards.get(Math.floor(length / 2) - 1);
    $(active).addClass('active');

    mc.on('swiperight', carousel.move);
    mc.on('swipeleft', carousel.move);
    $(window).on('swipeleft', carousel.move);
    $('.card__navigation--right').on('click', carousel.move);
    $('.card__navigation--left').on('click', carousel.move);

    // setInterval(() => $(window).trigger('swipeleft'), 15000);
  }

  $('.js-toggle').on('click', toggle.toggle);
  $('.js-menu').on('click', menu.toggle);
});
