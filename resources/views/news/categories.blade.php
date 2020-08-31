@extends('layouts.app')

@include('menu')

@section('title', 'Категории')


@section('content')
  <div class="container mt-2 p-4">
    <h2>Категории</h2>
    @foreach($categories as $item)
      <p>
        <a href="{{ route('Category', $item['slug']) }}">
          {{ $item['name'] }}
        </a>
      </p>
    @endforeach
  </div>
@endsection


@include('footer')