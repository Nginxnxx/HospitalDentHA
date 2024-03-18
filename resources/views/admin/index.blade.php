@extends('layouts_backend.layouts')
@section('title', 'การจัดการ Admin')
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
                        <h2 class="text-xl">จัดการ ADMIN</h2>

                        <div x-data="basic">

                            <div class="panel mt-6">

                                <table id="example" class="table-hover whitespace-nowrap" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">email</th>
                                            <th style="text-align: center">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           @foreach ( $addmin  as  $row)
                                           <tr style="text-align: center">
                                            <td style="text-align: center">{{$row->email}}</td>
                                            <td class="flex items-center justify-center gap-4">
                                                <form action="{{ route('admin.destroy', $row->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" >   ลบ   </button>
                                                </form>
                                            </td>
                                        </tr>
                                           @endforeach
                                        


                                    </tbody>
                                </table>

                                <hr>
                                <h2 class="text-xl mt-3 display-4 mb-3">บันทึก Admin</h2>
                                <form class="space-y-5" action="{{route('admin.store')}}" method="POST">
                                    @csrf
                                    <div class="md:flex justify-between items-center mx-2">
                                        <h4 class="text-xl">Email</h4>
                                        
                                        <input id="email" type="email" placeholder="name@cmu.ac.th" class="form-input py-2.5 text-base flex-grow mx-3" name="email"/>
                                        <!-- เพิ่มคลาส "ml-2" เพื่อเพิ่มระยะห่างด้านซ้ายของ button -->
                                        <button type="submit" class="btn btn-md btn-success flex-shrink-0 ml-2">บันทึกข้อมูล</button>
                                    </div>
                                </form>
                                
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
