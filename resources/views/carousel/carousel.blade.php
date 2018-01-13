@php
  $count = 0;
  $last = false;
  $length = count($categories);
@endphp
<h1 class="content__title h1">Welcome</h1> <!-- This should get moved somewhere easier to understand -->
<div class="carousel is-set">
  @foreach($categories as $category)
    @php
    $count++;

    if($count == $length) {
      $last = true;
    }
    @endphp
    @include('carousel/card', ['last' => $last])
  @endforeach
</div>
