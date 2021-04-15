@extends('web.base')
@section('content')
    @include('web.components.informa_cidade')

    @if(!empty($atividades))
        @include('web.components.activities')
    @endif
    @if(!empty($companies))
        @include('web.components.companies')
    @endif
@endsection