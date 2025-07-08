<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitación a Graduación - UNAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>
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
        
        .gold-gradient {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
        }
        
        .pattern-bg {
            background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 20px 20px;
        }
        
        .invitation-card {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        @media print {
            .no-print { display: none !important; }
            body { background: white !important; }
        }
    </style>
</head>
<body class="gradient-bg pattern-bg min-h-screen flex items-center justify-center p-4 font-inter">
    <div class="w-full max-w-4xl">
        <!-- Invitación Principal -->
        <div class="invitation-card bg-white rounded-3xl overflow-hidden">
            <!-- Header con Logo UNAH -->
            <div class="gold-gradient p-8 text-center relative">
                <div class="absolute inset-0 pattern-bg opacity-20"></div>
                <div class="relative z-10">
                    <!-- Logo UNAH (simulado) -->
                    <div class="w-24 h-24 bg-white rounded-full mx-auto mb-4 flex items-center justify-center shadow-lg">
                        <div class="text-unah-blue font-bold text-2xl">UNAH</div>
                    </div>
                    <h1 class="font-playfair text-3xl md:text-4xl font-bold text-unah-blue mb-2">
                        Universidad Nacional Autónoma de Honduras
                    </h1>
                    <p class="text-unah-blue text-lg font-medium opacity-90">
                        CAMPUS CHOLUTECA
                    </p>
                </div>
            </div>

            <!-- Contenido Principal -->
            <div class="p-8 md:p-12">
                <!-- Título de la ceremonia -->
                <div class="text-center mb-8">
                    <h1 class="font-playfair font-bold text-unah-blue">El PhD. Odir Aarón Fernández Flores, 
                        Rector de la Universidad Nacional Autónoma de Honduras y el PhD. Céleo 
                        Emilio Arias Moncada, Director del Centro Universitario Regional del Litoral Pácifico <br>
                    Tienen el honor de invitarle a la:</h1>
                    <h2 class="font-playfair text-3xl md:text-5xl font-bold text-unah-blue mb-4">
                       Ceremonia de Graduación
                    </h2>
                    <div class="w-32 h-1 gold-gradient mx-auto rounded-full"></div>
                </div>

                <!-- Información del evento -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-unah-blue rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Fecha</p>
                                    <p class="text-xl font-bold text-unah-blue">Jueves 10 de Julio 2025</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-unah-blue rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Ceremonia</p>
                                    <p class="text-xl font-bold text-unah-blue">3:00 PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-unah-blue rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-600">Lugar</p>
                                    <p class="text-xl font-bold text-unah-blue">Hotel Jicaral</p>
                                    <p class="text-lg text-gray-700">Salón Guanacaure 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información del graduando -->
                <div class="bg-white border-2 border-unah-blue rounded-2xl p-8 mb-8">
                    <div class="text-center mb-6">
                        <h3 class="font-playfair text-2xl font-bold text-unah-blue mb-2">
                            Graduando
                        </h3>
                        <div class="w-20 h-1 gold-gradient mx-auto rounded-full"></div>
                    </div>
                    
                    <div class="text-center space-y-3">
                        <h4 class="font-playfair text-3xl font-bold text-gray-800">
                            {{ $graduando->nombre }}
                        </h4>
                        <p class="text-xl text-unah-blue font-medium">
                            {{ $graduando->carrera }}
                        </p>
                        @if($graduando->numero_cuenta)
                        <p class="text-lg text-gray-600">
                            Número de Cuenta: <span class="font-mono font-bold">{{ $graduando->numero_cuenta }}</span>
                        </p>
                        @endif
                    </div>
                </div>

                <!-- Información de la invitación -->
                <div class="bg-gradient-to-r from-yellow-50 to-orange-50 border-2 border-yellow-200 rounded-2xl p-8 mb-8">
                    <div class="text-center mb-6">
                        <h3 class="font-playfair text-2xl font-bold text-orange-800 mb-2">
                            Detalles de su Invitación
                        </h3>
                        <div class="w-20 h-1 bg-orange-400 mx-auto rounded-full"></div>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <p class="text-sm font-medium text-orange-700 mb-1">Número de Invitación</p>
                            <p class="text-3xl font-bold text-orange-800">N° {{ $invitacion->numero_invitacion }}</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm font-medium text-orange-700 mb-1">Código de Acceso</p>
                            <p class="text-3xl font-mono font-bold text-orange-800 tracking-wider">{{ $invitacion->codigo }}</p>
                        </div>
                        <div class="text-center">
                            <p class="text-sm font-medium text-orange-700 mb-3">Código QR</p>
                            <div class="flex justify-center">
                                <canvas id="qrcode" class="bg-white p-3 rounded-lg shadow-md"></canvas>
                            </div>
                            <p class="text-xs text-orange-600 mt-2">Escanea para verificar</p>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="text-center border-t border-gray-200 pt-8">
                    <p class="text-gray-600 mb-2">
                        Es un honor para la Universidad Nacional Autónoma de Honduras
                    </p>
                    <p class="font-playfair text-xl text-unah-blue font-semibold">
                        Invitarle a esta ceremonia tan especial
                    </p>
                </div>
            </div>
        </div>

        <!-- Botones de acción -->
        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center no-print">
            <button onclick="window.print()" 
                    class="bg-unah-blue hover:bg-blue-800 text-white font-medium py-3 px-6 rounded-xl transition-colors duration-200 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                Imprimir Invitación
            </button>
            
            <button id="whatsappBtn" onclick="compartirInvitacion()" 
                    class="bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-6 rounded-xl transition-all duration-300 flex items-center justify-center min-w-[200px]">
                <svg id="whatsappIcon" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.479 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <svg id="checkIcon" class="w-5 h-5 mr-2 hidden" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                </svg>
                <span id="whatsappText">Compartir por WhatsApp</span>
            </button>
        </div>
    </div>

    <script>
        let invitacionEnviada = false;

        // Generar QR al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            try {
                const qrCanvas = document.getElementById('qrcode');
                const verificacionUrl = `${window.location.origin}/verificar-invitacion/{{ $invitacion->codigo }}`;
                
                console.log('Generando QR para URL:', verificacionUrl);
                
                const qr = new QRious({
                    element: qrCanvas,
                    value: verificacionUrl,
                    size: 120,
                    foreground: '#1e3a8a', // Color azul UNAH
                    background: '#ffffff'
                });
                
                console.log('QR generado exitosamente');
                
            } catch (error) {
                console.error('Error generando QR:', error);
                document.getElementById('qrcode').innerHTML = '<p class="text-red-500 text-xs">Error generando QR</p>';
            }
        });

        function compartirInvitacion() {
            const url = window.location.href;
            const mensaje = `*Invitación a Graduación - UNAH CAMPUS CHOLUTECA*

*Graduando:* {{ $graduando->nombre }}
*Carrera:* {{ $graduando->carrera }}
*Fecha:* Jueves 10 de Julio 2025
*Hora:* 3:00 PM
*Lugar:* Hotel Jicaral, Salón Guanacaure 3

*Código de Invitación:* {{ $invitacion->codigo }}

Ver invitación completa: ${url}

¡Te esperamos en este momento tan especial!`;

            const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(mensaje)}`;
            window.open(whatsappUrl, '_blank');

            // Cambiar el estado del botón después del primer envío
            if (!invitacionEnviada) {
                invitacionEnviada = true;
                cambiarEstadoBoton();
                
                // Después de 3 segundos, permitir reenviar
                setTimeout(() => {
                    permitirReenvio();
                }, 3000);
            }
        }

        function cambiarEstadoBoton() {
            const btn = document.getElementById('whatsappBtn');
            const whatsappIcon = document.getElementById('whatsappIcon');
            const checkIcon = document.getElementById('checkIcon');
            const text = document.getElementById('whatsappText');

            // Cambiar apariencia del botón
            btn.classList.remove('bg-green-600', 'hover:bg-green-700');
            btn.classList.add('bg-green-700', 'cursor-default');
            
            // Cambiar iconos
            whatsappIcon.classList.add('hidden');
            checkIcon.classList.remove('hidden');
            
            // Cambiar texto
            text.textContent = 'Enviado ✓';
            
            // Deshabilitar temporalmente
            btn.disabled = true;
            btn.onclick = null;
        }

        function permitirReenvio() {
            const btn = document.getElementById('whatsappBtn');
            const whatsappIcon = document.getElementById('whatsappIcon');
            const checkIcon = document.getElementById('checkIcon');
            const text = document.getElementById('whatsappText');

            // Restaurar apariencia del botón para reenvío
            btn.classList.remove('bg-green-700', 'cursor-default');
            btn.classList.add('bg-blue-600', 'hover:bg-blue-700');
            
            // Cambiar iconos de vuelta a WhatsApp
            whatsappIcon.classList.remove('hidden');
            checkIcon.classList.add('hidden');
            
            // Cambiar texto a reenviar
            text.textContent = 'Reenviar por WhatsApp';
            
            // Reactivar botón
            btn.disabled = false;
            btn.onclick = compartirInvitacion;
        }
    </script>
</body>
</html>
