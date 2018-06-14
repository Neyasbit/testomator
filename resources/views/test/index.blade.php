@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">Тесты</h4>
    </div>
    <div class="col-md-12">
      <div class="card-box">
        <table class="table">
          <thead>
          <tr>
            <th>
              Название
            </th>
            <th>
              Количество вопросов
            </th>
            <th>
              Тема
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach($tests as $test)
            <tr>
              <td>
                <a href="{{ URL::route('test.edit', $test) }}">
                  {{ $test->name }}
                </a>
              </td>
              <td>
                {{ $test->questions_count }}
              </td>
              <td>
                {{ $test->theme->name }}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        {{ $tests->links() }}
        <div>
          <a href="{{ URL::route('test.create') }}" class="btn btn-info">Добавить</a>
        </div>
      </div>
    </div>
  </div>
@stop