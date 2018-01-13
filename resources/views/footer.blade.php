<div class="footer__menu">
  <a class="back" href="javascript:history.go(-1)">
    @include('shared/svgs/back', ['showNav' => $showNav])
  </a>

  @include('shared/svgs/menu')
  @include('shared/svgs/close', ['showNav' => false])
</div>
