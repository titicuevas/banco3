<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


Create

<form action="{{route('clientes.store',[])}}" method="post">
@csrf

@method('POST')
<input name="dni" type="text" placeholder="Introduzca el dni" value="{{old('dni',$cliente->dni)}}">
@error('dni')
{{$message}}
@enderror
<br>
<input name="nombre" type="text" placeholder="Introduzca el nombre" value="{{old('nombre',$cliente->nombre)}}">
@error('nombre')
{{$message}}
@enderror
<br>
<button type="submit">
    Enviar
</button>




</form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
