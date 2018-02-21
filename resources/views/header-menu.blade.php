@php
  $resources = [
    [
      'title' => 'Support &amp; Savings Programs',
      'image' => 'support_savings.png'
    ],
    [
      'title' => 'Anatomy Library',
      'image' => 'anatomy_lib.png',
    ],
    [
      'title' => 'Prescribed Reading',
      'image' => 'prescribed_reading.png'
    ],
    [
      'title' => 'Information from Your Doctor',
      'image' => 'info_doc.png'
    ],
    [
      'title' => 'Whiteboard',
      'image' => 'whiteboard.png'
    ]
  ];
@endphp

<div class="header-menu fade-out" data-menu="header-menu">
  <div class="header-menu__wrapper">
    <section class="header-menu__content">
      <h5 class="header-menu__title h5">Resources</h5>
      <div class="columns">
        <div class="header-menu__row column column--5">
          @foreach($resources as $resource)
            <div class="tile">
              <div style="background: url('/images/resources/{{ $resource['image'] }}') center center/cover no-repeat; height: 175px;"></div>
              <p class="header-menu__subhead">{{ $resource['title'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <h5 class="header-menu__title h5">Frequently Used</h5>
      <div class="columns">
        <div class="header-menu__row column column--4">
          @foreach(array_slice($topics->toArray(), 0, 12) as $topic)
            <div class="tile">
              <div style="background: url('/images/{{ $topic['image'] }}') center center/cover no-repeat; height: 200px; border-radius: 5px;"></div>
              <p class="tile__title tile__title--header">{{ $topic['title'] }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <div class="header-menu__bottom columns">
        @include('/shared/collapse-menu')
      </div>
    </section>
    <footer class="header-menu__copyright">
      <span>&copy; {{ date('Y') }} PatientPoint <sup>&reg;</sup>, LLC</span>
      <a href="#">About PatientPoint<sup>&reg;</sup></a>
    </footer>
  </div>
</div>
