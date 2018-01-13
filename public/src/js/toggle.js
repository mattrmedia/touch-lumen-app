const $ = require('jquery');

function active(element) {
  element.addClass('active');
}

function inactive(element) {
  element.removeClass('active');
}

function toggle() {
  const $ele = $(this).parent();
  const activated = $ele.hasClass('active');

  if (activated) {
    inactive($ele);
  } else {
    active($ele);
  }
}

module.exports = {
  active,
  inactive,
  toggle,
};
