@section('meta_keywords', "{$atividades[0]->nome}, " . session('CITY')['name'] )
@section('meta_description', str_replace('%ACTIVITY%', $atividades[0]->nome, str_replace('%CITY%', session('CITY')['name'], config('seo_pwa.activities_description'))))

<div class="row">
{{--    @include('web.components.ads')--}}
    <h2 class="h5">Selecione a categoria abaixo ou pesquise o nome da empresa</h2>
    <div class="col-12 mb-3 mt-3 d-inline-flex">
        <form action="https://comprams.com.br/busca/cidade/{{session('CITY')['slug']}}" class="form-outline" style="width: 100%">
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
    @foreach($atividades as $atividade)
    <div class="col-sm-6 col-lg-3 col-md-4 mb-4">
         <a href="{{route('activities_cidade', [$slug, $atividade->slug])}}" class="card p-3" style="display: flex; justify-content: center; align-items: center">
             @if(public_path('images/atividades/'  .  $atividade->slug .'.svg'))
             <img
                 src="{{url('images/atividades/'  .  $atividade->slug .'.svg')}}"
                 class="card-img-top"
                 alt="image"
                 style="width: 150px"
                 loading="lazy"
             />
             @endif
             <div class="card-body">
                 <h5 class="card-title text-black">{{$atividade->nome}}</h5>
             </div>
         </a>
    </div>
    @endforeach
</div>
