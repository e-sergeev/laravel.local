@extends('layouts.app')

@section('title', 'Новости')

@include('menu')

@section('content')

  <h2>Новости</h2>

  @foreach ($news as $item)
    <a href="{{ route('NewsOne', ['cat' => Str::slug($item['category']), 'id' => $item['id']]) }}">
      {{ $item['title'] }}
    </a>
    <p>{{ $item['text'] }}</p>
  @endforeach

@endsection

@include('footer')