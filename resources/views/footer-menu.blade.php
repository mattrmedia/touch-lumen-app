@php
  $topics = [
    [
      'title' => "Atrial Fibrillation",
      'image' => "afib_complete_img.jpg",
    ],
  ];
@endphp

<div class="footer-menu fade-out" data-menu="footer-menu">
  <div class="footer-menu__wrapper">
    <h1 class="footer-menu__title h1">
      What would you like to see?
    </h1>
    <div class="footer-menu__content columns">
      <div class="column column--4">
        @foreach($topics as $topic)
          <div class="tile">
            <img src="/images/{{ $topic['image'] }}" alt="{{ $topic['title'] }} Image">
            <p class="header-menu__subhead">{{ $topic['title'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
