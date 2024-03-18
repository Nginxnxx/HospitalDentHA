@extends('layouts_backend.layouts')
@section('title', 'แก้ไขข้อมูลติดต่อ')
@section('content')

    <div class="container py-2">

        <body style="font-family: 'Prompt', sans-serif;" x-contact="main"
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
                                <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                    แก้ไขข้อมูลติดต่อ</h4>
                                <form method="POST" action="{{ route('contact_menege.update', $contact->id) }}">
                                    @csrf
                                    @method('PUT')
                                    {{-- <div class="mb-5">
                                        <label for="detail">แผนที่</label>
                                        <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                            class="form-textarea min-h-[130px] resize-none">{{ $contact->detail }}</textarea>
                                    </div> --}}
                                    
                                    <div class="mb-5">
                                        <label for="nalocationme">รายละเอียดที่อยู่</label>
                                        <input id="location" type="text" placeholder="แก้ไข"
                                            class="form-input" name="location" value="{{ $contact->location }}" />
                                    </div>
                                    <div class="mb-5">
                                        <label for="facebook">Facebook</label>
                                        <textarea id="facebook" name="facebook" rows="3" placeholder="กรอกรายละเอียด"
                                            class="form-textarea min-h-[130px] resize-none">{{ $contact->facebook }}</textarea>
                                    </div>
                                    <div class="mb-5">
                                        <label for="Instagram">Instagram</label>
                                        <textarea id="Instagram" name="Instagram" rows="3" placeholder="กรอกรายละเอียด"
                                            class="form-textarea min-h-[130px] resize-none">{{ $contact->Instagram }}</textarea>
                                    </div>
                                    <div class="mb-5">
                                        <label for="twitter">Twiter</label>
                                        <textarea id="twitter" name="twitter" rows="3" placeholder="กรอกรายละเอียด"
                                            class="form-textarea min-h-[130px] resize-none">{{ $contact->twitter }}</textarea>
                                    </div>
                                    <div class="mt-8 flex items-center justify-end">
                                        <button type="reset" class="btn btn-outline-danger">
                                            <a href="{{ route('contact_menege.index') }}">ยกเลิก</a>
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
