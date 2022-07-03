<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:usuarios.index')->only('index');
        $this->middleware('can:usuarios.store')->only('store');
        $this->middleware('can:usuarios.update')->only('edit', 'update');
        $this->middleware('can:usuarios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pantallas.sistema.usuarios.index', [
            'usuarios' => User::when($request->activo == 1, fn($query) => $query->onlyTrashed())
                ->when($request->activo == 2, fn($query) => $query->withTrashed())
                ->when(empty($request->buscar) == null, function ($query) use ($request) {
                    return $query->where('name', 'LIKE', '%' . $request->buscar . '%');
                })
                ->with('roles:name')->paginate(),
            'roles' => Role::select('id', 'name')->get(),
            'buscar' => $request->buscar,
            'activo' => $request->activo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pantallas.sistema.usuarios.create', [
            'usuario' => new User(),
            'roles' => Role::select('id', 'name')->get(),
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        if ($request->password != $request->confirmed) {
            toastr('Las contraseñas no coinciden.', 'info');
            return back();
        }

        $user = new User();
        $user->name = $request->name;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $user->roles()->sync($request->roles);
        toastr('El registro se agrego con exito.');
        return back();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        return view('pantallas.sistema.usuarios.edit', [
            'usuario' => $usuario->load('roles:id'),
            'roles' => Role::select('id', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $usuario)
    {
        if (!empty($request->password) && !password_verify($request->password, $usuario->password)) {
            toastr('Las contraseñas no coinciden.', 'info');
            return back();
        }

        $usuario->update([
            'name' => $request->name,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'password' => !empty($request->password) ? bcrypt($request->new_password) : $usuario->password,
        ]);
        $usuario->roles()->sync($request->roles);
        toastr('El registro se modifico con exito.');
        return redirect()->route('usuarios.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $slug)
    {
        User::where('slug', $request->slug)->first()->delete();
        toastr('El registro se elimino con exito.');
        return redirect()->route('usuarios.index');
    }

    public function restore(Request $request, $slug)
    {
        User::onlyTrashed()->where('slug', $request->slug)->first()->restore();
        toastr('El registro se restauro con exito.');
        return back();
    }
}
