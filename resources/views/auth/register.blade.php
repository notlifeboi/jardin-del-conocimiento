<!doctype html>
<html lang="en">
    <head>
        <title>Registrate</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
        
    </head>
    <body>
        <section class="h-100 background-image">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-6 col-md-8">
                        <div class="card rounded-3 text-black container-custom">
                            <div class="card-body mx-md-3">
                                <div class="text-center">
                                    <img src="{{ asset('img/logo.png') }}" style="width: 120px;" alt="logo">
                                    <h4 class="mt-1 mb-4">Registrate con nosotros</h4>
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <form action="{{route('register')}}" method="post">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline mb-3">
                                    <label class="form-label" for="form2Example11">Nombre</label>
                                        <input type="text" value="{{ old('name') }}" name="name" id="form2Example11" class="form-control"
                                        placeholder="Ingresa tu Nombre" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-3">
                                    <label class="form-label" for="form2Example11">Correo</label>
                                        <input type="email" value="{{ old('email') }}" name="email" id="form2Example11" class="form-control"
                                        placeholder="Ingresa tu correo" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-3">
                                    <label class="form-label" for="form2Example22">Contraseña</label>
                                        <input type="password" value="{{ old('password') }}" name="password" id="form2Example22" class="form-control" 
                                        placeholder="Ingresa tu contraseña" />
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label" for="form2Example22"> Confirmar Contraseña</label>
                                        <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" id="form2Example22" class="form-control" 
                                        placeholder="Ingresa tu contraseña" />
                                    </div>

                                    <input type="hidden" name="picture" value="img/fotopredeterminada.jpg">

                                    <div class="text-center pt-1 mb-2 pb-1">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-login btn-block fa-lg gradient-custom-2 mb-3" type="submit">Crear cuenta</button>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="mb-0 me-2">¿Ya tienes cuenta?</p>
                                        <a href="{{route('login')}}" class="btn btn-registrarse">Iniciar sesión</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
