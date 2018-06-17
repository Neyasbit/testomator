@extends('layout.app')

@section('content')
  <question-edit-form :question="{{ $question->toJson() }}" :form-types="{{ json_encode($formTypes) }}"></question-edit-form>
@stop