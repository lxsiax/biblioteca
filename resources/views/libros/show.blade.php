<x-app-layout>
    <x-errores/>
    <p><strong>Título: </strong>{{ $libro->titulo }}</p>
    <p><strong>Autor: </strong>{{ $libro->autor }}</p>
    <p><strong>Ejemplares: </strong></p><br>
    <table class="table">
        <thead>
            <th>Código</th>
            <th>Prestado</th>
            <th>Fecha prestamo</th>
        </thead>
        <tbody>
        @foreach ($libro->ejemplares as $ejemplar)
            <tr>
                <td><a href="{{ route('ejemplares.show', $ejemplar) }}">{{ $ejemplar->codigo }}</a></td>
                @php
                $prestado = false;
                $prestamoActivo = $ejemplar->prestamo;
                if($prestamoActivo){
                    $dias = $prestamoActivo->fecha_hora->diffInDays(now());
                    if($dias<30){
                        $prestado = true;
                        $fecha = $prestamoActivo->fecha_hora->format('d/m/Y');
                    }
                }
                @endphp
                @if ($prestado)
                    <td>Sí</td>
                    <td>{{ $fecha }}</td>
                @else
                    <td>No</td>
                @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>