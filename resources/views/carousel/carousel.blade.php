@php
  $count = 0;
  $last = false;
  $active = false;
  $length = count($categories);
@endphp
<h1 class="content__title h1">Welcome</h1> <!-- This should get moved somewhere easier to understand -->
<div id="carouselContainer" class="carousel set">
  @foreach($categories as $category)
    @php
      $count++;
    @endphp
    @if($count % 2)
      @include('carousel/ad', ['last' => $count == $length ? $last = true : $last = false])
    @endif
    @include('carousel/card', ['last' => $count == $length ? $last = true : $last = false, 'count' => $count])
  @endforeach
</div>
