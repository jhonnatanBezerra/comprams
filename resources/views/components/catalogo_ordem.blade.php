<ul>
    @foreach($data as $itemMenu)
        <li><a href="{{$itemMenu['urls']['asc']}}">{{$itemMenu['nome']}} (-)</a> &nbsp;&nbsp; <a href="{{$itemMenu['urls']['desc']}}">{{$itemMenu['nome']}} (+)</a></li>
    @endforeach
</ul>