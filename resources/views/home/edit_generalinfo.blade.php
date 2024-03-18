@extends('layouts_backend.layouts')
@section('title', 'แก้ไขข้อมูลทั่วไป')
@section('content')
        <body style="font-family: 'Prompt', sans-serif;" x-data="main"
            class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
            <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
                <div class="main-content flex flex-col min-h-screen">
                    <div class="animate__animated p-6" :class="[$store.app.animation]">
                        <div class="panel p-5">  
                                              
                            @if ($source === 'general')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">แก้ไขชื่อ และที่อยู่โรงพยาบาล</h4>   
                            <form method="POST" action="{{ route('generalinfomation.update', ['generalinfomation' => $data->id, 'source' => 'general']) }}" >
                                @csrf
                                @method('PUT')

                                <div class="mb-5">
                                    <label for="nameTH">ชื่อภาษาไทย</label>
                                    <input id="nameTH" name="nameTH" rows="3"
                                        class="form-input" value="{{ $data->nameTH}}"/>
                                </div>         
                                <div class="mb-5">
                                    <label for="nameEN">ชื่อภาษาอังกฤษ</label>
                                    <input id="nameEN" name="nameEN" rows="3"
                                        class="form-input" value="{{ $data->nameEN}}" />
                                </div>  
                                <div class="mb-5">
                                    <label for="address">ที่อยู่</label>
                                    <input id="address" name="address" rows="3"
                                        class="form-input" value="{{ $data->address}}"/>
                                </div>     
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'home' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>    
                            </form>

                            @elseif ($source === 'management')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">แก้ไขข้อมูลผู้บริกหารและผู้ประสารงาน</h4>   
                            <form method="POST" action="{{ route('generalinfomation.update', ['generalinfomation' => $data->id, 'source' => 'management']) }}" >
                                @csrf
                                @method('PUT')
                                <div class="mb-5">
                                    <label for="name">ชื่อ-นามสกุล</label>
                                    <input id="name" name="name" rows="3"
                                        class="form-input" value="{{ $data->name}}"/>
                                </div>    
                                <div class="mb-5">
                                    <label for="position">ตำแหน่ง</label>
                                    <input id="position" name="position" rows="3"
                                        class="form-input" value="{{ $data->position}}"/>
                                </div>      
                                <div class="mb-5">
                                    <label for="duty">หน้าที่</label>
                                    <input id="duty" name="duty" rows="3"
                                        class="form-input" value="{{ $data->duty}}"/>
                                </div>      
                                <div class="mb-5">
                                    <label for="email">อีเมลล์</label>
                                    <input id="email" name="email" rows="3"
                                        class="form-input" value="{{ $data->email}}"/>
                                </div> 
                                <div class="mb-5">
                                    <label for="telephone">เบอร์โทรศัพท์</label>
                                    <input id="telephone" name="telephone" rows="3"
                                        class="form-input" value="{{ $data->telephone}}"/>
                                </div>                              
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'home' }}">ยกเลิก</a>
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
