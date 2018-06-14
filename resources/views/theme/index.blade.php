@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">Темы тестов</h4>
    </div>
    <div class="col-md-12">
      <div class="card-box">
        <table class="table">
          <thead>
          <tr>
            <th>Название</th>
            <th>Количество тестов</th>
          </tr>
          </thead>
          <tbody>
          @foreach($themes as $theme)
            <tr>
              <th>
                <a href="{{ URL::route('theme.edit', $theme) }}">
                  {{ $theme->name }}
                </a>
              </th>
              <td>{{ $theme->tests_count }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
        {{ $themes->links() }}
        <div>
          <a href="{{ URL::route('theme.create') }}" class="btn btn-info">Добавить</a>
        </div>
      </div>
    </div>
  </div>
@stop