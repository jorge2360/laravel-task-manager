<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mis tareas
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <div class="flex justify-between items-center mb-6">
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
                                        <td class="border p-3">{{ $task->priority }}</td>
                                        <td class="border p-3">{{ $task->status }}</td>
                                        <td class="border p-3">
                                            {{ $task->due_date ?? 'Sin fecha' }}
                                        </td>
                                        <td class="border p-3">
                                            Próximamente
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