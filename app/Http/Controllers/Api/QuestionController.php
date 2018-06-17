<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Test;

/**
 * Class QuestionController
 * @package App\Http\Controllers\Api
 */
class QuestionController extends Controller
{
    /**
     * @param Test $test
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Test $test)
    {
        $questions = $test->questions()->with('formAnswers');

        return response()->json([
            'data' => $questions,
        ]);
    }
}
