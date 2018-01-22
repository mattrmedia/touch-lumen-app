<div class="footer-menu fade-out" data-menu="footer-menu">
  <div class="footer-menu__wrapper">
    <h1 class="footer-menu__title h1">
      What would you like to see?
    </h1>
    <div class="footer-menu__content columns">
      <div class="column column--4">
        @foreach(array_slice($topics->toArray(), 0, 12) as $topic)
          <div class="tile">
            <div style="background: url('/images/{{ $topic['image'] }}') center center/cover no-repeat; height: 200px; border-radius: 5px;"></div>
            <p class="tile__title tile__title--footer">{{ $topic['title'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
