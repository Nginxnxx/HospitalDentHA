@extends('layouts.layouts')
@section('title', 'บริการ')

@section('content')
   <!-- start header section -->
   @include('layouts.header_font')
   
    <body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
        :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?
            'dark' :
            '', $store.app.menu, $store.app.layout, $store.app.rtlClass
        ]">
        <div class="animate__animated p-6">
            <section class="hero-banner bg-light">
                <div>
                    <h1 class="text mb-6 text-center text-xl font-bold md:text-2xl">กิจกรรม HA</h1>
                    {{-- <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">

                        </div> --}}
                    
                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                        @foreach ($menu as $row)
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="{{ asset('storage/images/menu/'.$row->picture) }}" alt="..."
                                    class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">{{$row->name}}</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;{{$row->detail}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/highlight.min.js"></script>
        <script src="assets/js/alpine-collaspe.min.js"></script>
        <script src="assets/js/alpine-persist.min.js"></script>
        <script defer src="assets/js/alpine-ui.min.js"></script>
        <script defer src="assets/js/alpine-focus.min.js"></script>
        <script defer src="assets/js/alpine.min.js"></script>
        <script src="assets/js/custom.js"></script>
    
        <script>
            document.addEventListener('alpine:init', () => {
                //Carousel
                Alpine.data('carousel', () => ({
                    items: ['Bannermenu1.svg', 'Bannermenuu.svg'],
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
                        const swiper2 = new Swiper('#slider2', {
                            navigation: {
                                nextEl: '.swiper-button-next-ex2',
                                prevEl: '.swiper-button-prev-ex2',
                            },
                            autoplay: {
                                delay: 2000,
                            },
                        });
                    },
                }));
            });
        </script> 

        @csrf
        @push('js')
        @endpush
    
        @endsection
