<style>
    .dropbtn {
        background-color: #FAFAFA;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;

    }

    .dropdown_jb {
        position: relative;
        display: inline-block;
        max-height: 90px;

    }

    .dropdown_jb-content {
        display: none;
        position: absolute;
        right: 0;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;

    }

    .dropdown_jb-content a {
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        color: #888;
        transition: color 0.3s;

    }

    .dropdown_jb-content a:hover {
        color: #595959;
        font-weight: bold;
    }

    .icone:hover{
        color: #595959;
        transition: color 0.3s;
    }

    .dropdown_jb:hover .dropdown_jb-content {
        display: flex;
        padding: 0;

    }

    .dropbtn{
        padding: 0;
        color: #888;
        font-weight: bold;
    }

    .dropdown_jb:hover .dropbtn {
        color: #595959;
        transition: color 0.3s;
        font-weight: bold;
    }


    .tipo {
        font-weight: bold;
    }

    .categoria {
        margin-left: 20px;
    }

</style>

<div class="dropdown_jb mx-3 p-3" style="float:left;">
    <button class="dropbtn">
        <i  class="fas fa-align-justify d-flex flex-column align-items-center fs-2 mb-1"></i>
        Todas categorias
    </button>

    <div class="dropdown_jb-content row" style="left:0; width: 800px">
        @foreach($tipos as $tipo)
            <div class="col-4">

                <a href="{{ $request->fullUrlWithQuery(['tipo' => $tipo->id]) }}" class="tipo">
                    <i  class="{{ $tipo->icon }} icone"></i>
                    {{$tipo->nome}}
                </a>

                @foreach($tipo->categorias as $categoria)
                    <a href="{{$request->fullUrlWithQuery(['categoria' => $categoria->id]) }}" class="categoria">{{ $categoria->nome }}</a>
                @endforeach
                <hr>
            </div>
        @endforeach
    </div>
</div>