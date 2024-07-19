@extends('plantilla')
@section('contenido')
<style>
    body {
    font-family: 'Italic', sans-serif;
    }
    
    .file-upload {
        display: inline-block;
        max-width: 150px;
        background-color: #1C622D;
        color: white;
    }

    .file-upload:hover {
        background-color: #6A994E;
        color: white;
    }

    .form-control{
        border-color: #6A994E;
    }
    .form-control:focus {
        outline: none;
        box-shadow: 0 0 10px #6A994E;
        border-color: #6A994E;
    }
    .form-control:focus {
        outline: none;
        box-shadow: 0 0 10px #1C622D;
    }
    .container-custom {
        max-width: 500px;
        background-color: #ffffff;
        padding: 20px;  
        border-radius: 20px;
        box-shadow: 1px 1px 3px 3px #5f5e5e;
    }

    .btn-guardar {
        background-color: #1C622D;
        border-color: #1C622D;
        color: #fff;
        max-width: 150px;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-guardar:hover {
        background-color: #6A994E;
        border-color: #6A994E;
        color: #fff;
    }
    </style>
</head>
<body class="container-principal" >
    @foreach ($editarPerfil as $editar)
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="container-custom text-center">
            <form action="/profile/{{ $editar->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <h3 class="texto-perfil">Seleccione su foto de perfil</h3>
                    <div id="preview" class="mb-4">
                        <img style="object-fit: cover; height: 100px; width: 100px; border-radius: 50%;" src="{{ $editar->picture }}" alt="preview">
                    </div>
                    <label role="button" for="picture-upload" class="file-upload btn btn-outline-secondary w-100">
                        Seleccionar
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                            <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383"/>
                            <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708z"/>
                        </svg>
                    </label>
                    <input name="pictureEdit" type="file" id="picture-upload" accept="image/*" onchange="preview()" class="d-none">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Digite su nuevo nombre</label>
                    <input name="nameEdit" id="name" class="form-control" value="{{ $editar->name }}" type="text">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Digite su nuevo correo</label>
                    <input name="emailEdit" id="email" class="form-control" value="{{ $editar->email }}" type="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Digite su nueva contraseña</label>
                    <input name="passwordEdit" id="password" class="form-control" type="password">
                </div>
                <button type="submit" class="btn btn-guardar w-100">Guardar cambios</button>
            </form>
        </div>
    </div>
    @endforeach
    <script>
        function preview() {
            var input = event.target;
            var reader = new FileReader();
            var container = document.getElementById('preview');

            reader.onload = function(){
                var img = container.querySelector('img');
                img.src = reader.result;
                img.alt = "preview";
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</body>
</html>
@endsection