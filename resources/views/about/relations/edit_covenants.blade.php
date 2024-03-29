@extends('layouts_backend.layouts')
@section('title', 'แก้ไขข้อมูลการมีพันธสัญญาการให้บริการ')
@section('content')
        <body style="font-family: 'Prompt', sans-serif;" x-data="main"
            class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
            <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
                <div class="main-content flex flex-col min-h-screen">
                    <div class="animate__animated p-6" :class="[$store.app.animation]">
                        <div class="panel p-5">  
                                              
                          
                            @if ($source === 'covenants')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">แก้ไขข้อมูลการมีพันธสัญญาการให้บริการ</h4>   
                            <form method="POST" action="{{ route('covenants.update', $data['id']) }}" >
                                @csrf
                                @method('PUT')

                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3"
                                        class="form-textarea min-h-[130px] resize-none">{{ $data->detail}}</textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'environment_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>

                            @elseif ($source === 'coop')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">แก้ไขข้อมูลคู่ความร่วมมือที่สำคัญและบทบาท</h4>   
                            <form method="POST" action="{{ route('covenants.update', $data['id']) }}" >
                                @csrf
                                @method('PUT')
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3"
                                        class="form-textarea min-h-[130px] resize-none">{{ $data->detail}}</textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'environment_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                            @elseif ($source === 'train')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">แก้ไขข้อมูลการฝึกอบรมหรือเป็นสถาบันสมทบในการฝึกอบรม</h4> 
                            <form method="POST" action="{{ route('covenants.update', $data['id']) }}" >
                                @csrf
                                @method('PUT')
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3"
                                        class="form-textarea min-h-[130px] resize-none">{{ $data->detail}}</textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'environment_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>  
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @csrf
    @push('js')
    @endpush
@endsection
