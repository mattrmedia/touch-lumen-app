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

const setActiveCard = (card) => {
  const cards = $(card).siblings();
  $(card).addClass('active');
  cards.not(card).removeClass('active');
};

const move = (e) => {
  const carousel = $('#carouselContainer');
  const cards = $('.carousel').children();
  const ref = cards.length;
  const last = $('.last').removeClass('last');
  const active = cards.filter('.active');
  const prevActive = prev(active, cards);
  const nextActive = next(active, cards);
  let newLast;

  carousel.removeClass('set');
  setTimeout(() => carousel.addClass('set'), 50);

  if ($(e.currentTarget).data('toggle') === 'prev' || e.type === 'swiperight') {
    newLast = prev(last, cards);
    carousel.addClass('reverse');
    setActiveCard(prevActive);
  } else {
    newLast = next(last, cards);
    carousel.removeClass('reverse');
    setActiveCard(nextActive);
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
