<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header class='flex  py-4 px-4 sm:px-10 bg-white font-[sans-serif] min-h-[80px] tracking-wide relative z-50'>
        <div class='flex flex-wrap items-center gap-5 w-full'>
            <a href="javascript:void(0)"><img src="{{ asset('imagenes/brand.svg') }}" alt="logo"
                    class='w-40 max-lg:mr-5' />
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!flex lg:ml-auto max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex gap-4 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="" alt="logo" class='w-40' />
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'>
                        <a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[#333] font-semibold block text-[15px]'>Precios</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[#333] font-semibold block text-[15px]'>Nosotros</a>
                    </li>

                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href='javascript:void(0)'
                            class='hover:text-[#007bff] text-[#333] font-semibold block text-[15px]'>Blog</a>
                    </li>


                </ul>
            </div>

            <div class='flex items-center max-lg:ml-auto space-x-6'>
                <button
                    class='px-4 py-2 text-[15px] rounded font-semibold text-[#333] bg-slate-400  hover:bg-[#007bff] transition-all ease-in-out duration-300 bg-transparent hover:text-white'>Iniciar
                    sesion</button>


                    <button type="button"
                    class="px-5 py-2.5 rounded-lg text-white text-sm tracking-wider font-medium border border-current outline-none bg-gradient-to-tr hover:bg-gradient-to-tl from-blue-700 to-blue-300">Probar Gratis</button>

                <button id="toggleOpen" class='lg:hidden'>
                    <svg class="w-7 h-7" fill="#333" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>


    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[810px] text-center lg:mb-20">
                        <span class="block mb-2 text-gray-400 text-lg font-semibold text-primary">
                            Asistente legal con IA
                        </span>
                        <h2 class="mb-4 text-3xl font-semibold text-dark sm:text-4xl md:text-[55px] dark:text-white">
                            Conocimiento especializado
                        </h2>
                        <h2
                            class=" bg-gradient-to-r from-[#56c596] to-[#20aeda] bg-clip-text text-transparent mb-4 text-3xl font-semibold text-dark sm:text-4xl md:text-[50px] dark:text-white">
                            al alcance de todos
                        </h2>

                        <h2 class="  mb-4 text-1xl font-normal text-gray-500 sm:text-1xl md:text-[19px] dark:text-white">
                            Analiza e interpreta miles de regulaciones y documentos legales de todos los sectores en
                            Colombia, rápidamente y con total confianza.

                        </h2>
                        <div class="flex justify-center">
                            <button class=" px-14 py-3   bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
                                Probar Gratis
                            </button>
                        </div>

                        <video class="mt-12 h-full w-full rounded-lg" controls>
                            <source src="https://www.arielapp.co/assets/hero/videoDemo.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>




                    </div>
                </div>
            </div>


        </div>

    </section>

    <!-- ====== Brands Section Start -->
    <section>
        <div class="container mx-auto">
            <style>
                .logo-slider {
                    overflow: hidden;
                    position: relative;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .logo-track {
                    display: flex;
                    animation: slide-horizontal 15s linear infinite;
                }

                .logo-slider::before,
                .logo-slider::after {
                    content: '';
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    width: 100px;
                    /* Ajusta el ancho del desvanecimiento */
                    z-index: 1;
                }

                .logo-slider::before {
                    left: 0;
                    background: linear-gradient(to right, white, transparent);
                }

                .logo-slider::after {
                    right: 0;
                    background: linear-gradient(to left, white, transparent);
                }


                @keyframes slide-horizontal {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-35%);
                    }
                }

                .logo-item {
                    display: inline-block;
                    margin-right: 40px;
                    /* Espacio entre logos */
                    width: 250px;
                    /* Ajusta el tamaño según sea necesario */
                }

                .logo-item img {
                    width: 100%;
                    height: auto;
                }
            </style>
             <div class="max-w-lg mx-auto p-4 text-center">
                <h2 class="text-gray-800 text-4xl font-semibold mb-6">Ya confían en nosotros</h2>

              </div>
            <div class="logo-slider">
                <div class="logo-track">
                    <!-- Primera copia de logos -->
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 1" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/lineicons.svg" alt="Logo 2" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/uideck.svg" alt="Logo 3" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <!-- Segunda copia de logos para un ciclo continuo -->
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 1" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/lineicons.svg" alt="Logo 2" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/uideck.svg" alt="Logo 3" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/ayroui.svg" alt="Logo 4" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                    <div class="logo-item">
                        <img src="https://cdn.tailgrids.com/2.2/assets/images/brands/graygrids.svg" alt="Logo 5" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Brands Section End -->



    <section class="mt-44">
        <div
            class="max-w-6xl mx-auto flex items-center bg-gradient-to-r from-[#1A2848] to-blue-900 px-8 py-8 rounded-2xl shadow-lg">
            <div class="flex-1">
                <h2 class="mb-4 text-3xl  text-white sm:text-4xl md:text-[30px] dark:text-white">
                    Creado por abogados para facilitar la toma de decisiones en cualquier organización que trabaje con
                    regulación especializada.
                </h2>
                <h2 class="  mb-4 text-1xl  text-[#9ca3af] sm:text-1xl md:text-[20px] dark:text-white">
                    Desarrollado con el respaldo de <a href="#"   class=" bg-gradient-to-r from-[#56c596] to-[#20aeda] bg-clip-text text-transparent mb-4  font-bold text-dark  dark:text-white">Pava Díaz
                        Arana</a>, firma líder en Colombia en derecho punitivo y riesgos corporativo.

                </h2>



                <a href="#" class="text-blue-300 underline">Conocer más de PDA</a>
            </div>
            <div class="flex-shrink-0 ml-8">
                <img src="https://www.arielapp.co/assets/pda/pda-certified.svg" alt="PDA Badge"
                    class="w-32 h-auto" />
            </div>
        </div>
    </section>

    <section class="mt-14">
        <div class="bg-white font-[sans-serif]">
            <div class="max-w-lg mx-auto p-4 text-center">
              <h2 class="text-gray-800 text-4xl font-bold mb-6">Beneficios y capacidades</h2>

            </div>
          </div>

          <div class="bg-white font-sans p-4">
            <div class="max-w-5xl max-lg:max-w-3xl max-md:max-w-sm mx-auto">

                {{-- TARJETA #1 --}}
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                <div class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                  <div class="h-64 lg:w-full">
                    <img src="https://www.arielapp.co/assets/benefits/card1.svg" alt="Blog Post 1" class="w-full h-full object-cover" />
                  </div>
                  <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800">Tecnología GPT Avanzada</h3>
                    <p class="text-sm text-gray-500 mt-4">Ahorra cientos de horas en investigación, transcripción y análisis de documentos y audios.</p>
                  </div>
                </div>
                {{-- TARJETA #2 --}}
                <div class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                  <div class="h-64 lg:w-full">
                    <img src="https://www.arielapp.co/assets/benefits/card2.svg" alt="Blog Post 2" class="w-full h-full object-cover" />
                  </div>
                  <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800">Respuestas Específicas y Precisas</h3>
                    <p class="text-sm text-gray-500 mt-4">Ariel produce respuestas fundamentadas en el marco legal colombiano.</p>
                  </div>
                </div>

                {{-- TARJETA #3 --}}
                <div class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                  <div class="h-64 lg:w-full">
                    <img src="https://www.arielapp.co/assets/benefits/card3.svg" alt="Blog Post 2" class="w-full h-full object-cover" />
                  </div>
                  <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800">Análisis Rápido de Fuentes Jurídicas</h3>
                    <p class="text-sm text-gray-500 mt-4">Capaz de procesar miles de documentos de multiples fuentes, desde normativas, jurisprudencia hasta doctrinas. Desde la constitución, hasta regulaciones locales.  </p>
                  </div>
                </div>
                {{-- TARJETA #4 --}}
                <div class="flex max-lg:flex-col bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] hover:scale-[1.03] transition-all duration-300">
                  <div class="h-64 lg:w-full">
                    <img src="https://www.arielapp.co/assets/benefits/card4.svg" alt="Blog Post 2" class="w-full h-full object-cover" />
                  </div>
                  <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800">Razonamiento jurídico complejo</h3>
                    <p class="text-sm text-gray-500 mt-4">Utiliza reglas de decisión estructuradas para garantizar coherencia y precisión.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>


    <section>
        <section class="mt-16">
            <div class="max-w-6xl mx-auto text-center mb-12">
                <h2 class="text-3xl font-semibold text-gray-900">Características de Ariel</h2>
            </div>
            <div class="max-w-6xl mx-auto flex items-center space-x-8">
                <div class="flex-shrink-0">
                    <img src="https://www.arielapp.co/assets/features/feature1/image.svg" alt="Descripción de la imagen" class="rounded-lg shadow-md" />
                </div>
                <div class="flex-1">
                    <div class="mb-4">
                        <span class="inline-block bg-blue-100 text-blue-700 font-medium px-3 py-1 rounded-full text-sm">Regulación Especializada</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                        Accede a una base de datos con miles de documentos jurídicos
                    </h3>
                    <p class="text-gray-700">
                        Relevantes para la práctica del derecho en Colombia. Utilízala tanto para investigaciones complejas como para consultas específicas sobre escenarios legales.
                    </p>
                </div>
            </div>


        </section>

        <section class="mt-28">

            <div class="max-w-6xl mx-auto flex items-center space-x-8">

                <div class="flex-1">
                    <div class="mb-4">
                        <span class="inline-block bg-blue-100 text-blue-700 font-medium px-3 py-1 rounded-full text-sm">Redacta Documentos</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                        Genera documentos legales personalizados, claros y estructurados
                    </h3>
                    <p class="text-gray-700">
                        Dile a Ariel qué documento necesitas y él lo redactará por ti en base a la información que le proporciones. Desde contratos hasta escritos legales de cualquier tipo.
                    </p>
                </div>
                <div class="flex-shrink-0">
                    <img src="https://www.arielapp.co/assets/features/feature2/image.svg" alt="Descripción de la imagen" class="rounded-lg shadow-md" />
                </div>
            </div>


        </section>

        <section class="mt-28">

            <div class="max-w-6xl mx-auto flex items-center space-x-8">

                <div class="flex-shrink-0">
                    <img src="https://www.arielapp.co/assets/features/feature3/image.svg" alt="Descripción de la imagen" class="rounded-lg shadow-md" />
                </div>
                <div class="flex-1">
                    <div class="mb-4">
                        <span class="inline-block bg-blue-100 text-blue-700 font-medium px-3 py-1 rounded-full text-sm">Transcripciones Inteligentes</span>
                    </div>
                    <h2 class="mb-4 text-3xl font-semibold text-dark sm:text-4xl md:text-[35px] dark:text-white">
                        Convierte audios en transcripciones
                    </h2>

                    <p class="text-gray-700">
                        Precisas y detalladas. Estas transcripciones se integran fácilmente en tu Biblioteca Personal para una gestión y análisis eficientes.
                    </p>
                </div>

            </div>

            <div class="flex justify-center mt-24">
                <button class=" px-14 py-3   bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
                    Probar Gratis
                </button>
            </div>

        </section>
    </section>


    <section class="mt-16 text-center">
        <div class="max-w-4xl mx-auto">

            <h2 class="mb-4 text-3xl font-sans text-dark sm:text-4xl md:text-[50px] dark:text-white">
                Ariel cuenta con miles de normas, conceptos y jurisprudencia
            </h2>
            <div class="flex flex-wrap justify-center gap-4 mb-6 mt-14">
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Constitucional</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Internacional Público</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Internacional Privado</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Penal</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Financiero</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Comercial</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Disciplinario</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Fiscal</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Transicional</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Diversidad, Género e Inclusión</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Administrativo</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Civil</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Tributario</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Familia</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Sociedades</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Laboral</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Aduanero</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Servicios Públicos</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Propiedad Intelectual</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">Deporte</span>
                <span class="bg-white border border-black text-gray-700 px-4 py-2 rounded-full">...</span>
            </div>
            <a href="#" class="text-blue-500 underline">Ver áreas de conocimiento</a>
        </div>
    </section>



 {{-- TESTIMONIOS --}}

    <section>
        <div class="max-w-4xl mx-auto py-16">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold">Historias de éxito</h1>
                <p class="text-gray-600">Testimonios de nuestros usuarios.</p>
            </div>

            <div class="relative">
                <div class="flex justify-center items-center space-x-4" id="carousel">
                    <!-- Testimonios -->
                    <div class="w-full sm:w-1/2 bg-white p-6 rounded-lg shadow-xl hidden" data-index="0">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/50" alt="Foto" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-bold">Nayeth Fayad María</p>
                                <p class="text-sm text-gray-500">Secretaria General, Banco Serfinanza</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">Ariel ha sido una herramienta muy útil para nuestro equipo...</p>
                    </div>
                    <div class="w-full sm:w-1/2 bg-white p-6 rounded-lg shadow-xl hidden" data-index="1">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/50" alt="Foto" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-bold">Ana Maria</p>
                                <p class="text-sm text-gray-500">Directora</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">Comentario anterior...</p>
                    </div>
                    <div class="w-full sm:w-1/2 bg-white p-6 rounded-lg shadow-xl hidden" data-index="2">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/50" alt="Foto" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-bold">Juan Perez</p>
                                <p class="text-sm text-gray-500">Gerente</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-700">Comentario siguiente...</p>
                    </div>
                </div>

                <!-- Flechas de Navegación -->
                <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 focus:outline-none">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>

                <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 focus:outline-none">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>

        <script>
            const testimonios = document.querySelectorAll('#carousel > div');
            let currentIndex = 0;

            function showTestimonio(index) {
                testimonios.forEach((testimonio, i) => {
                    if (i === index) {
                        testimonio.classList.remove('hidden');
                    } else {
                        testimonio.classList.add('hidden');
                    }
                });
            }

            document.getElementById('prev').addEventListener('click', () => {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : testimonios.length - 1;
                showTestimonio(currentIndex);
            });

            document.getElementById('next').addEventListener('click', () => {
                currentIndex = (currentIndex < testimonios.length - 1) ? currentIndex + 1 : 0;
                showTestimonio(currentIndex);
            });

            // Mostrar el primer testimonio al cargar la página
            showTestimonio(currentIndex);
        </script>
    </section>
</body>

</html>
