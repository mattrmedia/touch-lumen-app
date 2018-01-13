const $ = require('jquery');
const toggle = require('./toggle.js');
const menu = require('./menu.js');
const carousel = require('./carousel.js');

$(function () {
  $('.js-toggle').on('click', toggle.toggle);
  $('.js-menu').on('click', menu.toggle);
  $('.card__navigation--right').on('click', carousel.moveCard);
  $('.card__navigation--left').on('click', carousel.moveCard);
});
