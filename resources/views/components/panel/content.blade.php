<div class="tab-content ml-3 w-100" id="v-pills-tabContent">
    @foreach ($items as $value)
        @if ($condicion->where('documento_id', $value->id)->count() > 0 || $seleccion == 1)
            <div class="tab-pane fade" id="v-pills-{{ Str::slug($value->nombre) }}" role="tabpanel"
                aria-labelledby="v-pills-{{ Str::slug($value->nombre) }}-tab">
                <small class="text-secondary">
                    @if ($condicion->where('documento_id', $value->id)->count() > 0)
                        Tienes
                        {{ $condicion->where('documento_id', $value->id)->count() }}
                        documento(s)/
                    @else
                        Sin Documentos/
                    @endif
                    <i class="fas fa-check-circle text-success"></i> Completo/
                    <i class="fas fa-exclamation text-danger"></i> Incompleto/
                    <i class="fas fa-hourglass-half text-primary"></i> En espera
                </small>
                <div class="row col-md-12">
                    @foreach ($condicion as $archivo)
                        @if ($value->nombre == $archivo->documento->nombre)
                            <div class="col">
                                <p class="mt-2" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="{{ $archivo->comentario }}">
                                    <label>{{ $archivo->nombre }}</label>
                                    <small class="ml-2">
                                        @if ($archivo->condicion_id == 1)
                                            <i class="fas fa-check-circle text-success"></i>
                                        @elseif ($archivo->condicion_id == 2)
                                            <i class="fas fa-exclamation text-danger"></i>
                                        @else
                                            <i class="fas fa-hourglass-half text-primary"></i>
                                        @endif
                                    </small>
                                </p>
                                <a class="btn btn-info" target="_blank" href="{{ asset($archivo->ruta) }}">
                                    <i class="fas fa-download"></i>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach
</div>
