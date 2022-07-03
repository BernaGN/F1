<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Modulo;
use App\Models\Permiso;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.store')->only('store');
        $this->middleware('can:roles.update')->only('edit', 'update');
        $this->middleware('can:roles.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pantallas.sistema.roles.index', [
            'roles' => Rol::select('id', 'slug', 'name')->orderBy('id')->get(),
            'permisos' => Permiso::select('id', 'name', 'description')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pantallas.sistema.roles.create', [
            'role' => new Rol(),
            'modulos' => Modulo::select('id', 'name')->with('permisos:id,name,description,modulo_id')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = Rol::create(['name' => $request->name]);
        $role->permissions()->sync($request->permissions);
        toastr('El registro se agrego con exito.');
        return redirect()->route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('pantallas.sistema.roles.edit', [
            'role' => Rol::where('slug', $slug)->select('id', 'name', 'slug')->first(),
            'modulos' => Modulo::select('id', 'name')->with('permisos:id,name,description,modulo_id')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Rol $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        toastr('El modifico se agrego con exito.');
        return redirect()->route('roles.index');
    }
}
