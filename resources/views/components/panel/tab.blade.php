<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    @foreach ($items as $value)
        @if ($condicion->where('documento_id', $value->id)->count() > 0 || $seleccion == 1)
            <button class="nav-link" id="v-pills-{{ Str::slug($value->nombre) }}-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-{{ Str::slug($value->nombre) }}" type="button" role="tab"
                aria-controls="v-pills-{{ Str::slug($value->nombre) }}" aria-selected="true">{{ $value->nombre }}
            </button>
        @endif
    @endforeach
</div>
