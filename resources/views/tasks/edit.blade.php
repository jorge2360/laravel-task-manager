<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar tarea
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-2xl p-6">
                <form method="POST" action="{{ route('tasks.update', $task) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Título</label>
                        <input
                            type="text"
                            name="title"
                            value="{{ old('title', $task->title) }}"
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm"
                        >
                        @error('title')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Descripción</label>
                        <textarea
                            name="description"
                            class="mt-1 w-full rounded-md border-gray-300 shadow-sm"
                        >{{ old('description', $task->description) }}</textarea>
                        @error('description')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Prioridad</label>
                            <select name="priority" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
                                <option value="low" @selected(old('priority', $task->priority) === 'low')>Baja</option>
                                <option value="medium" @selected(old('priority', $task->priority) === 'medium')>Media</option>
                                <option value="high" @selected(old('priority', $task->priority) === 'high')>Alta</option>
                            </select>
                            @error('priority')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Estado</label>
                            <select name="status" class="mt-1 w-full rounded-md border-gray-300 shadow-sm">
                                <option value="pending" @selected(old('status', $task->status) === 'pending')>Pendiente</option>
                                <option value="in_progress" @selected(old('status', $task->status) === 'in_progress')>En proceso</option>
                                <option value="completed" @selected(old('status', $task->status) === 'completed')>Completada</option>
                            </select>
                            @error('status')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Fecha límite</label>
                            <input
                                type="date"
                                name="due_date"
                                value="{{ old('due_date', $task->due_date) }}"
                                class="mt-1 w-full rounded-md border-gray-300 shadow-sm"
                            >
                            @error('due_date')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-6 flex gap-3">
                        <button
                            type="submit"
                            class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-sm transition hover:bg-blue-700 hover:scale-[1.02]">Actualizar tarea
                        </button>

                        <a
                            href="{{ route('tasks.index') }}"
                            class="bg-gray-500 text-white px-4 py-2 rounded-xl shadow-sm transition hover:bg-gray-600 hover:scale-[1.02]">Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>