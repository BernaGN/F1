<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\Request;

/**
 * Class PilotController
 * @package App\Http\Controllers
 */
class PilotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pantallas.catalogos.pilot.index', [
            'pilots' => Pilot::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pantallas.catalogos.pilot.create', [
            'pilot' => new Pilot(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pilot::$rules);

        Pilot::create($request->all());

        return redirect()->route('pilots.index')
            ->with('success', 'Pilot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Pilot $pilot
     * @return \Illuminate\Http\Response
     */
    public function show(Pilot $pilot)
    {
        return view('pantallas.catalogos.pilot.show', [
            'pilot' => $pilot,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Pilot $pilot
     * @return \Illuminate\Http\Response
     */
    public function edit(Pilot $pilot)
    {
        return view('pantallas.catalogos.pilot.edit', [
            'pilot' => $pilot,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pilot $pilot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilot $pilot)
    {
        request()->validate(Pilot::$rules);

        $pilot->update($request->all());

        return redirect()->route('pilots.index')
            ->with('success', 'Pilot updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Pilot $pilot)
    {
        $pilot->delete();

        return redirect()->route('pilots.index')
            ->with('success', 'Pilot deleted successfully');
    }
}
