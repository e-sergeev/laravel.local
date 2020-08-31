@extends('layouts.app')

@section('title')
  {{ ucfirst($category['name']) }}
@endsection

@include('menu')


@section('content')
<h3 class="text-capitalize">Категория: {{ $category['name']}}</h3>
  
@foreach ($news as $item)

<a href="{{ route('NewsOne', ['cat' => $slug, 'id' => $item['id']]) }}">
    {{ $item['title'] }}
  </a>
  <p>{{ $item['text'] }}</p>
    
@endforeach

@endsection

@include('footer')