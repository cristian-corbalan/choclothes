<x-layout>

    <x-slot:title>Edición de Productos</x-slot:title>

    <h1 class="text-center mb-5 fw-bold">Panel de Edición</h1>

    @if($errors->any())
    <div class="alert alert-danger">Por favor revise los datos ingresados. Gracias!!!</div>
    @endif


    <form action="{{ route('products.editaccionproducts', ['id' => $tienda->catalogoId]) }}" method="post">
        @csrf

        <div class="row g-3">

            <div class="col-md-6 mb-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input
                    type="text"
                    id="codigo"
                    name="codigo"
                    class="form-control"
                    value="{{ old('codigo', $tienda->codigo) }}"
                >
                @error('codigo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror


            </div>

            <div class="col-md-6 mb-3">
                <label for="modelo" class="form-label">Modelo</label>

                <input
                    type="text"
                    id="modelo"
                    name="modelo"
                    class="form-control"
                    value="{{ old('modelo', $tienda->modelo) }}"
                >
                @error('modelo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="col-md-6 mb-3">
                <label for="imagen" class="form-label">Imagen</label>

                <input
                    type="file"
                    id="imagen"
                    name="imagen"
                    class="form-control"
                    value="{{ old('imagen', $tienda->imagen) }}"
                >

            </div>

            <div class="col-md-6 mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input
                    type="text"
                    id="categoria"
                    name="categoria"
                    class="form-control"
                    value="{{ old('categoria', $tienda->categoria) }}"
                >
                @error('categoria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="col-md-6 mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input
                    type="text"
                    id="precio"
                    name="precio"
                    class="form-control"
                    value="{{ old('precio', $tienda->precio) }}"
                >
                @error('precio')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="col-md-6 mb-3">
                <label for="fechaEntrada" class="form-label">Fecha de Entrada</label>
                <input
                    type="date"
                    id="fechaEntrada"
                    name="fechaEntrada"
                    class="form-control"
                    value="{{ old('fechaEntrada', $tienda->fechaEntrada->format('Y-m-d')) }}"
                >
                @error('fechaEntrada')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="col-md-6 mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea
                    id="descripcion"
                    name="descripcion"
                    class="form-control"
                >{{ old('descripcion', $tienda->descripcion) }}</textarea>

                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>

        <button type="submit" class="btn btn-secondary mb-5">Editar Producto</button>

    </form>




</x-layout>
