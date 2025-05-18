<x-app-layout bodyClass="g-sidenav-show  bg-gray-200">
    @livewire('navigation-menu')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Header bar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                            <!-- Ubicacion -->
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"> {{Route::currentRouteName()}} </li>
                        </ol>
                        {{-- <!-- Nombre Ubicacion -->
                        <h6 class="font-weight-bolder mb-0"> {{Route::currentRouteName()}}</h6> --}}
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Type here...</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}" class="d-none" id="logout-form">
                            @csrf
                        </form>
                        <ul class="navbar-nav  justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</span>
                                </a>
                            </li>
                            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item px-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0">
                                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell cursor-pointer"></i>
                                </a>
{{--                                 <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    <img src="{{ asset('assets') }}/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">New message</span> from Laur
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        13 minutes ago
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    <img src="./images/dashboardimages/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">New album</span> by Travis Scott
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        1 day
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                    <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>credit-card</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(453.000000, 454.000000)">
                                                                        <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                        </path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        Payment successfully completed
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        2 days
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul> --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Header bar -->
            <x-welcome />

    {{-- <x-footers.guest></x-footers.guest> --}}
    <!-- Footer -->
    <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made by Jose Sacramento Muñoz Perez for a better web.
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.updivision.com" class="nav-link text-muted" target="_blank">UPDIVISION</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </footer>
            </div>
            </main>



</x-app-layout>



{{-- <x-app-layout>
    <x-slot name="header">
        <header class="flex items-center justify-between flex-wrap bg-neutral-bg p-5 gap-5 md:py-6 md:pl-[25px] md:pr-[38px] lg:flex-nowrap dark:bg-dark-neutral-bg lg:gap-0">
            <a class="hidden logo" href="#">
                            <x-application-mark class="block h-9 w-auto" />
            </a>
            <div class="bg-gray-100 flex rounded-xl w-full m-0 py-[14px] px-[18px] xl:w-[360px] dark:bg-gray-dark-100 lg:max-w-[250px] xl:max-w-[360px] lg:mr-[47px] lg:ml-6 order-last lg:order-first">
                <img src="{{asset('.//images/icons/icon-search-normal.svg')}}" alt="seacrh icon">
                <input class="input w-full bg-transparent outline-none pl-2 h-5 text-gray-300 focus:!outline-none placeholder:text-gray-300 dark:placeholder:text-gray-dark-300 placeholder:font-semibold" type="text" placeholder="Search">
                <img src="{{asset('.//images/icons/icon-microphone-2.svg')}}" alt="microphone icon">
            </div>
            <div class="dropdown">
                <label class="cursor-pointer dropdown-label flex items-center justify-between w-[142px]" tabindex="0">
                    <div class="items-center justify-center hidden rounded-lg border border-neutral dark:border-dark-neutral-border gap-x-[10px] px-[18px] py-[11px] sm:flex">
                        <div class="flex items-center gap-[11px]">
                            <img src="{{asset('.//images/icons/icon-export.svg')}}" alt="export icon">
                            <span class="text-normal font-semibold text-gray-500 dark:text-gray-dark-500">Browse</span>
                        </div>
                        <img src="{{asset('.//images/icons/icon-arrow-down.svg')}}" alt="down icon">
                    </div>
                </label>
                {{--<ul class="dropdown-content" tabindex="0">
                    <div class="relative menu rounded-box dropdown-shadow min-w-[237px] mt-[25px] md:mt-[48px] p-[25px] pb-[10px] bg-color-brands">
                        <div class="border-solid border-b-8 border-x-transparent border-x-8 border-t-0 absolute w-[14px] top-[-7px] border-b-color-brands"></div>
                        <li class="text-normal p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img src="{{asset('.//images/icons/icon-verify.svg')}}" alt="icon">
                                </i>
                                <span class="text-white hover:text-[#C6CBD9]">All Brands</span>
                            </a>
                        </li>
                        <li class="text-normal p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img src="{{asset('.//images/icons/icon-verify.svg')}}" alt="icon">
                                </i>
                                <span class="text-white hover:text-[#C6CBD9]">News Reviews</span>
                            </a>
                        </li>
                        <li class="text-normal p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img src="{{asset('.//images/icons/icon-verify.svg')}}" alt="icon">
                                </i>
                                <span class="text-white hover:text-[#C6CBD9]">Financial report</span>
                            </a>
                        </li>
                        <li class="text-normal p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img src="icon-verify.svg" alt="icon"></i><span class="text-white hover:text-[#C6CBD9]">Shipping</span></a>
                        </li>
                        <li class="text-normal p-[15px] pl-[21px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"> <i class="w-4 h-4 grid place-items-center"><img src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/icon-verify.svg" alt="icon"></i><span class="text-white hover:text-[#C6CBD9]">View Catalog</span></a>
                        </li>
                        <li class="text-normal p-[15px] pl-[21px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"> <i class="w-4 h-4 grid place-items-center"><img src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/icon-verify.svg" alt="icon"></i><span class="text-white hover:text-[#C6CBD9]">Revenue report</span></a>
                        </li>
                        <li class="text-normal p-[15px] pl-[21px]"><a class="flex items-center bg-transparent p-0 gap-[7px]" href="https://wp.alithemes.com/html/frox/demos/?storefront=envato-elements#"> <i class="w-4 h-4 grid place-items-center"><img src="./Frox - Multipurpose TailwindCSS Dashboard Template_files/icon-verify.svg" alt="icon"></i><span class="text-white hover:text-[#C6CBD9]">Refund requests</span></a>
                        </li>
                    </div>
                </ul>
            </div>
            <div class="flex items-center order-2 user-noti gap-[30px] xl:gap-[48px] lg:order-3 lg:mr-0">
                <div class="dropdown dropdown-end">
                    <label class="cursor-pointer dropdown-label" tabindex="0">
                        <div class="relative w-[26px] h-[26px]">
                            <img class="w-full h-full object-cover" src="{{asset('.//images/icons/icon-messages.svg')}}" alt="message icon">
                            <div class="w-2 h-2 bg-fuchsia rounded-full absolute right-[1px] top-[-1px]"></div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <label class="cursor-pointer dropdown-label" tabindex="0">
                    <img src=".//images/sacra.png" alt="user avatar">
                </label>
                <ul class="dropdown-content" tabindex="0">
                    <div class="relative menu rounded-box dropdown-shadow p-[25px] pb-[10px] bg-neutral-bg mt-[25px] md:mt-[40px] min-w-[237px] dark:text-gray-dark-500 dark:border-dark-neutral-border dark:bg-dark-neutral-bg">
                        <div class="border-solid border-b-8 border-x-transparent border-x-8 border-t-0 absolute w-[14px] top-[-7px] border-b-neutral-bg dark:border-b-dark-neutral-bg right-[18px]"></div>
                        <li class="text-gray-500 hover:text-gray-1100 hover:bg-gray-100 dark:text-gray-dark-500 dark:hover:text-gray-dark-1100 dark:hover:bg-gray-dark-100 rounded-lg group p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img class="group-hover:filter-black dark:group-hover:filter-white" src="{{asset('.//images/icons/icon-user.svg')}}" alt="icon">
                                </i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="text-gray-500 hover:text-gray-1100 hover:bg-gray-100 dark:text-gray-dark-500 dark:hover:text-gray-dark-1100 dark:hover:bg-gray-dark-100 rounded-lg group p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img class="group-hover:filter-black dark:group-hover:filter-white" src="{{asset('.//images/icons/icon-favorite-chart.svg')}}" alt="icon">
                                </i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="text-gray-500 hover:text-gray-1100 hover:bg-gray-100 dark:text-gray-dark-500 dark:hover:text-gray-dark-1100 dark:hover:bg-gray-dark-100 rounded-lg group p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img class="group-hover:filter-black dark:group-hover:filter-white" src="{{asset('.//images/icons/icon-bitcoin-card.svg')}}" alt="icon">
                                </i>
                                <span>Payouts</span>
                            </a>
                        </li>
                        <li class="text-gray-500 hover:text-gray-1100 hover:bg-gray-100 dark:text-gray-dark-500 dark:hover:text-gray-dark-1100 dark:hover:bg-gray-dark-100 rounded-lg group p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img class="group-hover:filter-black dark:group-hover:filter-white" src="{{asset('.//images/icons/icon-trade.svg')}}" alt="icon">
                                </i>
                                <span>Statement</span>
                            </a>
                        </li>
                        <li class="text-gray-500 hover:text-gray-1100 hover:bg-gray-100 dark:text-gray-dark-500 dark:hover:text-gray-dark-1100 dark:hover:bg-gray-dark-100 rounded-lg group p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img class="group-hover:filter-black dark:group-hover:filter-white" src="{{asset('.//images/icons/icon-sun.svg')}}" alt="icon">
                                </i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <div class="w-full bg-neutral h-[1px] my-[7px] dark:bg-dark-neutral-border"></div>
                        <li class="text-gray-500 hover:text-gray-1100 hover:bg-gray-100 dark:text-gray-dark-500 dark:hover:text-gray-dark-1100 dark:hover:bg-gray-dark-100 rounded-lg group p-[15px] pl-[21px]">
                            <a class="flex items-center bg-transparent p-0 gap-[7px]" href="#">
                                <i class="w-4 h-4 grid place-items-center">
                                    <img class="group-hover:filter-black dark:group-hover:filter-white" src="{{asset('.//images/icons/icon-logout.svg')}}" alt="icon">
                                </i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </header>
    </x-slot>

    {{-- Contenido de la plagina 
    
    
</x-app-layout>
 --}}