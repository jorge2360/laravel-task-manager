<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-4 items-stretch">

                <div class="bg-white p-6 rounded-2xl shadow-md border border-gray-100 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm text-gray-500">Total tareas</p>
                            <h3 class="mt-4 text-5xl font-bold tracking-tight text-gray-900">
                                {{ $totalTasks }}
                            </h3>
                        </div>

                        <div class="rounded-xl bg-gray-100 p-3 text-gray-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6M9 8h6M5 4h14v16H5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 p-6 rounded-2xl shadow-md border border-yellow-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm text-yellow-500">Pendientes</p>
                            <h3 class="mt-4 text-5xl font-bold tracking-tight text-yellow-900">
                                {{ $pendingTasks }}
                            </h3>
                        </div>

                        <div class="rounded-xl bg-yellow-100 p-3 text-yellow-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6M9 8h6M5 4h14v16H5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-2xl shadow-md border border-blue-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm text-blue-500">En proceso</p>
                            <h3 class="mt-4 text-5xl font-bold tracking-tight text-blue-900">
                                {{ $inProgressTasks }}
                            </h3>
                        </div>

                        <div class="rounded-xl bg-blue-100 p-3 text-blue-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6M9 8h6M5 4h14v16H5z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-green-50 p-6 rounded-2xl shadow-md border border-green-200 transition hover:-translate-y-1 hover:shadow-lg">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="text-sm text-green-500">Completadas</p>
                            <h3 class="mt-4 text-5xl font-bold tracking-tight text-green-900">
                                {{ $completedTasks }}
                            </h3>
                        </div>

                        <div class="rounded-xl bg-green-100 p-3 text-green-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6M9 8h6M5 4h14v16H5z" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-8 bg-white rounded-2xl shadow-md border border-gray-100 p-6">
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