<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Graduando') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('graduandos.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Carrera -->
                        <div>
                            <label for="carrera" class="block text-sm font-medium text-gray-700">Carrera</label>
                            <input type="text" 
                                   name="carrera" 
                                   id="carrera" 
                                   value="{{ old('carrera') }}"
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
                                   value="{{ old('nombre') }}"
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
                                   value="{{ old('telefono') }}"
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
                                <option value="1" {{ old('cantidad_invitados') == '1' ? 'selected' : '' }}>1 invitado</option>
                                <option value="2" {{ old('cantidad_invitados') == '2' ? 'selected' : '' }}>2 invitados</option>
                            </select>
                            @error('cantidad_invitados')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Información Importante</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Las invitaciones se generarán automáticamente con códigos únicos</li>
                            <li>• Cada invitación tendrá un número consecutivo y un código de 8 caracteres</li>
                            <li>• La fecha de graduación se establecerá automáticamente para dentro de 30 días</li>
                            <li>• Máximo 2 invitados por graduando</li>
                        </ul>
                    </div>

                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('graduandos.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                            Cancelar
                        </a>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Registrar Graduando
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
