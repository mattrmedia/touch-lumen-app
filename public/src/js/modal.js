const $ = require('jquery');

const show = (modal, content) => {
  modal.append(content);
  $('body').addClass('modal--open');
};

const close = (modal) => {
  $('body').removeClass('modal--open');
  modal.find('.content__wrapper').empty();
};

const toggle = (e) => {
  const body = $('body');
  const modal = $('.modal');
  const content = $(e.target).closest('.js-modal').data();
  const activated = body.hasClass('modal--open');

  if (activated) {
    close(modal);
  } else {
    show(modal, content);
  }
};

module.exports = {
  toggle,
};
