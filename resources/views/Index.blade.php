@extends('plantilla')
@section('menu')
<nav>
         <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/materias">Materias</a>
                    <li><a href="/carreras">Carreras</a>
                    <li><a href="/alumnos">Alumnos</a>
                    <li><a href="/profesores">Profesores</a>
                    <li><a href="/contactanos">Contactanos</a></li>
         </ul>
</nav>

@endsection

@section('index')
    <br>
    <h3> Bienvenido al sitio oficial de TI</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quia alias odit! Delectus ex tenetur perspiciatis soluta nam illo ut dolorem commodi atque maiores possimus veniam, provident qui architecto saepe.</p>
@endsection

@section('video')
    <div id="div"></div><br>
    <h2>Nuestra Universidad</h2>
    <table>
        <tr>
            <td>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/yXefOnhDs58" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </td>
        </tr>
    </table>
@endsection

@section('titulo')
    Inicio
@endsection
