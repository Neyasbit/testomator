@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">
        Создание темы
      </h4>
    </div>
    <div class="col-md-12">
      <div class="card-box">
        <form action="{{ URL::route('theme.store') }}" class="form-horizontal" method="post">
          {{ csrf_field() }}

          <div class="form-group row">
            <label class="col-2 col-form-label" for="name">Название</label>
            <div class="col-10">
              <input type="text" id="name" name="name" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-2 col-form-label" for="description">Описание</label>
            <div class="col-10">
              <input type="text" id="description" name="description" class="form-control">
            </div>
          </div>

          <div class="form-group row">
            <input type="submit" class="btn btn-success" value="Добавить">
          </div>

        </form>
      </div>
    </div>
  </div>
@stop