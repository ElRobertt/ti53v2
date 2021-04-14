@extends('plantilla')

@section('menu_alumnos')
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/materias">Materias</a>
            <li><a href="/alumnos">Alumnos</a>
         </ul>
    </nav>
@endsection

@section('video')
    <div id="div"></div><br>
    <h2>Nuestra Universidad</h2>
    <table>
        <tr>
            <td>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GELyJntpmLE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </td>
        </tr>
    </table>
@endsection

@section('titulo')
    Alumnos
@endsection
