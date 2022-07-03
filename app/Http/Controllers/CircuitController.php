<?php

namespace App\Http\Controllers;

use App\Models\Circuit;
use Illuminate\Http\Request;

/**
 * Class CircuitController
 * @package App\Http\Controllers
 */
class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circuits = Circuit::paginate();

        return view('pantallas.catalogos.circuit.index', compact('circuits'))
            ->with('i', (request()->input('page', 1) - 1) * $circuits->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $circuit = new Circuit();
        return view('pantallas.catalogos.circuit.create', compact('circuit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Circuit::$rules);

        $circuit = Circuit::create($request->all());

        return redirect()->route('circuits.index')
            ->with('success', 'Circuit created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $circuit = Circuit::find($id);

        return view('pantallas.catalogos.circuit.show', compact('circuit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $circuit = Circuit::find($id);

        return view('pantallas.catalogos.circuit.edit', compact('circuit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Circuit $circuit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Circuit $circuit)
    {
        request()->validate(Circuit::$rules);

        $circuit->update($request->all());

        return redirect()->route('circuits.index')
            ->with('success', 'Circuit updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $circuit = Circuit::find($id)->delete();

        return redirect()->route('circuits.index')
            ->with('success', 'Circuit deleted successfully');
    }
}
