@extends('auth.layout')

@section('content')
  <div class="m-t-40 card-box">
    <div class="text-center">
      <h4 class="text-uppercase font-bold mb-0">Регистрация</h4>
    </div>
    <div class="p-20">

      {{ Form::open(['url' => URL::to('register'), 'class' => 'form-horizontal m-t-20']) }}

      <div class="form-group ">
        <div class="col-xs-12">
          <input class="form-control" type="email" name="email" placeholder="Email">
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <input class="form-control" type="password" name="password" placeholder="Пароль">
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <input class="form-control" type="password" name="password_confirmation" placeholder="Подтверждение пароля">
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <input class="form-control" type="password" name="password_confirmation" placeholder="Подтверждение пароля">
        </div>
      </div>

      <div class="form-group">
        <div class="col-xs-12">
          <div class="checkbox checkbox-custom">
            <input id="checkbox-signup" type="checkbox" checked="checked">
            <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
          </div>
        </div>
      </div>

      <div class="form-group text-center m-t-40 mb-0">
        <div class="col-xs-12">
          <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
            Register
          </button>
        </div>
      </div>

      {{ Form::close() }}

    </div>
  </div>
@endsection
