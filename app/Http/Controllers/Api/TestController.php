<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Theme;

/**
 * Class TestController
 * @package App\Http\Controllers\Api
 */
class TestController extends Controller
{
    /**
     * @param Theme $theme
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Theme $theme)
    {
        $tests = $theme->tests;

        return response()->json([
            'data' => $tests,
        ]);
    }
}
