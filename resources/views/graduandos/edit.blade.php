<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Graduando') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 sm:p-6">
                <form action="{{ route('graduandos.update', $graduando) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <!-- Carrera -->
                        <div class="md:col-span-2 sm:md:col-span-1">
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

                        <!-- Número de cuenta -->
                        <div class="md:col-span-2 sm:md:col-span-1">
                            <label for="numero_cuenta" class="block text-sm font-medium text-gray-700">Número de Cuenta</label>
                            <input type="text" 
                                   name="numero_cuenta" 
                                   id="numero_cuenta" 
                                   value="{{ old('numero_cuenta', $graduando->numero_cuenta) }}"
                                   placeholder="Ej: 20202300165"
                                   pattern="[0-9]{11}"
                                   maxlength="11"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <p class="mt-1 text-xs text-gray-500">Número de cuenta del estudiante (11 dígitos)</p>
                            @error('numero_cuenta')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nombre del estudiante -->
                        <div class="md:col-span-2 sm:md:col-span-1">
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
                        <div class="md:col-span-2 sm:md:col-span-1">
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Número de Teléfono</label>
                            <input type="tel" 
                                   name="telefono" 
                                   id="telefono" 
                                   value="{{ old('telefono', $graduando->telefono) }}"
                                   placeholder="Ej: 555-123-4567 o +52 555 123 4567"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   required>
                            <p class="mt-1 text-xs text-gray-500">Este número se usará para enviar las invitaciones por WhatsApp</p>
                            @error('telefono')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>

                        <!-- Cantidad de invitados -->
                        <div class="md:col-span-2 sm:md:col-span-1">
                            <label for="cantidad_invitados" class="block text-sm font-medium text-gray-700">Cantidad de Invitados (máximo 2)</label>
                            <select name="cantidad_invitados" 
                                    id="cantidad_invitados" 
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required>
                                <option value="">Seleccionar cantidad</option>
                                <option value="1" {{ old('cantidad_invitados', $graduando->cantidad_invitados) == '1' ? 'selected' : '' }}>1 invitado</option>
                                <option value="2" {{ old('cantidad_invitados', $graduando->cantidad_invitados) == '2' ? 'selected' : '' }}>2 invitados</option>
                                <option value="3" {{ old('cantidad_invitados', $graduando->cantidad_invitados) == '3' ? 'selected' : '' }}>3 invitado</option>
                                <option value="4" {{ old('cantidad_invitados', $graduando->cantidad_invitados) == '4' ? 'selected' : '' }}>4 invitados</option>
                                <option value="5" {{ old('cantidad_invitados', $graduando->cantidad_invitados) == '5' ? 'selected' : '' }}>5 invitados</option>
                            </select>
                            @error('cantidad_invitados')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                   <div class="mt-6 space-y-4 bg-white p-4 rounded-lg shadow-sm">
                     <!-- Invitaciones actuales -->
                    @if($graduando->invitaciones->count() > 0)
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h3 class="text-lg font-medium text-blue-900 mb-3">Invitaciones Actuales</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                @foreach($graduando->invitaciones as $index => $invitacion)
                                    <div class="bg-white p-3 rounded border text-sm">
                                        <div class="font-medium">Invitación {{ $index + 1 }}</div>
                                        <div class="text-blue-600 font-mono">{{ $invitacion->codigo }}</div>
                                        <div class="text-gray-500 text-xs">N° {{ $invitacion->numero_invitacion }} - {{ $invitacion->fecha->format('d/m/Y') }}</div>
                                    </div>
                                @endforeach
                            </div>
                            <p class="text-blue-700 text-sm mt-2">
                                <strong>Nota:</strong> Si cambias la cantidad de invitados, las invitaciones se ajustarán automáticamente.
                            </p>
                        </div>
                    @endif
                    <!-- Información importante -->
                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Importante</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Si cambias la cantidad de invitados, se ajustarán automáticamente las invitaciones</li>
                            <li>• Si reduces la cantidad, se eliminarán las invitaciones sobrantes</li>
                            <li>• Si aumentas la cantidad, se crearán nuevas invitaciones con códigos únicos</li>
                            <li>• Los cambios son permanentes y no se pueden deshacer</li>
                        </ul>
                    </div>
                
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('graduandos.show', $graduando) }}" class="w-full sm:w-auto bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded text-center">
                            Cancelar
                        </a>
                        <button type="submit" class="w-full sm:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Actualizar Graduando
                        </button>
                    </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
