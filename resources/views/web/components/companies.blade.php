@if(!empty($activity))
    @section('meta_description', 'Encontre aqui o contato, telefone, whatsapp, e mais informações de ' . $activity->nome . ' de ' . session('CITY')['name'] . '/' . mb_strtoupper(session('CITY')['uf']))
@else
    @section('meta_description', 'Encontre aqui o contato, telefone, whatsapp, e mais informações das empresas de ' . session('CITY')['name'] . '/' . mb_strtoupper(session('CITY')['uf']))
@endif
@section('meta_keywords', 'Contato, Telefone, Lojas, Empresas, Whatsapp')

<div class="row">
    @foreach($companies as $empresa)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <a href="{{route('detalhe_empresa', [$empresa->cidade->slug, $empresa->slug])}}" class="card p3" style="display: flex; justify-content: center; align-items: center">
                @if($empresa->logo)
                    <img
                       src="{{url('storage/logo/' .  $empresa->empresa_id .'/' . $empresa->logo)}}"
                       class="card-img-top"
                       alt="image_logo"
                       style="width: 120px;max-height: 120px"
                    />
                @else
                    <img
                       src="{{url('sem_foto.png')}}"
                       class="card-img-top"
                       alt="image_logo"
                       style="width: 120px;"
                    />
                @endif

                <div class="card-body">
                    <h5 class="card-title text-black">{{limitText($empresa->nome, 25)}}</h5>
                    <p class="card-title text-black"><strong>Whatsapp: </strong>{{formatPhone($empresa->zap_01)}}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>
