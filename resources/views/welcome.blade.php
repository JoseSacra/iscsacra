<x-guest-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}

<!-- slider -->
<div class="px-2 sm:px-5 md:px-5 lg:px-5">
    <div class="bg-[#F8FBFB] dark:bg-[#0D0D0D] max-w-full h-auto py-10 rounded-xl">
        <h3 class="text-center dark:text-white text-6xl mb-3 font-semibold"> Achievements </h3>

        <!-- slider and slider items -->
        <div class="slickOne text-center {{-- px-2 pt-8 --}}">
            <div>
                <img class="overflow-hidden brand-img" src="{{asset('images/slider/Diploma CBTA.jpeg')}}" alt="brand icon" />
            </div>
            <div>
                <img class="overflow-hidden brand-img" src="{{asset('images/slider/Ingeniero de Software.jpeg')}}" alt="brand icon" />
            </div>
            <div>
                <img class="overflow-hidden brand-img" src="{{asset('images/slider/6421WindowsServer.jpeg')}}" alt="brand icon" />
            </div>
            <div>
                <img class="overflow-hidden brand-img" src="{{asset('images/slider/Privacidad Datos.jpg')}}" alt="brand icon" />
            </div>
            <div>
                <img class="overflow-hidden brand-img" src="{{asset('images/slider/Iso27001.jpg')}}" alt="brand icon" />
            </div>
            <div>
                <img class="overflow-hidden brand-img" src="{{asset('images/slider/ESET Gestion incidentes.png')}}" alt="brand icon" />
            </div>
            <div>
                <img class="overflow-hidden brand-img" src="{{asset('images/slider/Ciberseguridad Seguriadad0.png')}}" alt="brand icon" />
            </div>

        </div>
        <!-- slider and slider items end -->
    </div>
</div>


<!-- what i do section start -->
<div class="pb-12 px-2 sm:px-5 md:px-10 lg:px-14">
    <h3 class="text-[35px] dark:text-white font-bold font-robotoSlab pb-5"> What I Do? </h3>
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
        <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
            <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon.svg')}}" alt="icon" />
            <div class="space-y-2">
                <h3 class="dark:text-white text-[22px] font-semibold"> Web Development </h3>
                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Development of custom websites to increase the promotion of products and services, thereby making them available to all consumers and increasing sales and customer service. </p>

            </div>
        </div>

        {{-- <div class="about-box bg-[#fefaf0] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon5.svg')}}"
        alt="icon" />
        <div class="space-y-2">
            <h3 class="dark:text-white text-[22px] font-semibold"> Desarrollo de Apps </h3>
            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Realizo aplicaciones nativas tanto web,
                como móviles. Si no tienes aplicación hoy en día no eres nadie. </p>
        </div>
    </div> --}}

    {{-- <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon2.svg')}}"
    alt="icon" />
    <div class="space-y-2">
        <h3 class="dark:text-white text-[22px] font-semibold"> Fotografía </h3>
        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Gracias a mi canal he descubierto el mundo,
            de la fotografía. Me encanta la edición fotográfica.
        </p>
    </div>
</div> --}}

{{-- <div class="about-box bg-[#fff4f4] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon3.svg')}}"
alt="icon" />
<div class="space-y-2">
    <h3 class="dark:text-white text-[22px] font-semibold"> Edición de video </h3>
    <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Al igual que con la fotografía, he descubierto este mundo
        totalmente nuevo para mi. Ha sido una sorpresa todo lo que se puede realizar. </p>
</div>
</div> --}}

<div class="about-box bg-[#fff0f8] dark:bg-transparent">
    <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon4.svg')}}" alt="icon" />
    <div class="space-y-2">
        <h3 class="dark:text-white text-[22px] font-semibold"> Consulting and Technical Support </h3>

        <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> I have experience in maintenance and repair of computer equipment. </p>

    </div>
</div>

{{-- <div class="about-box bg-[#f3faff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon1.svg')}}"
alt="icon" />
<div class="space-y-2">
    <h3 class="dark:text-white text-[22px] font-semibold"> Diseño </h3>
    <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Si hoy en día no tienes presencia en internet,
        no te encontraran. Ponte en contacto conmigo para crear tu presencia online. </p>
</div>
</div> --}}
</div>
</div>



</x-guest-layout>

