<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use Illuminate\Http\Request;

/**
 * Class NationalityController
 * @package App\Http\Controllers
 */
class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationalities = Nationality::paginate();

        return view('pantallas.catalogos.nationality.index', compact('nationalities'))
            ->with('i', (request()->input('page', 1) - 1) * $nationalities->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationality = new Nationality();
        return view('pantallas.catalogos.nationality.create', compact('nationality'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Nationality::$rules);

        $nationality = Nationality::create($request->all());

        return redirect()->route('nationalities.index')
            ->with('success', 'Nationality created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nationality = Nationality::find($id);

        return view('pantallas.catalogos.nationality.show', compact('nationality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nationality = Nationality::find($id);

        return view('pantallas.catalogos.nationality.edit', compact('nationality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Nationality $nationality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nationality $nationality)
    {
        request()->validate(Nationality::$rules);

        $nationality->update($request->all());

        return redirect()->route('nationalities.index')
            ->with('success', 'Nationality updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $nationality = Nationality::find($id)->delete();

        return redirect()->route('nationalities.index')
            ->with('success', 'Nationality deleted successfully');
    }
}
