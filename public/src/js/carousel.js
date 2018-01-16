const $ = require('jquery');

const next = (card, cards) => {
  let $nextCard;

  if (card.next().length > 0) {
    $nextCard = card.next();
  } else {
    $nextCard = cards.first();
  }

  return $nextCard;
};


const prev = (card, cards) => {
  let $prevCard;

  if (card.prev().length > 0) {
    $prevCard = card.prev();
  } else {
    $prevCard = cards.last();
  }

  return $prevCard;
};

const move = (e) => {
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

  // TODO: this is magic, it should be more explicit / understandable
  for (i = j = 2, ref; 2 <= ref ? j <= ref : j >= ref; i = 2 <= ref ? ++j : --j) {
    newLast = next(newLast, cards).css('order', i);
  }
};

module.exports = {
  move,
};
