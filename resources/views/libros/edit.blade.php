<x-app-layout>
    <x-errores/>
    <form action="{{ route('libros.update', $libro) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo">
            <span>Titulo:</span>
            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $libro->titulo) }}">
        </label><br>
        <label for="autor">
            <span>Autor:</span>
            <input type="text" name="autor" id="autor" value="{{ old('autor', $libro->autor) }}">
        </label><br><br>
        <button type="submit">Modificar libro</button>
    </form>
</x-app-layout>