<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar Projeto</h2>
    </x-slot>

    <form action="{{ route('projects.update', $project) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Nome</label>
            <input type="text" name="name" value="{{ $project->name }}" class="w-full border rounded p-2">
        </div>
        <div>
            <label>Descrição</label>
            <textarea name="description" class="w-full border rounded p-2">{{ $project->description }}</textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Atualizar</button>
    </form>
</x-app-layout>
