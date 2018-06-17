@extends('layout.app')

@section('content')
  <question-edit-form :question="{{ $question->toJson() }}" :form-types="{{ json_encode($formTypes) }}" action="create">
  </question-edit-form>
@stop