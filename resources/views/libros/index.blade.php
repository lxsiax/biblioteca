<x-app-layout>
    <table class="table">
        <thead>
            <th>Título</th>
            <th>Autor</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <td><a href="{{ route('libros.show', $libro) }}">{{ $libro->titulo }}</a></td>
                    <td>{{ $libro->autor }}</td>
                    <td><a href="{{ route('libros.edit', $libro) }}">Modificar</a></td>
                    <td>
                        <form action="{{ route('libros.destroy', $libro) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table><br><br>
    <a href="{{ route('libros.create') }}">Insertar libro</a>
</x-app-layout>