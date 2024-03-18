@extends('layouts_backend.layouts')
@section('title', 'เพิ่มข้อมูลอาคารสถานที่')
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
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลอาคารสถานที่</h4>
                            <form method="POST" action="{{ route('building_menege.store') }}">
                                @csrf
                                <div class="mb-5">
                                    <label for="name">ชื่ออาคาร</label>
                                    <select id="name" class="form-select" name="name">
                                        <option value="">เลือกชื่ออาคาร</option>
                                        <option value="อาคาร 1">อาคาร 1</option>
                                        <option value="อาคาร 2">อาคาร 2</option>
                                        <option value="อาคาร 3">อาคาร 3</option>
                                        <option value="อาคาร 4">อาคาร 4</option>
                                        <option value="อาคาร 5">อาคาร 5</option>
                                        <option value="อาคาร 6">อาคาร 6</option>
                                        <option value="อาคาร 7">อาคาร 7</option>
                                        <option value="อาคาร 8">อาคาร 8</option>
                                        <option value="อาคาร 9">อาคาร 9</option>
                                        <option value="อาคาร 10">อาคาร 10</option>
                                       
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" rows="3" placeholder="เพิ่มรายละเอียดบริการ"
                                        class="form-textarea min-h-[130px] resize-none" name="detail"></textarea>
                                </div>
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ route('building_menege.index') }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </div>

    {{-- <script src="assets/js/alpine-collaspe.min.js"></script>
    <script src="assets/js/alpine-persist.min.js"></script>
    <script defer src="assets/js/alpine-ui.min.js"></script>
    <script defer src="assets/js/alpine-focus.min.js"></script>
    <script defer src="assets/js/alpine.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- start hightlight js -->
    <link rel="stylesheet" href="assets/css/highlight.min.css" />
    <script src="assets/js/highlight.min.js"></script>
    <!-- end hightlight js -->
    <script src="assets/js/quill.js"></script>
    <script>
        new Quill('#editor', {
            theme: 'snow',
        });
        var quill = new Quill('#editor1', {
            theme: 'snow',
        });
        var toolbar = quill.container.previousSibling;
        toolbar.querySelector('.ql-picker').setAttribute('title', 'Font Size');
        toolbar.querySelector('button.ql-bold').setAttribute('title', 'Bold');
        toolbar.querySelector('button.ql-italic').setAttribute('title', 'Italic');
        toolbar.querySelector('button.ql-link').setAttribute('title', 'Link');
        toolbar.querySelector('button.ql-underline').setAttribute('title', 'Underline');
        toolbar.querySelector('button.ql-clean').setAttribute('title', 'Clear Formatting');
        toolbar.querySelector('[value=ordered]').setAttribute('title', 'Ordered List');
        toolbar.querySelector('[value=bullet]').setAttribute('title', 'Bullet List');

        document.addEventListener('alpine:init', () => {
            // main section
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));

            // content section
            Alpine.data('form', () => ({
                // highlightjs
                codeArr: [],
                toggleCode(name) {
                    if (this.codeArr.includes(name)) {
                        this.codeArr = this.codeArr.filter((d) => d != name);
                    } else {
                        this.codeArr.push(name);

                        setTimeout(() => {
                            document.querySelectorAll('pre.code').forEach((el) => {
                                hljs.highlightElement(el);
                            });
                        });
                    }
                },
            }));
        });
    </script> --}}
    @csrf
    @push('js')
    @endpush
@endsection
