@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">{{ $theme->name }}</h4>
    </div>
    <div class="col-md-12">
      <div class="card-box">
        {{ Form::model($theme, ['route' => ['theme.update', $theme], 'class' => 'form-horizontal', 'method' => 'patch']) }}

        <div class="form-group row">
          <label class="col-2 col-form-label" for="name">Название</label>
          <div class="col-10">
            {{ Form::text('name', null, ['class' => 'form-control']) }}
          </div>
        </div>

        <div class="form-group row">
          <label class="col-2 col-form-label" for="description">Описание</label>
          <div class="col-10">
            {{ Form::text('description', null, ['class' => 'form-control']) }}
          </div>
        </div>

        <div class="form-group row">
          <input type="submit" class="btn btn-success" value="Сохранить">
        </div>

        {{ Form::close() }}
      </div>
    </div>
  </div>
@stop