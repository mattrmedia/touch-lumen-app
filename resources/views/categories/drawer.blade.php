<div class="drawer">
  <div class="drawer__toggle js-toggle" data-toggle="drawer">
    @include('/shared/svgs/plus')
  </div>
  <h1 class="drawer__title h1">
    {{ $category['name'] }}
  </h1>
  <div class="drawer__content columns">
    <div class="column column--full mb-2">
      @include('/shared/tile', ['tile' => $featured, 'feature' => true])
    </div>
    <div class="column column--3">
      @foreach($tiles as $tile)
        @include('/shared/tile', ['feature' => false])
      @endforeach
    </div>
  </div>
</div>
