<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionForm;
use App\Models\Test;
use App\Services\Question\CrudService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

/**
 * Class QuestionController
 * @package App\Http\Controllers
 */
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Test $test
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Test $test)
    {
        return view('question.index')->with('test', $test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Test $test
     * @return \Illuminate\Http\Response
     */
    public function create(Test $test)
    {
        $question = new Question([
            'test_id' => $test->getKey(),
        ]);
        $questionForm = new QuestionForm([
            'type' => QuestionForm::RADIO_BUTTON_TYPE,
        ]);
        $questionForm->setRelation('answers', new Collection());
        $question->setRelation('form', $questionForm);

        return view('question.create', [
            'question' => $question,
            'formTypes' => QuestionForm::types(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function store(Request $request)
    {
        $service = new CrudService();
        $service->create($request);

        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('question.show', ['question' => $question]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $forms = QuestionForm::types();
        $question->load(['form', 'form.answers']);

        return view('question.edit', [
            'question' => $question,
            'formTypes' => $forms,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Question $question
     * @return \Illuminate\Http\Response
     * @throws \Throwable
     */
    public function update(Request $request, Question $question)
    {
        $service = new CrudService();
        $service->update($request, $question);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question $question
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return response()->json();
    }
}
