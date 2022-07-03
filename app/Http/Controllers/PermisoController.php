<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermisoStoreRequest;
use App\Http\Requests\PermisoUpdateRequest;
use App\Models\Modulo;
use App\Models\Permiso;
use Illuminate\Http\Request;

/**
 * Class PermisoController
 * @package App\Http\Controllers
 */
class PermisoController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:permisos.index')->only('index');
        $this->middleware('can:permisos.store')->only('create', 'store');
        $this->middleware('can:permisos.update')->only('edit', 'update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pantallas.sistema.permission.index', [
            'permissions' => Permiso::select('id', 'slug', 'name', 'description', 'modulo_id')
                ->with('modulo:id,name')
                ->when(empty($request->buscar) == false, fn($query) =>
                    $query->where('name', 'LIKE', '%' . $request->buscar . '%')
                        ->orWhere('description', 'LIKE', '%' . $request->buscar . '%')
                        ->orWhereRelation('modulo', 'name', 'LIKE', '%' . $request->buscar . '%')
                )
                ->orderBy('id')
                ->paginate(),
            'buscar' => $request->buscar,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pantallas.sistema.permission.create', [
            'modulos' => Modulo::pluck('name', 'id'),
            'permission' => new Permiso(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermisoStoreRequest $request)
    {
        Permiso::create($request->all());
        toastr('El registro se agrego con exito.');
        return redirect()->route('permisos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permiso $permiso)
    {
        return view('pantallas.sistema.permission.edit', [
            'modulos' => Modulo::pluck('name', 'id'),
            'permission' => $permiso,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Permiso $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(PermisoUpdateRequest $request, Permiso $permiso)
    {
        $permiso->update($request->all());
        toastr('El registro se modifico con exito.');
        return redirect()->route('permisos.index');
    }

}
