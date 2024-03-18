@extends('layouts.layouts')
@section('title', 'ติดต่อ')

@section('content')
   <!-- start header section -->
   @include('layouts.header_font')
   <!-- end header section -->

<h3 class="text mt-5 mb-6 text-center text-xl font-bold md:text-2xl">ติดต่อเรา</h3>
<hr>
<div class="mb-6 grid grid-cols-1 gap-6 lg:grid-cols-2 mt-5">
    <div class="panel h-full w-full ">
        {{-- <div class="mb-5 flex items-center justify-between">
            <h5 class="text-lg font-semibold dark:text-white-light">แผนที่</h5>
        </div> --}}
        @foreach ($contact as $row)
        <iframe src="{{$row->map_link}}"
        width="700" height="350" style="border:0;" allowfullscreen=""
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> @endforeach
    </div>

    <div class="panel h-full w-full">
        {{-- <div class="mb-5 flex items-center justify-between">
            <h5 class="text-lg font-semibold dark:text-white-light">ข้อมูลการติดต่อ</h5>
        </div> --}}
        <div class="flex flex-wrap justify-center mt-3 mb-5 space-x-3 rtl:space-x-reverse"><p>คณะทันตแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่
           @foreach ($contact as $row)
               {{$row->location}}
           @endforeach
            </p>
            
        </div>
        <div>
            <ul class="flex rtl:space-x-reverse flex-wrap justify-center space-x-3">
                <li>
                    <a href="https://web.facebook.com/dentcmu/?locale=th_TH&_rdc=1&_rdr" class="btn btn-outline-primary h-7 w-7 rounded-full p-0">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="btn btn-outline-primary h-7 w-7 rounded-full p-0">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="btn btn-outline-primary h-7 w-7 rounded-full p-0">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24px"
                            height="24px"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="h-4 w-4"
                        >
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"
                            ></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
     
    </div>
</div>

@endsection
