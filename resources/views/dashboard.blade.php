<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minhas empresas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('cadastro_empresa')}}" class="btn btn-primary btn-sm mb-3">Cadastrar empresa</a>
                    @foreach($companies as $company)
                        <div class="card mb-4">
                            <a href="{{route('editar_empresa', $company->empresa_id)}}" class="card-body flex inline-flex align-items-center">
                                @if($company->logo)
                                    <img style="width: 120px; padding-right: 15px" src="{{url('storage/logo/' .  $company->empresa_id .'/' . $company->logo)}}" alt="logo_empresa">
                                @else
                                    <img style="width: 120px; padding-right: 15px" src="{{url('sem_foto.png')}}" alt="logo_empresa">
                                @endif
                                <div>
                                    <p class="h4 text-black">{{$company->nome}}</p>
                                    <p class="text-black">{{$company->cidade->nome}}</p>
                                </p>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
