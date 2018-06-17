<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Theme;

/**
 * Class ThemeController
 * @package App\Http\Controllers\Api
 */
class ThemeController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $themes = Theme::all();

        return response()->json([
            'data' => $themes,
        ]);
    }
}
