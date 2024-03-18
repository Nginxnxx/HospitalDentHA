@extends('layouts_backend.layouts')
@section('title', 'เพิ่มข้อมูลกิจกรรม')
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
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลกิจกรรม</h4>
                            <form method="POST" action="{{ route('home.store') }}"  enctype="multipart/form-data">
                                @csrf
                                <div class="mb-5">
                                    <label for="name">หัวข้อ</label>
                                    <input id="name" name="name" type="text" placeholder="กรอกชื่อกิจกรรม" class="form-input"/>
                                </div>
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียดกิจกรรม"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>
                                <div class="panel">
                                    <div class="mb-5">
                                        <label for="images">เลือกรูปภาพ</label><br>
                                        <input type="file" id="picture" name="picture[]" multiple>
                                    </div>
                                    <div id="image-preview-container" style="display: flex; flex-wrap: wrap;"></div>
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
        const previewContainer = document.getElementById('image-preview-container');
        previewContainer.innerHTML = '';
        const files = document.getElementById('pictures').files;

        for (const file of files) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.className = 'img-fluid';
                img.style.margin = '5px';
                img.style.width = '200px'; // Adjust the width as needed
                img.style.height = '200px'; // Adjust the height as needed
                previewContainer.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    }
</script>
    @csrf
    @push('js')
    @endpush
@endsection
