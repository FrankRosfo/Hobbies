@extends('blog.template.details')
@section('Barra')
<a class="nav-link" href="crash">Crash
    <span class="sr-only">(current)</span>
</a>
@endsection
@section('Imagen')
<img src="assets/images/Image2.jpg" alt="">
@endsection
@section('Titulo')
<span>Crash Team Racing</span>
<a href="crash"><h4>Un clasico de los Videojuegos</h4></a>
<p>Crash Team Racing es la cuarta entrega de la serie Crash Bandicoot. La historia del videojuego se centra en los esfuerzos de un equipo variopinto de personajes de la serie Crash Bandicoot, que debe competir contra el gasmoxiano Nitrous Oxide para salvar a su planeta de convertirlo en un estacionamiento intergaláctico. En el videojuego, los jugadores pueden tomar el control de uno de los quince personajes de la serie Crash Bandicoot, aunque solo ocho están disponibles al principio.
<br><br>Durante las carreras, los potenciadores ofensivos y de impulso de velocidad se pueden usar para obtener una ventaja. Crash Team Racing fue elogiado por los críticos por su jugabilidad y gráficos, aunque la calidad del audio tuvo opiniones diferenciadas. Una secuela directa hecha por Vicarious Visions, Crash Nitro Kart, fue lanzada en el 2003 para Game Boy Advance, GameCube, PlayStation 2, Xbox y N-Gage.</p>
@endsection
@section('Coment')
<div class="sidebar-heading">
    <h2>4 comments</h2>
</div>
<div class="content">
    <ul>
    <li>
        <div class="author-thumb">
        <img src="assets/images/comment-author-01.jpg" alt="">
        </div>
        <div class="right-content">
        <h4>Charles Kate<span>May 16, 2020</span></h4>
        <p>Es un clasico de la infancia y una gran manera de disfrutar y divertirse con amigos.</p>
        </div>
    </li>
    <li class="replied">
        <div class="author-thumb">
        <img src="assets/images/comment-author-02.jpg" alt="">
        </div>
        <div class="right-content">
        <h4>Thirteen Man<span>May 20, 2020</span></h4>
        <p>Nadie mejor que crashito pero pronto sera de Xbox yo lo se, vengo del futuro.</p>
        </div>
    </li>
    <li>
        <div class="author-thumb">
        <img src="assets/images/comment-author-03.jpg" alt="">
        </div>
        <div class="right-content">
        <h4>Belisimo Mama<span>May 16, 2020</span></h4>
        <p>Fue de los primero juegos de la Play1 y ahora tambien lo juego en la Play4.</p>
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
    </ul>
</div>
@endsection

