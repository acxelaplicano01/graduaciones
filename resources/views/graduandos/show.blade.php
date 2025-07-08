<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-2 sm:space-y-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Detalles del Graduando') }}
            </h2>
            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                <a href="{{ route('graduandos.edit', $graduando) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center">
                    Editar
                </a>
                <a href="{{ route('graduandos.index') }}"
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded text-center">
                    Volver al listado
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 sm:p-6">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Información del Graduando -->
                    <div class="bg-gray-50 p-4 sm:p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Información Personal</h3>

                        <div class="space-y-4 sm:space-y-3">
                            <div>
                                <span class="text-sm font-medium text-gray-500">Nombre:</span>
                                <p class="text-base sm:text-lg text-gray-900 break-words">{{ $graduando->nombre }}</p>
                            </div>

                            <div>
                                <span class="text-sm font-medium text-gray-500">Carrera:</span>
                                <p class="text-base sm:text-lg text-gray-900 break-words">{{ $graduando->carrera }}</p>
                            </div>

                            <div>
                                <span class="text-sm font-medium text-gray-500">Teléfono:</span>
                                <p class="text-base sm:text-lg text-gray-900">{{ $graduando->telefono }}</p>
                            </div>

                            <div>
                                <span class="text-sm font-medium text-gray-500">Cantidad de Invitados:</span>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                    {{ $graduando->cantidad_invitados }}
                                    {{ $graduando->cantidad_invitados == 1 ? 'invitado' : 'invitados' }}
                                </span>
                            </div>

                            <div>
                                <span class="text-sm font-medium text-gray-500">Fecha de Registro:</span>
                                <p class="text-base sm:text-lg text-gray-900">
                                    {{ $graduando->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Invitaciones -->
                    <div class="bg-blue-50 p-4 sm:p-6 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Invitaciones Generadas</h3>

                        @if ($graduando->invitaciones->count() > 0)
                            <div class="space-y-4">
                                @foreach ($graduando->invitaciones as $index => $invitacion)
                                    <div class="bg-white p-4 rounded-lg border border-blue-200">
                                        <div
                                            class="flex flex-col sm:flex-row sm:justify-between sm:items-start mb-2 space-y-1 sm:space-y-0">
                                            <h4 class="font-semibold text-gray-900">Invitación {{ $index + 1 }}</h4>
                                            
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded self-start">
                                                N° {{ $invitacion->numero_invitacion }}
                                            </span>
                                        </div>

                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                                            <div>
                                                <span class="text-gray-500">Código:</span>
                                                <p class="font-mono font-bold text-lg text-blue-600 break-all">
                                                    {{ $invitacion->codigo }}</p>
                                            </div>

                                            <div>
                                                <span class="text-gray-500">Fecha de Graduación:</span>
                                                <p class="font-medium">{{ $invitacion->fecha->format('d/m/Y') }}</p>
                                            </div>
                                        </div>

                                        <div class="mt-3 p-2 bg-gray-50 rounded text-xs text-gray-600">
                                            <strong>Código QR sugerido:</strong> Este código puede usarse para generar
                                            un QR que facilite el acceso el día de la graduación.
                                        </div>

                                        <!-- Botón de WhatsApp -->
                                        <div class="mt-3 flex flex-col sm:flex-row gap-2">
                                            <button onclick="enviarPorWhatsApp('{{ $graduando->nombre }}', '{{ $graduando->carrera }}', '{{ $invitacion->codigo }}', '{{ $invitacion->numero_invitacion }}', '{{ $invitacion->fecha->format('d/m/Y') }}', '{{ $graduando->telefono }}')"
                                                class="flex items-center justify-center bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                                </svg>
                                                Enviar por WhatsApp
                                            </button>
                                            
                                          <!-- <button onclick="copiarCodigo('{{ $invitacion->codigo }}')"
                                                class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                                </svg>
                                                Copiar Código
                                            </button> -->
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
                <div class="mt-6 lg:mt-8 bg-yellow-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-2">Instrucciones para el día de la graduación</h4>
                    <ul class="text-sm text-yellow-700 space-y-1">
                        <li>• Cada invitado debe presentar su código de invitación en la entrada</li>
                        <li>• Los códigos son únicos e intransferibles</li>
                        <li>• Se recomienda imprimir o tener los códigos disponibles en el teléfono</li>
                        <li>• En caso de pérdida del código, contactar con la administración</li>
                    </ul>
                </div>

                <!-- Botones de acción -->
                <div class="mt-6 flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-4">
                    <form action="{{ route('graduandos.destroy', $graduando) }}" method="POST"
                        class="w-full sm:w-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full sm:w-auto bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                            onclick="return confirm('¿Estás seguro de que quieres eliminar este graduando? Se eliminarán también todas sus invitaciones.')">
                            Eliminar Graduando
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para funcionalidades adicionales -->
    <script>
        function enviarPorWhatsApp(nombreGraduando, carrera, codigo, numeroInvitacion, fecha, telefono) {
            const urlInvitacion = `${window.location.origin}/invitacion/${codigo}`;
            
            const mensaje = `*Invitación a Graduación - UNAH CAMPUS CHOLUTECA*

        *Ceremonia de Graduación*
        *Fecha:* Jueves 10 de Julio 2025
        *Hora:* Ceremonia 3:00 PM
        *Lugar:* Hotel Jicaral, Salón Guanacaure 3

        *Graduando:* ${nombreGraduando}
        *Carrera:* ${carrera}

        *Detalles de la Invitación:*
        • Número de Invitación: ${numeroInvitacion}
        • Código de Acceso: *${codigo}*

        *Ver invitación completa:* ${urlInvitacion}

        Presenta este código en la entrada el día de la graduación.

        ¡Te esperamos en este momento tan especial!`;

            // Limpiar el número de teléfono (remover espacios, guiones, paréntesis)
            let numeroLimpio = telefono.replace(/[\s\-\(\)\+]/g, '');
            
            // Validar que el número tenga al menos 8 dígitos
            if (numeroLimpio.length < 8) {
                alert('El número de teléfono parece incompleto. Verifica que tenga al menos 8 dígitos.');
                return;
            }
            
            // Si el número no empieza con código de país, asumimos que es de Honduras (+504)
            if (!numeroLimpio.startsWith('504') && numeroLimpio.length === 8) {
                numeroLimpio = '504' + numeroLimpio;
            }
            
            // Validar que el número final tenga 11 dígitos (504 + 8 dígitos)
            if (numeroLimpio.startsWith('504') && numeroLimpio.length !== 11) {
                alert('El número de teléfono de Honduras debe tener 8 dígitos después del código +504.');
                return;
            }

            const url = `https://wa.me/${numeroLimpio}?text=${encodeURIComponent(mensaje)}`;
            
            // Mostrar el número al que se enviará para confirmación
            if (confirm(`¿Enviar invitación por WhatsApp al número +${numeroLimpio}?`)) {
                window.open(url, '_blank');
            }
        }

        function copiarCodigo(codigo) {
            navigator.clipboard.writeText(codigo).then(function() {
                // Mostrar notificación de éxito
                mostrarNotificacion('Código copiado al portapapeles', 'success');
            }, function(err) {
                // Fallback para navegadores que no soporten clipboard API
                const textArea = document.createElement('textarea');
                textArea.value = codigo;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                mostrarNotificacion('Código copiado al portapapeles', 'success');
            });
        }

        function mostrarNotificacion(mensaje, tipo) {
            // Crear elemento de notificación
            const notificacion = document.createElement('div');
            notificacion.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full`;
            
            if (tipo === 'success') {
                notificacion.className += ' bg-green-500 text-white';
            } else {
                notificacion.className += ' bg-red-500 text-white';
            }
            
            notificacion.innerHTML = `
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>${mensaje}</span>
                </div>
            `;
            
            document.body.appendChild(notificacion);
            
            // Mostrar notificación
            setTimeout(() => {
                notificacion.classList.remove('translate-x-full');
            }, 100);
            
            // Ocultar notificación después de 3 segundos
            setTimeout(() => {
                notificacion.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(notificacion);
                }, 300);
            }, 3000);
        }

        // Mejorar experiencia de usuario en móviles
        document.addEventListener('DOMContentLoaded', function() {
            // Agregar efecto de toque en botones para móviles
            const botones = document.querySelectorAll('button');
            botones.forEach(boton => {
                boton.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.95)';
                });
                boton.addEventListener('touchend', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });
    </script>
</x-app-layout>
