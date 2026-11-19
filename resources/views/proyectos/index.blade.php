<x-layout titulo="Listado de proyectos">
    <ul class="grid gap-4 sm:grid-cols-2">
        @forelse ($proyectos as $id => $proyecto)
            <x-tarjeta-proyecto :proyecto="$proyecto" :id="$id"/>
        @empty
            <li>No hay proyectos disponibles.</li>
        @endforelse
    </ul>
</x-layout>

