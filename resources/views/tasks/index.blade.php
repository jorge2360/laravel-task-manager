<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Mis tareas
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
                    @if (session('success'))
                        <div class="mb-4 rounded-md bg-green-100 p-3 text-green-700">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h3 class="text-lg font-semibold text-gray-700">
                        Listado de tareas
                    </h3>

                    <a href="{{ route('tasks.create') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Nueva tarea
                    </a>
                </div>

                @if ($tasks->isEmpty())
                    <p class="text-gray-500">No hay tareas registradas.</p>
                @else
                    <div class="overflow-x-auto">
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
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border p-3 text-left">Título</th>
                                    <th class="border p-3 text-left">Prioridad</th>
                                    <th class="border p-3 text-left">Estado</th>
                                    <th class="border p-3 text-left">Fecha límite</th>
                                    <th class="border p-3 text-left">Acciones</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="border p-3">{{ $task->title }}</td>
                                        <td class="border p-3">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $priorityClasses[$task->priority] }}">
                                                {{ $priorityLabels[$task->priority] }}
                                            </span>
                                        </td>

                                        <td class="border p-3">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $statusClasses[$task->status] }}">
                                                {{ $statusLabels[$task->status] }}
                                            </span>
                                        </td>
                                        <td class="border p-3">{{ $task->due_date ?? 'Sin fecha' }}</td>
                                        <td class="border p-3">
                                            <div class="flex gap-2">
                                                <a href="{{ route('tasks.edit', $task) }}"
                                                class="bg-amber-500 text-white px-3 py-1 rounded-md hover:bg-amber-600">Editar</a>
                                                <form method="POST" action="{{ route('tasks.destroy', $task) }}"
                                                    onsubmit="return confirm('¿Deseas eliminar esta tarea?')">@csrf @method('DELETE')
                                                    <button type="submit"
                                                            class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700">Eliminar</button>
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