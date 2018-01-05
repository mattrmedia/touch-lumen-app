<h1 class="content__title h1">Welcome</h1> <!-- This should get moved somewhere easier to understand -->
<div class="carousel">
  @foreach($categories as $category)
    @include('carousel/card')
  @endforeach
</div>
