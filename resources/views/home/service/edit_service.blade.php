@extends('layouts_backend.layouts')
@section('title', 'แก้ไขข้อมูลขั้นตอนการเข้ารับบริการ')
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
                        <div class="panel p-5">
                            {{-- <h3 class="text text-center size-xl"></h3> --}}
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">แก้ไขข้อมูลขั้นตอนการเข้ารับบริการ</h4>
                            <form method="POST" action="{{ route('service.update', $howtoservice['id']) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-5">
                                    <label for="name">หัวข้อ</label>
                                    <input id="name" name="name" placeholder="กรอกชื่อกิจกรรม" class="form-input" value="{{ $howtoservice->name }}" readonly/>
                                    {{-- <select id="name" name="name" class="form-input">
                                        <option value="">กรุณาเลือกชื่อการเข้ารับบริการ</option>
                                        <option value="กิจกรรมที่ 1" {{ $howtoservice->name == "กิจกรรมที่ 1" ? 'selected' : '' }}>กิจกรรมที่ 1</option>
                                        <option value="กิจกรรมที่ 2" {{ $howtoservice->name == "กิจกรรมที่ 2" ? 'selected' : '' }}>กิจกรรมที่ 2</option>
                                        <option value="กิจกรรมที่ 3" {{ $howtoservice->name == "กิจกรรมที่ 3" ? 'selected' : '' }}>กิจกรรมที่ 3</option>
                                        <!-- เพิ่มตัวเลือกตามความเหมาะสม -->
                                    </select> --}}
                                    
                                </div>
                                <div class="mb-5">
                                    <label for="email">รายละเอียด</label>
                                    <textarea id="address" name="detail" rows="3" placeholder="กรอกรายละเอียดกิจกรรม"
                                        class="form-textarea min-h-[130px] resize-none">{{ $howtoservice->detail }}</textarea>
                                </div>

                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ route('home.index') }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <script src="{{ asset('assets/js/file-upload-with-preview.iife.js') }}"></script>
    <script>
        // multiple image upload
        new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
            images: {
                baseImage: 'assets/images/file-preview.svg',
                backgroundImage: '',
            },
            multiple: true,
        });
    </script>

    @push('js')
    @endpush
@endsection
