<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">{{ $project->name }}</h2>
    </x-slot>

    <h1 class="font-semibold text-3xl">{{ $project->name }}</h1>

    <p class="mb-4 text-gray-600">{{ $project->description }}</p>

    <a href="{{ route('projects.tasks.index', $project) }}" class="px-4 py-2 bg-green-600 text-white rounded">
        Ver Tarefas
    </a>

    <div class="mb-4">
        <h2 class="font-semibold text-xl mt-6 mb-2">Tarefas:</h2>
    <a href="{{ route('projects.tasks.create', $project) }}" class="px-4 py-2 bg-blue-600 text-white rounded"><i class="ri-add-circle-fill"></i> Nova Tarefa</a>
    </div>

    <ul class="space-y-2">
        @foreach ($tasks as $task)
            <li class="p-4 bg-white shadow rounded flex justify-between items-center">
                <div>
                    <span class="{{ $task->done ? 'line-through text-gray-500' : '' }}">
                        {{ $task->title }}
                    </span>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('projects.tasks.edit', [$project, $task]) }}" class="text-blue-600">Editar</a>
                    <form action="{{ route('projects.tasks.destroy', [$project, $task]) }}" method="POST" onsubmit="return confirm('Excluir esta tarefa?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600">Excluir</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
