@extends('layouts_backend.layouts')
@section('title', 'เพิ่มข้อมูลประชาสัมพันธ์')
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
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลประชาสัมพันธ์</h4>
                            <form method="POST" action="{{ route('publish.store') }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="mb-5">
                                    <label for="name">หัวข้อ</label>
                                    <input id="name" type="text" name="name" placeholder="กรอกชื่อประชาสัมพันธ์"
                                        class="form-input" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียดประชาสัมพันธ์"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>
                                <div class="panel">
                                    <div class="mb-5">
                                        <label for="picture" class="form-label">รูปภาพ</label>
                                        <input class="form-control" type="file" id="picture"  name="picture" onchange="preview()">
                                    </div>
                                    <img id="frame" src="" class="img-fluid" />
                                   
                                </div>
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'home' }}">ยกเลิก</a>
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
