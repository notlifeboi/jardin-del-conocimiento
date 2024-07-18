@extends ('plantilla')
@section('contenido')
<div id="carouselExampleCaptions" class="carousel slide mb-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img\img1.jpg" class="d-block w-100" alt="imagen1">
      </div>
      <div class="carousel-item">
        <img src="img\img2.jpg" class="d-block w-100" alt="imagen2">
      </div>
      <div class="carousel-item">
        <img src="img\img3.jpg" class="d-block w-100" alt="imagen3"> 
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container">
    <div class="row my-5 " id="top3">
      <div class="col col-lg-6 col-sm-12 col-md-6 m-1">
        <h3>¡Las 3 plantas carnívoras más fascinantes para tu hogar!</h3>
        <p>
          Las plantas carnívoras no solo son llamativas y exóticas, sino que también son un recordatorio del ingenio de la naturaleza. Atraen y digieren insectos para obtener nutrientes, lo que las convierte en una adición única a cualquier hogar.
          A continuación, te presentamos 3 de las plantas carnívoras más fascinantes que puedes cultivar:
        </p>
        <a href="/top3"><button style="font-family: 'italic';"class="btn btn-outline-success col-12 m-1">ver mas</button></a>
      </div>
      <div class="col col-lg-5 col-sm-12 col-md-5 m-1" id="col_home" >
        <img src="img\categorias\Carnivoras.jpg" class="img_home" alt="imagen3">
      </div>
    </div>
    <div class="row">
      <center>
        <div class="col col-lg-6 col-sm-12 col-md-12 setoff-2" id="col_home" style="max-width:80%;">
            <img src="img\img3.jpg" class="img_home" alt="imagen3">
        </div>
        </center>
        <div class="col col-lg-6 col-sm-12 col-md-12" id="col_home" >
            <p>Destacamos los beneficios tanto físicos como emocionales
                que el contacto con la naturaleza y el cultivo de plantas
                pueden aportar a las personas. </br>
            </br>
                Este proyecto aspira a abordar estos desafíos al educar y
                capacitar a las personas para que se conviertan en defensores
                activos de la naturaleza y adopten prácticas más sostenibles
                en sus vidas diarias.</p>
        </div>
    </div>
    <div class="row my-2 mb-5">
        <div class="col col-lg-6 col-sm-12 col-md-6" id="col_home" >
            <p>Surgimos como una respuesta a la necesidad de reconectar a
                las personas con la naturaleza en un mundo cada vez más
                urbanizado y desconectado con ella.
            </br></br>
                A través de una plataforma educativa, buscamos proporcionar
                a los usuarios conocimientos y habilidades necesarias para
                cultivar y cuidar plantas en diversos entornos, desde jardines
                urbanos hasta espacios interiores</p>
        </div>
        <div class="col col-lg-6 col-sm-12 col-md-6" id="col_home" >
            <img src="img\img2.jpg" class="img_home" alt="imagen3" style="max-width:80%;">
        </div>
    </div>
  </div>
@endsection