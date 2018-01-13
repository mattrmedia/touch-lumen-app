@php
  $resources = [
    1 => 'support_savings.png',
    2 => 'anatomy_lib.png',
    3 => 'prescribed_reading.png',
    4 => 'info_doc.png',
    5 => 'whiteboard.png'
  ];
@endphp
<div class="header-menu fade-out" data-menu="header-menu">
  <div class="header-menu__wrapper">
    <section class="header-menu__content">
      <h5 class="header-menu__title h5">Resources</h5>
      <div class="columns">
        <div class="header-menu__row column column--5">
          <div class="tile">
            <div style="background: url('/images/resources/{{ $resources['1'] }}') center center/cover no-repeat; height: 175px;"></div>
            <p class="header-menu__subhead">Support &amp; Savings Programs</p>
          </div>
          <div class="tile">
            <div style="background: url('/images/resources/{{ $resources['2'] }}') center center/cover no-repeat; height: 175px;"></div>
            <p class="header-menu__subhead">Anatomy Library</p>
          </div>
          <div class="tile">
            <div style="background: url('/images/resources/{{ $resources['3'] }}') center center/cover no-repeat; height: 175px;"></div>
            <p class="header-menu__subhead">Prescribed Reading</p>
          </div>
          <div class="tile">
            <div style="background: url('/images/resources/{{ $resources['4'] }}') center center/cover no-repeat; height: 175px;"></div>
            <p class="header-menu__subhead">Information from Your Doctor</p>
          </div>
          <div class="tile">
            <div style="background: url('/images/resources/{{ $resources['5'] }}') center center/cover no-repeat; height: 175px;"></div>
            <p class="header-menu__subhead">Whiteboard</p>
          </div>
        </div>
      </div>

      <h5 class="header-menu__title h5">Frequently Used</h5>
      <div class="columns">
        <div class="header-menu__row column column--5">

        </div>
      </div>

      <h5 class="header-menu__title h5">Quick Links</h5>
      <div class="columns">
        <div class="header-menu__row">
          <a class="header-menu__button button button--primary" href="#">Portal URL</a>
          <a class="header-menu__button button button--primary" href="#">Website</a>
          <a class="header-menu__button button button--primary" href="#">Survey</a>
          <a class="header-menu__button button button--primary" href="#">Video</a>
          <a class="header-menu__button button button--primary" href="#">Video 2</a>
        </div>
      </div>
    </section>
    <footer class="header-menu__copyright">
      <span>&copy; {{ date('Y') }} PatientPoint <sup>&reg;</sup>, LLC</span>
      <a href="#">About PatientPoint<sup>&reg;</sup></a>
    </footer>
  </div>
</div>
