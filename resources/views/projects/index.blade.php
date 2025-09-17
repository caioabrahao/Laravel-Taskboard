<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Meus Projetos</h2>
    </x-slot>

    <div class="mb-4">
        <a href="{{ route('projects.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">+ Novo Projeto</a>
    </div>

    <ul class="space-y-2">
        @if ($projects->isEmpty())
            <p>Nenhum projeto encontrado.</p>
        @endif

        @foreach ($projects as $project)
            <li class="p-4 bg-white shadow rounded flex justify-between items-center">
                <div>
                    <a href="{{ route('projects.show', $project) }}" class="font-bold text-lg">{{ $project->name }}</a>
                    <p class="text-gray-600">{{ $project->description }}</p>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('projects.edit', $project) }}" class="text-blue-600">Editar</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Excluir este projeto?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600">Excluir</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
