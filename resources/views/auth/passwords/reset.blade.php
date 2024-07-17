<!doctype html>
<html lang="en">
    <head>
        <title>Iniciar sesion</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        
    </head>
    <body>
        <section class="h-100 background-image">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-6 col-md-8">
                        <div class="card rounded-3 text-black container-custom">
                            <div class="card-body mx-md-4">
                                <div class="text-center">
                                    <img src="{{ asset('img/logo.png') }}" style="width: 120px;" alt="logo">
                                    <h4 class="mt-1 mb-4">Actualización de contraseña</h4>
                                </div>
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                        <label for="email" class="col-form-label">{{ __('Correo') }}</label>
                                        <div class="form-outline mb-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ 'Correo no coincidente, por favor digite su correo' }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label for="password" class="col-form-label">{{ __('Contraseña') }}</label>
                                        <div class="form-outline mb-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ 'Las contraseñas no coinciden (minimo 8 carácteres)'}}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <label for="password-confirm" class="col-form-label">{{ __('Confirmar Contraseña') }}</label>
                                        <div class="form-outline mb-3">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="text-center mt-5">
                                            <button type="submit" class="text-center btn btn-login">
                                                {{ __('Actualizar') }}
                                            </button>
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
