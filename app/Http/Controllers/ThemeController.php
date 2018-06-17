<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

/**
 * Class ThemeController
 * @package App\Http\Controllers
 */
class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::withCount('tests')->paginate(5);

        return view('theme.index')->with([
            'themes' => $themes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'name',
            'description',
        ]);

        Theme::create($data);

        return redirect()->route('theme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        return view('theme.edit')->with('theme', $theme);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
        $theme->update($request->only(['name', 'description']));

        return redirect()->route('theme.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theme $theme
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Theme $theme)
    {
        $theme->delete();

        return redirect()->route('theme.index');
    }
}
