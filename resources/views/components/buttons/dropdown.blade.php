<div class="dropdown">
    <button class="btn btn-sm btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
        data-bs-toggle="dropdown">
        Opciones
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @can("$route.update")
            <a class="dropdown-item" href="{{ route("$route.edit", $value) }}">
                <i class="fa fa-fw fa-edit"></i> Editar
            </a>
        @endcan
    </div>
</div>
