<!doctype html>
<html lang="pt-br">
<head>
    {!! paceJS('flash') !!}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg" href="{{url('icon_apple.png')}}">
    <link rel="shortcut icon" href="{{url('icon.svg')}}" />
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Compra MS</title>
    <meta name="theme-color" content="{{config('seo_pwa.theme_color')}}">
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
        rel="stylesheet"
    />
    <style>

        @media(max-width: 1080px){
            html{
                font-size: 93.75%;
            }
        }

        @media(max-width: 720px){
            html{
                font-size: 87.5%;
            }
        }


        html {
            height: 100%;
        }
        body {
            background-color: rgb(250,250,250);
            overflow-x: hidden;
            height: 100%;
        }
        main {
            min-height: 90vh;
        }
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
    {!! config('seo_pwa.script_inc') !!}
    @yield('css')
</head>
<body>
    <header style="z-index: 9000">
        @include('web.components.navbar')
    </header>
    <main class="container" style="z-index: 900; height: available">
        <p>{!! session()->has('CITY') ? 'Cidade selecionada: <a href="'.route('trocar_cidade').'">' . session('CITY')['name'] . '/' . session('CITY')['uf'] . ' - alterar</a>' : '' !!}</p>
        @yield('content')
    </main>
{{--    <footer class="footer p-2" style="position: sticky">--}}
{{--        <p class="text-center">Desenvolvido por <a href="https://sisecf.com">JB Software</a> - Sistema de gestão empresarial. (67) 3461-5952</p>--}}
{{--    </footer>--}}
    <footer class="footer" style="margin-top: -15px">
        <p class="text-center">Desenvolvido por <a href="https://sisecf.com">JB Software</a> - Sistema de gestão empresarial. (67) 3461-5952</p>
    </footer>

    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
@yield('js')
@yield('javascript')
</body>
</html>
