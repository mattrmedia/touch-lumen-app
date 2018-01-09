<article class="card" data-id="{{ $category['id'] }}">
  <a class="card__link" href="{{ route('category', ['id' => $category['id']]) }}">
    <img class="card__image" src="/images/{{ $category['image'] }}" alt="{{ $category['name']}} Image">
    <div class="card__content">
      <div class="card__navigation card__navigation--left">
        @include('/shared/svgs/leftPaddle')
      </div>
      <div class="card__info">
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
      <div class="card__navigation card__navigation--right">
        @include('/shared/svgs/rightPaddle')
      </div>
    </div>
  </a>
</article>
