<div class="collapse-menu">
  <div class="collapse-menu__container">
    @foreach(array_slice($topics->toArray(), 0, 12) as $topic)
      <a class="collapse-menu__link button button--tertiary" href="{{ route('topic', ['id' => $topic['id']]) }}">
        {{ $topic['title'] }}
      </a>
    @endforeach
  </div>
  <div class="collapse-menu__nav">
    <div class="collapse-menu__label">
      <h3>All Topics</h3>
    </div>
    <div class="collapse-menu__toggle">
      @include('/shared/svgs/carrot')
    </div>
  </div>
</div>
