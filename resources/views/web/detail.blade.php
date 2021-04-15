@extends('web.base')
@section('meta_description', $empresa->descricao)
@section('meta_keywords', 'Contato, Telefone, Lojas, Empresas, Whatsapp, ' . $empresa->nome)
@section('content')
    <div class="card">
        <div class="card-body">
            <div style="display: flex; flex-direction: row; align-items: center">
                @if($empresa->logo)
                    <img src="{{url('storage/logo/' .  $empresa->empresa_id .'/' . $empresa->logo)}}" class="card-img-top" alt="image_logo" style="width: 120px;" />
                @else
                    <img src="{{url('sem_foto.png')}}" class="card-img-top" alt="image_logo" style="width: 120px;" />
                @endif
                <div style="margin-left: 10px">
                    <h3>{{$empresa->nome}}</h3>
                    <small>{{formatCnpjCpf($empresa->cnpj)}}</small><br>
                    <small>
                        @foreach($atividades as $atividade)
                            {{$atividade->nome}},&nbsp;
                        @endforeach
                    </small>
                </div>
            </div>
            <hr>
            @if($empresa->telefone && strlen($empresa->telefone) > 0)
                <p class="mt-4"><strong>Telefone: </strong><a href="tel:{{($empresa->telefone)}}">{{formatPhone($empresa->telefone)}}</a></p>
            @endif
            @if($empresa->zap_01 && strlen($empresa->zap_01) > 0)
                <p class="mt-4"><strong>Whatsapp: </strong><a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$empresa->zap_01}}">{{formatPhone($empresa->zap_01)}}</a></p>
            @endif
            @if($empresa->zap_02 && strlen($empresa->zap_02) > 0)
                <p class="mt-4"><strong>Whatsapp secundário: </strong><a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$empresa->zap_02}}">{{formatPhone($empresa->zap_02)}}</a></p>
            @endif
            @if($empresa->zap_03 && strlen($empresa->zap_03) > 0)
                <p class="mt-4"><strong>Whatsapp alternativo: </strong><a target="_blank" href="https://api.whatsapp.com/send?phone=55{{$empresa->zap_03}}">{{formatPhone($empresa->zap_03)}}</a></p>
            @endif
            @if($empresa->site && strlen($empresa->site) > 0)
                <p class="mt-4"><strong>Site: </strong><a target="_blank" href="{{$empresa->site}}">{{$empresa->site}}</a></p>
            @endif
            @if($empresa->facebook && strlen($empresa->facebook) > 0)
                <p class="mt-4"><strong>Facebook: </strong><a target="_blank" href="{{$empresa->facebook}}">{{$empresa->facebook}}</a></p>
            @endif
            @if($empresa->instagram && strlen($empresa->instagram) > 0)
                <p class="mt-4"><strong>Instagram: </strong><a target="_blank" href="{{$empresa->instagram}}">{{$empresa->instagram}}</a></p>
            @endif
            @if($empresa->endereco && strlen($empresa->endereco) > 0)
                <p class="mt-4"><strong>Endereço: </strong>{{$empresa->endereco}}
                    <a target="_blank" href="{{\App\Models\Empresas::makeUrlGoogleMaps($empresa->empresa_id)}}" class="btn btn-primary btn-sm">Ver no mapa</a>
                </p>
            @endif
            <p class="mt-4"><strong>Catalogo de produtos: </strong>
                <a href="{{route('catalogo', [$empresa->cidade->slug, $empresa->slug])}}" class="btn btn-primary btn-sm">Ver catalogo</a>
            </p>
            @if($empresa->descricao && strlen($empresa->descricao) > 0)
                <p class="mt-4">{{$empresa->descricao}}</p>
            @endif
        </div>
    </div>
@endsection
