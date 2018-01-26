const $ = require('jquery');

const show = (modal, content) => {
  modal.append(content);
  modal.removeClass('hide').addClass('show');
};

const close = (modal) => {
  modal.removeClass('show').addClass('hide');
  modal.find('#content-wrapper').empty();
};

const toggle = (e) => {
  const modal = $('.modal');
  const content = $(e.target).closest('.js-modal').data();
  const activated = modal.hasClass('show');

  if (activated) {
    close(modal);
  } else {
    show(modal, content);
  }
};

module.exports = {
  toggle,
};
