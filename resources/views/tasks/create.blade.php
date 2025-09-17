<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Nova Tarefa</h2>
    </x-slot>

    <form action="{{ route('projects.tasks.store', $project) }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Título</label>
            <input type="text" name="title" class="w-full border rounded p-2">
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Salvar</button>
    </form>
</x-app-layout>
