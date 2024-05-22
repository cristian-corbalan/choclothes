<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!------ title ------>

    <title>{{ $title }} :: DecaSport</title>

    <!------ styles ------>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>


<body>

    <!---------------------------- Header ----------------------------->
    <div>
        <header>
            <header>
                <div class="logo">
                   <!-- <h1>DecaSport</h1> -->
                </div>
              </header>
        </header>
    </div>

    <!---------------------------- Navegation ----------------------------->



    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand"  href="#"> <img src= {{asset("img/logo/nuevo.jpg")}}  alt="logo de la empresa"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">

                <ul class="navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('newIn') }}">Productos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.products') }}">Catalogo</a>
                        </li>
                    @endauth

                    @guest

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.loginForm') }}">Login</a>
                        </li>

                        @else
                            <li class="nav-item">
                                <form action="{{ route('auth.logoutAccion') }}" method="post">
                                    @csrf

                                    <button class="nav-link">{{ auth()->user()->email }} (Cerrar Sesión)</button>
                                </form>

                    @endguest

                </ul>

            </div>
        </div>
    </nav>



    <main>

        @if(session()->has('feedback.message'))

        <div class="alert alert-{{ session()->get('feedback.type', 'success') }}">{!! session()->get('feedback.message') !!}</div>

        @endif

        {{ $slot }}

    </main>


    <footer>

        <section class="flex justify-center items-center h-24 bg-slate-700 text-black">
            <div class="container text-center text-md-start mt-5">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h2 class="text-uppercase fw-bold mb-4">
                            <a class="navbar-brand" href=""> <img src={{asset("img/logo/nuevo.jpg")}} alt="logo de la empresa"></a>
                        </h2>

                    </div>


                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h2 class="text-uppercase fw-bold mb-4">Seguinos: </h2>
                        <p><i class="fab fa-instagram fa-2x"></i> DecaSport28</p>

                    </div>



                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h2 class="text-uppercase fw-bold mb-4">Horarios</h2>
                        <p><i class="fas fa-clock me-3"></i>Lun a Vie de 9.00 a 17.30 hs</p>
                        <p><i class="fas fa-clock me-3"></i>Sáb de 9.00 a 14.00 h</p>

                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h2 class="text-uppercase fw-bold mb-4">Contacto</h2>
                        <p><i class="fas fa-home me-3"></i>Corrientes 2515 Maipu </p>
                        <p><i class="fas fa-phone me-3"></i>Tel: (54) 011 2464-5555</p>


                    </div>

                </div>


            </div>
        </section>

        <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.025);">
            <p> ©2024 DecaSport: Todos los derechos reservados</p>
        </div>

    </footer>


    <!------ Bundke Js ------>

    <script src="{{ url('js/bootstrap.bundle.js') }}"></script>


</body>

</html>
