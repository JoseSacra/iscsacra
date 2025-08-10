<x-guest-layout>
    <!-- Carousel slider -->
    @if($slider->isempty())
        <section id="carousel" class="relative w-full overflow-hidden mt-4" style="display:none;">
    @else
        <section id="carousel" class="relative w-full overflow-hidden mt-4">
            <div class="swiper swiper-carousel swiper-initialized swiper-horizontal swiper-watch-progress">
                <div class="swiper-wrapper"
                    style="cursor: grab; transition-duration: 0ms; transform: translate3d(-5380px, 0px, 0px); transition-delay: 0ms;">
                    @php
                    $condition = 0;
                    @endphp
                    @foreach($slider as $slide)
                    <div class="swiper-slide" data-swiper-slide-index="{{$condition}}"
                        style="transform: translateX(2200%) scale(-1.2); z-index: 3; opacity: 0; transition-duration: 0ms;">
                        <!-- elements with  "swiper-carousel-animate-opacity" class will have animated opacity -->
                        <div class="swiper-carousel-animate-opacity" style="opacity: -2.63; transition-duration: 0ms;">
                            <img src="{{asset('images/slider/'.$slide->image)}}" alt="">
                            <div class="slide-content">
                                <h2>{{$slide->title}}</h2>
                                <p>{{$slide->description}}</p>
                            </div>
                        </div>
                    </div>
                    @php
                    $condition++;
                    @endphp
                    @endforeach
                    @php
                    $condition2 = $condition + 5;
                    @endphp
                    @foreach($slider as $slide)
                    <div class="swiper-slide" data-swiper-slide-index="{{$condition}}"
                        style="transform: translateX(2200%) scale(-1.2); z-index: 3; opacity: 0; transition-duration: 0ms;">
                        <!-- elements with  "swiper-carousel-animate-opacity" class will have animated opacity -->
                        <div class="swiper-carousel-animate-opacity" style="opacity: -2.63; transition-duration: 0ms;">
                            <img src="{{asset('images/slider/'.$slide->image)}}" alt="">
                            <div class="slide-content">
                                <h2>{{$slide->title}}</h2>
                                <p>{{$slide->description}}</p>
                            </div>
                        </div>
                    </div>
                    @php
                    $condition++;
                    @endphp
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
    @endif
    <!-- end carousel slider -->
    <!-- About Section -->
    <section id="about" class="py-16 text-black">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Sobre Mí</h2>
            <div class="flex flex-col md:flex-row items-center">
                <img src="{{asset("images/".$sacra->profile_photo_path)}}" alt="Foto de perfil"
                class="w-32 h-32 rounded-full mb-4 md:mb-0 md:mr-6">
                <p class="text-lg text-gray-700">
                    {{$sacra->about}}
                </p>
            </div>
        </div>
    </section>
    <!-- Experience Section -->
    @if($jobs->isempty())
        <section id="experience" class="bg-gray-200 py-16 text-black" style="display:none;">
    @else
        <section id="experience" class="bg-gray-200 py-16 text-black">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center">Experiencia Laboral</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                    @foreach($jobs as $job)
                    @php
                    $startDate = date_create($job->start_date);
                    if($job->current_job == 1){
                    $end_date = "Presente";
                    }else{
                    $endDate = date_create($job->end_date);
                    $end_date = date_format($endDate,'M Y');
                    }
                    @endphp
                    <div class="bg-white p-6 rounded-lg shadow-md min-h-56">
                        <h3 class="text-xl font-semibold">{{$job->job_title}}</h3>
                        <p class="text-gray-600">{{$job->company}}</p>
                        <p class="mt-2 text-gray-700">{{$job->location." | ".date_format($startDate,'M Y')." - ".$end_date}}
                        </p>
                        <p>{{$job->description}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- Education Section -->
    @if($educations->isempty())
        <section id="education" class="py-16 text-black" style="display:none;">
    @else
        <section id="education" class="py-16 text-black">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center">Educación</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($educations as $school)
                    @php
                        $schoolstartDate = date_create($school->start_date);
                        if($school->current_study == 1){
                            $school_end_date = "Presente";
                        }else{
                            $schoolendDate = date_create($school->end_date);
                            $school_end_date = date_format($schoolendDate,'M Y');
                        }
                    @endphp
                        <div class="bg-white p-6 rounded-lg shadow-md min-h-56">
                            <h3 class="text-xl font-semibold">{{$school->degree}}</h3>
                            <p class="text-gray-600">{{$school->institution}}</p>
                            <p class="mt-2 text-gray-700">{{$school->location." | ".date_format($schoolstartDate,'M Y')." - ".$school_end_date}}
                            <p class="mt-2 text-gray-700">{{$school->description}}</p>
                        </div>
                    @endforeach
                    <div class="bg-white p-6 rounded-lg shadow-md min-h-56">
                        <h3 class="text-xl font-semibold">Técnico en Informática</h3>
                        <p class="text-gray-600">Centro de Bachillerato Tecnológico Agropecuario </p>
                        <p class="mt-2 text-gray-700">Yahualica Jal. | 2005 - 2008</p>
                        <p class="mt-2 text-gray-700">Mantenimiento preventivo y correctivo a equipos de computo.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md min-h-56">
                        <h3 class="text-xl font-semibold">Diplomado en Computación</h3>
                        <p class="text-gray-600">Centro de Computación Avanzada y Sistemas </p>
                        <p class="mt-2 text-gray-700">Nochistlán Zac. | Feb 2005 - Ago 2005</p>
                        <p class="mt-2 text-gray-700">Manejo de Microsoft Office.</p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Skills Section -->
    
    @if($languages->isempty()&&$systems->isempty()&&$softskills->isempty()&&$databases->isempty()&&$frameworks->isempty()&&$tools->isempty()&&$design->isempty()&&$office->isempty()&&$cibersecurity->isempty())
    <section id="languages" class="bg-gray-200 py-16 text-black" style="display:none;">
    @else
    <section id="languages" class="bg-gray-200 py-16 text-black">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Habilidades</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @php
                    if($languages->isempty())
                        $l= "display: none;";
                    else
                        $l= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$l}}">
                    <h3><strong>Lenguajes</strong></h3>
                    <ol>
                        @foreach($languages as $language)
                            <li>
                                {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                                <label class="inline-block">{{$language->name }}</label>
                                <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$language->percentage."%"}}"></div>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
                @php
                if($systems->isempty())
                $sys= "display: none;";
                else
                $sys= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$sys}}">
                    <h3><strong>Sistemas Operativos</strong></h3>
                    <ol>
                        @foreach($systems as $system)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$system->name }}</label>
                            <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$system->percentage."%"}}"></div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
                @php
                    if($softskills->isempty())
                        $soft= "display: none;";
                    else
                        $soft= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$soft}}">
                    <h3><strong>Habilidades Blandas</strong></h3>
                    <ol>
                        @foreach($softskills as $softskill)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$softskill->name }}</label>
{{--                             <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$language->percentage." %"}}"></div>
                            </div>
 --}}                        </li>
                        @endforeach                    
                    </ol>
                </div>
                @php
                if($databases->isempty())
                $dbs= "display: none;";
                else
                $dbs= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$dbs}}">
                    <h3><strong>Bases de datos</strong></h3>
                    <ol>
                        @foreach($databases as $database)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$database->name }}</label>
                            <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$database->percentage."%"}}"></div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
                @php
                if($frameworks->isempty())
                $frw= "display: none;";
                else
                $frw= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$frw}}">
                    <h3><strong>Frameworks</strong></h3>
                    <ol>
                        @foreach($frameworks as $framework)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$framework->name }}</label>
                            <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$framework->percentage."%"}}"></div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
                @php
                if($cibersecurity->isempty())
                $csty= "display: none;";
                else
                $csty= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$csty}}">
                    <h3><strong>Ciberseguridad</strong></h3>
                    <ol>
                        @foreach($cibersecurity as $ciber)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$ciber->name }}</label>
                            <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$ciber->percentage."%"}}"></div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
                @php
                if($tools->isempty())
                $t= "display: none;";
                else
                $t= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$t}}">
                    <h3><strong>Herramientas</strong></h3>
                    <ol>
                        @foreach($tools as $tool)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$tool->name }}</label>
                            <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$tool->percentage."%"}}"></div>
                            </div>
                        </li>
                        @endforeach
                </div>
                @php
                if($design->isempty())
                $des= "display: none;";
                else
                $des= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$des}}">
                    <h3><strong>Diseño</strong></h3>
                    <ol>
                        @foreach($design as $desig)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$desig->name }}</label>
                            <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$desig->percentage."%"}}"></div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
                @php
                if($office->isempty())
                $of= "display: none;";
                else
                $of= "";
                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md text-center" style="{{$of}}">
                    <h3><strong>Ofimatica</strong></h3>
                    <ol>
                        @foreach($office as $ofice)
                        <li>
                            {{-- <img class="icon inline-block" src="{{ $language->icon }}" class="inline-block mr-2"> --}}
                            <label class="inline-block">{{$ofice->name }}</label>
                            <div class="inline-block w-28 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: {{$ofice->percentage."%"}}"></div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endif
    {{--
    <!-- Contact Section -->
    <section id="contact" class="bg-gray-800 text-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Contacto</h2>
            <form class="max-w-lg mx-auto space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium">Nombre</label>
                    <input type="text" id="name" class="w-full p-2 rounded border border-gray-300">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium">Correo Electrónico</label>
                    <input type="email" id="email" class="w-full p-2 rounded border border-gray-300">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium">Mensaje</label>
                    <textarea id="message" rows="4" class="w-full p-2 rounded border border-gray-300"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Enviar</button>
            </form>
        </div>
    </section> --}}

