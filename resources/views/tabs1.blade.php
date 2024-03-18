@extends('layouts.layouts')
@section('title', 'บริการ')

@section('content')
    <!-- start header section -->
    @include('layouts.header_font')
    <!-- end header section -->

    <body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
        :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' :
            '',
            $store.app.menu, $store.app.layout, $store.app.rtlClass
        ]">
        <div class="animate__animated p-6" :class="[$store.app.animation]">

            <h4 class="text mt-5 mb-6 text-xl font-bold md:text-1xl">ข้อมูลทางสถิติ</h4>
            <hr>
            <div class="h-full flex-1">

                <div class="mb-6 grid grid-cols-1 gap-6 py-4">
                    <div>

                        <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'home' }">
                            <div class="mb-5 sm:mb-0 xl:flex-[0_0_20%]" style="font-size: 16px">
                                <ul class="space-y-2 ltr:pr-4 rtl:pl-4">
                                    <li>
                                        <a href="javascript:;"
                                            class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                            :class="{ '!bg-primary text-white': tab === 'home' }"
                                            @click="tab = 'home'">12
                                            อันดับการวินิจฉัยโรคผู้ป่วยนอก ตั้งแต่ ปี 2563 - ส.ค. 2566</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"
                                            class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                            :class="{ '!bg-primary text-white': tab === 'profile' }"
                                            @click="tab = 'profile'">ข้อมูลสถิติการรักษา ตั้งแต่ ปี 2563 - ส.ค. 2566</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"
                                            class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                            :class="{ '!bg-primary text-white': tab === 'messages' }"
                                            @click="tab = 'messages'">จำนวนการให้บริการระหว่างปี 2563 - สิงหาคม 2566</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"
                                            class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                            :class="{ '!bg-primary text-white': tab === 'person' }"
                                            @click="tab = 'person'">อัตรากำลัง</a>
                                    </li>
                                </ul>
                            </div>
                            <div style="width: 3%"></div>
                            <div class="flex-1 text-sm ">
                                <template x-if="tab === 'home'">
                                    <div>
                                        <h4 class="mb-4 text-2xl font-semibold">12 อันดับการวินิจฉัยโรคผู้ป่วยนอก ตั้งแต่ ปี
                                            2563 - ส.ค. 2566</h4>
                                        <div class="table-responsive">
                                        
                                            {{-- แสดงข้อมูลในตาราง --}}
                                            <table>
                                                <thead style="font-size: 18px;">
                                                    <tr>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 16px">
                                                   
                                                </tbody>
                                            </table>

                                         


                                        </div>

                                        <div class="mt-2 flex justify-center md:justify-end py-2">

                                            <a href="{{ asset('assets/excel/12อันดับวินิจฉัยโรคผู้ป่วยนอก.xlsx') }}"
                                                download>
                                                <button type="button" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                        <path
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                        <path
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                    </svg>&nbsp; Download
                                                </button>
                                            </a>

                                        </div>

                                        <div>

                                            <div x-data="chart">

                                            </div>

                                            <div class="panel">
                                                <div class="mb-5 flex items-center justify-between">
                                                    <h5 class="text-lg font-semibold dark:text-white">Simple Column</h5>
                    
                                                </div>
                                                <div x-ref="columnChart" class="rounded-lg bg-white dark:bg-black overflow-hidden"></div>
                        
                                            </div>

                                        </div>
                                </template>
                                <template x-if="tab === 'profile'">
                                    <div>
                                        <h4 class="mb-4 text-2xl font-semibold">ข้อมูลสถิติการรักษา ปี 2563 - ส.ค. 2566
                                            2563 - ส.ค. 2566</h4>
                                        <div class="table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>คลินิก</th>
                                                     
                              
                                                    </tr>
                                                </thead>
                                                <tbody>
                                   
                                                </tbody>
                                            </table>
                                          
                                        </div>
                                        <div class="mt-2 flex justify-center md:justify-end py-2">

                                            <a href="{{ asset('assets/excel/สถิติการรักษา.xlsx') }}" download>
                                                <button type="button" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                        <path
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                        <path
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                    </svg>&nbsp; Download
                                                </button>
                                            </a>

                                        </div>

                                    </div>
                                </template>
                                <template x-if="tab === 'messages'">
                                    <div>
                                        <h4 class="mb-4 text-2xl font-semibold">จำนวนการให้บริการระหว่างปี 2563 - สิงหาคม
                                            2566
                                        </h4>
                                        <div class="table-responsive">
                                            <table>
                                                <thead style="font-size: 18px;">
                                                    <tr>
                                                        <th style="width: 40%;text-align: center">ปี</th>
                                                        <th>2563</th>
                                                        <th>2564</th>
                                                        <th>2565</th>
                                                        <th>2566</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 16px">
                                                    <tr>
                                                        <td>ผู้ป่วยใหม่</td>
                                                        <td>5,881</td>
                                                        <td>5,682</td>
                                                        <td>6,450</td>
                                                        <td>5,824</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ผู้ป่วยเก่า</td>
                                                        <td>69,151</td>
                                                        <td>72,778</td>
                                                        <td>68,076</td>
                                                        <td>62,839</td>
                                                    </tr>
                                                    <tr>
                                                        <td>รวม</td>
                                                        <td>75,032</td>
                                                        <td>78,460</td>
                                                        <td>74,526</td>
                                                        <td>68,663</td>
                                                    </tr>
                                                    <tr>
                                                        <td>เฉลี่ย/วัน</td>
                                                        <td>326.23</td>
                                                        <td>341.13</td>
                                                        <td>324.03</td>
                                                        <td>298.53</td>
                                                    </tr>
                                                    <tr>
                                                        <td>เฉลี่ย/ช.ม.</td>
                                                        <td>54.37</td>
                                                        <td>56.86</td>
                                                        <td>54.00</td>
                                                        <td>49.76</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                            <p class="py-4">หน่วย : ครั้ง</p>
                                            <div class="mb-5 flex flex-col sm:flex-row py-4">
                                                <!-- buttons -->

                                                <p><u><i>หมายเเหตุ :</i></u></p>

                                                <!-- description -->
                                                <div class="flex-1 text-sm ml-5">

                                                    <ul>
                                                        <li><i>* ให้บริการ 230 วัน (12 เดือน,20 วัน/เดือน, 6 ชม. /วัน)</i>
                                                        </li>
                                                        <li><i>** ให้บริการ 180 วัน (9 เดือน,20 วัน/เดือน, 6 ชม. /วัน)</i>
                                                        </li>
                                                        <li><i>*** ให้บริการ 160 วัน (8 เดือน,20 วัน/เดือน, 6 ชม. /วัน)</i>
                                                        </li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2 flex justify-center md:justify-end py-2">

                                            <a href="{{ asset('assets/excel/จำนวนการให้บริการระหว่างปี2563-สิงหาคม 2566.xlsx') }}"
                                                download>
                                                <button type="button" class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                        <path
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                        <path
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                    </svg>&nbsp; Download
                                                </button>
                                            </a>

                                        </div>
                                    </div>
                                </template>
                                <template x-if="tab === 'person'">
                                    <div>
                                        <h4 class="mb-4 text-2xl font-semibold">อัตรากำลัง
                                        </h4>
                                        <div>
                                            <p style="font-size: 18px">
                                                • บุคลากรในโรงพยาบาลทันตกรรม (แบ่งตามวิชาชีพ / สายปฏิบัติงาน)
                                            </p>
                                            <div class="table-responsive">
                                                <table>
                                                    <thead style="font-size: 18px;text-align: center">
                                                        <tr>
                                                            <th style="width: 40%;text-align: center" rowspan="2">
                                                                กลุ่มอาจารย์</th>
                                                            <th rowspan="2" style="text-align: center">รวม</th>
                                                            <th colspan="4" style="text-align: center">ตำแหน่งทางวิาการ
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="text-align: center">อาจารย์</th>
                                                            <th style="text-align: center">ผศ.</th>
                                                            <th style="text-align: center">รศ.</th>
                                                            <th style="text-align: center">ศ.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 16px;">
                                                        <tr>
                                                            <td style="text-align: center">จำนวน (คน)</td>
                                                            <td style="text-align: center">110</td>
                                                            <td style="text-align: center">39</td>
                                                            <td style="text-align: center">55</td>
                                                            <td style="text-align: center">9</td>
                                                            <td style="text-align: center">7</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">จำนวน (%)</td>
                                                            <td style="text-align: center">100</td>
                                                            <td style="text-align: center">35.45</td>
                                                            <td style="text-align: center">50.00</td>
                                                            <td style="text-align: center">8.18</td>
                                                            <td style="text-align: center">6.36</td>
                                                        </tr>

                                                    </tbody>
                                                </table>


                                            </div>



                                        </div>
                                        <div class="py-10">
                                            <p style="font-size: 18px">
                                                • ระดับการศึกษาของบุคลาการในดรงพยาบาลทันตกรรม คณะทันตแพทย์ศาสตร์
                                            </p>
                                            <div class="table-responsive">
                                                <table>
                                                    <thead style="font-size: 18px;text-align: center">
                                                        <tr>
                                                            <th style="width: 40%;text-align: center" rowspan="2">
                                                                กลุ่มอาจารย์</th>
                                                            <th rowspan="2" style="text-align: center">รวม</th>
                                                            <th colspan="4" style="text-align: center">ตำแหน่งทางวิาการ
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="text-align: center">ป.ตรี</th>
                                                            <th style="text-align: center">ป.ตรี</th>
                                                            <th style="text-align: center">ป.โท</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody style="font-size: 16px;">
                                                        <tr>
                                                            <td style="text-align: center">จำนวน (คน)</td>
                                                            <td style="text-align: center">164</td>
                                                            <td style="text-align: center">101</td>
                                                            <td style="text-align: center">46</td>
                                                            <td style="text-align: center">17</td>

                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center">จำนวน (%)</td>
                                                            <td style="text-align: center">100</td>
                                                            <td style="text-align: center">61.59</td>
                                                            <td style="text-align: center">28.05</td>
                                                            <td style="text-align: center">10.37</td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="mt-2 flex justify-center md:justify-end py-2">

                                                    <a href="{{ asset('assets/excel/อัตรากำลัง.xlsx') }}" download>
                                                        <button type="button" class="btn btn-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-download"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                                <path
                                                                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                            </svg>&nbsp; Download
                                                        </button>
                                                    </a>

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



        @include('layouts.script_record')

        @csrf
        @push('js')
        @endpush
    @endsection
