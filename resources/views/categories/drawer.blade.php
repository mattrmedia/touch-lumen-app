<div class="drawer">
  <div class="drawer__toggle js-toggle" data-toggle="drawer">
    @include('/shared/svgs/plus')
  </div>
  <h1 class="drawer__title h1">
    {{ $category['name'] }}
  </h1>
  <div class="drawer__content columns">
    <div class="column column--full">
      <div class="tile" style="background-color:red;">
        @include('/shared/tile')
      </div>
    </div>
    <div class="column column--3">
      @for ($i = 1; $i <= 6; $i++)
        @include('/shared/tile', ['category' => $category])
      @endfor
    </div>
  </div>
</div>
