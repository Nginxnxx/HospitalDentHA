@extends('layouts_backend.layouts')
@section('title', 'การจัดการบริการ')
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
                                <h2 class="text-xl">บริการ</h2>
                                <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                    <div class="flex gap-3">
                                        <div>
                                            <a href="{{route('menu_manege.create')}}">
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
                                            </a>
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- end main content section -->
                        <div x-data="basic">

                            <div class="panel mt-6">

                                <table id="example" class="table-hover whitespace-nowrap" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">ID</th>
                                            <th style="text-align: center">ชื่อบริการ</th>
                                            <th style="text-align: center">รายละเอียด</th>
                                            <th style="text-align: center">รูปภาพ</th>
                                            <th style="text-align: center">การจัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menu as $row)
                                            
                                        
                                        <tr style="text-align: center">
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->name}}</td>
                                            <td
                                                style="max-width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                {{$row->detail}}
                                            </td>
                                            <td style="display: flex; justify-content: center; align-items: center;">
                                                <img src="{{ asset('storage/images/menu/'.$row->picture) }}" alt="" width="200" height="auto">
                                            </td>
                                            <td>
                                                <div class="flex items-center justify-center gap-4">
                                                    <a href="{{route('menu_manege.edit',$row->id)}}">
                                                        <button type="button" class="btn btn-sm btn-outline-warning"
                                                           >
                                                            แก้ไข
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('menu_manege.destroy', $row->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger">ลบ</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
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
