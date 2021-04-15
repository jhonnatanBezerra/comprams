@extends('web.base')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')

@endsection

@section('javascript')

@endsection

@section('content')

    <main class="d-flex flex-column justify-content-around  ">

        <section class="d-flex justify-content-around border-bottom">

{{--            <!--Miniaturas de fotos-->  --}}
            <div class="d-flex flex-column justify-content-around align-items-center border-left border-right px-2 "
            style="max-height: 37.75rem" >

                <img class="border-bottom border-top mt-3 py-2"
                     onclick="mudarFoto(this)"
                     onmouseover="mudarFoto((this))"
                     loading="lazy"
                     src="https://laravel.com/img/logomark.min.svg"
                     alt="foto produto"
                     style="width: 5.25rem; height: 7.5rem;">

                <img class="border-bottom border-top mt-3 py-2"
                     onmouseover="mudarFoto((this))"
                     loading="lazy"
                     src="https://sisecf.app/home/logo.png"
                     alt="foto produto"
                     style="width: 5.25rem; height: 7.5rem;">

                <img class="border-bottom border-top mt-3 py-2"
                     onmouseover="mudarFoto((this))"
                     loading="lazy"
                     src="https://d3t3ozftmdmh3i.cloudfront.net/production/podcast_uploaded_nologo/10837424/10837424-1605972230373-de85423b25a16.jpg"
                     alt="foto produto"
                     style="width: 5.25rem; height: 7.5rem;">

                <img class="border-bottom border-top mt-3 py-2"
                     onmouseover="mudarFoto((this))"
                     loading="lazy"
                     src="https://sisecf.app/home/logo.png"
                     alt="foto produto"
                     style="width: 5.25rem; height: 7.5rem;">

                <img class="border-bottom border-top mt-3 py-2"
                     onmouseover="mudarFoto((this))"
                     loading="lazy"
                     src="https://d3t3ozftmdmh3i.cloudfront.net/production/podcast_uploaded_nologo/10837424/10837424-1605972230373-de85423b25a16.jpg"
                     alt="foto produto"
                     style="width: 5.25rem; height: 7.5rem;">

            </div>
            {{--<!-- Produto em destaque-->--}}
            <div>
                <img class="border-left border-right px-2 mt-3 mb-3"
                     id="fotoPrincipal"
                     src="https://d3t3ozftmdmh3i.cloudfront.net/production/podcast_uploaded_nologo/10837424/10837424-1605972230373-de85423b25a16.jpg"
                     alt="foto produto"
                     style="width: 23.625rem; height: 37.5rem; max-height: 37.5rem"
                >
            </div>
            {{--<!--Detalhamento do produto-->--}}
            <div class="d-flex justify-content-between flex-column border-left" style="max-height: 37.5rem">
                <header>
                    <h1 class="text-center">Detalhes do produto</h1>
                </header>

                <section class="fs-3 mb-2 card-text">

                    <p class="  font-weight-bold">Código do produto:<strong class="ml-1 font-weight-normal"> 45645456</strong></p>

                    <p class="  font-weight-bold">Produto:<strong class="ml-1 font-weight-normal"> dsadsadsadasdsa</strong></p>

                    <p class="  font-weight-bold">Descrição do produto:<strong class="ml-1 font-weight-normal"> 45645456</strong></p>

                    <p class="  font-weight-bold">Marca:<strong class="ml-1 font-weight-normal"> 45645456</strong></p>

                    <p class="  font-weight-bold">Preço:<strong class="ml-1 font-weight-normal"> R$ 45645456</strong></p>

{{--                    <p class="  font-weight-bold">Quantidade:<strong class="ml-1 font-weight-normal"> R$ 45645456</strong></p>--}}

                    <div class="d-flex align-items-center">
                        <p class="  font-weight-bold">Quantidade: </p>
                        <input class="form-control w-25 mb-3 ml-2" type="number" value="1">
                    </div>

                </section>

                <button class="btn btn-success w-75 mx-auto fs-4">Adicionar a sacola</button>

            </div>
        </section>
{{--produtos similares--}}

        <section class="">
            <h1>Produtos similares</h1>

            <div class="row row-cols-lg-5 g-2 g-lg-3 flex flex-nowrap overflow-x-auto py-3">

                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>

                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>

                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>

                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>

                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
                </div>

                <div class="col">
                    <div class="p-3 border bg-light">Row column</div>
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