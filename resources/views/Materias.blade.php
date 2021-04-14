@extends('plantilla')
@section('titulo_seccion')
    <h1>Materias</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem cumque aliquam veritatis ullam, repellat error beatae vero illum quis tempore culpa. Numquam, cum. Quae eveniet nesciunt eos necessitatibus voluptatem? Voluptatibus?</p>
    <img src="imagenes/ut.png" alt="">
    <br><br>

    <h3>Lista de Materias</h3>

    <ul class="ul">
        @if ($var_materias)

            @foreach ($var_materias as $var_materiasItem)
                <li>
                    {{ $var_materiasItem['titulo']}}
                </li>
            @endforeach
        @else
            <li> No hay materias que mostrar</li>
        @endif
    </ul>
@endsection

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

@section('titulo')
    Materias
@endsection
