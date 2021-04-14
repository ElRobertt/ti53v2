<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('titulo', 'UTN')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <header>
            <h1 class="titulos_header">UNIVERSIDAD TECNOLOGICA DE NAYARIT</h1>
            <h3 class="titulos_header">Tecnologias de la informacion</h3>
        </header>
        <nav class="menu">
                @yield('menu_alumnos')
                @yield('menu')
               {{--  <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/materias">Materias</a>
                    <li><a href="/carreras">Carreras</a>
                    <li><a href="/alumnos">Alumnos</a>
                    <li><a href="/profesores">Profesores</a>
                </ul> --}}
            </nav>
            <section>
                @yield('titulo_seccion')
                @yield('index')
                @yield('video')
                @yield('section')
            </section>
            <footer>
                Universidad Tecnologica de NAYARIT <br>
                Carretera Federal 200km. 9, Xalisco Nayarit <br>
                Telefono: 311 221 98 00
            </footer>
    </body>
</html>
