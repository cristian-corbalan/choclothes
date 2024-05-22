<?php
/** @var \App\Models\Tienda $tienda */
?>

<x-layout>

    <x-slot:title>Esta seguro/a que desea elimianar el producto: "{{ $tienda->modelo }}"</x-slot:title>

    <h1 class="mb-3">{{ $tienda->modelo }}</h1>

    <dl class="mb-3">

        <dt>Codigo</dt>
        <dd>${{ $tienda->codigo }}</dd>

        <dt>Categoria</dt>
        <dd>${{ $tienda->categoria }}</dd>

        <dt>Precio</dt>
        <dd>${{ $tienda->precio }}</dd>

        <dt>Fecha de Entrada</dt>
        <dd>{{ $tienda->fechaEntrada }}</dd>

        <dt>Descripción</dt>
        <dd>{{ $tienda->descripcion }}</dd>

    </dl>

    <form
        action="{{ route('products.deleteaccionproducts', ['id' => $tienda->catalogoId]) }}"
        method="POST"
        class="ms-2"
    >
        @csrf
        <button type="submit" class="btn btn-danger mb-5">Eliminar</button>
    </form>

</x-layout>
