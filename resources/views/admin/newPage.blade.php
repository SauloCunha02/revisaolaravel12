<div>
    {{-- instrução if simples --}}
@if($value == 100)
    <h2>{{$value}} Graus</h2>
@endif


@if($value == 200)
    <h2>{{$value}} Graus</h2>
@else
<h2>Não é 1000 Grau</h2>
@endif


@if($value < 50)
<h2>menor que 50</h2>
@elseif($value > 50)
<h2>maior que 50</h2>
@elseif($value == 50)
<h2>igual a 50</h2>
@endif
</div>
