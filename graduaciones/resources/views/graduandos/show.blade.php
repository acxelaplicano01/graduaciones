<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detalles del Graduando') }}
            </h2>
            <div class="space-x-2">
                <a href="{{ route('graduandos.edit', $graduando) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Editar
                </a>
                <a href="{{ route('graduandos.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                    Volver al listado
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Información del Graduando -->
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Información Personal</h3>
                        
                        <div class="space-y-3">
                            <div>
                                <span class="text-sm font-medium text-gray-500">Nombre:</span>
                                <p class="text-lg text-gray-900">{{ $graduando->nombre }}</p>
                            </div>
                            
                            <div>
                                <span class="text-sm font-medium text-gray-500">Carrera:</span>
                                <p class="text-lg text-gray-900">{{ $graduando->carrera }}</p>
                            </div>
                            
                            <div>
                                <span class="text-sm font-medium text-gray-500">Teléfono:</span>
                                <p class="text-lg text-gray-900">{{ $graduando->telefono }}</p>
                            </div>
                            
                            <div>
                                <span class="text-sm font-medium text-gray-500">Cantidad de Invitados:</span>
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                    {{ $graduando->cantidad_invitados }} {{ $graduando->cantidad_invitados == 1 ? 'invitado' : 'invitados' }}
                                </span>
                            </div>
                            
                            <div>
                                <span class="text-sm font-medium text-gray-500">Fecha de Registro:</span>
                                <p class="text-lg text-gray-900">{{ $graduando->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Invitaciones -->
                    <div class="bg-blue-50 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Invitaciones Generadas</h3>
                        
                        @if($graduando->invitaciones->count() > 0)
                            <div class="space-y-4">
                                @foreach($graduando->invitaciones as $index => $invitacion)
                                    <div class="bg-white p-4 rounded-lg border border-blue-200">
                                        <div class="flex justify-between items-start mb-2">
                                            <h4 class="font-semibold text-gray-900">Invitación {{ $index + 1 }}</h4>
                                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">
                                                N° {{ $invitacion->numero_invitacion }}
                                            </span>
                                        </div>
                                        
                                        <div class="grid grid-cols-2 gap-4 text-sm">
                                            <div>
                                                <span class="text-gray-500">Código:</span>
                                                <p class="font-mono font-bold text-lg text-blue-600">{{ $invitacion->codigo }}</p>
                                            </div>
                                            
                                            <div>
                                                <span class="text-gray-500">Fecha de Graduación:</span>
                                                <p class="font-medium">{{ $invitacion->fecha->format('d/m/Y') }}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="mt-3 p-2 bg-gray-50 rounded text-xs text-gray-600">
                                            <strong>Código QR sugerido:</strong> Este código puede usarse para generar un QR que facilite el acceso el día de la graduación.
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-4">
                                <p class="text-gray-500">No hay invitaciones generadas para este graduando.</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Información adicional -->
                <div class="mt-8 bg-yellow-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Instrucciones para el día de la graduación</h4>
                    <ul class="text-sm text-yellow-700 space-y-1">
                        <li>• Cada invitado debe presentar su código de invitación en la entrada</li>
                        <li>• Los códigos son únicos e intransferibles</li>
                        <li>• Se recomienda imprimir o tener los códigos disponibles en el teléfono</li>
                        <li>• En caso de pérdida del código, contactar con la administración</li>
                    </ul>
                </div>

                <!-- Botones de acción -->
                <div class="mt-6 flex justify-end space-x-4">
                    <form action="{{ route('graduandos.destroy', $graduando) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                onclick="return confirm('¿Estás seguro de que quieres eliminar este graduando? Se eliminarán también todas sus invitaciones.')">
                            Eliminar Graduando
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
