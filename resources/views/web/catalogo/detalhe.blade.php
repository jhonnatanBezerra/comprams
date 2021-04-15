@extends('web.base')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')

@endsection

@section('javascript')

@endsection

@section('content')

    <main class="d-flex flex-column justify-content-around  ">
        <section class="d-flex justify-content-around border-bottom shadow p-3"> <!--Produto Selecionado na tela anterior-->

            <div class="row" style="height: 37.75rem">

                    {{--                Miniaturas de fotos--}}
                @if($produto->fotos->count() > 0)
                <div class=" col-lg-2 row d-flex flex-column align-items-center border-left border-right px-2
                        "style="max-height: 37.75rem; overflow: auto" >
                        <div class=" w-full d-flex flex-column justify-content-center  ">
                            @foreach($produto->fotos as $foto)
                                <img class="border-bottom border-top mt-3 py-2"
                                     onmouseover="mudarFoto((this))"
                                     loading="lazy"
                                     src="{{ \App\Models\ProdutoFotos::makeUrlToImage($foto) }}"
                                     alt="foto produto">
                            @endforeach
                        </div>
                </div>
                @endif

                    {{--produto em destaque--}}

                <div class="col-lg-{{$produto->fotos->count() > 0 ? 10 : 11}} flex align-items-center justify-content-center bg-gray-100 w-full"
                     style="max-height: 100%">

                    <img class="border-left border-right px-2 mt-3 mb-3"
                         style="max-height: 100%"
                         id="fotoPrincipal"
                         src="{{$produto->fotos->count() > 0 ? \App\Models\ProdutoFotos::makeUrlToImage($produto->fotos[0]) : url('images/imageNotFound.png')}}"
                         alt="foto produto"     >

                </div>
            </div>

                        {{--            Detalhamento do Produto--}}
            <div class="d-flex justify-content-between flex-column border-left col-lg-5" style="max-height: 37.5rem">

                <header>
                    <h1 class="text-center">Detalhes do produto</h1>
                </header>

                <section class="fs-5 mb-2 card-text">

                    <p class="  font-weight-bold">Código do produto:<strong class="ml-1 font-weight-normal"> {{$produto->codprod_sisecf}}</strong></p>

                    <p class="  font-weight-bold">Produto:<strong class="ml-1 font-weight-normal"> {{$produto->nome}}</strong></p>
                                            {{--limitar em 380 caracteres--}}
                    <p class="  font-weight-bold">Descrição do produto:
                        <strong class="ml-1 font-weight-normal"> {{limitText( null ? "" : 'Não informada',380)}}
                        </strong>
                    </p>

                    <p class="  font-weight-bold">Marca:<strong class="ml-1 font-weight-normal">{{$produto->marca}}</strong></p>

                    <p class="  font-weight-bold">Preço:<strong class="ml-1 font-weight-normal"> R$ {{formatMoney($produto->preco_vista)}}</strong></p>

                    <div class="d-flex align-items-center">
                        <p class="  font-weight-bold">Quantidade: </p>
                        <input class="form-control w-25 mb-3 ml-2" type="number" value="1" min="1">
                    </div>

                </section>

                <button class="btn btn-success w-75 mx-auto fs-4">Adicionar a sacola</button>

            </div>
        </section>
                    {{--produtos similares--}}

        <section class="mb-3">
            <h1 class="py-3">Produtos similares</h1>

            <div class="row row-cols-lg-5 g-2 g-lg-3 flex flex-nowrap overflow-x-auto pb-3">
                {{--Mini Cards--}}
                <div class="col">
                    <div class="card d-flex align-items-center justify-content-around border bg-light" style="width: 14.12rem; height: 24.06rem">
                        <a href="">
                            <img class="card-img-top py-3" loading="lazy" style="max-height: 15.93rem"
                                 src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" alt="Card image cap">
                        </a>

                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">Guaraná Jesus Lata 350ml</strong>
                            {{--                        <strong>R$ {{formatMoney()}}</strong>--}}
                            <strong class="text-center fs-5 font-weight-bold">R$ 8,50</strong>
                        </div>

                        <button class="btn btn-success w-75 mx-auto ">Detalhes</button>
                    </div>

                </div>

                {{--     Inicio das imagens repetidas--}}

                <div class="col">
                    <div class="card d-flex align-items-center justify-content-around  border bg-light" style="width: 14.12rem; height: 24.06rem">
                        <a href="">
                            <img class="card-img-top py-3" loading="lazy"
                                 src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" alt="Card image cap">
                        </a>

                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">Guaraná Jesus Lata 350ml</strong>
                            {{--                        <strong>R$ {{formatMoney()}}</strong>--}}
                            <strong class="text-center fs-5 font-weight-bold">R$ 8,50</strong>
                        </div>

                        <button class="btn btn-success w-75 mx-auto ">Detalhes</button>
                    </div>

                </div>

                <div class="col">
                    <div class="card d-flex align-items-center justify-content-around  border bg-light" style="width: 14.12rem; height: 24.06rem">
                        <a href="">
                            <img class="card-img-top py-3" loading="lazy"
                                 src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" alt="Card image cap">
                        </a>

                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">Guaraná Jesus Lata 350ml</strong>
                            {{--                        <strong>R$ {{formatMoney()}}</strong>--}}
                            <strong class="text-center fs-5 font-weight-bold">R$ 8,50</strong>
                        </div>

                        <button class="btn btn-success w-75 mx-auto ">Detalhes</button>
                    </div>

                </div>

                <div class="col">
                    <div class="card d-flex align-items-center justify-content-around  border bg-light" style="width: 14.12rem; height: 24.06rem">
                        <a href="">
                            <img class="card-img-top py-3" loading="lazy"
                                 src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" alt="Card image cap">
                        </a>

                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">Guaraná Jesus Lata 350ml</strong>
                            {{--                        <strong>R$ {{formatMoney()}}</strong>--}}
                            <strong class="text-center fs-5 font-weight-bold">R$ 8,50</strong>
                        </div>

                        <button class="btn btn-success w-75 mx-auto ">Detalhes</button>
                    </div>

                </div>

                <div class="col">
                    <div class="card d-flex align-items-center justify-content-around  border bg-light" style="width: 14.12rem; height: 24.06rem">
                        <a href="">
                            <img class="card-img-top py-3" loading="lazy"
                                 src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" alt="Card image cap">
                        </a>

                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">Guaraná Jesus Lata 350ml</strong>
                            {{--                        <strong>R$ {{formatMoney()}}</strong>--}}
                            <strong class="text-center fs-5 font-weight-bold">R$ 8,50</strong>
                        </div>

                        <button class="btn btn-success w-75 mx-auto ">Detalhes</button>
                    </div>

                </div>

                <div class="col">
                    <div class="card d-flex align-items-center justify-content-around  border bg-light" style="width: 14.12rem; height: 24.06rem">
                        <a href="">
                            <img class="card-img-top py-3" loading="lazy"
                                 src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" alt="Card image cap">
                        </a>

                        <div class="d-flex flex-column">
                            <strong class="font-weight-bold">Guaraná Jesus Lata 350ml</strong>
                            {{--                        <strong>R$ {{formatMoney()}}</strong>--}}
                            <strong class="text-center fs-5 font-weight-bold">R$ 8,50</strong>
                        </div>

                        <button class="btn btn-success w-75 mx-auto ">Detalhes

                        </button>
                    </div>

                </div>

            </div>

        </section>
    </main>

    <script>
        function mudarFoto(img){
            document.getElementById("fotoPrincipal").src = img.src
        }
    </script>
@endsection