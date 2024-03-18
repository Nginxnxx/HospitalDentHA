@extends('layouts_backend.layouts')
@section('title', 'การจัดการข้อมูลติดต่อ')
@section('content')

    <div class="container py-2">

        <body style="font-family: 'Prompt', sans-serif;" x-data="main"
            class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
            :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?
                'dark' :
                '',
                $store.app.menu, $store.app.layout, $store.app.rtlClass
            ]">
            <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
                <div class="main-content flex flex-col min-h-screen">

                    <div class="animate__animated p-6" :class="[$store.app.animation]">
                        <!-- start main content section -->

                        <div x-data="contacts">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <h2 class="text-xl">ข้อมูลติดต่อ</h2>
                                <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                    <div class="flex gap-3">
                                        <div>
                                            {{-- <a href="#">
                                                <button type="button" class="btn btn-primary" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                        class="h-5 w-5 ltr:mr-3 rtl:ml-3">
                                                        <line x1="12" y1="5" x2="12" y2="19">
                                                        </line>
                                                        <line x1="5" y1="12" x2="19" y2="12">
                                                        </line>
                                                    </svg>
                                                    เพิ่มบริการ
                                                </button>
                                            </a> --}}
                                          
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- end main content section -->
                        <div x-data="basic">

                            <div class="panel mt-6">

                                <table id="example" class="table-hover whitespace-nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">ID</th>
                                            <th style="text-align: center">แผนที่</th>
                                            <th style="text-align: center">รายละเอียดที่อยู่</th>
                                            <th style="text-align: center">Facebook</th>
                                            <th style="text-align: center">Instagram</th>
                                            <th style="text-align: center">Twitter</th>
                                            <th style="text-align: center">การจัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $row)
                                            
                                        
                                        <tr style="text-align: center">
                                            <td>{{$row->id}}</td>
                                            <td style="max-width: 120px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{$row->map_link}}</td>
                                            <td
                                                style="max-width: 120px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                {{$row->location}}
                                            </td>
                                            <td  style="max-width: 120px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"> {{$row->facebook}}</td>
                                            <td> {{$row->Instagram}}</td>
                                            <td> {{$row->twitter}}</td>
                                            <td>
                                                <div class="flex items-center justify-center gap-4">
                                                    <a href="{{route('contact_menege.edit',$row->id)}}">
                                                        <button type="button" class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </button>
                                                    </a>
                                                    {{-- <form action="#" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">ลบ</button>
                                                    </form> --}}
                                                </div>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 grid grid-cols-1 gap-6 lg:grid-cols-2 mt-5">
                        <div class="panel h-full w-full ">
                            {{-- <div class="mb-5 flex items-center justify-between">
                                <h5 class="text-lg font-semibold dark:text-white-light">แผนที่</h5>
                            </div> --}}
                            <iframe src="{{$row->map_link}}"
                            width="700" height="350" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    
                        <div class="panel h-full w-full">
                            {{-- <div class="mb-5 flex items-center justify-between">
                                <h5 class="text-lg font-semibold dark:text-white-light">ข้อมูลการติดต่อ</h5>
                            </div> --}}
                            <div class="flex flex-wrap justify-center mt-3 mb-5 space-x-3 rtl:space-x-reverse"><p>คณะทันตแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่
                                {{$row->location}}
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
                </div>
                
            </div>
        </body>


    </div>


    @csrf
    @push('js')
    @endpush
@endsection
