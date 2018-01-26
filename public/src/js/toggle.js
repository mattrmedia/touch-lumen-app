const $ = require('jquery');

const active = (element) => {
  element.addClass('active');
};

const inactive = (element) => {
  element.removeClass('active');
};

const toggle = (e) => {
  const $ele = $(e.currentTarget).parent();
  const activated = $ele.hasClass('active');

  if (activated) {
    inactive($ele);
  } else {
    active($ele);
  }
};

module.exports = {
  toggle,
  active,
  inactive,
};
