@extends('layouts_backend.layouts')
@section('title', 'เพิ่มข้อมูลบริบทเชิงกลยุทธ์')
@section('content')
        <body style="font-family: 'Prompt', sans-serif;" x-data="main"
            class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
            <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
                <div class="main-content flex flex-col min-h-screen">
                    <div class="animate__animated p-6" :class="[$store.app.animation]">
                        <div class="panel p-5">
                            @if ($source === 'problemsinarea')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูปัญหาสุขภาพที่สำคัญในพื้นที่</h4>                          
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'problemsinarea']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                            @elseif ($source === 'problemsdevelop')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลปัญหาสุขภาพที่เป็นโอกาสพัฒนา</h4>  
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'problemsdevelop']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                            @elseif ($source === 'problemsforward')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลโรคที่มีข้อจำกัดในการให้บริการ/ต้องส่งต่อ</h4>  
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'problemsforward']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                            @elseif ($source === 'problemsforward')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลโรคที่มีข้อจำกัดในการให้บริการ/ต้องส่งต่อ</h4>  
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'problemsforward']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                            @elseif ($source === 'challenges')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลความท้าทายเชิงกลยุทธ์</h4>  
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'challenges']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>

                            @elseif ($source === 'externalenv')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลความท้าทายเชิงกลยุทธ์</h4>  
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'externalenv']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>
                            
                            @elseif ($source === 'problemstrying')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลปัญหาสำคัญที่โรงพยาบาลพยายามแก้ไข</h4>  
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'problemstrying']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
                                    </button>
                                    <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4">บันทึก</button>
                                </div>
                            </form>

                            @elseif ($source === 'advantages')
                            <h4 class="text text-center mb-6 text-xl font-bold md:text-1xl">เพิ่มข้อมูลปัญหาสำคัญที่โรงพยาบาลพยายามแก้ไข</h4>  
                            <form method="POST" action="{{ route('strategic_manage.store', ['source' => 'advantages']) }}">
                                @csrf 
                                <div class="mb-5">
                                    <label for="detail">รายละเอียด</label>
                                    <textarea id="detail" name="detail" rows="3" placeholder="กรอกรายละเอียด"
                                        class="form-textarea min-h-[130px] resize-none"></textarea>
                                </div>                               
                                <div class="mt-8 flex items-center justify-end">
                                    <button type="reset" class="btn btn-outline-danger">
                                        <a href="{{ 'strategic_manage' }}">ยกเลิก</a>
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