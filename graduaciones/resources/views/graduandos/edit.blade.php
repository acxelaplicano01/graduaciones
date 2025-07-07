<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Graduando') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('graduandos.update', $graduando) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Carrera -->
                        <div>
                            <label for="carrera" class="block text-sm font-medium text-gray-700">Carrera</label>
                            <input type="text" 
                                   name="carrera" 
                                   id="carrera" 
                                   value="{{ old('carrera', $graduando->carrera) }}"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   required>
                            @error('carrera')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nombre del estudiante -->
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre del Estudiante</label>
                            <input type="text" 
                                   name="nombre" 
                                   id="nombre" 
                                   value="{{ old('nombre', $graduando->nombre) }}"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   required>
                            @error('nombre')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Número de teléfono -->
                        <div>
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Número de Teléfono</label>
                            <input type="tel" 
                                   name="telefono" 
                                   id="telefono" 
                                   value="{{ old('telefono', $graduando->telefono) }}"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   required>
                            @error('telefono')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Cantidad de invitados -->
                        <div>
                            <label for="cantidad_invitados" class="block text-sm font-medium text-gray-700">Cantidad de Invitados (máximo 2)</label>
                            <select name="cantidad_invitados" 
                                    id="cantidad_invitados" 
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required>
                                <option value="">Seleccionar cantidad</option>
                                <option value="1" {{ old('cantidad_invitados', $graduando->cantidad_invitados) == '1' ? 'selected' : '' }}>1 invitado</option>
                                <option value="2" {{ old('cantidad_invitados', $graduando->cantidad_invitados) == '2' ? 'selected' : '' }}>2 invitados</option>
                            </select>
                            @error('cantidad_invitados')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Invitaciones actuales -->
                    @if($graduando->invitaciones->count() > 0)
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h3 class="text-lg font-medium text-gray-900 mb-3">Invitaciones Actuales</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($graduando->invitaciones as $index => $invitacion)
                                    <div class="bg-white p-3 rounded border">
                                        <div class="text-sm">
                                            <strong>Invitación {{ $index + 1 }}</strong><br>
                                            N° {{ $invitacion->numero_invitacion }} - Código: <span class="font-mono">{{ $invitacion->codigo }}</span><br>
                                            Fecha: {{ $invitacion->fecha->format('d/m/Y') }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Importante</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Si cambias la cantidad de invitados, se ajustarán automáticamente las invitaciones</li>
                            <li>• Si reduces la cantidad, se eliminarán las invitaciones sobrantes</li>
                            <li>• Si aumentas la cantidad, se crearán nuevas invitaciones con códigos únicos</li>
                            <li>• Los cambios son permanentes y no se pueden deshacer</li>
                        </ul>
                    </div>

                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('graduandos.show', $graduando) }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Actualizar Graduando
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
