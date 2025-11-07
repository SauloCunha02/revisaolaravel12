<div>
    {{-- instrução if simples --}}
    {{--Verifica se a variavel está vazia ou nula--}}
@empty($value)
    <h1>Vazio</h1>
@else
    <h1>Existe</h1>
@endempty
</div>
