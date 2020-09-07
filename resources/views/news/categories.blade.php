@extends('layouts.app')

@section('title', 'Категории')

@include('menu')

@section('content')
    <h3>Категории</h3>
      @foreach($categories as $item)
        <p>
          <a href="{{ route('Category', $item['slug']) }}">
            {{ $item['name'] }}
          </a>
        </p>
      @endforeach
@endsection
