<nav class="navbar-expand-lg navbar navbar-light mb-2">
    <div class="container">
        <a class="navbar-brand" href="/">{{config('app.name')}}</a>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://sisecf.com/#about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://sisecf.com/#contact">Contato</a>
                </li>
            </ul>
            @if(session()->has('CITY'))
                <form action="{{url('/busca/cidade/'.session('CITY')['slug'])}}" class="form-outline">
                    <input type="search" autocomplete="off" id="buscar" name="buscar" class="form-control" />
                    <label class="form-label" for="buscar">Buscar empresa/atividade</label>
                </form>
            @endif
        </div>
    </div>
</nav>
