<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use App\Models\Audit;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use App\Models\Permiso;
use App\Models\Rol;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//Dashboard
Breadcrumbs::for('dashboard', fn(BreadcrumbTrail $trail) => $trail
    ->push('Darboard', route('home'))
);

//Sistema
Breadcrumbs::for('sistema', fn(BreadcrumbTrail $trail) => $trail
    ->push('Sistema')
);

//Sistema/Usuarios
Breadcrumbs::for('users.index', fn(BreadcrumbTrail $trail) => $trail
    ->parent('sistema')
    ->push('Usuarios', route('usuarios.index'))
);

Breadcrumbs::for('users.store', fn(BreadcrumbTrail $trail) => $trail
    ->parent('users.index')
    ->push('Agregar Usuario')
);

Breadcrumbs::for('users.update', fn(BreadcrumbTrail $trail, User $user) => $trail
    ->parent('users.index')
    ->push($user->name, route('usuarios.update', $user))
);

//Sistema/Roles
Breadcrumbs::for('roles.index', fn(BreadcrumbTrail $trail) => $trail
    ->parent('sistema')
    ->push('Roles', route('roles.index'))
);

Breadcrumbs::for('roles.store', fn(BreadcrumbTrail $trail) => $trail
    ->parent('roles.index')
    ->push('Agregar Rol')
);

Breadcrumbs::for('roles.update', fn(BreadcrumbTrail $trail, Rol $role) => $trail
    ->parent('roles.index')
    ->push($role->name, route('roles.update', $role))
);

//Sistema/Auditorias
Breadcrumbs::for('auditorias.index', fn(BreadcrumbTrail $trail) => $trail
    ->parent('sistema')
    ->push('Auditorias', route('auditorias.index'))
);

Breadcrumbs::for('auditorias.show', fn(BreadcrumbTrail $trail, Audit $audit) => $trail
    ->parent('auditorias.index')
    ->push($audit->auditable_id, route('auditorias.show', $audit))
);

//Sistema/Permisos
Breadcrumbs::for('permiso.index', fn(BreadcrumbTrail $trail) => $trail
    ->parent('sistema')
    ->push('Permisos', route('permisos.index'))
);

Breadcrumbs::for('permiso.store', fn(BreadcrumbTrail $trail) => $trail
    ->parent('permiso.index')
    ->push('Agregar Permiso')
);

Breadcrumbs::for('permiso.update', fn(BreadcrumbTrail $trail, Permiso $permiso) => $trail
    ->parent('permiso.index')
    ->push($permiso->name, route('permisos.update', $permiso))
);

//Catalogos
Breadcrumbs::for('catalogo', fn(BreadcrumbTrail $trail) => $trail
    ->push('Catalogo')
);
