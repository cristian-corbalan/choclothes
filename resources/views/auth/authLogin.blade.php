<x-layout>
    <x-slot:title>Inicio de Sesión</x-slot:title>

    <h1 class="mb-3">Mi Cuenta</h1>

    <h2>Ingresa con tu correo y contraseña</h2>


    <div class="row my-5 py-4 justify-content-center">

        <div class= "col-md-5">

            <form class="row g-3" action="{{ route('auth.loginAccion') }}" method="POST">
                @csrf

                <div class="col-12 mb-3">

                    <label for="email" class="form-label">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           class="form-control"
                           value="{{ old('email') }}"
                    >

                </div>
                    <div class="col-12 mb-3">

                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password"
                               id="password"
                               name="password"
                               class="form-control"
                        >

                    </div>

                    <button type="submit" class="d-grid gap-2 btn btn-outline-secondary rounded-0 mb-5">Ingresar</button>
            </form>


        </div>

    </div>

</x-layout>
