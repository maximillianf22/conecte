<div class="col-lg-6 bg-light pt-4">
    <div class="container">
        <h3 class="text-white">Pagos</h3>
        <!--<h4 class="text-white lead mt-0"> Puedes ver y editar tarjetasde credito aqui </h4>-->
        <div class="container mx-auto">
            <!--<div class="row mx-auto">
                <div class="col-6 mx-auto">
                    <img src="{{ asset('assets/img/card.png') }}" class="" alt="...">
                    <br>
                    <h4>XXXXXXXXXXXXXXX-9806</h4>
                    <div class="row mx-auto ml-0">
                        <div class="col-6">
                            <button class="btn btn-round btn-warning"> Editar</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-round btn-danger"> Eliminar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6 mx-auto">
                    <button class="btn btn-success btn-fab btn-icon btn-round btn-block btn-lg">
                        <h1 class="mt-3">+</h1>
                    </button> Añadir Tarjeta
                    <button class="btn btn-success btn-fab btn-icon btn-round btn-block btn-lg">
                        <h1 class="mt-3">+</h1>
                    </button> Añadir Cuenta Bancaria
                </div>
            </div>-->
            <div class="row">
                <div class="col">
                    <div class="card p-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tipo</th>
                                    <th>Artista</th>
                                    <th>Valor</th>
                                    <th class="text-right">Fecha</th>
                                    <th class="text-right">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($movimientos as $movimiento)
                                <tr>
                                    <td class="text-center"><h6>{{$loop->iteration}}</h6></td>
                                    <td><h6>{{$movimiento->tipoMovimiento->first()->NOMBRE}}</h6></td>
                                    <td><h6>{{$movimiento->userArtista->first()->name}}</h6></td>
                                    <td><h6>${{number_format($movimiento->COSTO_TOTAL)}}</h6></td>
                                    <td class="text-right"><h6>{{$movimiento->CREATED_AT}}</h6></td>
                                    <td class="td-actions text-right"><h6>
                                        {{$movimiento->estado->first()->NOMBRE}}
                                    </h6></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $movimientos->appends(Request::all())->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>