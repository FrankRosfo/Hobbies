@extends('blog.template.details')
@section('Barra')
<a class="nav-link" href="blur">Blur
    <span class="sr-only">(current)</span>
</a>
@endsection
@section('Imagen')
<img src="assets/images/Image3.jpg" alt="">
@endsection
@section('Titulo')
<span>Blur</span>
<a href="blur"><h4>Pasatiempo o Misión</h4></a>
<p>Blur es un videojuego arcade desarrollado por Bizarre Creations y publicado por Activision en América del Norte y Europa. Cuenta con un estilo de carreras que incorpora los coches del mundo real y los locales con el manejo de estilo arcade y combate con vehículos.
<br><br>En el modo de un jugador, el mismo se enfrentará a numerosos personajes empleando vehículos licenciados que van del Dodge Viper al Lotus Exige, pasando por SUVs y otros todoterrenos, todos los cuales poseen un modelado completo de daños. Algunos de los mejores modelos de automóviles son ficticios, diseñados por Bizarre Creations.</p>
@endsection
@section('Coment')
<div class="sidebar-heading">
    <h2>3 comments</h2>
</div>
<div class="content">
    <ul>
    <li>
        <div class="author-thumb">
        <img src="assets/images/comment-author-01.jpg" alt="">
        </div>
        <div class="right-content">
        <h4>Charles Kate<span>May 16, 2020</span></h4>
        <p>Tiene mucho que no lo juego bro F.</p>
        </div>
    </li>
    <li class="replied">
    <div class="author-thumb">
        <img src="assets/images/comment-author-02.jpg" alt="">
        </div>
        <div class="right-content">
        <h4>Thirteen Man<span>May 22, 2020</span></h4>
        <p>Con eso te armas una PC Gamer XD.</p>
        </div>
    </li>
    <li>
        <div class="author-thumb">
        <img src="assets/images/comment-author-03.jpg" alt="">
        </div>
        <div class="right-content">
        <h4>Belisimo Mama<span>May 16, 2020</span></h4>
        <p>Es un juego muy bueno y muy adictivo.</p>
        </div>
    </li>
    </ul>
</div>
@endsection