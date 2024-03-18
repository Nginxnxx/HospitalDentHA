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
                                        <a href="{{route('tabs')}}"
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
                                            2563 - ส.ค. 2567</h4>
                                        {{-- <div class="table-responsive">
                                            @php
                                                $tableData = [];
                                                
                                                foreach ($top12diag as $row) {
                                                    $ICD10_names = $row->ICD10_names;
                                                    $year = $row->year;
                                                    $diagnosisData = $row->diagnosisData;

                                                    // เพิ่มข้อมูลใน associative array ของโรคนี้ ถ้ายังไม่มีใน $tableData
                                                    if (!isset($tableData[$ICD10_names])) {
                                                        $tableData[$ICD10_names] = [];
                                                    }

                                                    // เพิ่มข้อมูลการวินิจฉัยสำหรับปีนี้ใน associative array ของโรคนี้
                                                    $tableData[$ICD10_names][$year] = $diagnosisData;
                                                }
                                            @endphp

                                            {{-- แสดงข้อมูลในตาราง --}}
                                            {{-- <table>
                                                <thead style="font-size: 18px;">
                                                    <tr>
                                                        <th style="text-align: center">ชนิดของโรค</th>
                                                        @for ($i = 3; $i >= 0; $i--)
                                                            <th>{{ date('Y') - $i }}</th>
                                                        @endfor
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 16px">
                                                    @foreach ($tableData as $ICD10_names => $diagnosisDataByYear)
                                                        <tr>
                                                            <td>{{ $ICD10_names }}</td>
                                                            @for ($i = 3; $i >= 0; $i--)
                                                                <td>{{ $diagnosisDataByYear[date('Y') - $i] ?? '' }}</td>
                                                            @endfor
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table> --}}

                                         


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

                                            <div >
                                                <div class="mb-5 flex items-center justify-between">
                                                    <h5 class="text-lg font-semibold dark:text-white">
                                                        12 อันดับการวินิจฉัยโรคผู้ป่วยนอก ตั้งแต่ ปี 2563 - ส.ค. 2567</h5>
                    
                                                </div>
                                                <div x-ref="columnChart" class="bg dark:bg-black rounded-lg"></div>
                        
                                            </div>

                                        </div>
                                </template>
                                <template x-if="tab === 'profile'">
                                    <div>
                                        <h4 class="mb-4 text-2xl font-semibold">ข้อมูลสถิติการรักษา ปี 2563 - ส.ค. 2567
                                            2563 - ส.ค. 2566</h4>
                                        <div class="table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>คลินิก</th>
                                                        {{-- @foreach ($yearlyData as $year => $data)
                                                        <th>{{ $year }}</th>
                                                    @endforeach --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @foreach ($clinics as $clinic)
                                                        <tr>
                                                            <td>{{ $clinic['name'] }}</td>
                                                            @foreach ($yearlyData as $year => $data)
                                                                <td>{{ $data[$clinic['id']] }}</td>
                                                            @endforeach
                                                        </tr>
                                                    @endforeach --}}
                                                </tbody>
                                            </table>
                                            {{-- <table>
                                                <thead style="font-size: 18px">
                                                    <tr>
                                                        <th style="width: 40%;text-align: center">คลินิก</th>
                                                        <th>ปี 2563</th>
                                                        <th>ปี 2564</th>
                                                        <th>ปี 2565</th>
                                                        <th>ปี 2566</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="font-size: 16px">
                                                    <tr>
                                                        <td>พิเคราะห์โรคช่องปาก</td>
                                                        <td>9,827</td>
                                                        <td>9,283</td>
                                                        <td>10,070</td>
                                                        <td>9,861</td>
                                                    </tr>
                                                    <tr>
                                                        <td>รังสีวิทยาและแม็กซิลโลเฟเซียล</td>
                                                        <td>18,133</td>
                                                        <td>17,659</td>
                                                        <td>18,675</td>
                                                        <td>19,041</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ศัลยศาสตร์และแม็กซิลโลเฟเซียล</td>
                                                        <td>7,019 </td>
                                                        <td>8,435</td>
                                                        <td>8,451 </td>
                                                        <td>7,972</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ทันตะกรรมบูรณะ</td>
                                                        <td>4,641</td>
                                                        <td>5,625</td>
                                                        <td>4,518</td>
                                                        <td>4,454</td>
                                                    </tr>
                                                    <tr>
                                                        <td>วิทยาเอ็นโดดอนต์</td>
                                                        <td>747</td>
                                                        <td>1,147 </td>
                                                        <td>937</td>
                                                        <td>909</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ทันตกรรมสำหรับเด็ก</td>
                                                        <td>7,851 </td>
                                                        <td>9,005 </td>
                                                        <td>9,405 </td>
                                                        <td>9,404</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ทันตกรรมสำหรับเด็ก(ห้องผ่าตัด)</td>
                                                        <td>17 </td>
                                                        <td>20 </td>
                                                        <td>8 </td>
                                                        <td>14</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ทันตกรรมจัดฟัน</td>
                                                        <td>5,760 </td>
                                                        <td>6,794 </td>
                                                        <td>5,602 </td>
                                                        <td>4,817</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ทันตกรรมประดิษฐ์</td>
                                                        <td>2,059 </td>
                                                        <td>2,840</td>
                                                        <td> 2,670 </td>
                                                        <td>2,426</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ปริทันตวิทยา </td>
                                                        <td>2,442 </td>
                                                        <td>2,915 </td>
                                                        <td>2,688 </td>
                                                        <td>2,835</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ศูนย์ความเป็นเลิศทางทันตกรรมากเทียม</td>
                                                        <td>903 </td>
                                                        <td>1,263 </td>
                                                        <td>1,484 </td>
                                                        <td>1,854</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ตรวจทางโลหิตวิทยา</td>
                                                        <td>1,664 </td>
                                                        <td>1,854 </td>
                                                        <td>1,750 </td>
                                                        <td>1,547</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ห้องผ่าตัดและหอผู้ป่วย</td>
                                                        <td>1,242 </td>
                                                        <td>1,213 </td>
                                                        <td>1,137 </td>
                                                        <td>938</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ปฏิบัติการทางพยาธิวิทยา</td>
                                                        <td>485 </td>
                                                        <td>448 </td>
                                                        <td>471 </td>
                                                        <td>532</td>
                                                    </tr>
                                                    <tr>
                                                        <td>อวัยวะเทียมฯ</td>
                                                        <td>189 </td>
                                                        <td>356 </td>
                                                        <td>416 </td>
                                                        <td>403</td>
                                                    </tr>
                                                    <tr>
                                                        <td>ศัลยกรรม-ดมยาสลบ</td>
                                                        <td>109 </td>
                                                        <td>128 </td>
                                                        <td>171 </td>
                                                        <td>166</td>
                                                    </tr>

                                                </tbody>
                                            </table> --}}
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
                                        <h4 class="mt-3 text-xl font-semibold">จํานวนการให้บริการทางทันตกรรมย้อนหลัง 4 ปี
                                        </h4>
                                        <div class="table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>ปี</th>
                                                        <th>ผู้ป่วยเก่า</th>
                                                        <th>ผู้ป่วยใหม่</th>
                                                        <th>รวม</th>
                                                        <th>เฉลี่ย/วัน</th>
                                                        <th>เฉลี่ย/ช.ม.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($statisticspervisits as $key => $row)
                                                        @if ($key === 0 || $row->year !== $statisticspervisits[$key - 1]->year)
                                                            <tr>
                                                                <td class="font-semibold">{{ $row->year }}</td>
                                                                <td>
                                                                    @foreach ($statisticspervisits as $innerRow)
                                                                        @if ($innerRow->year === $row->year && $innerRow->patient_type == '0')
                                                                            {{ $innerRow->data }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    @foreach ($statisticspervisits as $innerRow)
                                                                        @if ($innerRow->year === $row->year && $innerRow->patient_type == '1')
                                                                            {{ $innerRow->data }}
                                                                        @endif
                                                                    @endforeach
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    $totalPatientType0 = 0;
                                                                    $totalPatientType1 = 0;
                                                                    ?>
    
                                                                    @foreach ($statisticspervisits as $innerRow)
                                                                        @if ($innerRow->year === $row->year)
                                                                            @if ($innerRow->patient_type == '0')
                                                                                <?php $totalPatientType0 += $innerRow->data; ?>
                                                                            @endif
                                                                            @if ($innerRow->patient_type == '1')
                                                                                <?php $totalPatientType1 += $innerRow->data; ?>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
    
                                                                    {{ $totalPatientType0 + $totalPatientType1 }}
                                                                </td>
                                                                <td>
                                                                    {{ intval(($totalPatientType0 + $totalPatientType1) / 20) }}
                                                                </td>
                                                                
                                                                <td>
                                                                    {{ intval(($totalPatientType0 + $totalPatientType1) / (20 * 6)) }}
                                                                </td>
    
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{-- @foreach ($total as $startYear => $yearData)
                                                        <tr>
                                                            <td class="font-semibold">{{ $startYear }}</td>
                                                            @foreach ($yearData['data'] as $dataType)
                                                            <td>{{ implode(', ', $dataType) }}</td>
                                                            @endforeach
                                                            <td>{{ $yearData['total'] }}</td>
                                                            <td>{{ intval($yearData['total'] / 20) }}</td>
                                                            <td>{{ intval($yearData['total'] / 20 / 6) }}</td>
                                                        </tr>
                                                    @endforeach --}}
                                            <p class="py-4">หน่วย : ครั้ง</p>
                                            <div class="mb-5 flex flex-col sm:flex-row py-4">
                                                <p><u><i>หมายเเหตุ :</i></u></p>
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



        {{-- @include('script_record.record_top12digi') --}}

   
        @csrf
        @push('js')
        @endpush
    @endsection
