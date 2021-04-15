@extends('web.base')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
<style>
    div[class^="col-"] {
        box-sizing: border-box;
        padding-left: 15px !important;
        padding-right: 15px !important;
    }

    .select2-selection{
        height: 35px!important;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        border: 1px solid #bdbdbd;
        padding: .2rem;
    }

    .select2-selection__rendered{
        color: #888!important;
    }

    .categoriaDestaque  {
        color: #888;
        text-align: center;
        font-weight: bold;
        width: 148px;
        overflow: hidden;
    }

    .categoriaDestaque:hover  {
        color: #595959;
        font-weight: bold;
        transition: color 0.3s;
    }



</style>
@endsection

@section('javascript')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.full.min.js" integrity="sha512-RtZU3AyMVArmHLiW0suEZ9McadTdegwbgtiQl5Qqo9kunkVg1ofwueXD8/8wv3Af8jkME3DDe3yLfR8HSJfT2g==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#select_categoria').select2();
        });

        $('.dropdown').dropdown()

    </script>

@endsection

@section('content')


{{-----------------------------------------------------------------------------------------------------------}}

    <header  class="d-flex align-items-center justify-content-around shadow py-5 rounded" style="height: 75px;">

            {{--Componente--}}
            <x-menu_hover.menu_hover :tipos="$tipos" :request="$request"></x-menu_hover.menu_hover>

        <a href="" class="categoriaDestaque mx-3 p-3">
            <i class="fas fa-fish d-flex flex-column align-items-center fs-2 mb-1"></i>
            <span class="">Peixes de água doce</span>
        </a>

        <a href="" class="categoriaDestaque mx-3 p-3">
            <i class="fas fa-fish d-flex flex-column align-items-center fs-2 mb-1"></i>
            <span class="">Peixes de água salgada</span>
        </a>

        <a href="" class="categoriaDestaque mx-3 p-3">
            <i class="fab fa-octopus-deploy d-flex flex-column align-items-center fs-2 mb-1"></i>
            <span class="">Frutos do mar</span>
        </a>

        <a href="" class="categoriaDestaque mx-3 p-3">
            <i class="fab fa-octopus-deploy d-flex flex-column align-items-center fs-2 mb-1"></i>
            <span class="">Frutos do mar</span>
        </a>

        <a href="" class="categoriaDestaque mx-3 p-3">
            <i class="fab fa-octopus-deploy d-flex flex-column align-items-center fs-2 mb-1"></i>
            <span class="">Frutos do mar</span>
        </a>

        <a href="" class="categoriaDestaque mx-3 p-3">
            <i class="fab fa-octopus-deploy d-flex flex-column align-items-center fs-2 mb-1"></i>
            <span class="">Frutos do mar</span>
        </a>
    </header>

    <header class="d-flex justify-content-center mt-3">

        <form class=" d-flex justify-content-center mt-3 mb-5 w-75 " action="{{route("catalogo",[$cidadeSlug, $empresaSlug])}}">

{{--            <select id="select_categoria" style="height: 100px" name="categorias">--}}
{{--                @foreach($categorias as $categoria)--}}
{{--                <option value="{{$categoria->categoria_id}}">{{$categoria->nome}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}

            <input name="buscar" class="form-control mx-1 h-full shadow fs-5 h2" value="{{$search}}" type="search"  placeholder="Pesquisar" aria-describedby="button-addon1" style="width: 50%; height: 55px; max-height: 55px">

            <button type="submit" class="btn btn-light fs-5" style="height: 55px; max-height: 55px">
                <i class="fa fa-search" style="color: #888; "></i>
            </button>
        </form>

        <x-catalogo_ordem :data="$itensOrdenacao"></x-catalogo_ordem>

    </header>

    <main>
        <div class="row">
            @foreach($produtos as $produto)
            {{--                <!-- CARD PRODUTO-->--}}
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 " >

                <div class="card d-flex justify-content-center " style="min-height: 563px">
                    <a href="" class="d-flex"  style="height: 344px; justify-content: center; " >
{{--                          lazy utilizado paara carregamento somente com img vizivel na tela  --}}
{{--                        {{dd($produto->fotos)}}--}}
                        <img class="card-img-top" loading="lazy"
                             src="{{$produto->fotos->count() > 0 ? $produto->fotos[0]->url : url("/images/not_img.png")}}" alt="Card image cap">
                    </a>
                        {{--<!--  infos do produto-->--}}
                    <div class="card-body bg-light" >

                        <h5 class="card-title text-center font-weight-bold" style="height: 48px; overflow: hidden">{{limitText($produto->nome,45)}}</h5>

                        <p class="card-text mb-1 font-weight-bold">Cod.Produto:
                            <strong class="ml-1 font-weight-normal">{{$produto->codprod_sisecf}}</strong>
                        </p>
    {{--min-heigth: 69px--}}
                        <p class="card-text mb-1 font-weight-bold" style="height: 69px; overflow: hidden">Descrição:
                            <strong class="ml-1 font-weight-normal">{{limitText(!empty($produto->descricao) ? $produto->descricao : 'Produto sem descrição informada',85)}}</strong>
                        </p>

                        <p class="card-text mb-1 font-weight-bold">Marca:
                            <strong class="ml-1 font-weight-normal">{{$produto->marca}}</strong>
                        </p>


                        <h4 class="card-title text-center mb-2 mt-2">R$ {{formatMoney($produto->preco_vista)}}</h4>
                        <a href=" {{route('catalogo_detalhe', [$cidadeSlug, $empresaSlug, $produto->slug])}}" class="btn btn-success w-100">Detalhes</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{$produtos->appends($_GET)->links()}}


    </main>

@endsection