@extends('layouts.layouts')
@section('title', 'หน้าหลัก')
@section('content')

    <!-- start header section -->
    @include('layouts.header_font')
    <div x-data="carousel1">
        <div class="swiper mb-5" id="slider1">
            <div class="swiper-wrapper">
                <template x-for="item in items">
                    <div class="swiper-slide">
                        <img :src="`assets/images/dent/${item}`" class="card-img-top" width="100%" height="100%"
                            alt="image" />
                    </div>
                </template>
            </div>
            <a href="javascript:;"
                class="swiper-button-prev-ex1 grid place-content-center ltr:left-2 rtl:right-2 p-1 transition text-primary hover:text-white border border-primary  hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 rtl:rotate-180">
                    <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
            <a href="javascript:;"
                class="swiper-button-next-ex1 grid place-content-center ltr:right-2 rtl:left-2 p-1 transition text-primary hover:text-white border border-primary  hover:border-primary hover:bg-primary rounded-full absolute z-[999] top-1/2 -translate-y-1/2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 ltr:rotate-180">
                    <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
        :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' :
            '',
            $store.app.menu, $store.app.layout, $store.app.rtlClass
        ]">

        <div class="main-container min-h-screen text-black dark:text-white-dark">
            <div x-data="comingsoon">
                <div class="absolute inset-0">
                    <img src="assets/images/auth/bg-gradient.png" alt="image" class="h-full w-full object-cover" />
                </div>
                <div
                    class="relative  min-h-screen items-center justify-center bg-[url(../images/auth/map.png)] bg-cover bg-center bg-no-repeat px-6 py-10 sm:px-16">
                    <img src="assets/images/auth/coming-soon-object1.png" alt="image"
                        class="absolute left-0 top-1/2 h-full max-h-[893px] -translate-y-1/2" />
                    {{-- <img src="assets/images/auth/coming-soon-object2.png" alt="image"
                    class="absolute left-24 top-0 h-40 md:left-[20%]" /> --}}
                    <img src="assets/images/auth/coming-soon-object3.png" alt="image"
                        class="absolute right-0 top-0 h-[300px]" />
                    <img src="assets/images/auth/polygon-object.svg" alt="image" class="absolute bottom-0 end-[28%]" />



                    <div class="h-full flex-1 mt-5">
                        <div class="grid grid-cols-1 gap-6">
                            <div class="relative flex h-full gap-5 sm:h-[calc(100vh_-_150px)]">
                                <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'home' }">
                                    <div
                                        class="panel max-w-full flex-none space-y-4 p-4 ltr:rounded-r-none rtl:rounded-l-none xl:relative xl:block xl:h-auto ltr:xl:rounded-r-md rtl:xl:rounded-l-md">
                                        <div class="flex h-full flex-col pb-16 items-center">
                                            <div class="pb-5">
                                                <div class="flex">
                                                    <h3 class="text-lg font-semibold ltr:ml-3 rtl:mr-3">ประชาสัมพันธ์</h3>
                                                </div>
                                            </div>
                                            <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b] "></div>
                                            <div
                                                class="column perfect-scrollbar relative  h-full min-h-[120px] space-y-0.5 pr-3.5 sm:h-[calc(100vh_-_308px)]">
                                                @foreach ($publish->take(2) as $row)
                                                    <div class="card py-4" style="width: 18rem;">
                                                        <img src="{{ asset('storage/images/publish/' . $row->picture) }}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body py-2">
                                                            <h4><b>{{ $row->name }}</b></h4>
                                                            <p class="card-text">{{ $row->detail }}</p>
                                                        </div>
                                                    </div>
                                                @endforeach


                                                <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b] ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 2%; margin-top: 2%;"></div>
                                    <div class="h-full flex-1">
                                        <div
                        class="relative flex h-full flex-col rounded-md bg-gradient-to-tl from-[rgba(234,241,255,0.44)] to-[rgba(234,241,255,0.96)] dark:from-[rgba(14,23,38,0.44)] dark:to-[#0E1726] px-6 py-5">
                                            <div class="pb-5">
                                                <div class="flex items-center text-center">
                                                    <h3 class="text-lg font-semibold ltr:ml-3 rtl:mr-3">กิจกรรม</h3>
                                                </div>
                                            </div>
                                            <div x-data="carousel">
                                                <div class="space-y-8">
                                                    <div>
                                                        <!-- basic -->
                                                        <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-2">

                                                            @foreach ($activitys->take(2) as $key => $row)
                                                                <div>
                                                                    <div class="swiper mx-auto mb-5 max-w-3xl"
                                                                        id="slider1">
                                                                        <div class="swiper-wrapper">
                                                                            <template
                                                                                x-for="item in items[{{ $key }}]">
                                                                                <!-- เข้าถึงกลุ่มที่ {{ $key + 1 }} -->
                                                                                <div class="swiper-slide"
                                                                                    style="width: 500px; height: 300px;">
                                                                                    <img :src="`/storage/images/activity/${item}`"
                                                                                        class="object-cover"
                                                                                        alt="image" />
                                                                                </div>
                                                                            </template>
                                                                        </div>
                                                                        <a href="javascript:;"
                                                                            class="swiper-button-prev-ex1 absolute top-1/2 z-[999] grid -translate-y-1/2 place-content-center rounded-full border border-primary p-1 text-primary transition hover:border-primary hover:bg-primary hover:text-white ltr:left-2 rtl:right-2">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-5 w-5 rtl:rotate-180">
                                                                                <path d="M15 5L9 12L15 19"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </a>
                                                                        <a href="javascript:;"
                                                                            class="swiper-button-next-ex1 absolute top-1/2 z-[999] grid -translate-y-1/2 place-content-center rounded-full border border-primary p-1 text-primary transition hover:border-primary hover:bg-primary hover:text-white ltr:right-2 rtl:left-2">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="h-5 w-5 ltr:rotate-180">
                                                                                <path d="M15 5L9 12L15 19"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>
                                                                        </a>
                                                                        <div class="swiper-pagination"></div>
                                                                    </div>
                                                                    <div>
                                                                        <p><b>{{ $row->name }}</b></p>
                                                                        <p>{{ $row->detail }}</p>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <a href="{{ route('menu') }}"><button type="button"
                                                                    class="btn btn-primary">ดูทั้งหมด</button></a>

                                                        </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-6 grid grid-row-1 gap-6 sm:grid-row-2 xl:grid-cols-3 mt-3">
                            <!-- Users Visit -->
                            <div
                                class="relative flex h-full flex-col rounded-md bg-gradient-to-tl from-[rgba(234,241,255,0.44)] to-[rgba(234,241,255,0.96)] dark:from-[rgba(14,23,38,0.44)] dark:to-[#0E1726] px-6 py-5 text-[#515365] dark:text-white-dark">
                                <div class="mt-5 flex items-center">
                                    <div class="text-xl font-semibold">
                                        ขั้นตอนการรับผู้บริการกรณีผู้ป่วยใหม่
                                    </div>
                                </div>
                                <div class="mt-5">
                                    @foreach ($howtoservice as $row)
                                        @if ($row->name === 'ขั้นตอนการรับผู้บริการกรณีผู้ป่วยใหม่')
                                            <div class="flex items-center">
                                                <li>{{ $row->detail }}</li>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Sessions -->
                            <div
                                class="relative flex h-full flex-col rounded-md bg-gradient-to-tl from-[rgba(234,241,255,0.44)] to-[rgba(234,241,255,0.96)] dark:from-[rgba(14,23,38,0.44)] dark:to-[#0E1726] px-6 py-5 text-[#515365] dark:text-white-dark">
                                <div class="mt-5 flex items-center">
                                    <div class="text-xl font-semibold">
                                        ขั้นตอนรับบริการกรณีผู้ป่วยเก่ากรณีไม่มีใบนัด
                                    </div>
                                </div>
                                <div class="mt-5">
                                    @foreach ($howtoservice as $row)
                                        @if ($row->name === 'ขั้นตอนรับบริการกรณีผู้ป่วยเก่ากรณีไม่มีใบนัด')
                                            <div class="flex items-center">
                                                <li>{{ $row->detail }}</li>
                                            </div>
                                        @elseif ($row->name === 'หมายเหตุ ขั้นตอนรับบริการกรณีผู้ป่วยเก่ากรณีไม่มีใบนัด')
                                            <label style="color: red;">{{ $row->detail }}</label>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Time On-Site -->
                            <div
                                class="relative flex h-full flex-col rounded-md bg-gradient-to-tl from-[rgba(234,241,255,0.44)] to-[rgba(234,241,255,0.96)] dark:from-[rgba(14,23,38,0.44)] dark:to-[#0E1726] px-6 py-5 text-[#515365] dark:text-white-dark">
                                <div class="mt-5 flex items-center">
                                    <div class="text-xl font-semibold">
                                        ขั้นตอนการรับบริการสำหรับผู้ป่วยสิทธิบัตร
                                    </div>
                                </div>
                                <div class="mt-5">
                                    @foreach ($howtoservice as $row)
                                        @if ($row->name === 'ขั้นตอนการรับบริการสำหรับผู้ป่วยสิทธิบัตร')
                                            <div class="flex items-center">
                                                <li>{{ $row->detail }}</li>
                                            </div>
                                        @elseif ($row->name === 'หมายเหตุ ขั้นตอนการรับบริการสำหรับผู้ป่วยสิทธิบัตร')
                                            <label style="color: red;">{{ $row->detail }}</label>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="panel relative flex h-full flex-col rounded-md bg-gradient-to-tl from-[rgba(234,241,255,0.44)] to-[rgba(234,241,255,0.96)] dark:from-[rgba(14,23,38,0.44)] dark:to-[#0E1726] px-6 py-5">
                        <div class="pb-5 flex justify-center">
                            <h3 class="text-dark text-xl font-semibold ltr:ml-3 rtl:mr-3 mt-5">
                                แผนภูมิการให้บริการโรงพยาบาลทันตกรรม คณะทันตแพทยศาสตร์
                            </h3>
                        </div>
                        <div class="flex justify-center">
                            <img src="assets/images/dent/service3.png">
                        </div>
                    </div>

                    <div class="mt-5">
                        {{-- <h3 class="text text-center mb-6 text-xl font-bold md:text-2xl">ข้อมูลทั่วไป</h3> --}}
                        <hr>
                        <div class="mb-6 grid grid-cols-1 gap-6 text-white sm:grid-cols-2 xl:grid-cols-4 mt-6">
                            <!-- Users Visit -->
                            <div class="panel bg-gradient-to-r from-cyan-500 to-cyan-400">
                                <div class="mt-5 flex items-center">
                                    <div class="text-2xl font-bold ltr:mr-3 rtl:ml-3">ชื่อองค์กร</div>
                                </div>
                                <div class="flex items-center">
                                    @foreach ($general as $row)
                                        <ul>
                                            <li class="py-[5px]"><b>ไทย :</b></p>{{ $row->nameTH }}</p>
                                                <b>อังกฤษ :</b></p> {{ $row->nameEN }}</p>
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Sessions -->
                            <div class="panel bg-gradient-to-r from-violet-500 to-violet-400">

                                <div class="mt-5 flex items-center">
                                    <div class="text-2xl font-bold ltr:mr-3 rtl:ml-3">ที่อยู่</div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    @foreach ($general as $row)
                                        <ul>
                                            <li class="py-[5px]">{{ $row->address }}</p>
                                            </li>
                                        </ul>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Time On-Site -->
                            <div class="panel bg-gradient-to-r from-blue-500 to-blue-400">

                                <div class="mt-5 flex items-center">
                                    <div class="text-2xl font-bold ltr:mr-3 rtl:ml-3">ผู้นำสูงสุดขององค์กร</div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    @foreach ($management as $row)
                                        @if ($row->duty == 'ผู้นำสูงสุดขององค์กร')
                                            <ul>
                                                <li class="py-[5px]"><b>ชื่อ</b> {{ $row->name }}</p>
                                                    <b>ตำแหน่ง</b> {{ $row->position }}</p>
                                                    <b>เบอร์โทรศัพท์</b> {{ $row->telephone }}</p>
                                                    <b>อีเมล</b> {{ $row->email }}
                                                </li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <!-- Bounce Rate -->
                            <div class="panel bg-gradient-to-r from-fuchsia-500 to-fuchsia-400">
                                <div class="mt-5 flex items-center">
                                    <div class="text-2xl font-bold ltr:mr-3 rtl:ml-3">ผู้ประสานงาน</div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <ul>
                                        @foreach ($management as $row)
                                            @if ($row->duty == 'ผู้ประสานงาน')
                                                <li class="py-[5px]"><b>ชื่อ</b> {{ $row->name }}</p>
                                                    <b>ตำแหน่ง</b> {{ $row->position }}</p>
                                                    <b>เบอร์โทรศัพท์</b> {{ $row->telephone }}</p>
                                                    <b>อีเมล</b> {{ $row->email }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <script>
            document.addEventListener('alpine:init', () => {
                //Carousel
                Alpine.data('carousel', () => ({
                    items: @json($array_picture),

                    init() {
                        // basic
                        const swiper1 = new Swiper('#slider1', {
                            navigation: {
                                nextEl: '.swiper-button-next-ex1',
                                prevEl: '.swiper-button-prev-ex1',
                            },
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                        });


                    },

                }));
            });
        </script>

        <script>
            document.addEventListener('alpine:init', () => {
                //Carousel
                Alpine.data('carousel1', () => ({
                    items: ['Bannermenu.svg', 'Bannermenu2.svg'],
                    init() {
                        // basic
                        const swiper1 = new Swiper('#slider1', {
                            navigation: {
                                nextEl: '.swiper-button-next-ex1',
                                prevEl: '.swiper-button-prev-ex1',
                            },
                            pagination: {
                                el: '.swiper-pagination',
                                clickable: true,
                            },
                        });
                        // Autoplay

                    },
                }));
            });
        </script>
    </body>

    @csrf
    @push('js')
    @endpush
@endsection
