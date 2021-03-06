<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

/**
 * Class RaceController
 * @package App\Http\Controllers
 */
class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Race::paginate();

        return view('pantallas.catalogos.race.index', compact('races'))
            ->with('i', (request()->input('page', 1) - 1) * $races->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $race = new Race();
        return view('pantallas.catalogos.race.create', compact('race'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Race::$rules);

        $race = Race::create($request->all());

        return redirect()->route('races.index')
            ->with('success', 'Race created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $race = Race::find($id);

        return view('pantallas.catalogos.race.show', compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);

        return view('pantallas.catalogos.race.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Race $race
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Race $race)
    {
        request()->validate(Race::$rules);

        $race->update($request->all());

        return redirect()->route('races.index')
            ->with('success', 'Race updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $race = Race::find($id)->delete();

        return redirect()->route('races.index')
            ->with('success', 'Race deleted successfully');
    }
}
