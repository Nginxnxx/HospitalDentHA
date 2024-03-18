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
        <div class="animate__animated p-6">
            <h4 class="text mb-6 text-xl font-bold md:text-2xl">ข้อมูลทางสถิติ</h4>
            <hr>
            <div class="h-full flex-1">
                <div class="mb-6 grid grid-cols-1 gap-6 py-4">
                    <div>
                        <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'home' }">

                            @include('about.record.tab')

                            <div class="flex-1">
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
