@extends('web.base')

@section('content')
        <div class="row mt-4">
            <div class="col-12 mb-4 mt-4">
                <img src="{{url('images/404.svg')}}" alt="404" style="max-width: 200px">
            </div>
            <div class="col-6">
                <div class="col-12">
                    <h2 class="h5">
                        @if(session()->has('CITY'))
                        O termo pesquisado não foi encontrado, ou a página não existe. Por favor pesquise novamente abaixo, ou
                        <a href="/">clique aqui</a> para voltar a página inicial.
                        @else
                        A página solicitada não existe. <a href="/">Clique aqui</a> para voltar a página
                        @endif
                    </h2>
                </div>
                @if(session()->has('CITY'))
                <div class="col-12 mb-3 mt-3 d-inline-flex">
                    <form action="https://comprams.com.br/busca/cidade/navirai-ms" class="form-outline" style="width: 100%">
                        <input type="search" autocomplete="off" id="buscar" name="buscar" class="form-control" placeholder="EX.: Mercado ABC, Loja ABC, roupas, calçados, etc.">
                        <label class="form-label" for="buscar" style="margin-left: 0px;">Buscar empresa/atividade</label>
                        <div class="form-notch">
                            <div class="form-notch-leading" style="width: 9px;"></div>
                            <div class="form-notch-middle" style="width: 159.2px;"></div>
                            <div class="form-notch-trailing"></div>
                        </div>
                    </form>
                    <button type="submit" class="btn" style="margin-left: 5px"><i class="fa fa-search"></i></button>
                </div>
                @endif
            </div>
        </div>
@endsection
