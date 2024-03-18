@extends('layouts.layouts')
@section('title', 'ระบบการปรับปรุงคุณภาพขององค์กร')
@section('content')

    <!-- start header section -->
    @include('layouts.header_font')
    <!-- end header section -->
    <div class="animate__animated p-6">
        <h4 class="text mb-6 text-xl font-bold md:text-2xl">ระบบการปรับปรุง Performance ขององค์กร</h4>
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
                                        @click="tab = '1'">ระบบการพัฒนาคุณภาพ</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '2' }"
                                        @click="tab = '2'">กระบวนการต่างๆ</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '3' }"
                                        @click="tab = '3'">ผลงานเด่น</p>และความภาคภูมิใจขององค์กร </a>
                                </li>
                            </ul>
                        </div>
                        <div style="width: 3%"></div>
                        <div class="flex-1 text-sm ">
                            <template x-if="tab === '1'">
                                <div>
                                    <h4 class="mb-4 text-xl font-semibold">ระบบการพัฒนาคุณภาพ</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        
                                        @foreach ($devquality as $row)
                                            
                                        <li>{{$row->name}}</li>
                                       
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '2'">
                                <div>
                                    <h4 class="text-xl font-semibold">กระบวนการต่างๆ</h4>
                                    <h4 class="font-semibold mt-3" style="font-size: 16px">กระบวนการสื่อสารภายในองค์กร</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($process_commu as $row)
                                            
                                        <li>{{$row->name}}</li>
                                       
                                        @endforeach
                                    </div>

                                    <h4 class="text-1xl font-semibold mt-3" style="font-size: 16px">
                                        กระบวนการเรียนรู้ระดับองค์กร</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($process_learn as $row)
                                            
                                        <li>{{$row->name}}</li>
                                       
                                        @endforeach
                                    </div>

                                    <h4 class="font-semibold mt-3" style="font-size: 16px">กระบวนการสร้างนวัตกรรม</h4>
                                    <div class="text-[#515365] dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($process_createinnovation as $row)
                                            
                                        <li>{{$row->name}}</li>
                                       
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '3'">
                                <div>
                                    <h4 class="text-xl font-semibold">ผลงานเด่นและความภาคภูมิใจขององค์กร</h4>
                                    <div class="text-[#515365] mt-3 dark:text-white-dark" style="font-size: 16px">
                                        @foreach ($outstanding as $row)
                                            
                                        <li>{{$row->name}}</li>
                                       
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
