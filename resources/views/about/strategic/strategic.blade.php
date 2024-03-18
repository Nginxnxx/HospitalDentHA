@extends('layouts.layouts')
@section('title', 'บริบทเชิงกลยุทธ์')
@section('content')

    <!-- start header section -->
    @include('layouts.header_font')
    <!-- end header section -->

    <div class="animate__animated p-6">
        <h4 class="text mb-6 text-xl font-bold md:text-2xl">บริบทเชิงกลยุทธ์ (ที่มีผลต่อความยั่งยืนขององค์กร)</h4>
        <hr>
        <div class="h-full flex-1">
            <div class="mb-6 grid grid-cols-1 gap-6 py-4">
                <div>
                    <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: '1' }">
                        <div class="mb-5 sm:mb-0 sm:flex-[0_0_20%]" style="font-size: 16px">
                            <ul class="space-y-2 ltr:pr-4 rtl:pl-4">
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '1' }"
                                        @click="tab = '1'">ปัญหาสุขภาพ</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '2' }"
                                        @click="tab = '2'">ความท้าทายเชิงกลยุทธ์</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '3' }"
                                        @click="tab = '3'">การเปลี่ยนแปลง</p>สิ่งแวดล้อมภายนอก</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '4' }"
                                        @click="tab = '4'">ปัญหาสำคัญที่โรงพยาบาลพยายามแก้ไข</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '5' }"
                                        @click="tab = '5'">ความได้เปรียบเชิงกลยุทธ์</p>ที่สำคัญ</a>
                                </li>
                            </ul>
                        </div>
                        <div style="width: 3%"></div>
                        <div class="flex-1 text-sm ">
                            <template x-if="tab === '1'">
                                <div>
                                    <h4 class="mb-4 text-xl font-semibold">ปัญหาสุขภาพ</h4>
                                    <h4 class="text font-semibold mt-3" style="font-size: 16px">ปัญหาสุขภาพที่สำคัญในพื้นที่
                                    </h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;
                                            @foreach ($problemsinarea as $row)
                                                {{ $row->detail }}
                                            @endforeach
                                        </p>
                                    </div>

                                    <h4 class="text-1xl font-semibold mt-3" style="font-size: 16px">
                                        ปัญหาสุขภาพที่เป็นโอกาสพัฒนา</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($problemsdevelop as $row)
                                            <li> {{ $row->detail }}</li>
                                        @endforeach
                                    </div>

                                    <h4 class="text-1xl font-semibold mt-3" style="font-size: 16px">
                                        โรคที่มีข้อจำกัดในการให้บริการ/ต้องส่งต่อ</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($problemsforward as $row)
                                            <li> {{ $row->detail }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '2'">
                                <div>
                                    <h4 class="text-xl font-semibold">ความท้าทายเชิงกลยุทธ์</h4>
                                    <h4 class="text-1xl font-semibold mt-3">ความท้าทายเชิงกลยุทธ์ที่สำคัญ</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($challenges as $row)
                                            <li> {{ $row->detail }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '3'">
                                <div>
                                    <h4 class="text-xl font-semibold">การเปลี่ยนแปลงสิ่งแวดล้อมภายนอก/นโยบาย</h4>
                                    <div class="text-[#515365] mt-3 dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($externalenv as $row)
                                            <li> {{ $row->detail }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '4'">
                                <div>
                                    <h4 class="text-xl font-semibold">ปัญหาสำคัญที่โรงพยาบาลพยายามแก้ไข</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($problemstrying as $row)
                                            <li> {{ $row->detail }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '5'">
                                <div>
                                    <h4 class="mb-4 text-xl font-semibold">ความได้เปรียบเชิงกลยุทธ์ที่สำคัญ</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($advantages as $row)
                                            <li> {{ $row->detail }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </template>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
