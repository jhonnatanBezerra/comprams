@if($empresa->logo)
    <img src="{{url('storage/logo/' .  $empresa->empresa_id .'/' . $empresa->logo)}}" class="card-img-top" alt="image_logo" style="width: 120px;" />
@else
    <img src="{{url('sem_foto.png')}}" class="card-img-top" alt="image_logo" style="width: 120px;" />
@endif