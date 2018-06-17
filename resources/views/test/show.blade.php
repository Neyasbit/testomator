@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">{{ $test->name }}</h4>
    </div>
    <div class="col-md-12">
      <div class="card-box">
        {{ Form::model($test, ['class' => 'form-horizontal', 'method' => 'patch']) }}

        <div class="form-group row">
          <label class="col-2 col-form-label" for="name">Название</label>
          <div class="col-10">
            {{ Form::text('name', null, ['class' => 'form-control', 'disabled']) }}
          </div>
        </div>

        <div class="form-group row">
          <label class="col-2 col-form-label" for="description">Описание</label>
          <div class="col-10">
            {{ Form::text('description', null, ['class' => 'form-control', 'disabled']) }}
          </div>
        </div>

        <div class="form-group row">
          <label class="col-2 col-form-label" for="theme_id">Тема</label>
          <div class="col-10">
            {{ Form::text('theme_id', $test->theme->name, ['class' => 'form-control', 'disabled']) }}
          </div>
        </div>

        <div class="form-group row">
          <a href="{{ URL::route('test.edit', $test) }}" class="btn btn-info">Редактировать</a>
        </div>

        <div class="form-group row">
          <a href="{{ URL::route('question.index', $test) }}" class="btn btn-success">Список вопросов</a>
        </div>

        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop