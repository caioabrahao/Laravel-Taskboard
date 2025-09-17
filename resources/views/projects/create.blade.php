<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl"><i class="ri-add-circle-fill"></i> Novo Projeto</h2>
    </x-slot>

    <form action="{{ route('projects.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Nome</label>
            <input type="text" name="name" class="w-full border rounded p-2">
        </div>
        <div>
            <label>Descrição</label>
            <textarea name="description" class="w-full border rounded p-2"></textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Salvar</button>
    </form>
</x-app-layout>
