<?php
/** @var \App\Models\Tienda $tienda */
?>

<x-layout>

    <x-slot:title>{{ $tienda->modelo }}</x-slot:title>

    <h1>Producto</h1>

    <div class="container">
        <div class="row">

            <div class="col">
                <div class="card mb-5">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset("img/$tienda->imagen") }}" class="img-fluid rounded-start border-end"
                                alt="Portada de  {{ $tienda->modelo }}">
                        </div>
                        <div class="col-md-7 d-flex flex-column p-3">
                            <div class="card-body flex-grow-0">
                                <h2 class="card-title fs-2 mb-4">{{ $tienda->modelo }}</h2>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="fw-bold">Codigo:</span> {{ $tienda->codigo }}</li>
                                <li class="list-group-item"><span class="fw-bold">Categoria:</span> {{ $tienda->categoria }}</li>
                                <li class="list-group-item"><span class="fw-bold">Detalle de la prenda:</span> {{ $tienda->descripcion }}
                                </li>
                            </ul>

                            <div class="card-body flex-grow-0 mt-auto">
                                <div class="fs-3 mb-3 fw-bold text-center">${{ $tienda->precio }}</div>
                                <a href="{{ route('products.cards', ['id' => $tienda->catalogoId]) }}" class="btn btn-secondary w-100 fw-bold">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





</x-layout>







