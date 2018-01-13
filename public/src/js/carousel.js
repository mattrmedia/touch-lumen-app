const $ = require('jquery');

const next = (el, eles) => {
  let $nextCard;

  if (el.next().length > 0) {
    $nextCard = el.next();
  } else {
    $nextCard = eles.first();
  }

  return $nextCard;
};


const prev = (el, eles) => {
  let $prevCard;

  if (el.prev().length > 0) {
    $prevCard = el.prev();
  } else {
    $prevCard = eles.last();
  }

  return $prevCard;
};

const moveCard = (e) => {
  const cards = $('.carousel').children();
  const ref = cards.length;
  const last = $('.last').removeClass('last');
  let newLast;

  if ($(e.currentTarget).data('toggle') === 'next') {
    newLast = next(last, cards);
  } else {
    newLast = prev(last, cards);
  }

  newLast.addClass('last').css('order', 1);

  for (i = j = 2, ref; 2 <= ref ? j <= ref : j >= ref; i = 2 <= ref ? ++j : --j) {
    newLast = next(newLast, cards).css('order', i);
  }
};

module.exports = {
  moveCard,
};
