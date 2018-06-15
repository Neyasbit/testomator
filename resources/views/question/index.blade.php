@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">Вопросы теста "{{ $test->name }}"</h4>
    </div>
    <div class="col-md-12">
      <div class="card-box">
        <table class="table">
          <thead>
          <tr>
            <th>
              Текст
            </th>
            <th>
              Форма
            </th>
            <th>
              Ответов
            </th>
            <th>
              Правильный ответ
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach($questions as $question)
            <tr>
              <td>
                {{ $question->text_content }}
              </td>
              <td>
                {{ $question->form->type }}
              </td>
              <td>
                {{ $question->form->answers_count }}
              </td>
              <td>
                {{ $question->form->right_answer }}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        {{ $tests->links() }}
        <div>
          <a href="{{ URL::route('question.create') }}" class="btn btn-info">Добавить</a>
        </div>
      </div>
    </div>
  </div>
@stop