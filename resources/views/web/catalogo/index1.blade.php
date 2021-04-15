@extends('web.base')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')

@endsection

@section('javascript')

@endsection

@section('content')



    <header class="d-flex justify-content-center mt-3">

        <select class="btn btn-light mr-1 " name="categorias">
            <option value="">categorias</option>
            <option value="">categorias</option>
            <option value="">categorias</option>
            <option value="">categorias</option>
        </select>

        <input class="form-control w-25 " type="text"  placeholder="Pesquisar" aria-describedby="button-addon1">
        <button class="btn btn-light ml-1">
            <i class="fa fa-search"></i>
        </button>

    </header>

    <main class="container">
        <div class="row">
            @foreach($produtos as $produto)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 mr-3 " > <!-- CARD PRODUTO-->

                <div class="card d-flex justify-content-center mt-5 ml-5 mr-5" style="width: 18rem; min-height: 563px">
                    <a href="">
{{--                          lazy utilizado paara carregamento somente com img vizivel na tela  --}}
                        <img class="card-img-top" loading="lazy"
                             src="https://d3t3ozftmdmh3i.cloudfront.net/production/podcast_uploaded_nologo/10837424/10837424-1605972230373-de85423b25a16.jpg" alt="Card image cap">
                    </a>

                    <div class="card-body bg-light"> <!--  infos do produto-->

                        <h5 class="card-title text-center font-weight-bold" style="min-height: 48px">{{limitText($produto->nome,45)}}</h5>

                        <p class="card-text mb-1 font-weight-bold">Cod.Produto:
                            <strong class="ml-1 font-weight-normal">{{$produto->codprod_sisecf}}</strong>
                        </p>

                        <p class="card-text mb-1 font-weight-bold" style="min-height: 69px">Descrição:
                            <strong class="ml-1 font-weight-normal">{{limitText(!empty($produto->descricao) ? $produto->descricao : 'Não informada',92)}}</strong>
                        </p>

                        <p class="card-text mb-1 font-weight-bold">Marca:
                            <strong class="ml-1 font-weight-normal">{{$produto->marca}}</strong>
                        </p>


                        <h4 class="card-title text-center mb-2 mt-2">R$ {{formatMoney($produto->preco_vista)}}</h4>
                        <a href="../detail/index.html" class="btn btn-success w-100">Detalhes</a>
                    </div>
                </div>
            </div>

            @endforeach

{{--
{{--            <div class="col-lg-3 col-md-4 col-sm-6 mb-4 mr-3 " > <!-- CARD PRODUTO-->--}}
{{--                <div class="card d-flex justify-content-center mt-5 ml-5 mr-5" style="width: 18rem;">--}}
{{--                    <a href="">--}}
{{--                        <img class="card-img-top"--}}
{{--                             src="https://d3t3ozftmdmh3i.cloudfront.net/production/podcast_uploaded_nologo/10837424/10837424-1605972230373-de85423b25a16.jpg" alt="Card image cap">--}}
{{--                    </a>--}}

{{--                    <div class="card-body bg-light"> <!--  infos do produto-->--}}

{{--                        <h5 class="card-title text-center font-weight-bold">Coquinha gelada</h5>--}}

{{--                        <p class="card-text mb-1 font-weight-bold">Cod.Produto:--}}
{{--                            <strong class="ml-1 font-weight-normal">145646</strong>--}}
{{--                        </p>--}}

{{--                        <p class="card-text mb-1 font-weight-bold">Descrição:--}}
{{--                            <strong class="ml-1 font-weight-normal">Coca-cola sabor original Coca-cola sabor original Coca-cola sabor original</strong>--}}
{{--                        </p>--}}

{{--                        <p class="card-text mb-1 font-weight-bold">Marca:--}}
{{--                            <strong class="ml-1 font-weight-normal">Coca Cola</strong>--}}
{{--                        </p>--}}


{{--                        <h4 class="card-title text-center mb-2 mt-2">R$ 3,50</h4>--}}
{{--                        <a href="" class="btn btn-success w-100">Detalhes</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}



            <!-- FIM DA ROW -->
        </div>


        {{ $produtos->links() }}
    </main>

@endsection