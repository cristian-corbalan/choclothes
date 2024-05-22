<x-layout>
    <x-slot:title>Productos</x-slot:title>

    <h1 class="mb-5">Bienvenido al Panel del Administrador</h1>


    <div class="mb-3">
        <a href="{{ route('products.create') }}" class="d-grid gap-2 btn btn-outline-secondary rounded-0 mb-2">Nuevo
            Producto</a>
    </div>


    <table class="table table-light table-striped table-bordered">
        <thead class="text-center">
            <tr>
                <th>N°</th>
                <th>Imagen</th>
                <th>Categoria</th>
                <th>Codigo</th>
                <th>Modelo</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Fecha Entrada</th>
                <th>Selector</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($tiendas as $tienda)
                <tr>
                    <td> {{ $tienda->catalogoId }} </td>
                    <td> <img src= "{{ asset("img/$tienda->imagen") }}" class="img-fluid imgAdm"/></td>
                    <td> {{ $tienda->categoria }} </td>
                    <td> {{ $tienda->codigo }} </td>
                    <td> {{ $tienda->modelo }} </td>
                    <td> {{ $tienda->descripcion }} </td>
                    <td> {{ $tienda->precio }} </td>

                    <td>{{ $tienda->fechaEntrada->format('d/m/Y') }}</td>



                        <td class="">
                            <div class="gap-3 d-flex flex-column">
                            <a href="{{ route('products.cards', ['id' => $tienda->catalogoId]) }}"
                                class="btn btn-outline-info btn-sm rounded-0">Info</a>
                            <a href="{{ route('products.editproductsform', ['id' => $tienda->catalogoId]) }}"
                                class="btn btn-outline-success btn-sm rounded-0">Editar</a>
                            <a href="{{ route('products.deleteproductsform', ['id' => $tienda->catalogoId]) }}"
                                class="btn btn-outline-danger btn-sm rounded-0">Eliminar</a>
                            </div>

                        </td>

                </tr>
            @endforeach

        </tbody>
    </table>


</x-layout>
