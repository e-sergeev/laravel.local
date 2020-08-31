@extends('layouts.app')

@section('title') 
  {{$news['title']}}
@endsection;

@include('menu')

@section('content')
  <div class="container mt-2 p-4">
    <h2>{{ $news['title'] }}</h2>
    <p>{{ $news['text'] }}</p>
    <a href="{{ route('Category', $slug) }}">
      {{ $category }}
    </a>
  </div>
@endsection


@include('footer')