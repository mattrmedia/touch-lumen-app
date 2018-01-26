<div class="tile {{ isset($tile['type']) ? 'js-modal' : '' }}" data-{{ $tile['type'] }}="{{ setData($tile) }}" >
  <div class="tile__content">
    @isset($tile['type'])
      <div class="tile__icon">
        <img src="{{ setIcon($tile['type']) }}" alt="{{ $tile['type'] }} Icon">
      </div>
    @endisset
    <h5 class="tile__title {{ $feature ? 'h3' : 'h5' }}">{{ $tile['title'] }}</h5>
    @if($feature)
      <button class="tile__btn button button--primary" type="button">
        Start Here
      </button>
    @endif
  </div>
  <div class="tile__bg" style="background: url('/images/{{ $tile['image'] }}') center center/cover no-repeat; height: 320px;">
    <span class="tile__overlay"></span>
  </div>
</div>
