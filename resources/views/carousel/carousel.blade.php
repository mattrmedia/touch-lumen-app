@php
  $categories = [
    [
      'id' => '1',
      'name' => 'Heart Attack',
      'copy' => 'Reducing Your Risk',
      'image' => 'card6.png',
    ],
    [
      'id' => '2',
      'name' => 'Shingles',
      'copy' => 'Preventing this Painful Virus',
      'image' => 'card3.png',
    ],
    [
      'id' => '3',
      'name' => 'Bone Health and Osteoporosis',
      'copy' => 'Protecting Your Bones',
      'image' => 'card2.png',
    ],
    [
      'id' => '4',
      'name' => 'High Blood Pressure',
      'copy' => 'Improving Your Numbers',
      'image' => 'card5.png',
    ],
    [
      'id' => '5',
      'name' => 'Atrial Fibrillation',
      'copy' => 'Managing Irregular Heartbeat',
      'image' => 'afib_passive_card.jpg',
    ],
    [
      'id' => '6',
      'name' => 'Heartburn and Acid Reflux',
      'copy' => 'Reducing Stomach Acid',
      'image' => 'card7.png',
    ],
    [
      'id' => '7',
      'name' => 'Stroke',
      'copy' => 'Know the Signs',
      'image' => 'card8.png',
    ],
  ]
 @endphp

<div class="carousel">
  {{-- <h1 class="h1"><a href="{{ action('CategoryController@index') }}">Welcome</a></h1> --}}
  @foreach($categories as $category)
    <h2 class="carousel__name">
      {{ $category['name'] }}
    </h2>
    <p class="carousel__copy">
      {{ $category['copy'] }}
    </p>
    <a href="{{ route('category', ['id' => $category['id'] ])}}" data-category="{{ str_replace(" ","_", strtolower($category['name'])) }}">Tap to Open</a>
  @endforeach
</div>
