@extends('layouts_backend.layouts')
@section('title', 'แก้ไขข้อมูล')
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
                        @if ($source === 'administer')
                            <div class="panel p-5">
                                <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                    แก้ไขข้อมูลโครงสร้างการบริหาร</h4>
                                <form method="POST" action="{{ route('structure_menege.update', $data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="source" value="{{ $source }}">
                                    <div class="mb-5">
                                        <label for="name">ชื่อ</label>
                                        <input id="name" type="text" placeholder="เพิ่มชื่อบริการ"
                                            class="form-input" name="name" value="{{ $data->name }}" />
                                    </div>
                                    {{-- <div class="mb-5">
                                        <label for="detail">รายละเอียด</label>
                                        <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                            class="form-textarea min-h-[130px] resize-none">{{ $data->detail }}</textarea>
                                    </div> --}}
                                    <div class="panel">
                                        <div class="mb-5">
                                            <label for="detail" class="form-label">รูปภาพ</label>
                                            <input class="form-control" type="file" id="detail"  name="detail" onchange="preview()">
                                        </div>
                                        <img id="frame" src="{{ asset('storage/images/structure/'.$data->detail) }}" class="img-fluid" /> <!-- ใช้ URL ของรูปภาพที่มีอยู่แล้วเป็น source -->
                                    </div>
                                    <div class="mt-8 flex items-center justify-end">
                                        <button type="reset" class="btn btn-outline-danger">
                                            <a href="{{ route('structure_menege.index') }}">ยกเลิก</a>
                                        </button>
                                        <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                    </div>
                                </form>
                            </div>
                        @elseif ($source === 'denthospital')
                            <div class="panel p-5">
                                <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                    แก้ไขข้อมูลโครงสร้างบริหารหน่วยภายในโรงพยาบาลทันตกรรม</h4>
                                <form method="POST" action="{{ route('structure_menege.update', $data->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="source" value="{{ $source }}">
                                    <div class="mb-5">
                                        <label for="name">ชื่อ</label>
                                        <input id="name" type="text" placeholder="เพิ่มชื่อบริการ"
                                            class="form-input" name="name" value="{{ $data->name }}" />
                                    </div>
                               
                                    <div class="panel">
                                        <div class="mb-5">
                                            <label for="picture" class="form-label">รูปภาพ</label>
                                            <input class="form-control" type="file" id="picture"  name="picture" onchange="preview()">
                                        </div>
                                        <img id="frame" src="{{ asset('storage/images/structure/'.$data->picture) }}" class="img-fluid" /> <!-- ใช้ URL ของรูปภาพที่มีอยู่แล้วเป็น source -->
                                    </div>
                                    <div class="mt-8 flex items-center justify-end">
                                        <button type="reset" class="btn btn-outline-danger">
                                            <a href="{{ route('structure_menege.index') }}">ยกเลิก</a>
                                        </button>
                                        <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                    </div>
                                </form>
                            </div>
                        @elseif ($source === 'coordinate')
                            <div class="panel p-5">
                                <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                    แก้ไขข้อมูลโครงสร้างความรับผิดชอบและการประสานงานในระบบคุณภาพ</h4>
                                <form method="POST" action="{{ route('structure_menege.update', $data->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="source" value="{{ $source }}">
                                    <div class="mb-5">
                                        <label for="name">ชื่อ</label>
                                        <input id="name" type="text" placeholder="เพิ่มชื่อบริการ"
                                            class="form-input" name="name" value="{{ $data->name }}" />
                                    </div>
                                    <div class="mb-5">
                                        <label for="detail">รายละเอียด</label>
                                        <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                            class="form-textarea min-h-[130px] resize-none">{{ $data->detail }}</textarea>
                                    </div>
                                    <div class="mt-8 flex items-center justify-end">
                                        <button type="reset" class="btn btn-outline-danger">
                                            <a href="{{ route('structure_menege.index') }}">ยกเลิก</a>
                                        </button>
                                        <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                    </div>
                                </form>
                            </div>
                        @elseif ($source === 'ggovernance')
                            <div class="panel p-5">
                                <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                    แก้ไขข้อมูลโครงสร้างระบบกำกับดูแลกิจการ / ธรรมาภิบาล</h4>
                                <form method="POST" action="{{ route('structure_menege.update', $data->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="source" value="{{ $source }}">
                                    <div class="mb-5">
                                        <label for="name">ชื่อ</label>
                                        <input id="name" type="text" placeholder="เพิ่มชื่อบริการ"
                                            class="form-input" name="name" value="{{ $data->name }}" />
                                    </div>
                                    <div class="mb-5">
                                        <label for="detail">รายละเอียด</label>
                                        <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                            class="form-textarea min-h-[130px] resize-none">{{ $data->detail }}</textarea>
                                    </div>
                                    <div class="mt-8 flex items-center justify-end">
                                        <button type="reset" class="btn btn-outline-danger">
                                            <a href="{{ route('structure_menege.index') }}">ยกเลิก</a>
                                        </button>
                                        <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                    </div>
                                </form>
                            </div>
                        @endif



                    </div>
                </div>
            </div>
    </div>

    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        function clearImage() {
            document.getElementById('picture').value = null;
            frame.src = "";
        }
    </script>
    @csrf
    @push('js')
    @endpush
@endsection
