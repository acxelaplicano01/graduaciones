<x-app-layout>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Verificar Invitación</h2>
            <p class="text-gray-600">Ingrese el código de su invitación para verificar su validez</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('invitacion.procesar') }}">
            @csrf
            
            <div class="mb-4">
                <label for="codigo" class="block text-sm font-medium text-gray-700 mb-2">
                    Código de Invitación
                </label>
                <input 
                    type="text" 
                    id="codigo" 
                    name="codigo" 
                    value="{{ old('codigo') }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Ingrese el código de invitación"
                    required
                    autofocus
                >
                @error('codigo')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-200"
                >
                    Verificar Invitación
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                ¿No tienes el código? Contacta al graduando para obtenerlo.
            </p>
        </div>
    </div>
</div>
</x-app-layout>