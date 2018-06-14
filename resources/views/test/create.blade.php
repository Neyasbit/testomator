@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">
        Добавление теста
      </h4>
    </div>
    <div class="col-md-12">
      <div class="card-box">
        {{ Form::open(['route' => 'test.store', 'class' => 'form-horizontal', 'method' => 'post']) }}

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
          <label class="col-2 col-form-label" for="theme_id">Тема</label>
          <div class="col-10">
            {{ Form::select('theme_id', $themes->pluck('name', 'id'), null, ['class' => 'form-control']) }}
          </div>
        </div>

        <div class="form-group row">
          <input type="submit" class="btn btn-success" value="Добавить">
        </div>

        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop