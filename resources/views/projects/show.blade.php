<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">{{ $project->name }}</h2>
    </x-slot>

    <h1 class="font-semibold text-3xl">{{ $project->name }}</h1>

    <p class="mb-4 text-gray-600">{{ $project->description }}</p>

    <a href="{{ route('projects.tasks.index', $project) }}" class="px-4 py-2 bg-green-600 text-white rounded">
        Ver Tarefas
    </a>
</x-app-layout>
