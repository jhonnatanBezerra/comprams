@section('js')
    @if(!session()->has('CITY'))
    <script>
        const dialog = bootbox.dialog({
            title: 'Selecione a cidade',
            centerVertical: true,
            message: `<select class="form-control" id="city_select_modal">
                         @foreach($cidades as $cidade)
                            <option value="{{$cidade->cidade_id}}">{{$cidade->nome}}</option>
                        @endforeach
                    </select><button class="btn btn-primary btn-sm mt-3" onclick="setCitySession()">Selecionar cidade</button>`
        });

        function setCitySession() {
            const citySelected = document.getElementById('city_select_modal').value;
            location.href = '/index_helpers/save_city_user/' + citySelected;
        }
    </script>
    @endif
@endsection
