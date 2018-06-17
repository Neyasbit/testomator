@extends('layout.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4 class="page-title">
        Детали вопроса
      </h4>
    </div>

    <div class="col-md-12">
      <div class="card-box">

        <h3>
          Текст вопроса
        </h3>

        <p>
          {{ $question->text_content }}
        </p>

        <h3>
          Форма вопроса
        </h3>

        <p>
          {{ $question->display_type }}
        </p>

        <h3>
          Список ответов
        </h3>

        <div>
          <table class="table">
            <thead>
            <tr>
              <th>
                Текст
              </th>
              <th></th>
            </tr>
            </thead>

            <tbody>
            @foreach($question->formAnswers as $answer)
              <tr>
                <td>
                  {{ $answer->text_content }}
                </td>
                <td>
                  {{ $answer->is_correct_answer ? 'Правильный' : '' }}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>

        <div class="row">
          <a href="{{ URL::route('question.edit', $question) }}" class="btn btn-success">Редактировать</a>
        </div>

      </div>
    </div>
  </div>
@stop