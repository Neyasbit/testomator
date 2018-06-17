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
          @foreach($test->questions as $question)
            <tr>
              <td>
                <a href="{{ URL::route('question.show', $question) }}">
                  {{ $question->text_content }}
                </a>
              </td>
              <td>
                {{ $question->display_type }}
              </td>
              <td>
                {{ $question->formAnswers()->count() }}
              </td>
              <td>
                {{ $question->correct_answers->count() > 1 ? 'Несколько правильных ответов' : $question->correct_answers->first()->text_content }}
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        <div>
          <a href="{{ URL::route('question.create', $test) }}" class="btn btn-info">Добавить</a>
        </div>
      </div>
    </div>
  </div>
@stop