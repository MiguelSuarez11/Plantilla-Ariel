<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        /* Personalizando el scroll */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 4px;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex h-screen">
        <div class="w-1/2 flex justify-center rounded-2xl items-center p-8 mt-3 mb-80 ml-3 bg-white" style=" height: 700px; max-width: 800px; ">
            <div class="bg-white rounded-xl  p-8 max-w-xl w-full ">
                <img src="{{ asset('imagenes/brand.svg') }}" alt="Logo Ariel" class="w-24 mb-6">
                <h3 class="text-2xl font-bold mb-2">Crear cuenta</h3>
                <p class="text-gray-600 mb-6">Con tu cuenta podrás acceder a Ariel y todas sus funcionalidades.</p>

                <form>
                    <div class="relative mb-4">
                        <input type="email" id="email" placeholder="Email"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope text-gray-400" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.646 2.788L15 11.617V5.383zM1 5.383v6.234l4.646-2.788L1 5.383zm.354-.354L8 8.727l6.646-3.698L8 1.927 1.354 5.03z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative mb-4">
                        <input type="password" id="password" placeholder="Contraseña"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-lock text-gray-400" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a4 4 0 0 1 4 4v3h1.5A1.5 1.5 0 0 1 15 9.5v4A1.5 1.5 0 0 1 13.5 15h-11A1.5 1.5 0 0 1 1 13.5v-4A1.5 1.5 0 0 1 2.5 8H4V5a4 4 0 0 1 4-4zm3 5V5a3 3 0 0 0-6 0v3h6zM2.5 9a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-11z" />
                            </svg>
                        </div>
                    </div>
                    <div class="relative mb-6">
                        <input type="password" id="confirm-password" placeholder="Confirmar contraseña"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-lock text-gray-400" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a4 4 0 0 1 4 4v3h1.5A1.5 1.5 0 0 1 15 9.5v4A1.5 1.5 0 0 1 13.5 15h-11A1.5 1.5 0 0 1 1 13.5v-4A1.5 1.5 0 0 1 2.5 8H4V5a4 4 0 0 1 4-4zm3 5V5a3 3 0 0 0-6 0v3h6zM2.5 9a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-11z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Reglas de contraseña -->
                    <ul class="text-sm text-gray-400 mb-4">
                        <li>8 o más caracteres</li>
                        <li>1 letra mayúscula</li>
                        <li>1 letra minúscula</li>
                        <li>1 número</li>
                        <li>1 símbolo</li>
                    </ul>

                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="terms" class="mr-2" />
                        <label for="terms" class="text-sm text-gray-700">Acepto los <a href="#"
                                class="text-blue-600">Términos & Condiciones</a> y las <a href="#"
                                class="text-blue-600">Políticas de Privacidad</a>.</label>
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">Ingresar</button>
                </form>

                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-600">¿Ya tienes cuenta? <a href="#" class="text-blue-600">Inicia
                            sesión</a></p>
                </div>
            </div>
        </div>
        <!-- Sección de formulario -->


        <!-- Sección de chat -->
        <div class="w-1/2 flex flex-col justify-center items-center bg-gray-100 p-8">
            <img src="https://www.arielapp.co/assets/forms/value-proposal.svg" alt="Chat preview"
                class="max-w-full max-h-full object-contain mb-4">
            <p class="text-center text-gray-600 text-lg font-semibold">Resuelve cualquier consulta legal <br> en
                segundos.</p>
        </div>

    </div>
</body>

</html>
