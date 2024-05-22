<x-layout>
    <x-slot:title>Productos</x-slot:title>

    <h1>Nuestros Productos</h1>


    <div class="container">
        <div class="row">

            @foreach ($tiendas as $tienda )

                <div class="col-md-6 col-lg-4">

                    <div class="card mb-3">

                        <div class="product_item" >


                            <div class="tarjeta">
                                <div class="tarjeta_imagen">
                                    <img src={{asset("img/$tienda->imagen")}} class="card-img-top imgRecortar" alt="Portada de {{$tienda->categoria}}">
                                </div>
                            </div>

                            <div class="card-body">
                                <h2 class="card-title">{{$tienda->modelo}}</h2>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="fw-bold">Descripción:</span>{{substr($tienda->descripcion, 0, 80)}}</li>
                                <li class="list-group-item"><span class="fw-bold">Código:</span>{{$tienda->codigo}}</li>
                            </ul>

                            <div class="precio">
                                <div class="card-body">
                                    <div class="fs-3 mb-3 fw-bold text-center">{{$tienda->precio}}</div>
                                </div>
                            </div>

                            <div class="botonProducto">
                                <a href="{{ route('products.cards', ['id' => $tienda->catalogoId]) }}"
                                 class="btn btn w-100 fw-bold"> COMPRAR</a>
                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>
</div>








</x-layout>
