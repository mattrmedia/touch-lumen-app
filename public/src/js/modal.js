const $ = require('jquery');

const mediaType = (content) => {
  const type = Object.keys(content)[0];
  const value = Object.values(content)[0];
  switch (type) {
    case 'video':
      return "<video src='/video/" + value + "' autoplay='true' controls ></video>";
    case 'article':
      return "<iframe src='" + value + "'></iframe>";
    default:
      return value;
  }
};

const show = (modal, content) => {
  const media = mediaType(content);

  modal.find('.modal-content__wrapper').append(media);
  $('body').addClass('modal--open');
};

const close = (modal) => {
  $('body').removeClass('modal--open');
  modal.find('.modal-content__wrapper').empty();
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
