@extends('layouts_backend.layouts')
@section('title', 'แก้ไขข้อมูลกลุ่มผู้ป่วย/ผู้รับบริการที่สำคัญและความต้องการ')
@section('content')
        <body style="font-family: 'Prompt', sans-serif;" x-data="main"
            class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
            <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
                <div class="main-content flex flex-col min-h-screen">
                    <div class="animate__animated p-6" :class="[$store.app.animation]">
                        <div class="panel p-5">  
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">แก้ไขข้อมูลกลุ่มผู้ป่วย/ผู้รับบริการที่สำคัญและความต้องการ</h4>                      
                            <form method="POST" action="{{ route('patient.update', $patient['id']) }}" >
                                @csrf
                                @method('PUT')

                                <div class="mb-5">
                                    <label for="name">ชื่อหัวข้อ</label>
                                    <input id="name" name="name" rows="3" value="{{ $patient->name}}"
                                        class="form-input" />
                                </div> 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3"
                                        class="form-textarea min-h-[130px] resize-none">{{ $patient->detail}}</textarea>
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
