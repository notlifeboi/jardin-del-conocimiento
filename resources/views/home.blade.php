@extends ('plantilla')
@section('contenido')
<style>
  @media (min-width: 992px) {
    .direccion{
      display: flex; 
      align-items: center; 
      justify-content: center;
      text-align: center;
      font-size: 20px;
      font-family: 'regular';
      text-align: justify;
      direction: rtl;
    }
  }

  @media (max-width: 991px) {
    .direccion{
      font-size: 20px;
      font-family: 'regular';
      text-align: justify;
      direction: ltr;
    }
  }
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="container">
    <div class="row mb-5 mt-4" id="top3">
      <div class="col col-lg-6 col-md-12 col-12">
        <h3 style="text-align: justify">¡Las 3 plantas carnívoras más fascinantes para tu hogar!</h3>
        <p style="text-align: justify">
          Las plantas carnívoras no solo son llamativas y exóticas, sino que también son un recordatorio del ingenio de la naturaleza. Atraen y digieren insectos para obtener nutrientes, lo que las convierte en una adición única a cualquier hogar.
          A continuación, te presentamos 3 de las plantas carnívoras más fascinantes que puedes cultivar:
        </p>
        <a href="/top3"><button style="font-family: 'italic';"class="btn btn-outline-success col-12 m-1">ver mas</button></a>
      </div>
    <div class="col col-lg-6 col-md-12 col-12" id="col_home">
      <img src="img/categorias/Carnivoras.jpg" class="img_home mt-lg-0 mt-md-3 mt-3" alt="imagen1" style="width: 100%; max-height: 330px;">
    </div>
    </div>
    <div class="row">
        <div class="col col-lg-6 col-md-12 col-12" id="col_home">
          <img src="img\img3.jpg" class="img_home" alt="imagen2" style="max-width:90%;">
        </div>
        <div style="text-align: justify" class="col col-lg-6 col-md-12 col-12 mt-lg-0 mt-md-0 mt-3" id="col_home">
                <p>
                Destacamos los beneficios tanto físicos como emocionales
                que el contacto con la naturaleza y el cultivo de plantas
                pueden aportar a las personas.<br><br>
                Este proyecto aspira a abordar estos desafíos al educar y
                capacitar a las personas para que se conviertan en defensores
                activos de la naturaleza y adopten prácticas más sostenibles
                en sus vidas diarias.
                </p>
        </div>
    </div>
    <div class="row my-2 mb-5 mt-0 mt-lg-4 mt-md-0">
        <div class="direccion col col-lg-6 col-md-12 col-12">
                <p>
                Surgimos como una respuesta a la necesidad de reconectar a
                las personas con la naturaleza en un mundo cada vez más
                urbanizado y desconectado con ella.</br></br>
                A través de una plataforma educativa, buscamos proporcionar
                a los usuarios conocimientos y habilidades necesarias para
                cultivar y cuidar plantas en diversos entornos, desde jardines
                urbanos hasta espacios interiores
                </p>
        </div>
        <div class="col col-lg-6 col-md-12 col-12" id="col_home">
            <img src="img\img2.jpg" class="img_home" alt="imagen3" style="max-width:90%;">
        </div>
    </div>
  </div>
@endsection