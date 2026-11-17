<x-layout titulo="Listado de proyectos">
    @forelse ($proyectos as $proyecto)
        <li>{{$proyecto['nombre']}}</li>
    @empty
        <p>No hay proyectos disponibles.</p>
    @endforelse
</x-layout>

