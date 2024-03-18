@extends('layouts.layouts')
@section('title', 'บริการ')

@section('content')
   <!-- start header section -->
   @include('layouts.header_font')
   <!-- end header section -->

   <div x-data="carousel">
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
        :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?
            'dark' :
            '', $store.app.menu, $store.app.layout, $store.app.rtlClass
        ]">
        <div class="animate__animated p-6">
            <section class="hero-banner bg-light">
                <div>
                    <h1 class="text mb-6 text-center text-xl font-bold md:text-2xl">บริการ</h1>
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
                        {{-- <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="{{ asset('assets/images/dent/ขูดหินปูน.jpg') }}" alt="..."
                                    class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">ถอนฟัน | ผ่าฟันคุด | ศัลยฯช่องปาก</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;การถอนฟัน (Tooth extraction)
                                หรือผ่าตัดเล็กในช่องปาก
                                (minor surgery) เป็นงานศัลยกรรมในช่องปากภายใต้การฉีดยาชาเฉพาะที่
                                เพื่อนำซี่ฟันที่มีพยาธิสภาพที่มีข้อบ่งชี้ในการนำซี่ฟันออก
                                หรือเพื่อนำฟันที่ฝังคุดออกจากกระดูกเบ้าฟัน
                                เป็นการกำจัดอาการปวดและการติดเชื้อจากฟันในช่องปาก
                                หรือการตกแต่งสันกระดูกสันเหงือกเพื่อรองรับการใส่ฟันเทียม</p>
                        </div>
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="{{ asset('assets/images/dent/จัดฟัน.jpg') }}" alt="..."
                                    class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">ทันตกรรมจัดฟัน</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;ทันตกรรมจัดฟัน (Orthodontics)
                                เป็นการรักษาด้วยการใช้อุปกรณ์เฉพาะทั้งชนิดติดแน่น หรือชนิดถอดได้
                                สำหรับการเคลื่อนซี่ฟันให้มีการเรียงตัวที่เหมาะสม
                                ให้เกิดความสวยงามและมีประสิทธิภาพในการบดเคี้ยว
                                หรือเพื่อใช้ในการจัดช่องว่างระหว่างฟันเพื่อการรักษาทางทันตกรรมอื่นๆ
                                หรือเพื่อการรักษาร่วมกับการผ่าตัดกระดูกขากรรไกรภายใต้การดมยาสลบ</p>
                        </div>
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="assets/images/dent/อุดฟัน.jpg" alt="..." class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">อุดฟันและบูรณะฟัน</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;อุดฟัน (Dental Filling)
                                การอุดฟันเป็นวิธีการรักษาทางทันตกรรมสำหรับผู้ป่วยที่มีฟันผุ ฟันบิ่น
                                ฟันสึกโดยการกรอเนื้อฟันที่ผิดปกติและอุดปิดทับด้วยวัสดุอุดฟันต่างๆ ทั้งวัสดุอะมัลกัม
                                หรือวัสดุสีเหมือนฟัน เพื่อฟื้นฟูสภาพฟันให้กลับมาใช้งานได้อย่างมีประสิทธิภาพ มีความสวยงาม
                                และป้องกันไม่ให้มีการลุกลามของโรคฟันผุ</p>
                        </div>
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="{{ asset('assets/images/dent/ครองรากฟัน.jpg') }}" alt="..."
                                    class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">รักษาครองรากฟัน</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;การรักษาครองรากฟัน (Root Canal
                                Treatment)เป็นการกำจัดเนื้อเยื่อในโพรงประสาทฟันและคลองรากฟันที่อักเสบ ติดเชื้อ
                                ซึ่งส่วนใหญ่มีสาเหตุจากฟันผุลึกจนทะลุโพรงประสาทฟัน ให้มีความสะอาดปราศจากเชื้อโรค
                                และอุดปิดด้วยวัสดุเฉพาะ เมื่อรักษาคลองรากฟันเสร็จแล้วทันตแพทย์จะพิจารณาอุดฟัน
                                เดือยฟันครอบฟัน
                                เพื่อเสริมความแข็งแรงให้แก่ตัวฟันตามเหมาะสมแต่ละกรณี</p>
                        </div>
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="{{ asset('assets/images/dent/รากฟันเทียม.jpg') }}" alt="..."
                                    class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">ทันตกรรมรากฟันเทียม</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;รากฟันเทียม (Dental Implant)
                                เป็นการศัลยกรรมในช่องปากภายใต้ยาชาเฉพาะที่
                                เพื่อผ่าตัดฝังโลหะไทเทเนียมรูปร่างคล้ายรากฟันในกระดูกขากรรไกร
                                เป็นเทคโนโลยีที่ทันสมัยในการทดแทนซี่ฟันที่สูญเสียไป
                                ก่อนจะบูรณะด้านบนของรากฟันเทียมด้วยวัสดุโลหะผสมกระเบื้อง
                                หรือเซรามิกรูปร่างเหมือนซี่ฟันธรรมชาติ
                                เพื่อให้สามารถทำหน้าที่ทดแทนซี่ฟันที่สูญเสียไปได้
                                โดยรากฟันเทียมสามารถใช้บูรณะร่วมกับฟันเทียมทั้งชนิดติดแน่นและถอดได้</p>
                        </div>
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="{{ asset('assets/images/dent/ครอบฟัน.jpg') }}" alt="..."
                                    class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">ครอบฟัน</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;ครอบฟัน (Crown) คือ การใช้วัสดุชนิดโลหะ
                                กระเบื้อง
                                เซรามิค ในการบูรณะซี่ฟันที่มีความเสียหายมาก เนื้อฟันเหลือน้อยจากฟันผุลึก ฟันแตกหัก
                                ฟันร้าว
                                ฟันที่ผ่านการรักษาคลองรากฟัน เป็นต้น เพื่อเสริมความแข็งแรงโดยรักษารูปร่างของซี่ฟันไว้
                                โดยการสวมครอบฟันบนซี่ฟันและยึดติดแน่นด้วยกาวทางทันตกรรม
                                ซึ่งผู้ป่วยไม่สามารถถอดครอบฟันได้ด้วยตนเอง</p>
                        </div>
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="assets/images/dent/ฟันปลอม.jpg" alt="..." class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">งานใส่ฟัน ฟันปลอม สะพานฟัน</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;ฟันเทียม (Denture หรือ Prosthesis) คือ
                                การใส่ฟันเทียมเพื่อทดแทนฟันที่สูญเสียไป เนื่องจากการถอนฟัน
                                การใส่ฟันเทียมสามารถช่วยให้ผู้ป่วยที่สูญเสียฟันมีประสิทธิภาพการบดเคี้ยวที่ดีขึ้น
                                การออกเสียงที่ดีขึ้น ช่วยเสริมสร้างความมั่นใจขณะยิ้มหรือพูด
                                โดยฟันเทียมจะเเบ่งเป็นฟันเทียมถอดได้
                                ชนิดฐานพลาสติก ชนิดฐานโลหะ และฟันเทียมติดแน่น หรือที่เรียกว่า สะพานฟัน (Bridge) ชนิดโลหะ
                                ชนิดกระเบื้อง เป็นต้น</p>
                        </div>
                        <div
                            class="space-y-5 rounded-md border border-white-light bg-white p-5 shadow-[0px_0px_2px_0px_rgba(145,158,171,0.20),0px_12px_24px_-4px_rgba(145,158,171,0.12)] dark:border-[#1B2E4B] dark:bg-black">
                            <div class="max-h-56 overflow-hidden rounded-md">
                                <img src="assets/images/dent/ฟันเด็ก.jpg" alt="..." class="w-full object-cover" />
                            </div>
                            <h5 class="text-xl dark:text-white text-center">ทันตกรรมสำหรับเด็ก</h5>
                            <p class="text-white-dark">&nbsp;&nbsp;&nbsp;ทันตกรรมสำหรับเด็ก (Pediatric Dentistry)
                                คือการรักษาทางทันตกรรมในเด็กตั้งแต่ฟันน้ำนมซี่แรกจนถึงอายุประมาณ 15 ปี
                                โดยทันตกรรมสำหรับเด็ก
                                จะดูแลรักษาฟันน้ำนมและฟันแท้ ทั้งการแนะนำ การป้องกัน และการรักษา
                                เนื่องจากเด็กไม่เหมือนผู้ใหญ่
                                ต้องอาศัยทันตแพทย์เฉพาะทางสำหรับเด็กในการดูแลช่องปากและพฤติกรรมของเด็กที่อาจไม่ร่วมมือในการรักษาทางทันตกรรม
                            </p>
                        </div> --}}
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
