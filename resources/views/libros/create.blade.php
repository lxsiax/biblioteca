<x-app-layout>
    <x-errores/>
    <form action="{{ route('libros.store') }}" method="POST">
        @csrf
        <label for="titulo">
            <span>Titulo:</span>
            <input type="text" name="titulo" id="titulo">
        </label><br>
        <label for="autor">
            <span>Autor:</span>
            <input type="text" name="autor" id="autor">
        </label><br><br>
        <button type="submit">Insertar libro</button>
    </form>
</x-app-layout>