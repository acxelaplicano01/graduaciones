<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-2 sm:space-y-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Listado de Graduandos') }}
                @if ($carrera)
                    <span class="block sm:inline text-sm sm:text-xl text-gray-600 sm:text-gray-800">-
                        {{ $carrera }}</span>
                @endif
            </h2>
            <a href="{{ route('graduandos.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-center whitespace-nowrap">
                Nuevo Graduando
            </a>
        </div>
    </x-slot>

    <div class="py-6 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 sm:p-6">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Filtro por carrera -->
                <div class="mb-6">
                    <form method="GET" action="{{ route('graduandos.index') }}"
                        class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4">
                        <label for="carrera" class="text-sm font-medium text-gray-700">Filtrar por carrera:</label>
                        <select name="carrera" id="carrera"
                            class="flex-1 sm:flex-none border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Todas las carreras</option>
                            @foreach ($carreras as $carreraOption)
                                <option value="{{ $carreraOption }}" {{ $carrera == $carreraOption ? 'selected' : '' }}>
                                    {{ $carreraOption }}
                                </option>
                            @endforeach
                        </select>
                        <div class="flex space-x-2">
                            <button type="submit"
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                Filtrar
                            </button>
                            @if ($carrera)
                                <a href="{{ route('graduandos.index') }}"
                                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                                    Limpiar
                                </a>
                            @endif
                        </div>
                    </form>
                </div>

                @if ($graduandos->count() > 0)
                    <!-- Vista de tabla para pantallas grandes -->
                    <div class="hidden lg:block overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Carrera
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Teléfono
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Invitados
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Invitaciones
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($graduandos as $graduando)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ $graduando->nombre }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $graduando->carrera }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $graduando->telefono }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                {{ $graduando->cantidad_invitados }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            @foreach ($graduando->invitaciones as $invitacion)
                                                <div class="mb-2 p-2 bg-gray-50 rounded">
                                                    <div class="flex flex-col space-y-1">
                                                        <div>
                                                            <span
                                                                class="font-medium">N°{{ $invitacion->numero_invitacion }}</span>
                                                            -
                                                            <span
                                                                class="text-blue-600 font-mono">{{ $invitacion->codigo }}</span>
                                                        </div>
                                                        <div>
                                                            <span
                                                                class="text-gray-500 text-xs">{{ $invitacion->fecha->format('d/m/Y') }}</span>
                                                        </div>
                                                        <div class="flex space-x-1 mt-1">
                                                            <button
                                                                onclick="enviarPorWhatsApp('{{ $graduando->nombre }}', '{{ $graduando->carrera }}', '{{ $invitacion->codigo }}', '{{ $invitacion->numero_invitacion }}', '{{ $invitacion->fecha->format('d/m/Y') }}', '{{ $graduando->telefono }}')"
                                                                class="bg-green-500 hover:bg-green-600 text-white text-xs px-2 py-1 rounded flex items-center">
                                                                <svg class="w-3 h-3 mr-1" fill="currentColor"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                                                </svg>
                                                                WhatsApp
                                                            </button>
                                                            <!--  <button onclick="copiarCodigo('{{ $invitacion->codigo }}')"
                                                                class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-2 py-1 rounded flex items-center">
                                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                                                </svg>
                                                                Copiar
                                                            </button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('graduandos.show', $graduando) }}"
                                                class="text-indigo-600 hover:text-indigo-900 mr-3">Ver</a>
                                            <a href="{{ route('graduandos.edit', $graduando) }}"
                                                class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                                            <form action="{{ route('graduandos.destroy', $graduando) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900"
                                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este graduando?')">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Vista de tarjetas para pantallas pequeñas y medianas -->
                    <div class="lg:hidden space-y-4">
                        @foreach ($graduandos as $graduando)
                            <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                                <div class="flex justify-between items-start mb-3">
                                    <div>
                                        <h3 class="text-lg font-semibold text-gray-900">{{ $graduando->nombre }}</h3>
                                        <p class="text-sm text-gray-600">{{ $graduando->carrera }}</p>
                                    </div>
                                    <span
                                        class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $graduando->cantidad_invitados }}
                                        {{ $graduando->cantidad_invitados == 1 ? 'invitado' : 'invitados' }}
                                    </span>
                                </div>

                                <div class="mb-3">
                                    <p class="text-sm text-gray-600"><span class="font-medium">Teléfono:</span>
                                        {{ $graduando->telefono }}</p>
                                </div>

                                <div class="mb-4">
                                    <p class="text-sm font-medium text-gray-700 mb-2">Invitaciones:</p>
                                    <div class="space-y-2">
                                        @foreach ($graduando->invitaciones as $invitacion)
                                            <div class="bg-gray-50 p-3 rounded border text-sm">
                                                <div class="flex justify-between items-center mb-2">
                                                    <span
                                                        class="font-medium">N°{{ $invitacion->numero_invitacion }}</span>
                                                    <span
                                                        class="text-blue-600 font-mono">{{ $invitacion->codigo }}</span>
                                                </div>
                                                <p class="text-gray-500 text-xs mb-2">
                                                    {{ $invitacion->fecha->format('d/m/Y') }}</p>
                                                <div class="flex space-x-2">
                                                    <button
                                                        onclick="enviarPorWhatsApp('{{ $graduando->nombre }}', '{{ $graduando->carrera }}', '{{ $invitacion->codigo }}', '{{ $invitacion->numero_invitacion }}', '{{ $invitacion->fecha->format('d/m/Y') }}', '{{ $graduando->telefono }}')"
                                                        class="bg-green-500 hover:bg-green-600 text-white text-xs px-2 py-1 rounded flex items-center flex-1 justify-center">
                                                        <svg class="w-3 h-3 mr-1" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                                        </svg>
                                                        WhatsApp
                                                    </button>
                                                    <button onclick="copiarCodigo('{{ $invitacion->codigo }}')"
                                                        class="bg-blue-500 hover:bg-blue-600 text-white text-xs px-2 py-1 rounded flex items-center flex-1 justify-center">
                                                        <svg class="w-3 h-3 mr-1" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                                            </path>
                                                        </svg>
                                                        Copiar
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('graduandos.show', $graduando) }}"
                                        class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded text-sm font-medium">
                                        Ver
                                    </a>
                                    <a href="{{ route('graduandos.edit', $graduando) }}"
                                        class="bg-blue-100 text-blue-700 px-3 py-1 rounded text-sm font-medium">
                                        Editar
                                    </a>
                                    <form action="{{ route('graduandos.destroy', $graduando) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-100 text-red-700 px-3 py-1 rounded text-sm font-medium"
                                            onclick="return confirm('¿Estás seguro de que quieres eliminar este graduando?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8">
                        <p class="text-gray-500 text-lg">No hay graduandos
                            registrados{{ $carrera ? ' para la carrera ' . $carrera : '' }}.</p>
                        <a href="{{ route('graduandos.create') }}"
                            class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Registrar primer graduando
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- JavaScript para funcionalidades de WhatsApp y copiar -->
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
            const notificacion = document.createElement('div');
            notificacion.className =
                `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transform transition-all duration-300 translate-x-full`;

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

            setTimeout(() => {
                notificacion.classList.remove('translate-x-full');
            }, 100);

            setTimeout(() => {
                notificacion.classList.add('translate-x-full');
                setTimeout(() => {
                    document.body.removeChild(notificacion);
                }, 300);
            }, 3000);
        }
    </script>
</x-app-layout>
