@extends('layouts.app')

@section('title', 'Панель управления')
    
@include('admin.menu')

@section('content')
  <div class="container mt-2 p-4">
    <h2>Панель управления</h2>
    <button class="btn btn-primary" type="submit">Добавить</button>
    <button class="btn btn-primary" type="submit">Редактировать</button>
    <button type="button" class="btn btn-danger">Удалить</button>
  </div> 
@endsection

@include('footer')