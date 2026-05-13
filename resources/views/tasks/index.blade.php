<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Mis tareas
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-2xl p-6 border border-gray-100">
                <div class="flex justify-between items-center mb-6">
                    @if (session('success'))
                        <div class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-green-700"class="mb-6 rounded-xl border border-green-200 bg-green-50 p-4 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h3 class="text-lg font-semibold text-gray-700">
                        Listado de tareas
                    </h3>

                    <a href="{{ route('tasks.create') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-sm transition hover:bg-blue-700 hover:scale-[1.02]">
                        Nueva tarea
                    </a>
                </div>

                @if ($tasks->isEmpty())
                    <p class="text-gray-500">No hay tareas registradas.</p>
                @else
                    <div class="overflow-x-auto">
                        <form method="GET" action="{{ route('tasks.index') }}" class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-4">
                            <div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Buscar</label>
                                    <input
                                        type="text"
                                        name="search"
                                        value="{{ request('search') }}"
                                        placeholder="Título o descripción"
                                        class="mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                    >
                                </div>
                                <label class="block text-sm font-medium text-gray-700">Estado</label>
                                <select name="status" class="mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Todos</option>
                                    <option value="pending" @selected(request('status') === 'pending')>Pendiente</option>
                                    <option value="in_progress" @selected(request('status') === 'in_progress')>En proceso</option>
                                    <option value="completed" @selected(request('status') === 'completed')>Completada</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700">Prioridad</label>
                                <select name="priority" class="mt-1 w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Todas</option>
                                    <option value="low" @selected(request('priority') === 'low')>Baja</option>
                                    <option value="medium" @selected(request('priority') === 'medium')>Media</option>
                                    <option value="high" @selected(request('priority') === 'high')>Alta</option>
                                </select>
                            </div>

                            <div class="flex items-end gap-2">
                                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-sm transition hover:bg-blue-700 hover:scale-[1.02]">
                                    Filtrar
                                </button>

                                <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-xl shadow-sm transition hover:bg-gray-600 hover:scale-[1.02]">
                                    Limpiar
                                </a>
                            </div>
                        </form>

                        @php
                            $priorityClasses = [
                                'low' => 'bg-green-100 text-green-700',
                                'medium' => 'bg-yellow-100 text-yellow-700',
                                'high' => 'bg-red-100 text-red-700',
                            ];

                            $priorityLabels = [
                                'low' => 'Baja',
                                'medium' => 'Media',
                                'high' => 'Alta',
                            ];

                            $statusClasses = [
                                'pending' => 'bg-gray-100 text-gray-700',
                                'in_progress' => 'bg-blue-100 text-blue-700',
                                'completed' => 'bg-green-100 text-green-700',
                            ];

                            $statusLabels = [
                                'pending' => 'Pendiente',
                                'in_progress' => 'En proceso',
                                'completed' => 'Completada',
                            ];
                        @endphp
                        <table class="w-full overflow-hidden rounded-xl"><table class="w-full overflow-hidden rounded-xl">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="border-b border-gray-200 p-4 text-left text-sm font-semibold text-gray-700">Título</th>
                                    <th class="border-b border-gray-200 p-4 text-left text-sm font-semibold text-gray-700">Prioridad</th>
                                    <th class="border-b border-gray-200 p-4 text-left text-sm font-semibold text-gray-700">Estado</th>
                                    <th class="border-b border-gray-200 p-4 text-left text-sm font-semibold text-gray-700">Fecha límite</th>
                                    <th class="border-b border-gray-200 p-4 text-left text-sm font-semibold text-gray-700">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="border-b border-gray-100 p-4 text-sm text-gray-700">{{ $task->title }}</td>
                                        <td class="border-b border-gray-100 p-4 text-sm text-gray-700">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $priorityClasses[$task->priority] }}">
                                                {{ $priorityLabels[$task->priority] }}
                                            </span>
                                        </td>

                                        <td class="border-b border-gray-100 p-4 text-sm text-gray-700">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $statusClasses[$task->status] }}">
                                                {{ $statusLabels[$task->status] }}
                                            </span>
                                        </td>
                                        <td class="border-b border-gray-100 p-4 text-sm text-gray-700">{{ $task->due_date ?? 'Sin fecha' }}</td>
                                        <td class="border-b border-gray-100 p-4 text-sm text-gray-700">
                                            <div class="flex gap-2">
                                                <a href="{{ route('tasks.edit', $task) }}"
                                                class="bg-amber-500 text-white px-3 py-1 rounded-xl transition hover:bg-amber-600">Editar</a>
                                                <form method="POST" action="{{ route('tasks.destroy', $task) }}"
                                                    onsubmit="return confirm('¿Deseas eliminar esta tarea?')">@csrf @method('DELETE')
                                                    <button type="submit"
                                                            class="bg-red-600 text-white px-3 py-1 rounded-xl transition hover:bg-red-700">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>