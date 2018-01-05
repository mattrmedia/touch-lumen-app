@extends('layout')
@section('content')
  <div class="category__bg" style="background: url('/images/{{ $category['image'] }}') center center/cover no-repeat fixed;"></div>
  @include('drawer')
@endsection
