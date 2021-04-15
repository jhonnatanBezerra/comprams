@extends('web.base')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')

@endsection

@section('javascript')

@endsection

@section('content')
    <main class="d-flex ">
        <section class="col-lg-9 px-3 " style="height: 85vh; overflow: auto">

            {{-- Item carrinho--}}
            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        {{--   Limitar em 50--}}
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>





            {{-- Inicio Repetição de produtos carrinho--}}
            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>


            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>

            <div class="card my-3 ">

                <div class="d-flex justify-content-around">

                    <div class="d-flex flex-column">
                        <strong class="font-medium mb-3">Produto</strong>
                        <a href="">
                            <img src="https://cdn-cosmos.bluesoft.com.br/products/7894900940015" style="max-height: 3.75rem; height: 3.75rem" alt="">
                        </a>
                    </div>

                    <div class="d-flex flex-column text-center">
                        <strong class="text-center mb-3 font-medium">Descrição</strong>
                        <p class="fs-4 font-weight-bold">Descriçãdsadsadsadsadsadsafsdfsdfsdfsdfsdfsdfsdfs</p>
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Quantidade</strong>
                        <input class="form-control text-center font-weight-bold" style="width: 6rem" type="number" value="1" min="1">
                    </div>

                    <div class="d-flex flex-column">
                        <strong class="text-center mb-3 font-medium">Preço</strong>
                        <p class="fs-4 font-weight-bold">R$ 15,50</p>
                    </div>
                </div>
            </div>




            {{-- Fim Repetição de produtos carrinho--}}

        </section>

        <section class="col-lg-3 col" >
            <div class="card my-3 justify-content-around" style="height: 50vh; max-height: 50vh">
                <h1 class="fs-2 text-center">Resumo do pedido</h1>
                <div>
                        <h1 class="fs-4 text-center"><span>4</span> Produtos na seu carrinho</h1>
                        <h1 class="fs-3 mt-6 text-center">Total <span>R$ 62,00</span></h1>
                </div>

                <div class="d-flex flex-column align-items-center ">


                <button class="btn btn-success w-75 px-3 mx-auto fs-5">Enviar pedido
                    <i class="fab fa-whatsapp"></i>
                </button>

                <button class="btn btn-light border  mt-3 w-75 px-3 mx-auto fs-6">Continuar comprando</button>
                </div>
            </div>

        </section>

    </main>
@endsection