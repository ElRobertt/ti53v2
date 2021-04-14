@extends('plantilla')
@section('titulo', 'Contactanos')

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

@section('section')
    <h1>Contactanos</h1>
    <form method="POST" action="{{route('/contactanos')}}">
        @csrf
        <input name="nombre" placeholder="Nombre"><br>
        <input name="correo" placeholder="Correo electronico"><br>
        <input name="asunto" placeholder="Asunto"><br>
        <textarea name="mensaje" placeholder="Mensaje"></textarea><br>
        <button>Enviar</button>
    </form>
@endsection

