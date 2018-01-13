const $ = require('jquery');

function show(modal, content) {
  modal.append(content);
  modal.removeClass('hide').addClass('show');
}

function close(modal, content) {
  modal.removeClass('show').addClass('hide');
  modal.remove(content);
}

module.exports = {
  show,
  close,
};