</x-guest-layout>


<!-- what i do section start -->
{{--<div class="pb-12 px-2 sm:px-5 md:px-10 lg:px-14">
    <h3 class="text-[35px] dark:text-white font-bold font-robotoSlab pb-5"> What I Do? </h3>
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
        <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
            <img class="w-10 h-10 object-contain block" src="{{asset('.//images/icons/icon.svg')}}" alt="icon" />
            <div class="space-y-2">
                <h3 class="dark:text-white text-[22px] font-semibold"> Web Development </h3>
                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Development of custom websites to increase the
                    promotion of products and services, thereby making them available to all consumers and increasing
                    sales and customer service. </p>

            </div>
        </div>

        <div class="about-box bg-[#fefaf0] dark:bg-transparent">
            <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon5.svg')}}" alt="icon" />
            <div class="space-y-2">
                <h3 class="dark:text-white text-[22px] font-semibold"> Desarrollo de Apps </h3>
                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Realizo aplicaciones nativas tanto web,
                    como móviles. Si no tienes aplicación hoy en día no eres nadie. </p>
            </div>
        </div> --}}

        {{-- <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
            <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon2.svg')}}" alt="icon" />
            <div class="space-y-2">
                <h3 class="dark:text-white text-[22px] font-semibold"> Fotografía </h3>
                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Gracias a mi canal he descubierto el mundo,
                    de la fotografía. Me encanta la edición fotográfica.
                </p>
            </div>
        </div> --}}

        {{-- <div class="about-box bg-[#fff4f4] dark:bg-transparent">
            <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon3.svg')}}" alt="icon" />
            <div class="space-y-2">
                <h3 class="dark:text-white text-[22px] font-semibold"> Edición de video </h3>
                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Al igual que con la fotografía, he descubierto
                    este mundo
                    totalmente nuevo para mi. Ha sido una sorpresa todo lo que se puede realizar. </p>
            </div>
        </div>

        <div class="about-box bg-[#fff0f8] dark:bg-transparent">
            <img class="w-10 h-10 object-contain block" src="{{asset('.//images/icons/icon4.svg')}}" alt="icon" />
            <div class="space-y-2">
                <h3 class="dark:text-white text-[22px] font-semibold"> Consulting and Technical Support </h3>

                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> I have experience in maintenance and repair of
                    computer equipment. </p>

            </div>
        </div>--}}

        {{-- <div class="about-box bg-[#f3faff] dark:bg-transparent">
            <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon1.svg')}}" alt="icon" />
            <div class="space-y-2">
                <h3 class="dark:text-white text-[22px] font-semibold"> Diseño </h3>
                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Si hoy en día no tienes presencia en internet,
                    no te encontraran. Ponte en contacto conmigo para crear tu presencia online. </p>
            </div>
        </div> --}}