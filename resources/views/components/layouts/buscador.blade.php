<form action="{{ route("$route.index") }}" method="GET" autocomplete="off">
    <div class="input-group rounded">
        <input type="search" class="form-control rounded" placeholder="Buscar" aria-label="Search"
            aria-describedby="search-addon" name="buscar" value="{{ $buscar }}" />
        <button type="submit">
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
        </button>
    </div>
    @if ($show)
        <div class="row mt-2 mb-2 ml-2">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="activo" id="exampleRadios1" value="2"
                    {{ $activo == 2 ? 'checked' : '' }} onchange="submit()">
                <label class="form-check-label" for="exampleRadios1">Todos</label>
            </div>
            <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="activo" id="exampleRadios2" value="0"
                    {{ $activo == 0 || $activo == null ? 'checked' : '' }} onchange="submit()">
                <label class="form-check-label" for="exampleRadios2">Activos</label>
            </div>
            <div class="form-check ml-2">
                <input class="form-check-input" type="radio" name="activo" id="exampleRadios3" value="1"
                    {{ $activo == 1 ? 'checked' : '' }} onchange="submit()">
                <label class="form-check-label" for="exampleRadios3">Inactivos</label>
            </div>
        </div>
    @endif
</form>
