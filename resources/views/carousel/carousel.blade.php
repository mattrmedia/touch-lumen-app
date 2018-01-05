<h1 class="content__title h1">Welcome</h1> <!-- This should get moved somewhere easier to understand -->
<div class="carousel">
  @foreach($categories as $category)
    <article class="card" data-id="{{ $category['id'] }}">
      <a href="{{ route('category', ['id' => $category['id'] ])}}">
        <img class="card__image" src="/images/{{ $category['image'] }}" alt="{{ $category['name']}} Image">
        <h2 class="card__name">
          {{ $category['name'] }}
        </h2>
        <p class="card__copy">
          {{ $category['description'] }}
        </p>
        <button type="button" data-category="{{ str_replace(" ","_", strtolower($category['name'])) }}">Tap to Open</button>
      </a>
    </article>
  @endforeach
</div>
