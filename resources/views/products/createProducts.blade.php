<x-layout>

    <x-slot:title>Nuevo Producto</x-slot:title>

    <h1 class="text-center mb-5 fw-bold">Crear un nuevo producto</h1>

    @if($errors->any())
    <div class="alert alert-danger">Por favor revise los datos ingresados. Gracias!!!</div>
    @endif


    <form action="{{ route('products.createaccionproducts') }}" method="post">
        @csrf

        <div class="row g-3">

            <div class="col-md-6 mb-3">
                <label for="codigo" class="form-label">Codigo</label>
                <input
                    type="text"
                    id="codigo"
                    name="codigo"
                    class="form-control"
                    value="{{ old('codigo') }}"
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
                >

            </div>

            <div class="col-md-6 mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <input
                    type="text"
                    id="categoria"
                    name="categoria"
                    class="form-control"
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
                    value="{{ old('precio') }}"
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
                    value="{{ old('fechaEntrada') }}"
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
                >{{ old('descripcion') }}</textarea>

                @error('descripcion')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>

    </form>




</x-layout>
