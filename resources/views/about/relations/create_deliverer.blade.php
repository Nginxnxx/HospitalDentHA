@extends('layouts_backend.layouts')
@section('title', 'เพิ่มข้อมูลผู้ส่งมอบและคู่ความร่วมมือ')
@section('content')

    <body style="font-family: 'Prompt', sans-serif;" x-data="main"
        class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <div class="main-content flex flex-col min-h-screen">
                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <div class="panel p-5">
                        <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลผู้ส่งมอบและคู่ความร่วมมือ
                        </h4>
                    
                        <form method="POST" action="{{ route('deliverer.store') }}">
                            @csrf
                            {{-- <div class="flex flex-col sm:flex-row">
                                <label class="rtl:ml-2 sm:w-1/4 sm:ltr:mr-2">เลือกหัวข้อที่ต้องการเพิ่มข้อมูล</label>
                                <div class="flex-1">
                                    <div class="mb-2">
                                        <label class="mt-1 inline-flex cursor-pointer">
                                            <input type="radio" name="name" class="form-radio" value="ผู้ส่งมอบที่สำคัญ" />
                                            <span class="text-white-dark">ผู้ส่งมอบที่สำคัญ</span>
                                        </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="mt-1 inline-flex cursor-pointer">
                                            <input type="radio" name="name" class="form-radio" value="ผลิตภัณฑ์และบริการที่ส่งมอบ"/>
                                            <span class="text-white-dark">ผลิตภัณฑ์และบริการที่ส่งมอบ</span>
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="mb-5">
                                <label for="name">ผู้ส่งมอบที่สำคัญ</label>
                                <input id="name" name="name" rows="3" placeholder="กรอกชื่อผู้ส่งมอบที่สำคัญ"
                                    class="form-input"/>
                            </div>
                            {{-- <div class="mb-5">
                                <label for="name">บริการจ้างเหมา</label>
                                <textarea id="name" name="name" rows="3" placeholder="กรอกรายละเอียดผู้ส่งมอบที่สำคัญ"
                                    class="form-textarea min-h-[130px] resize-none"></textarea>
                            </div> --}}
                            <div class="mb-5">
                                <label for="detail">ผลิตภัณฑ์และบริการที่ส่งมอบ</label>
                                <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียดผลิตภัณฑ์และบริการที่ส่งมอบ"
                                    class="form-textarea min-h-[130px] resize-none"></textarea>
                            </div>
                            <div class="mt-8 flex items-center justify-end">
                                <button type="reset" class="btn btn-outline-danger">
                                    <a href="{{ 'relations_manage' }}">ยกเลิก</a>
                                </button>
                                <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @csrf
        @push('js')
        @endpush
    @endsection
