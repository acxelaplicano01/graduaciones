<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Graduando') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 sm:p-6">
                <form action="{{ route('graduandos.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
                        <!-- Carrera -->
                        <div class="md:col-span-2 sm:md:col-span-1">
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
                        <div class="md:col-span-2 sm:md:col-span-1">
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
                        <div class="md:col-span-2 sm:md:col-span-1">
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Número de Teléfono</label>
                            <input type="tel" 
                                   name="telefono" 
                                   id="telefono" 
                                   value="{{ old('telefono') }}"
                                   placeholder="Ej: 8899-1011 o +504 8899 1011"
                                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                   required>
                            <p class="mt-1 text-xs text-gray-500">Este número se usará para enviar las invitaciones por WhatsApp</p>
                            @error('telefono')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Cantidad de invitados -->
                        <div class="md:col-span-2 sm:md:col-span-1">
                            <label for="cantidad_invitados" class="block text-sm font-medium text-gray-700">Cantidad de Invitados (máximo 2)</label>
                            <select name="cantidad_invitados" 
                                    id="cantidad_invitados" 
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    required>
                                <option value="">Seleccionar cantidad</option>
                                <option value="1" {{ old('cantidad_invitados') == '1' ? 'selected' : '' }}>1 invitado</option>
                                <option value="2" {{ old('cantidad_invitados') == '2' ? 'selected' : '' }}>2 invitados</option>
                                <option value="2" {{ old('cantidad_invitados') == '3' ? 'selected' : '' }}>3 invitados</option>
                                <option value="2" {{ old('cantidad_invitados') == '4' ? 'selected' : '' }}>4 invitados</option>
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
                            <li>• Máximo 2 invitados por graduando</li>
                        </ul>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('graduandos.index') }}" class="w-full sm:w-auto bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded text-center">
                            Cancelar
                        </a>
                        <button type="submit" class="w-full sm:w-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Registrar Graduando
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
