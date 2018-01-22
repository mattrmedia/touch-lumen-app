const $ = require('jquery');

function active(element) {
  element.removeClass('fade-out');
  element.addClass('fade-in');
}

function inactive(element) {
  element.removeClass('fade-in');
  element.addClass('fade-out');
}

function toggle() {
  const type = $(this).data('target');
  const $ele = $(`[data-menu='${type}']`);
  const hidden = $ele.hasClass('fade-out');

  if (hidden) {
    active($ele);
  } else {
    inactive($ele);
  }
}

module.exports = {
  toggle,
};
