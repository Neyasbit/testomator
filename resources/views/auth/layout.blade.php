<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Testomator - Вход</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

  <!-- App favicon -->
  <link rel="shortcut icon" href="/images/favicon.ico">

  <!-- App css -->
  {{ Html::style(mix('css/bootstrap.min.css')) }}
  {{ Html::style(mix('css/icons.css')) }}
  {{ Html::style(mix('css/styles.css')) }}

  {{ Html::script(mix('js/modernizr.min.js')) }}

</head>

<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
  <div class="text-center">
    <a href="{{ URL::to('/') }}" class="logo"><span>Testomator</span></a>
    <h5 class="text-muted mt-0 font-600">Сервис проведения тестирования</h5>
  </div>
  @yield('content')

</div>

{{ Html::script(mix('js/scripts.js')) }}

</body>
</html>