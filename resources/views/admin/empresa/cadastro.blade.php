<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($isEdit ? 'Editar de empresa' : 'Cadastro de empresas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('web.components.ads')
                    @if($isEdit)
                        <div class="m-3 max-w-3xl mx-auto">
                            <a href="{{route('detalhe_empresa', [$empresa->cidade->slug, $empresa->slug])}}" class="btn btn-primary bnt-sm">Ver página da empresa</a>
                        </div>
                    @endif
                    <p class="m-3 max-w-3xl mx-auto">Informe os dados da sua empresa abaixo</p>
                    <p class="m-3 max-w-3xl mx-auto">
                        Em caso de dúvidas entre em contato conosco via e-mail: <a href="mailto:suporte@comprams.com.br">suporte@comprams.com.br</a>
                    </p>
                    <div style="{!! $errors->any() ? 'background: rgba(255,0,0,0.2); border: 1px solid rgba(255,0,0,0.5); padding: 5px; border-radius: 3px; color: red"' : '' !!}">
                        @if($errors->any())
                            {!! implode('', $errors->all('<p>:message</p>')) !!}
                        @endif
                    </div>
                </p>
                <form action="{{!$isEdit ? route('cadastro_empresa_post') : route('editar_empresa_post', $empresa->empresa_id)}}" method="post" id="form" enctype="multipart/form-data" class="m-3 max-w-3xl mx-auto">
                    @csrf
                    @if($isEdit)
                        <input type="hidden" name="empresa_id" value="{{$empresa->empresa_id}}">
                    @endif
                    <div class="form-outline mb-4">
                        <input type="text" id="name" class="form-control" placeholder="Nome da empresa" autocomplete="off" name="nome" value="{{!empty($empresa) ? $empresa->nome : old('nome')}}">
                        <label class="form-label" for="name">Nome*</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="tel" id="phone" class="form-control" placeholder="Telefone fixo da empresa" autocomplete="off" name="telefone" value="{{!empty($empresa) ? $empresa->telefone : old('telefone')}}">
                        <label class="form-label" for="phone">Telefone</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="tel" id="zap1" class="form-control" placeholder="Whatsapp da empresa" autocomplete="off" name="zap_01" value="{{!empty($empresa) ? $empresa->zap_01 : old('zap_01')}}">
                        <label class="form-label" for="zap1">Whatsapp*</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="tel" id="zap2" class="form-control" placeholder="Whatsapp da empresa" autocomplete="off" name="zap_02" value="{{!empty($empresa) ? $empresa->zap_02 : old('zap_02')}}">
                        <label class="form-label" for="zap2">Whatsapp</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="tel" id="zap3" class="form-control" placeholder="Whatsapp da empresa" autocomplete="off" name="zap_03" value="{{!empty($empresa) ? $empresa->zap_03 : old('zap_03')}}">
                        <label class="form-label" for="zap3">Whatsapp</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="url" id="facebook" class="form-control" placeholder="Facebook da empresa" autocomplete="off" name="facebook" value="{{!empty($empresa) ? $empresa->facebook : old('facebook')}}">
                        <label class="form-label" for="facebook">Facebook da empresa</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="url" id="instagram" class="form-control" placeholder="Instagram da empresa" autocomplete="off" name="instagram" value="{{!empty($empresa) ? $empresa->instagram : old('instagram')}}">
                        <label class="form-label" for="instagram">Instagram da empresa</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="url" id="site" class="form-control" placeholder="Site da empresa" autocomplete="off" name="site" value="{{!empty($empresa) ? $empresa->site : old('site')}}">
                        <label class="form-label" for="site">Site da empresa</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="tel" id="cnpj" class="form-control" placeholder="CNPJ da empresa" autocomplete="off" name="cnpj" value="{{!empty($empresa) ? $empresa->cnpj : old('cnpj')}}">
                        <label class="form-label" for="cnpj">CNPJ*</label>
                    </div>
                    <div class="form-group mb-4">
                        <label  for="city">Cidade*</label>
                        <select name="cidade_id" id="city" class="form-control">
                            <option>Informe a cidade</option>
                            @foreach($cidades as $cidade)
                                <option {{((!empty($empresa) && $empresa->cidade_id === $cidade->cidade_id) || old('cidade_id') === $cidade->cidade_id) ? 'selected' : ''}} value="{{$cidade->cidade_id}}">{{$cidade->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="address" class="form-control" placeholder="Endereço da empresa (Rua/Avenida, Nº, Bairro)" autocomplete="off" name="endereco" value="{{!empty($empresa) ? $empresa->endereco : old('endereco')}}">
                        <label class="form-label" for="address">Endereço*</label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control" name="descricao" id="description" rows="4" placeholder="Informe detalhes sobre sua empresa">{{!empty($empresa) ? $empresa->descricao : old('descricao')}}</textarea>
                        <label class="form-label" for="description">Descrição</label>
                    </div>
                    @if(isUsersJB())
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Configurações da empresa</h5>
                                <div class="form-check mb-4">
                                    <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="aceita_condicional"
                                            name="aceita_condicional"
                                            @if(!empty(old('aceita_condicional')) && $empresa->aceita_condicional === true) checked @endif
                                            @if(!empty($empresa) && $empresa->aceita_condicional === true) checked @endif
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Aceita condicional
                                    </label>
                                </div>
                                <div class="form-check mb-4">
                                    <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="exibe_produto_sem_estoque"
                                            name="exibe_produto_sem_estoque"
                                            @if(!empty(old('exibe_produto_sem_estoque')) && $empresa->exibe_produto_sem_estoque === true) checked @endif
                                            @if(!empty($empresa) && $empresa->exibe_produto_sem_estoque === true) checked @endif
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Exibe produto sem estoque
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class=" mb-4">
                        <label class="form-label" for="logo">Logotipo</label>
                        <input type="file" class="form-control" id="logo" name="logo" value="{{old('logo')}}" accept="image/*"/>
                    </div>
                    <div class="card  mb-4">
                        <div class="card-body">
                            <h5 class="card-header mb-3">Atividades da empresa</h5>
                            @foreach($atividades as $atividade)
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="{{$atividade->atividades_id}}"
                                        id="atividade_{{$atividade->atividades_id}}"
                                        name="atividade[]"
                                        @if(old('atividade') && in_array($atividade->atividades_id, old('atividade'))) checked @endif
                                        @if((!empty($atividadesSelectedA) && in_array($atividade->atividades_id, $atividadesSelectedA))) checked @endif
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$atividade->nome}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button id="submit:submit" class="btn btn-primary">{{!$isEdit ? 'Cadastrar' : 'Alterar'}} empresa</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

    <script>
        $(document).ready(function() {
            $('#phone').mask('(00) 0000-0000');
            $('#zap1').mask('(00) 0 0000-0000');
            $('#zap2').mask('(00) 0 0000-0000');
            $('#zap3').mask('(00) 0 0000-0000');
            $('#cnpj').mask('00.000.000/0000-00');
            $('#city').select2();
        });

        function cadastraEmpresa() {
            document.getElementById('name').value = 'Empresa ' + new Date().getTime();
            document.getElementById('phone').value = '6734615952';
            document.getElementById('zap1').value = '67999002939';
            document.getElementById('zap2').value = '67999002938';
            document.getElementById('zap3').value = '67999002937';
            document.getElementById('facebook').value = 'http://facebook.com';
            document.getElementById('instagram').value = 'http://instagram.com';
            document.getElementById('cnpj').value = '87.203.869/0001-11';
            document.getElementById('city').value = '1';
            document.getElementById('address').value = 'Rua Brasil, 152, Centro';
        }

        $(function(){
            $('input[type="url"]').on('blur', function(){
                let content = $(this).val();
                if (!content.match(/^http?:/) && !content.match(/^https?:/) && content.length) {
                    content = "http://" + content;
                    $(this).val(content)
                }
            });
        });
    </script>
