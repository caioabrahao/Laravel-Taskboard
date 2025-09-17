<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar Tarefa</h2>
    </x-slot>

    <form action="{{ route('projects.tasks.update', [$project, $task]) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Título</label>
            <input type="text" name="title" value="{{ $task->title }}" class="w-full border rounded p-2">
        </div>
        <div>
            <label>
                <input type="checkbox" name="done" {{ $task->done ? 'checked' : '' }}> Concluída
            </label>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Atualizar</button>
    </form>
</x-app-layout>
