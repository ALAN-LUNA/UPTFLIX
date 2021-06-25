@extends('layout.main')

@section('titulo')
    <title>Menu | UPTFLIX</title>
@endsection

@section('css')

@endsection

@section('titulo-pagina')
<h3> POPULAR EN UPTFLIX </h3>
@endsection

@section('contenido')
<body background="black">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 " src="https://dam.smashmexico.com.mx/wp-content/uploads/2018/07/12153950/deadpoolportadas_portada.jpg" alt="Deadpool" with="620" height="450">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 " src="https://www.xtrafondos.com/wallpapers/resized/iron-man-volando-7839.jpg?s=large" alt="Iron Man: el hombre de hierro" with="620" height="450">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 " src="https://www.xtrafondos.com/wallpapers/resized/guason-doble-7909.jpg?s=large" alt="El Guasón" with="620" height="450">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
  <hr>
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <hr>
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</body>

@endsection

@section('js')
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/sweetalert.js"></script>
@endsection