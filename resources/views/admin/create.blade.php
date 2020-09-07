@extends('layouts.app')

@section('title', 'Панель управления')
    
@include('menu')

@section('content')
  <h3>Панель управления</h3>
  <a href="{{ route('Admin.create') }} " class="btn btn-primary stretched-link">Добавить</a>
  <a href="#" class="btn btn-primary stretched-link">Редактировать</a>
  <a href="#" class="btn btn-danger stretched-link">Удалить</a>

  <div class="row mt-5">
    <div class="col-4">
    <form action=" {{ route('Admin.create') }} " method="POST">
      @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Заголовок</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Заголовок новости..." name="title">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Категория</label>
      <select class="form-control" id="exampleFormControlSelect1" name="category">

        @forelse ($categories as $item)
          <option value="{{ $item['id'] }}"> {{ $item['name'] }} </option> 
        @empty
          <option value="0">Нет категории</option> 
        @endforelse

      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Текст новости</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1" name="isPrivate">Приватная</label>
    </div>
    <button class="btn btn-primary" type="submit">Готово</button>
  </form>
    </div>
  </div>
@endsection

