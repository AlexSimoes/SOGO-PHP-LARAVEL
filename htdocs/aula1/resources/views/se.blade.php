@if(count($lista) == 0)
    <p>Não existe dados na lista</p>
@else
    <p>Existem dados na lista</p>
@foreach($lista as $item)
    <p>{{ $item }}</p>
@endforeach
@endif
