@extends('layouts.layouts')
@section('title', 'สภาพแวดล้อมด้านการแข่งขัน')
@section('content')

    <!-- start header section -->
    @include('layouts.header_font')
    <!-- end header section -->

    <div class="animate__animated p-6">
        <h4 class="text mb-6 text-xl font-bold md:text-2xl">สภาพแวดล้อมด้านการแข่งขัน</h4>
        <hr>
        <div class="h-full flex-1">
            <div class="mb-6 grid grid-cols-1 gap-6 py-4">
                <div>
                    <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'home' }">
                        <div class="mb-5 sm:mb-0 sm:flex-[0_0_20%]" style="font-size: 16px">
                            <ul class="space-y-2 ltr:pr-4 rtl:pl-4">
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === 'home' }"
                                        @click="tab = 'home'">การก่อตั้งและการเติบโตขององค์กร</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === 'profile' }"
                                        @click="tab = 'profile'">สภาพแวดล้อมด้านการแข่งขัน</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === 'messages' }"
                                        @click="tab = 'messages'">ปัจจัยความสำเร็จ</a>
                                </li>
                            </ul>
                        </div>
                        <div style="width: 3%"></div>
                        <div class="flex-1 text-xl">
                            <template x-if="tab === 'home'">
                                <div>
                                    <h4 class="mt-3 text-xl font-semibold">การก่อตั้ง และการเติบโตขององค์กร</h4>
                                    <div class="table-responsive text-[#515365] dark:text-white-dark mt-3"
                                        style="font-size: 16px;">
                                        @foreach ($environment as $row)
                                            <li>{{ $row->detail }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === 'profile'">
                                <div>
                                    <h4 class="mt-3 text-xl font-semibold">สภาพแวดล้อมด้านการแข่งขัน</h4>
                                    <div class="table-responsive text-[#515365] dark:text-white-dark mt-3"
                                        style="font-size: 16px;">
                                        @foreach ($competition as $row)
                                            <li>{{ $row->detail }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === 'messages'">
                                <div>
                                    <h4 class="mt-3 text-xl font-semibold">ปัจจัยความสำเร็จ</h4>
                                    <h4 class="text-xl font-semibold">ปัจจัยความสำเร็จที่สำคัญขององค์กร (Key Success Factor)
                                    </h4>
                                    <div class="table-responsive text-[#515365] dark:text-white-dark mt-3"
                                        style="font-size: 16px;">
                                        @foreach ($factor as $row)
                                            @if ($row->name === 'ปัจจัยความสำเร็จที่สำคัญขององค์กร (Key Success Factor)')
                                                <li>{{ $row->detail }}</li>
                                            @endif
                                        @endforeach
                                    </div>
                                    <h4 class="text-xl font-semibold mt-3">
                                        การเปลี่ยนแปลงสำคัญที่มีผลต่อความสำเร็จขององค์กร</h4>
                                    <div class="table-responsive text-[#515365] dark:text-white-dark mt-3"
                                        style="font-size: 16px;">
                                        @foreach ($factor as $row)
                                        @if ($row->name === 'การเปลี่ยนแปลงสำคัญที่มีผลต่อความสำเร็จขององค์กร')
                                            <li>{{ $row->detail }}</li>
                                        @endif
                                    @endforeach
                                    </div>
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
