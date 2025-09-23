<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Nova Tarefa</h2>
    </x-slot>

    <form action="{{ route('projects.tasks.store', $project) }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Nome da Tarefa:</label>
            <input type="text" name="title" placeholder="O que precisa ser feito?" class="w-full border rounded p-2 border-gray-300" required>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Salvar</button>
    </form>
</x-app-layout>
