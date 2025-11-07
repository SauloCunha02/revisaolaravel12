<div>
    {{-- instrução if simples --}}
@switch($value)
    @case(100)
        <h1>é igual a 100 </h1>    
        @break
     @case(200)
        <h1>é igual a 200 </h1>    
        @break
     @case(300)
        <h1>é igual a 300 </h1>    
        @break
     @default
        <h1>Outro<h1>    
@endswitch
</div>
