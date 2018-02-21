@php
  $ads = ['custom_1.png', 'custom_2.png', 'custom_3.png', 'custom_4.png'];
@endphp

<article class="card {{ $last ? 'last' : '' }}" data-id="ad">
  <div class="card__content">
    <img class="card__image" src="/images/ads/{{ $ads[array_rand($ads)] }}" alt="placeholder">
    <div class="card__info card__info--no-gradient">
      <div class="card__navigation card__navigation--left" data-toggle="prev">
        @include('/shared/svgs/leftPaddle')
      </div>
      <div class="u-flex-bottom mb-3">
        <button class="button button--secondary" type="button" name="button">
          Tap to Open
        </button>
      </div>
      <div class="card__navigation card__navigation--right" data-toggle="next">
        @include('/shared/svgs/rightPaddle')
      </div>
    </div>
  </div>
</article>
