@extends('layouts.app')

@section('title', 'Новости')

@include('menu')

@section('content')

  <h3>Новости</h3>

  @foreach ($news as $item)
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-12">
              <div class="card mb-2">
                  <div class="card-header">
                    <a href="{{ route('NewsOne', ['cat' => Str::slug($item['category']), 'id' => $item['id']]) }}">
                      {{ $item['title'] }}
                    </a>
                  </div>

                  <div class="card-body">
                    {{ $item['text'] }}
                  </div>
              </div>
          </div>
      </div>
  </div>

  @endforeach

@endsection