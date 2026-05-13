<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-4">

                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
                    <p class="text-sm text-gray-500">
                        Total tareas
                    </p>

                    <h3 class="mt-3 text-4xl font-bold text-gray-900">
                        {{ $totalTasks }}
                    </h3>
                </div>

                <div class="bg-yellow-50 p-6 rounded-lg shadow-sm border border-yellow-200">
                    <p class="text-sm text-yellow-700">
                        Pendientes
                    </p>

                    <h3 class="mt-3 text-4xl font-bold text-yellow-900">
                        {{ $pendingTasks }}
                    </h3>
                </div>

                <div class="bg-blue-50 p-6 rounded-lg shadow-sm border border-blue-200">
                    <p class="text-sm text-blue-700">
                        En proceso
                    </p>

                    <h3 class="mt-3 text-4xl font-bold text-blue-900">
                        {{ $inProgressTasks }}
                    </h3>
                </div>

                <div class="bg-green-50 p-6 rounded-lg shadow-sm border border-green-200">
                    <p class="text-sm text-green-700">
                        Completadas
                    </p>

                    <h3 class="mt-3 text-4xl font-bold text-green-900">
                        {{ $completedTasks }}
                    </h3>
                </div>

            </div>

            <div class="mt-8 bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">
                            Gestión de tareas
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Administra tus tareas y prioridades.
                        </p>
                    </div>

                    <a href="{{ route('tasks.index') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded-xl shadow-sm transition hover:bg-blue-700 hover:scale-[1.02]">
                        Ver tareas
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>