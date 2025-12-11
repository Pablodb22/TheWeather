<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiempo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}" />
    <script src="{{ asset('js/botonreciente.js')  }}"></script>
</head>

<body>
    <header class="cabecera">
        <h1 class="titulo">The Weather</h1>

        <section class="buscador">
            <form class="formulario" method="get" action="/tiempo">
                <input type="text" placeholder="Inserta tu ciudad" name="ciudad" id="ciudad">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </section>
               
        <section class="recientes">
            <h3 class="titulorecientes">Ubicaciones recientes</h3>
            <div class="recientes-row">
                @if(session('recientes'))
                @foreach(session('recientes') as $reciente)
                @if(is_array($reciente))
                <button class="ciudadesrecientes">
                    <h4 class="titulociudadesrecientes">{{ $reciente['name'] }}</h4>
                    <h6 class="paisciudadesrecientes">{{ $reciente['country'] }}</h6>
                    <h4 class="temperaturaciudadrecientes">{{ $reciente['temp_c'] }}º</h4>
                </button>
                @endif
                @endforeach
                @endif
            </div>
        </section>
    </header>

    <main>
        @yield('content')
    </main>


</body>

</html>