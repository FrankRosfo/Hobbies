@extends('blog.template.details')
@section('Barra')
<a class="nav-link" href="programar">Programar
    <span class="sr-only">(current)</span>
</a>
@endsection
@section('Imagen')
<img src="assets/images/Image1.jpg" alt="">
@endsection
@section('Titulo')
<span>Programar</span>
<a href="programar"><h4>Programar es amar y llorar</h4></a>
<p>La programación es el proceso utilizado para idear y ordenar las acciones necesarias para realizar un proyecto. En la actualidad, la noción de programación se encuentra muy asociada a la creación de aplicaciones de informática y videojuegos.</p>
@endsection
@section('Coment')
<div class="sidebar-heading">
    <h2>2 comments</h2>
</div>
<div class="content">
    <ul>
    <li>
        <div class="author-thumb">
        <img src="assets/images/comment-author-01.jpg" alt="">
        </div>
        <div class="right-content">
        <h4>Charles Kate<span>May 16, 2020</span></h4>
        <p>Me interesa mucho aprender a programar :v voy a ser un dios y me gustara XD.</p>
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