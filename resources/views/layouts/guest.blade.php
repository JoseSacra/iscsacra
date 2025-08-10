<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
    {{--
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

    <title>ISC Sacra</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Carousel Styles -->

    <script type="module" crossorigin="" src="{{asset('images/slider/styles/index.8457301f.js')}}"></script>
    <link rel="modulepreload" href="{{asset('images/slider/styles/vendor.4ea4e284.js')}}">
    <link rel="stylesheet" href="{{asset('images/slider/styles/index.0f26cec9.css')}}">

    <!-- end carousel styles -->
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4 w-full fixed top-0 z-10">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/"><h1 class="text-2xl font-bold">Mi Portafolio</h1></a>
            <ul class="flex space-x-6">
                <li><a href="#about" class="hover:text-gray-300">Sobre Mí</a></li>
                <li><a href="#experience" class="hover:text-gray-300">Experiencia</a></li>
                <li><a href="#education" class="hover:text-gray-300">Educación</a></li>
                <li><a href="#skills" class="hover:text-gray-300">Habilidades</a></li>
                {{-- <li><a href="#projects" class="hover:text-gray-300">Proyectos</a></li> 
                <li><a href="#contact" class="hover:text-gray-300">Contacto</a></li> --}}
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gray-800 text-white py-20">
       
        <div class="container mx-auto text-center">
            <div class="flex items-center w-full justify-center">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-white" />
            </div>
            <h2 class="text-4xl font-bold mb-4">¡Hola! Soy {{$sacra->name}}</h2>
            <h3 class="text-xl mb-6">{{$sacra->title}}</h3>
            <p class="text-xl mb-6">{{$sacra->slogan}}</p>
            {{-- <a href="#contact" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Contáctame</a> --}}
            
        </div>
    </section>
    {{$slot}}
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto text-center">
            <p>© 2025 {{$sacra->name}}. Todos los derechos reservados.</p>
            <div class="flex justify-center space-x-4 mt-2">
                <a href="{{$sacra->linkedin}}" class="hover:text-gray-300">LinkedIn</a>
                <a href="#" class="hover:text-gray-300">GitHub</a>
                <a href="{{$sacra->twitter}}" class="hover:text-gray-300">Twitter</a>
            </div>
        </div>
    </footer>
</body>

</html>