@extends('layouts.app')

@section('title', 'Панель управления')
    
@include('menu')

@section('content')
  <h3>Панель управления</h3>
  <a href="{{ route('Admin.create')}} " class="btn btn-primary stretched-link">Добавить</a>
  <a href="#" class="btn btn-primary stretched-link">Редактировать</a>
  <a href="#" class="btn btn-danger stretched-link">Удалить</a>
@endsection

