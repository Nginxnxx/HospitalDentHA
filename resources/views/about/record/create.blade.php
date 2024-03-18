@extends('layouts_backend.layouts')
@section('title', 'เพิ่มข้อมูลบริบทเชิงกลยุทธ์')
@section('content')

    <body style="font-family: 'Prompt', sans-serif;" x-data="main"
        class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <div class="main-content flex flex-col min-h-screen">
                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <div class="panel p-5">
                        @if ($source === 'eldergroups')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                เพิ่มข้อมูลผู้ป่วยกลุ่มผู้สูงอายุ</h4>
                            <form method="POST" action="{{ route('record_menage.store', ['source' => 'eldergroups']) }}">
                                @csrf
                                <div class="mb-5">
                                    <label for="detail">ชื่อ-นามสกุล</label>
                                    <input id="name" type="text" placeholder="เพิ่มชื่อ-นามสกุล" class="form-input"
                                        name="name" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">HN</label>
                                    <input id="HN" type="text" placeholder="เพิ่มHN" class="form-input"
                                        name="HN" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">อายุ</label>
                                    <input id="old" type="text" placeholder="เพิ่มอายุ" class="form-input"
                                        name="old" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">เพศ</label>
                                    <div class="flex-1">
                                        <div class="mb-2 flex">
                                            <label class="inline-flex items-center cursor-pointer mr-2 mx-5">
                                                <input type="radio" name="sex" class="form-radio" value="2" />
                                                <span class="text-white-dark ml-1">หญิง</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="radio" name="sex" class="form-radio" value="1" />
                                                <span class="text-white-dark ml-1">ชาย</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <label for="detail" class="mr-3">โรคประจำตัว</label>
                                    <input id="congenital_disease" type="text" placeholder="เพิ่มโรคประจำตัว"
                                        class="form-input" name="congenital_disease" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">low_dependence</label>
                                    <input id="low_dependence" type="text" placeholder="เพิ่มlow_dependence"
                                        class="form-input" name="low_dependence" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">medium_dependence</label>
                                    <input id="medium_dependence" type="text" placeholder="เพิ่มmedium_dependence"
                                        class="form-input" name="medium_dependence" />
                                </div>
                                <div class="flex-1">
                                    <div class="mb-2 flex">
                                        <label class="inline-flex items-center cursor-pointer mr-2">
                                            <input type="radio" name="gero" class="form-radio" value="1" />
                                            <span class="text-white-dark ml-1">gero</span>
                                        </label>
                                        <label class="inline-flex items-center cursor-pointer mr-2">
                                            <input type="radio" name="endo" class="form-radio" value="1" />
                                            <span class="text-white-dark ml-1">endo</span>
                                        </label>
                                        <label class="inline-flex items-center cursor-pointer mr-2">
                                            <input type="radio" name="fillng" class="form-radio" value="1" />
                                            <span class="text-white-dark ml-1">fillng</span>
                                        </label>
                                        <label class="inline-flex items-center cursor-pointer mr-2">
                                            <input type="radio" name="perio" class="form-radio" value="1" />
                                            <span class="text-white-dark ml-1">perio</span>
                                        </label>
                                        <label class="inline-flex items-center cursor-pointer mr-2">
                                            <input type="radio" name="prosth" class="form-radio" value="1" />
                                            <span class="text-white-dark ml-1">prosth</span>
                                        </label>
                                        <label class="inline-flex items-center cursor-pointer mr-2">
                                            <input type="radio" name="extraction" class="form-radio" value="1" />
                                            <span class="text-white-dark ml-1">extraction</span>
                                        </label>

                                    </div>
                                </div>
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ route('record_menage.index') }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                        @elseif ($source === 'specialpatient')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                เพิ่มข้อมูลผู้ป่วยกลุ่มเด็กพิเศษที่มีอายุ 12 ปี ขึ้นไป</h4>
                            <form method="POST"
                                action="{{ route('record_menage.store', ['source' => 'specialpatient']) }}">
                                @csrf
                                <div class="mb-5">
                                    <label for="detail">ชื่อ-นามสกุล</label>
                                    <input id="name" type="text" placeholder="เพิ่มชื่อ-นามสกุล"
                                        class="form-input" name="name" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">HN</label>
                                    <input id="HN" type="text" placeholder="เพิ่มHN" class="form-input"
                                        name="HN" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">เบอร์โทรศัพท์</label>
                                    <input id="phon" type="text" placeholder="เพิ่มเบอร์โทรศัพท์"
                                        class="form-input" name="phon" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">อายุ</label>
                                    <input id="old" type="text" placeholder="เพิ่มอายุ" class="form-input"
                                        name="old" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">เพศ</label>
                                    <div class="flex-1">
                                        <div class="mb-2 flex">
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="sex" class="form-radio"
                                                    value="2" />
                                                <span class="text-white-dark ml-1">หญิง</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="radio" name="sex" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">ชาย</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label for="detail">โรคประจำตัว</label>
                                    <input id="U_D" type="text" placeholder="เพิ่มโรคประจำตัว"
                                        class="form-input" name="U_D" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">อื่นๆ</label>
                                    <input id="GA" type="text" placeholder="เพิ่มอื่นๆ" class="form-input"
                                        name="GA" />
                                </div>

                                <div>
                                    <div class="flex-1">
                                        <div class="mb-2 flex">
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="Filling" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">Filling</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="radio" name="Perio" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">Perio</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="Fluoride" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">Fluoride</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="radio" name="Scaling" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">Scaling</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="Ext" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">Ext</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer">
                                                <input type="radio" name="OHI" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">OHI</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="Sealant" class="form-radio"
                                                    value="1" />
                                                <span class="text-white-dark ml-1">Sealant</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ route('record_menage.index') }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                        @elseif ($source === 'emergency')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">
                                สถิติผู้ป่วยกลุ่ม Emergency</h4>
                            <form method="POST"
                                action="{{ route('record_menage.store', ['source' => 'emergency']) }}">
                                @csrf
                                <div class="mb-5">
                                    <label for="detail">ว/ด/ป</label>
                                    <input id="date" type="text" placeholder="เพิ่มว/ด/ป"
                                        class="form-input" name="date" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">HN</label>
                                    <input id="HN" type="text" placeholder="เพิ่มHN" class="form-input"
                                        name="HN" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">ชื่อ-นามสกุล</label>
                                    <input id="name" type="text" placeholder="เพิ่มชื่อ-นามสกุล"
                                        class="form-input" name="name" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">อื่นๆ</label>
                                    <input id="other" type="text" placeholder="เพิ่มอื่นๆ"
                                        class="form-input" name="other" />
                                </div>
                                <div class="mb-5">
                                    <label for="detail">เดือน</label>
                                    <select name="month" id="month" class="form-input">
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                
                                <div>
                                    <div class="flex-1">
                                        <div class="mb-2 flex">
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="endo" class="form-radio" value="1" />
                                                <span class="text-white-dark ml-1">endo</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="fillng" class="form-radio" value="1" />
                                                <span class="text-white-dark ml-1">fillng</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer mr-2">
                                                <input type="radio" name="perio" class="form-radio" value="1" />
                                                <span class="text-white-dark ml-1">perio</span>
                                            </label>
                                          
                                         
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ route('record_menage.index') }}">ยกเลิก</a>
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
