<x-app-layout>
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Usuarios</h1>
                <p class="text-gray-600">Lista de usuarios registrados en la plataforma</p>
            </div>

            <!-- Grid de tarjetas -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($users as $user)
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 border border-gray-100 overflow-hidden">
                        <!-- Avatar section -->
                        <div class="bg-gradient-to-r from-blue-500 to-teal-600 h-20 relative">
                            <div class="absolute -bottom-6 left-6">
                                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg border-2 border-white">
                                    <span class="text-lg font-semibold text-gray-700">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="pt-8 pb-6 px-6">
                            <h2 class="text-xl font-semibold text-gray-900 mb-2 truncate">
                                {{ $user->name }}
                            </h2>

                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="truncate">{{ $user->email }}</span>
                                </div>

                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0h6m0 0v10a2 2 0 01-2 2H10a2 2 0 01-2-2V7"></path>
                                    </svg>
                                    <span>{{ $user->created_at->format('d M Y') }}</span>
                                </div>
                            </div>

                            <!-- Badge de estado -->
                            <div class="mt-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Activo
                                </span>
                            </div>
                        </div>

                        <!-- Actions (opcional) -->
                        <div class="px-6 pb-4 border-t border-gray-50">
                            <button class="w-full mt-3 bg-gray-50 hover:bg-gray-100 text-gray-700 text-sm font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                                Ver perfil
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty state (si no hay usuarios) -->
            @if($users->isEmpty())
                <div class="text-center py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No hay usuarios</h3>
                    <p class="mt-1 text-sm text-gray-500">Aún no se han registrado usuarios en la plataforma.</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
