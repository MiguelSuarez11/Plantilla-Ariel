<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }

          /* Transición para mostrar/ocultar el sidebar */
        .sidebar {
            transition: transform 0.3s ease;
        }

        /* Estado cerrado del sidebar */
        .closed {
            transform: translateX(-100%);
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen relative">
        <!-- Sidebar -->
        <div id="sidebar" class="w-1/5 bg-gray-50 p-6 border-r relative sidebar closed">
              <!-- Botón de despliegue -->
              <button id="toggleSidebar" class="absolute -right-3 top-4 bg-white p-1 rounded-full shadow focus:outline-none">
                <svg id="toggleIcon" class="h-5 w-5 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            <!-- Logo -->
            <div class="mb-8">
                <img src="https://app.arielapp.co/assets/dashboard/brand-logo-and-name.svg" alt="Logo Ariel" class="w-24">
            </div>

            <!-- Menú -->
            <nav>
                <ul>
                    <li class="mb-4">
                        <!-- Ícono de consultas con SVG -->
                        <a href="#" class="flex items-center text-gray-700 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10A8 8 0 112 10a8 8 0 0116 0zM9 7a1 1 0 102 0 1 1 0 00-2 0zm-.002 2.996a1 1 0 00-1.414 0l-2.828 2.829a1 1 0 001.414 1.414L8 11.413l3.828 3.828a1 1 0 001.414-1.414l-4.243-4.243a1 1 0 00-1.414 0l-.001.001z" clip-rule="evenodd" />
                            </svg>
                            Consultas
                        </a>
                    </li>
                    <li>
                        <!-- Ícono de transcripciones con SVG -->
                        <a href="#" class="flex items-center text-gray-700 font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 6H21M8 12h13M8 18h7M3 6h.01M3 12h.01M3 18h.01" />
                            </svg>
                            Transcripciones
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Prueba gratis -->
            <div class="absolute bottom-24 left-0 w-full px-6">
                <div class="p-4 bg-white rounded-lg shadow">
                    <p class="text-sm text-gray-500">El tiempo de acceso gratis terminará dentro de 3 días.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-md w-full">Ver planes</button>
                </div>
            </div>

            <!-- Perfil de usuario -->
            <div class="absolute bottom-0 left-0 w-full p-6 bg-gray-50 border-t">
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Usuario" class="w-10 h-10 rounded-full mr-3">
                    <div>
                        <p class="font-medium text-gray-700">Arturo Vidal</p>
                        <p class="text-sm text-gray-500">cofosa7744@exweme.com</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Contenido principal -->
        <div class="flex-1 flex flex-col justify-center items-center">
            <!-- Barra de navegación superior -->
            <div class="w-full max-w-5xl flex justify-center bg-white py-2 border-b">
                <button id="legalTab" class="px-6 py-2 text-gray-700 font-medium focus:outline-none" onclick="showTab('legal')">Legal</button>
                <button id="empresarialTab" class="px-6 py-2 text-gray-700 font-medium focus:outline-none" onclick="showTab('empresarial')">Empresarial</button>
                <button id="redaccionTab" class="px-6 py-2 text-gray-700 font-medium focus:outline-none" onclick="showTab('redaccion')">Redacción</button>
            </div>

            <!-- Contenido del chat dinámico -->
            <div class="text-center mt-10 w-full max-w-3xl" id="chatContent">
                <!-- Aquí se mostrará el contenido dinámico basado en el tab seleccionado -->
                <div id="legal" class="tabContent">
                    <img src="https://www.4b3ce87ca580ariel4bb7947a263be0850b58.net/assets/logofull-4b2354b7.png" alt="Imagen Ariel" class="w- mx-auto mb-6">
                    <h1 class="text-4xl font-bold text-gray-800">Ariel - Asistente Legal</h1>
                    <p class="text-lg text-gray-600 mt-4">Analiza miles de normas, jurisprudencia y doctrina legal especializada. No te limites a hacer preguntas, formula casos y pide que analice situaciones de la vida real.</p>
                </div>
                <div id="empresarial" class="tabContent hidden">
                    <h1 class="text-4xl font-bold text-gray-800">Ariel - Asistente Empresarial</h1>
                    <p class="text-lg text-gray-600 mt-4">Brinda soporte en temas empresariales como estrategia, operaciones, y cumplimiento normativo. Puedes realizar preguntas específicas sobre la gestión empresarial y recibir asistencia inmediata.</p>
                </div>
                <div id="redaccion" class="tabContent hidden">
                    <h1 class="text-4xl font-bold text-gray-800">Ariel - Asistente en Redacción</h1>
                    <p class="text-lg text-gray-600 mt-4">Asiste en la creación y edición de documentos jurídicos, empresariales o técnicos. Solicita revisiones de texto o genera nuevos documentos en base a tus necesidades.</p>
                </div>
            </div>

            <!-- Caja de preguntas -->
            <div class="mt-10 w-full max-w-2xl">
                <div class="flex items-center bg-white shadow-md rounded-lg px-4 py-2">
                    <input type="text" placeholder="Empieza a escribir tu pregunta aquí" class="w-full px-2 py-2 focus:outline-none">
                    <button class="text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>


    </div>

    <!-- Script para controlar el estado abierto/cerrado del sidebar -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleSidebarButton = document.getElementById('toggleSidebar');
        const toggleIcon = document.getElementById('toggleIcon');

        toggleSidebarButton.addEventListener('click', () => {
            sidebar.classList.toggle('closed');
            sidebar.querySelectorAll('.hidden-text').forEach(text => text.classList.toggle('hidden'));
            toggleIcon.classList.toggle('rotate-180');
        });
    </script>

    <!-- JavaScript para cambiar el contenido dinámico -->
    <script>
        function showTab(tab) {
            // Ocultar todos los contenidos de las pestañas
            document.querySelectorAll('.tabContent').forEach(content => {
                content.classList.add('hidden');
            });

            // Mostrar el contenido correspondiente a la pestaña seleccionada
            document.getElementById(tab).classList.remove('hidden');

            // Resaltar la pestaña activa
            document.querySelectorAll('button').forEach(button => {
                button.classList.remove('bg-gray-200');
            });
            document.getElementById(tab + 'Tab').classList.add('bg-gray-200');
        }

        // Mostrar la pestaña "Legal" al inicio
        showTab('legal');
    </script>

</body>

</html>
