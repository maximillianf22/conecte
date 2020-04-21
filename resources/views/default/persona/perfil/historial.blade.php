<div class="col-lg-6 bg-light pt-4">
    <div class="container">
        <h2 class="text-dark mt-2">Historial de solicitudes </h2>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Artista</th>
                    <th>Mensaje</th>
                    <th>Valor</th>
                    <th>Estado</th>
                    <th class="text-right">Fecha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(sizeof($historial)>=1)
                @foreach ($historial as $item)

                <tr>
                    <td class="text-center"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->MENSAJE}}</td>
                    <td class="text-right"> ${{ number_format($item->COSTO_DEDICATORIA, 2) }}</td>
                    <td>Estado</td>
                    <td>{{$item->CREATED_AT}}</td>
                    @if($item->URL_DE_RESPUESTA !== null)
                    <td class="text-right">
                        <a id="{{$item->ID}}" class="btn btn-success btn-sm ad-click-event btnVerResppuesta answer-solicitud">
                            Respuesta<i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </a>
                    </td>
                    @endif
                </tr>
                @endforeach
                @else
                <div class="nofilterFoundPendientes">
                    No tienes solicitudes
                </div>
                @endif
            </tbody>
        </table>
        {!! $historial->appends(Request::all())->render() !!}
    </div>
</div>