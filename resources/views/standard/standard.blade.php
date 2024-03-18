@extends('layouts.layouts')
@section('title', 'โครงสร้างองค์กร')
@section('content')

    <!-- start header section -->
    @include('layouts.header_font')
    <!-- end header section -->


    <div class="animate__animated p-6">
        <h4 class="text mb-6 text-2xl font-bold md:text-2xl">มาตรฐานและแนวทางปฏิบัติ</h4>
        <hr>
        <div class="h-full flex-1">
            <div class="mb-6 grid grid-cols-1 gap-6 py-4">
                <div>

                    <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'home' }">
                        <div class="mb-5 sm:mb-0 xl:flex-[0_0_20%]" style="font-size: 16px">
                            <div>
                                <ul class="font-light">
                                    <li class="py-[5px]" x-data="dropdown">
                                        <button type="button" @click="toggle">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="relative -top-1 inline h-5 w-5 text-primary ltr:mr-2 rtl:ml-2"
                                                :class="{ 'rotate-180': open }">
                                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            มาตรฐานโรงพยาบาลและบริการสุขภาพ
                                        </button>
                                        <ul class="ltr:pl-14 rtl:pr-14" x-show="open" x-collapse>
                                            <li class="py-[5px]"><a href="javascript:void(0)"
                                                    class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                    onclick="goToPage(1,13)">ภาพรวมของการบริการองค์กร</a></li>
                                            <li class="py-[5px]"><a href="javascript:void(0)"
                                                    class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                    onclick="goToPage(1,71)">ระบบงานสำคัญของโรงพยาบาล</a></li>
                                            <li class="py-[5px]"><a href="javascript:void(0)"
                                                    class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                    onclick="goToPage(1,157)">กระบวนการดูแลผู้ป่วย</a></li>
                                            <li class="py-[5px]"><a href="javascript:void(0)"
                                                    class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                    onclick="goToPage(1,205)">ผลลัพธ์</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="py-[5px]" x-data="dropdown">
                                        <button type="button" @click="toggle">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="relative -top-1 inline h-5 w-5 text-primary ltr:mr-2 rtl:ml-2"
                                                :class="{ 'rotate-180': open }">
                                                <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            แนวทางการปฏิบัติเพื่อความปลอดภัยทางทันตกรรม
                                        </button>
                                        <ul class="ltr:pl-14 rtl:pr-14 mt-1" x-show="open" x-collapse>
                                            <li class="py-[5px]" x-data="dropdown">
                                                <button type="button" @click="toggle">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="relative -top-1 inline h-5 w-5 text-primary ltr:mr-2 rtl:ml-2">
                                                        <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    SAFE TRICO
                                                </button>
                                                <ul class="ltr:pl-14 rtl:pr-14" x-show="open" x-collapse>
                                                    <li class="py-[5px]"><a href="javascript:void(0)"
                                                            class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                            onclick="goToPage(2,8)">SC:SAFE COMMUNICATION</a></li>
                                                    <li class="py-[5px]"><a href="javascript:void(0)"
                                                            class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                            onclick="goToPage(2,10)">ST:SAFE TREATMENT</a></li>
                                                    <li class="py-[5px]"><a href="javascript:void(0)"
                                                            class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                            onclick="goToPage(2,16)">SI:SAFE INFECTION CONTROL</a></li>
                                                    <li class="py-[5px]"><a href="javascript:void(0)"
                                                            class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                            onclick="goToPage(2,32)">SR:SAFE RECORD</a></li>
                                                    <li class="py-[5px]"><a href="javascript:void(0)"
                                                            class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                            onclick="goToPage(2,34)">SO:SAFE OCCUPATION</a></li>
                                                </ul>
                                            </li>

                                            <li class="py-[5px]" x-data="dropdown">
                                                <button type="button" @click="toggle">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="relative -top-1 inline h-5 w-5 text-primary ltr:mr-2 rtl:ml-2">
                                                        <path d="M19 9L12 15L5 9" stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    SIMPLE
                                                </button>
                                                <ul class="ltr:pl-14 rtl:pr-14" x-show="open" x-collapse>
                                                    <li class="py-[5px]"><a href="javascript:void(0)"
                                                            class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                            onclick="goToPage(2,36)">PATIENT SAFETY</a></li>
                                                    <li class="py-[5px]"><a href="javascript:void(0)"
                                                            class="nav-link p-0 text-muted text-gray-500 hover:text-primary"
                                                            onclick="goToPage(2,39)">PERSONNEL SAFETY</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div style="width: 3%"></div>



                        <div class="flex-1 text-sm ">

                            <div class="mt-2 flex justify-center md:justify-end py-2">
                                <div id="downloadLinkContainer">
                                    <a href="{{ asset('assets/pdf/standards.pdf') }}" download>
                                        <button type="button" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path
                                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                <path
                                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                            </svg>&nbsp; Download PDF
                                        </button>
                                    </a>
                                </div>
                            </div>

                            <div id="pdfContainer">
                                <embed width="100%" height="550px" type="application/pdf"
                                    src="{{ asset('assets/pdf/standards.pdf') }}">
                            </div>
                        </div>
                    </div>

                </div>



            </div>


        </div>
    </div>



    <script>
        function goToPage(id, pageNumber) {
            var pdfURL;

            if (id === 1) {
                pdfURL = '{{ asset('assets/pdf/standards.pdf') }}' + '#page=' + pageNumber;
                pdfdowload = '{{ asset('assets/pdf/standards.pdf') }}'
            } else if (id === 2) {
                pdfURL = '{{ asset('assets/pdf/Dentalsafe.pdf') }}' + '#page=' + pageNumber;
                pdfdowload = '{{ asset('assets/pdf/Dentalsafe.pdf') }}'
            } else {
                // กรณี id ไม่ตรงกับที่กำหนด
                console.error('Invalid id:', id);
                return;
            }

            var pdfHTML = '<embed width="100%" height="550px" type="application/pdf" src="' + pdfURL + '"/>';

            document.getElementById('pdfContainer').innerHTML = pdfHTML;

            var downloadLinkHTML = '<a href="' + pdfdowload + '" download>' +
                '<button type="button" class="btn btn-primary">' +
                '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">' +
                '<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>' +
                '<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>' +
                '</svg>&nbsp; Download PDF' +
                '</button>' +
                '</a>';
            document.getElementById('downloadLinkContainer').innerHTML = downloadLinkHTML;
        }
    </script>

    @csrf
    @push('js')
    @endpush
@endsection
