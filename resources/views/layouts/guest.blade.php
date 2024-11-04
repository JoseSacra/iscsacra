<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

        <title>{{ config('app.name', 'ISC Sacra') }}</title>

        <!-- Fonts -->
{{--         <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
 --}}
        <link rel="stylesheet" href="./assets/fontaswesome/css/all.min.css" />
        <link rel="stylesheet" href="./assets/fontaswesome/css/fontawesome.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Roboto+Slab:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <link rel="stylesheet" href="./css/slick.css"/>
        <link rel="stylesheet" href="./css/tailwind.css"/>
        <link rel="stylesheet" href="./css/custom.css" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}



        <!-- Styles -->
        @livewireStyles

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.remove("dark");
            }

        </script>

    </head>
    <body>
        <div class="bg-homeBg dark:bg-homeBg-dark min-h-screen bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full font-sans text-gray-900 dark:text-gray-100 antialiased">
            <div class="section-bg">
                <div class="w-full flex justify-between px-4">
                     <!-- website Logo -->

                     <div class="shrink-0 flex items-center">
                            <a href="/">
                                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-white" />
                            </a>
                        </div>

                     <div class="flex items-center">
                       {{--   <!-- dark and light mode toggle -->
                         <button id="theme-toggle" type="button" class="dark-light-btn">
                             <i id="theme-toggle-dark-icon" class="fa-solid text-xl fa-moon hidden"></i>
                             <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>
                         </button> --}}
                         <!-- mobile toggle button -->
                         <button id="menu-toggle" type="button" class="menu-toggle-btn">
                             <i id="menu-toggle-open-icon" class="fa-solid fa-bars text-xl "></i>
                             <i id="menu-toggle-close-icon" class="fa-solid fa-xmark text-xl hidden  "></i>
                         </button>
                     </div>

                </div>
            </div>

            <!-- mobile menu start -->

            <nav id="navbar" class="hidden lg:hidden">
                <ul class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                    <li>
                        <a class="mobile-menu-items-active" href="/">
                            <span class="mr-2 text-xl">
                                <i class="fa-regular fa-user"></i>
                            </span>About Me </a>
                    </li>
                    <li>
                        <a class="mobile-menu-items" href="{{ route('resume') }}">

                            <span class="mr-2 text-xl">
                                <i class="fa-regular fa-file-lines"></i>
                            </span>Resume </a>
                    </li>
                    {{-- <li>
                    <a class="mobile-menu-items" href="./portfiloOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fas fa-briefcase"></i>
                        </span>Trabajos </a>
                </li> --}}
                    {{-- <li>
                        <a class="mobile-menu-items" href="{{ route('blog') }}">

                            <span class="mr-2 text-xl">
                                <i class="fa-brands fa-blogger"></i>
                            </span>Blogs </a>
                    </li> --}}
                    {{-- <li>
                    <a class="mobile-menu-items" href="./contactOne.html">
                        <span class="mr-2 text-xl">
                            <i class="fa-solid fa-address-book"></i>
                        </span> Contact </a>
                </li> --}}
                </ul>
            </nav>
            <!-- mobile menu end -->

            <div class="container grid grid-cols-12 md:gap-10 justify-between lg:mt-[220px]">
                <!-- sidber personal info -->
                <div class="col-span-12 lg:col-span-4 hidden lg:block h-screen sticky top-44">
                    <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                        <!-- profile image -->
                        <img src="{{asset('images/sacra.png')}}" class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]" alt="about" />


                        <div class="pt-[100px] pb-8">
                            <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> Jose Sacramento Muñoz Perez </h2>

                            <h3 class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                                Software Engineer </h3>
                            <div class="flex justify-center space-x-3">
                                <!-- facebook icon and link -->
                                <a href="https://www.facebook.com/jose.sacra" target="_blank" rel="noopener noreferrer">
                                    <span class="socialbtn text-[#1773EA]">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </span>
                                </a>
                                <!-- twitter icon and link -->
                                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                    <span class="socialbtn text-[#1C9CEA]">
                                        <i class="fa-brands fa-twitter"></i>
                                    </span>
                                </a>
                                {{-- <!-- dribbble icon and link -->
                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                <span class="socialbtn text-[#e14a84]">
                                    <i class="fa-brands fa-dribbble"></i>
                                </span>
                            </a> --}}
                                <!-- linkedin icon and link -->
                                <a href="https://www.linkedin.com/in/josesacra" target="_blank" rel="noopener noreferrer">
                                    <span class="socialbtn text-[#0072b1]">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                </a>
                            </div>
                            <!-- personal infomation start -->
                            <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] dark:bg-[#1D1D1D]">
                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] pb-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#E93B81] shadow-md">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Phone </p>
                                        <p class="dark:text-white">+52 474 148 8591</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#6AB5B9] shadow-md">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Email </p>
                                        <p class="dark:text-white">sacra.isc@hotmail.com</p>
                                    </div>
                                </div>
                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#FD7590] shadow-md">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Address </p>
                                        <p class="dark:text-white">Jalisco, Mexico</p>
                                    </div>
                                </div>
                                <div class="flex py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#C17CEB] shadow-md">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Birthdate </p>
                                        <p class="dark:text-white">13 March, 1990</p>
                                    </div>
                                </div>
                            </div>
                            <!-- personal infomation end-->
                            {{-- <!-- dowanload button -->
                        <button class="dowanload-btn">
                            <img class="mr-3" src="{{asset('images/icons/dowanload.png')}}" alt="icon" /> Descargar CV </button> --}}
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-8">
                    <!-- header for mobile devices start -->
                    <header class="lg:w-[560px] h-[144px] hidden lg:block p-[30px] ml-auto mb-10 rounded-[16px] bg-white dark:bg-[#111111]">
                        <nav class="hidden lg:block">
                            <ul class="flex">
                                <li> <a @if(Route::is('home')) class="menu-active" @else class="menu-item" @endif href="/">
                                        <span class="text-xl mb-1">
                                            <i class="fa-regular fa-user"></i>
                                        </span> About Me </a></li>
                                <li> <a @if(Route::is('resume')) class="menu-active" @else class="menu-item" @endif href="{{ route('resume') }}">
                                        <span class="text-xl mb-1">
                                            <i class="fa-regular fa-file-lines"></i>
                                        </span> Resume </a></li>
                                {{-- <li> <a @if(Route::is('jobs')) class="menu-active" @else class="menu-item" @endif href="{{ route('jobs') }}">
                                <span class="text-xl mb-1">
                                    <i class="fas fa-briefcase"></i>
                                </span> Trabajos </a></li> --}}
                               {{-- bueno <li><a @if(Route::is('blog')) class="menu-active" @else class="menu-item" @endif href="{{ route('blog') }}">
                                        <span class="text-xl mb-1">
                                            <i class="fa-brands fa-blogger"></i>
                                        </span> Blogs </a></li> --}}
                                {{-- <li> <a @if(Route::is('contact')) class="menu-active" @else class="menu-item" @endif href="{{ route('contact') }}">
                                <span class="text-xl mb-1">
                                    <i class="fa-solid fa-address-book"></i>
                                </span> Contacto </a></li> --}}
                            </ul>
                        </nav>
                    </header>
                    <!-- header for mobile devices end -->
                    <!-- about me section start -->
                    <div>
                        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
                            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                                <!-- about page title -->
                                <h2 class="after-effect after:left-52">About me</h2>
                                <!-- personal info for mobile devices start -->
                                <div class="lg:hidden">
                                    <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                                        <!-- profile image  -->
                                        <img src="{{asset('images/sacra.png')}}" class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]" alt="about" />

                                        <div class="pt-[100px] pb-8">
                                            <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> Jose Sacramento Muñoz Perez

                                            </h2>
                                            <h3 class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                                                Software Engineer </h3>

                                            <div class="flex justify-center space-x-3">
                                                <!-- facebook icon and link -->
                                                <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                                    <span class="socialbtn text-[#1773EA]">
                                                        <i class="fa-brands fa-facebook-f"></i>
                                                    </span>
                                                </a>
                                                <!-- twitter icon and link -->
                                                <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                                    <span class="socialbtn text-[#1C9CEA]">
                                                        <i class="fa-brands fa-twitter"></i>
                                                    </span>
                                                </a>
                                                {{-- <!-- dribbble icon and link -->
                                            <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                                                <span class="socialbtn text-[#e14a84]">
                                                    <i class="fa-brands fa-dribbble"></i>
                                                </span>
                                            </a> --}}
                                                <!-- linkedin icon and link -->
                                                <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                                                    <span class="socialbtn text-[#0072b1]">
                                                        <i class="fa-brands fa-linkedin-in"></i>
                                                    </span>
                                                </a>
                                            </div>

                                            <!-- personal info start -->
                                            <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] dark:bg-[#1D1D1D]">
                                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] pb-2.5">
                                                    <span class="socialbtn bg-white dark:bg-black text-[#E93B81] shadow-md">
                                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                                    </span>
                                                    <div class="text-left ml-2.5">
                                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Phone </p>
                                                        <p class="dark:text-white">+52 474 148 8591</p>
                                                    </div>
                                                </div>

                                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                                    <span class="socialbtn bg-white dark:bg-black text-[#6AB5B9] shadow-md">
                                                        <i class="fa-solid fa-envelope-open-text"></i>
                                                    </span>
                                                    <div class="text-left ml-2.5">
                                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Email </p>
                                                        <p class="dark:text-white">sacra.isc@hotmail.com</p>
                                                    </div>
                                                </div>

                                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                                    <span class="socialbtn bg-white dark:bg-black text-[#FD7590] shadow-md">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <div class="text-left ml-2.5">
                                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Address </p>
                                                        <p class="dark:text-white">Jalisco, Mexico</p>
                                                    </div>
                                                </div>

                                                <div class="flex py-2.5">
                                                    <span class="socialbtn bg-white dark:bg-black text-[#C17CEB] shadow-md">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <div class="text-left ml-2.5">
                                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Birthdate </p>
                                                        <p class="dark:text-white">13 March, 1990</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- personal info end -->

                                            {{-- <!-- dowanload button -->
                                        <button class="dowanload-btn">
                                            <img class="mr-3" src="{{asset('images/icons/dowanload.png')}}" alt="icon" /> Descargar
                                            CV
                                            </button> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- personal info for mobile devices end -->

                                <div class="lg:grid grid-cols-12 md:gap-10 pt-4 md:pt-[30px] items-center {{-- hidden --}}">
                                    <div class="col-span-12 space-y-2.5">
                                        <div class="lg:mr-16">
                                            <p class="about-box text-[#44566c] dark:text-color-910 leading-7">

                                                Computer Systems Engineering Intern, interested in Cyber security, software engineering,
                                                information technologies and robotics, committed to improving day by day through continuous training.
                                            </p>
                                            <h2 class="after-effect after:left-52">Slogan</h2>

                                            <p class="about-box text-[#44566c] leading-7 mt-2.5 dark:text-color-910">


                                                "Set your course to a star and you can navigate through any storm." - Leonardo da Vinci
                                            </p>
                                        </div>
                                        <div></div>
                                    </div>
                                </div>

                            </div>

                            {{ $slot }}

                            <!-- footer start -->
                            <footer class="overflow-hidden rounded-b-2xl" style="background: transparent">
                                <p class="text-center py-6 text-gray-lite dark:text-color-910"> © 2024 All rights reserved

                                    by <a class="hover:text-[#FA5252] duration-300 transition" href="" target="_blank" rel="noopener noreferrer"> José Sacramento Muñoz</a>. </p>
                            </footer>
                            <!-- footer section end -->
                        </div>
                    </div>
                    <!-- about me section start -->




                </div>
            </div>
            </div>
            <!-- End bgHomeBg -->
          
        </div>

        <!--==== js =====-->

       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('js/main.js') }}"></script>

        @livewireScripts
    </body>
</html>
