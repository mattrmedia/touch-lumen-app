@php
  # TODO: This should be organized better
  $showNav = true;
@endphp

@extends('layout')
@section('content')
  <div class="category__bg" style="background: url('/images/{{ $category['image'] }}') center center/cover no-repeat;"></div>
  @include('categories/drawer')
@endsection
