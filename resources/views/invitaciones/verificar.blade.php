<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Verificación de Invitación - UNAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'unah-blue': '#003366',
                        'unah-gold': '#FFD700',
                        'unah-light-blue': '#4A90E2'
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap');
        
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
        
        .gradient-bg {
            background: linear-gradient(135deg, #003366 0%, #1e3a8a 50%, #3b82f6 100%);
        }
        
        .pattern-bg {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 20px 20px;
        }
        
        .verification-card {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .pulse-success {
            animation: pulse-success 2s infinite;
        }
        
        .pulse-error {
            animation: pulse-error 2s infinite;
        }
        
        @keyframes pulse-success {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.4);
            }
            50% {
                box-shadow: 0 0 0 20px rgba(34, 197, 94, 0);
            }
        }
        
        @keyframes pulse-error {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(239, 68, 68, 0.4);
            }
            50% {
                box-shadow: 0 0 0 20px rgba(239, 68, 68, 0);
            }
        }
    </style>
</head>
<body class="gradient-bg pattern-bg min-h-screen flex items-center justify-center p-4 font-inter">
    <div class="w-full max-w-2xl">
        @if($valido)
            <!-- Invitación Válida -->
            <div class="verification-card bg-white rounded-3xl overflow-hidden">
                <!-- Header de éxito -->
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 p-8 text-center text-white">
                    <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4 flex items-center justify-center pulse-success">
                        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h1 class="font-playfair text-3xl font-bold mb-2">¡Invitación Válida!</h1>
                    <p class="text-green-100 text-lg">Esta invitación ha sido verificada exitosamente</p>
                </div>

                <!-- Contenido de la invitación -->
                <div class="p-8">
                    <!-- Logo UNAH -->
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-unah-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                            <div class="text-white font-bold text-lg">UNAH</div>
                        </div>
                        <h2 class="font-playfair text-xl font-bold text-unah-blue">
                            Universidad Nacional Autónoma de Honduras
                        </h2>
                        <p class="text-unah-blue opacity-80">Campus Choluteca</p>
                    </div>

                    <!-- Información del evento -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 mb-6">
                        <h3 class="font-playfair text-xl font-bold text-unah-blue mb-4 text-center">
                            Ceremonia de Graduación
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                            <div>
                                <p class="text-sm font-medium text-gray-600">Fecha</p>
                                <p class="font-bold text-unah-blue">10 Jul 2025</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-600">Hora</p>
                                <p class="font-bold text-unah-blue">3:00 PM</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-600">Lugar</p>
                                <p class="font-bold text-unah-blue">Hotel Jicaral</p>
                            </div>
                        </div>
                    </div>

                    <!-- Información del graduando -->
                    <div class="bg-white border-2 border-green-200 rounded-2xl p-6 mb-6">
                        <h3 class="font-playfair text-lg font-bold text-gray-800 mb-4 text-center">
                            Graduando
                        </h3>
                        <div class="text-center">
                            <h4 class="font-playfair text-2xl font-bold text-gray-800 mb-2">
                                {{ $graduando->nombre }}
                            </h4>
                            <p class="text-lg text-unah-blue font-medium mb-2">
                                {{ $graduando->carrera }}
                            </p>
                            @if($graduando->numero_cuenta)
                            <p class="text-gray-600">
                                Cuenta: <span class="font-mono font-bold">{{ $graduando->numero_cuenta }}</span>
                            </p>
                            @endif
                        </div>
                    </div>

                    <!-- Detalles de la invitación -->
                    <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-2xl p-6">
                        <h3 class="font-playfair text-lg font-bold text-orange-800 mb-4 text-center">
                            Detalles de la Invitación
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-center">
                            <div>
                                <p class="text-sm font-medium text-orange-700">Número</p>
                                <p class="text-xl font-bold text-orange-800">N° {{ $invitacion->numero_invitacion }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-orange-700">Código</p>
                                <p class="text-xl font-mono font-bold text-orange-800">{{ $invitacion->codigo }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mensaje de éxito -->
                    <div class="text-center mt-8 p-4 bg-green-50 rounded-xl border border-green-200">
                        @if(isset($yaTomada) && $yaTomada)
                            <div class="bg-orange-100 border border-orange-300 rounded-lg p-4 mb-4">
                                <div class="flex items-center justify-center mb-2">
                                    <svg class="w-6 h-6 text-orange-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                    </svg>
                                    <span class="text-orange-800 font-medium">Invitación Ya Utilizada</span>
                                </div>
                                <p class="text-orange-700 text-sm">
                                    Esta invitación fue marcada como utilizada el {{ $invitacion->fecha_tomada ? $invitacion->fecha_tomada->format('d/m/Y H:i:s') : 'fecha no disponible' }}
                                </p>
                            </div>
                        @else
                            <p class="text-green-800 font-medium mb-4">
                                Esta invitación es válida para el acceso al evento
                            </p>
                            <p class="text-green-600 text-sm mb-4">
                                Presente este código en la entrada
                            </p>
                            
                            <!-- Botón para marcar como tomada -->
                            <button id="marcarTomadaBtn" onclick="marcarInvitacionTomada()" 
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-xl transition-all duration-300 inline-flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span id="btnText">Marcar como Utilizada</span>
                            </button>
                            
                            <!-- Mensaje de confirmación -->
                            <div id="confirmacionMensaje" class="hidden mt-4 p-3 bg-blue-50 rounded-lg border border-blue-200">
                                <p class="text-blue-800 text-sm">Invitación marcada como utilizada exitosamente</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <!-- Invitación Inválida -->
            <div class="verification-card bg-white rounded-3xl overflow-hidden">
                <!-- Header de error -->
                <div class="bg-gradient-to-r from-red-500 to-rose-600 p-8 text-center text-white">
                    <div class="w-20 h-20 bg-white rounded-full mx-auto mb-4 flex items-center justify-center pulse-error">
                        <svg class="w-10 h-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    <h1 class="font-playfair text-3xl font-bold mb-2">Invitación No Válida</h1>
                    <p class="text-red-100 text-lg">Esta invitación no pudo ser verificada</p>
                </div>

                <!-- Contenido del error -->
                <div class="p-8">
                    <!-- Logo UNAH -->
                    <div class="text-center mb-8">
                        <div class="w-16 h-16 bg-unah-blue rounded-full mx-auto mb-4 flex items-center justify-center">
                            <div class="text-white font-bold text-lg">UNAH</div>
                        </div>
                        <h2 class="font-playfair text-xl font-bold text-unah-blue">
                            Universidad Nacional Autónoma de Honduras
                        </h2>
                        <p class="text-unah-blue opacity-80">Campus Choluteca</p>
                    </div>

                    <!-- Mensaje de error -->
                    <div class="bg-red-50 border-2 border-red-200 rounded-2xl p-6 mb-6">
                        <div class="text-center">
                            <h3 class="font-playfair text-xl font-bold text-red-800 mb-3">
                                Código No Reconocido
                            </h3>
                            <p class="text-red-700 mb-4">
                                {{ $mensaje ?? 'El código de invitación que intentas verificar no es válido o ha expirado.' }}
                            </p>
                            @if(isset($codigo))
                            <div class="bg-white rounded-lg p-3 border border-red-300">
                                <p class="text-sm font-medium text-red-600 mb-1">Código escaneado:</p>
                                <p class="text-lg font-mono font-bold text-red-800">{{ $codigo }}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Posibles razones -->
                    <div class="bg-gray-50 rounded-2xl p-6 mb-6">
                        <h3 class="font-medium text-gray-800 mb-3">Posibles razones:</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start">
                                <span class="text-red-500 mr-2">•</span>
                                El código de invitación no existe
                            </li>
                            <li class="flex items-start">
                                <span class="text-red-500 mr-2">•</span>
                                La invitación ha sido cancelada
                            </li>
                            <li class="flex items-start">
                                <span class="text-red-500 mr-2">•</span>
                                Error en el escaneo del código QR
                            </li>
                        </ul>
                    </div>

                    <!-- Información de contacto -->
                    <div class="text-center p-4 bg-blue-50 rounded-xl border border-blue-200">
                        <p class="text-blue-800 font-medium mb-2">
                            ¿Necesitas ayuda?
                        </p>
                        <p class="text-blue-600 text-sm">
                            Contacta al organizador del evento para verificar tu invitación
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <!-- Botón de regreso -->
        <div class="mt-6 text-center">
            <button onclick="window.history.back()" 
                    class="bg-white hover:bg-gray-50 text-unah-blue font-medium py-3 px-6 rounded-xl border-2 border-unah-blue transition-colors duration-200 inline-flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Regresar
            </button>
        </div>
    </div>

    <script>
        // Agregar vibración en móviles si está disponible
        if (navigator.vibrate) {
            @if($valido)
                navigator.vibrate([200, 100, 200]); // Patrón de éxito
            @else
                navigator.vibrate([500]); // Vibración de error
            @endif
        }

        @if($valido && !(isset($yaTomada) && $yaTomada))
        function marcarInvitacionTomada() {
            const btn = document.getElementById('marcarTomadaBtn');
            const btnText = document.getElementById('btnText');
            const confirmacion = document.getElementById('confirmacionMensaje');
            
            // Deshabilitar botón temporalmente
            btn.disabled = true;
            btnText.textContent = 'Procesando...';
            btn.classList.add('opacity-50', 'cursor-not-allowed');
            
            // Realizar petición AJAX
            fetch('/marcar-tomada/{{ $codigo }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Éxito - cambiar apariencia del botón
                    btn.classList.remove('bg-blue-600', 'hover:bg-blue-700', 'opacity-50', 'cursor-not-allowed');
                    btn.classList.add('bg-green-600', 'cursor-default');
                    btnText.textContent = 'Marcada como Utilizada ✓';
                    
                    // Mostrar mensaje de confirmación
                    confirmacion.classList.remove('hidden');
                    
                    // Cambiar icono del botón
                    btn.innerHTML = `
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Utilizada ✓</span>
                    `;
                    
                    // Vibración de éxito
                    if (navigator.vibrate) {
                        navigator.vibrate([200, 100, 200]);
                    }
                    
                    // Desactivar permanentemente
                    btn.onclick = null;
                    
                } else {
                    // Error - mostrar mensaje
                    alert('Error: ' + data.message);
                    
                    // Restaurar botón
                    btn.disabled = false;
                    btnText.textContent = 'Marcar como Utilizada';
                    btn.classList.remove('opacity-50', 'cursor-not-allowed');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al procesar la solicitud');
                
                // Restaurar botón
                btn.disabled = false;
                btnText.textContent = 'Marcar como Utilizada';
                btn.classList.remove('opacity-50', 'cursor-not-allowed');
            });
        }
        @endif
    </script>
</body>
</html>
