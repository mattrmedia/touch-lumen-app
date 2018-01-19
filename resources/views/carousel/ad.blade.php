<article class="card {{ $last ? 'last' : '' }}" data-id="ad">
  <div class="card__content">
    {{-- <img class="card__image" src="/images/{{ $ad['image'] }}" alt="{{ $ad['name']}} Image"> --}}
    <img class="card__image" src="http://placehold.it/780x1170" alt="placeholder">
    <div class="card__info">
      <div class="card__navigation card__navigation--left" data-toggle="prev">
        @include('/shared/svgs/leftPaddle')
      </div>
      <div class="u-flex-bottom mb-3">
        <button class="button button--secondary" type="button" name="button">
        {{-- <button class="button button--primary" type="button" data-ad="{{ str_replace(" ","_", strtolower($ad['name'])) }}"> --}}
          Tap to Open
        </button>
      </div>
      <div class="card__navigation card__navigation--right" data-toggle="next">
        @include('/shared/svgs/rightPaddle')
      </div>
    </div>
  </div>
</article>
