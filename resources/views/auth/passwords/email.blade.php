@extends('auth.layout')

@section('content')
  <div class="m-t-40 card-box">
    <div class="text-center">
      <h4 class="text-uppercase font-bold mb-0">Сброс пароля</h4>

      <p class="text-muted m-b-0 font-13 m-t-20">Введите ваш email и следуйте инструкциям в письме, чтобы сбросить
        пароль.</p>
    </div>
    <div class="p-20">

      {{ Form::open(['route' => 'password.email', 'method' => 'post', 'class' => 'form-horizontal m-t-20']) }}

      <div class="form-group">
        <div class="col-xs-12">
          <input class="form-control @if($errors->has('email')) parsley-error @endif" type="email" name="email" placeholder="Введите email">
          @if($errors->has('email'))
            <ul class="parsley-errors-list filled" id="parsley-id-5">
              <li class="parsley-required">{{ $errors->first('email') }}</li>
            </ul>
          @endif
        </div>
      </div>

      <div class="form-group text-center m-t-20 mb-0">
        <div class="col-xs-12">
          <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
            Отправить письмо
          </button>
        </div>
      </div>

      {{ Form::close() }}

    </div>
  </div>
@endsection
