@extends('auth.layout')

@section('content')
  <div class="m-t-40 card-box">
    <div class="text-center">
      <h4 class="text-uppercase font-bold mb-0">Авторизация</h4>
    </div>
    <div class="p-20">
      {{ Form::open(['url' => URL::to('auth/login'), 'method' => 'post', 'class' => 'form-horizontal m-t-20']) }}

      <div class="form-group">
        <div class="col-xs-12">
          <input class="form-control @if($errors->has('email')) parsley-error @endif" type="email" name="email"
                 placeholder="Email">
          @if($errors->has('email'))
            <ul class="parsley-errors-list filled" id="parsley-id-5">
              <li class="parsley-required">{{ $errors->first('email') }}</li>
            </ul>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <input class="form-control @if($errors->has('password')) parsley-error @endif" type="password" name="password"
                 placeholder="Пароль">
          @if($errors->has('password'))
            <ul class="parsley-errors-list filled" id="parsley-id-5">
              <li class="parsley-required">{{ $errors->first('password') }}</li>
            </ul>
          @endif
        </div>
      </div>

      <div class="form-group ">
        <div class="col-xs-12">
          <div class="checkbox checkbox-custom">
            <input id="checkbox-signup" name="remember" type="checkbox">
            <label for="checkbox-signup">
              Запомнить меня
            </label>
          </div>

        </div>
      </div>

      <div class="form-group text-center m-t-30">
        <div class="col-xs-12">
          <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Войти</button>
        </div>
      </div>

      <div class="form-group m-t-30 mb-0">
        <div class="col-sm-12">
          <a href="{{ URL::route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Забыли пароль?</a>
        </div>
      </div>

      {{ Form::close() }}

    </div>
  </div>
  <!-- end card-box-->

  @include('auth.inc.registration_link')
@stop