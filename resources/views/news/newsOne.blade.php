@extends('layouts.app')

@section('title') 
  {{$news['title']}}
@endsection

@include('menu')

@section('content')
    <h2>{{ $news['title'] }}</h2>
    <p>{{ $news['text'] }}</p>
    <a href="{{ route('Category', $slug) }}">
      {{ $category }}
    </a>
@endsection