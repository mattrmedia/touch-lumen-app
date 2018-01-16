<article class="card {{ $last ? 'last' : '' }}" data-id="{{ $category['id'] }}">
  <div class="card__content">
    <a class="card__link" href="{{ route('category', ['id' => $category['id']]) }}">
      <img class="card__image" src="/images/{{ $category['image'] }}" alt="{{ $category['name']}} Image">
    </a>
    <div class="card__info">
      <div class="card__navigation card__navigation--left" data-toggle="prev">
        @include('/shared/svgs/leftPaddle')
      </div>
      <div class="u-flex-bottom">
        <h1 class="card__name h1">
          {{ $category['name'] }}
        </h1>
        <p class="card__copy">
          {{ $category['description'] }}
        </p>
        <button class="button button--primary" type="button" data-category="{{ str_replace(" ","_", strtolower($category['name'])) }}">
          Tap to Open
        </button>
      </div>
      <div class="card__navigation card__navigation--right" data-toggle="next">
        @include('/shared/svgs/rightPaddle')
      </div>
    </div>
  </div>
</article>
