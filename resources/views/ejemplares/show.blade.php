<x-app-layout>
    <p><strong>Título del libro: </strong> {{ $ejemplar->libro->titulo }}</p>
    <p><strong>Autor del libro: </strong> {{ $ejemplar->libro->autor }}</p>
    @php
        if($prestamo = $ejemplar->prestamo){
            $fecha = $prestamo->fecha_hora->format('d/m/Y');
            $vencido = false;
            $dias = $prestamo->fecha_hora->diffInDays(now());
            if($dias > 30){
            $vencido = true;
            }
        }
    @endphp
    @if ($prestamo)
        <p>Préstamo del cliente {{ $prestamo->cliente->nombre }} en la fecha {{$fecha}}: </p>
        <p>Estado: </p>
        @if ($vencido)
            Vencido
        @else
            Activo
        @endif
    @else
    <p>Este ejemplar nunca ha sido prestado.</p>
    @endif 
</x-app-layout>