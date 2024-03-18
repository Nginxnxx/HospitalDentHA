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
                    <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'record' }">
                        @include('about.record.tab')
                        
                        <div class="flex-1">
                            <div>
                                <h4 class="mb-4 text-2xl font-semibold">12 อันดับการวินิจฉัยโรคผู้ป่วยนอก ตั้งแต่ ปี
                                    2563 - ส.ค. 2567</h4>
                                <div class="table-responsive">
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
                                    <table>
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

                                    <div >
                                        <div class="mb-5 flex items-center justify-between">
                                            <h5 class="text-lg font-semibold dark:text-white">
                                                12 อันดับการวินิจฉัยโรคผู้ป่วยนอก ตั้งแต่ ปี 2563 - ส.ค. 2567</h5>
            
                                        </div>
                                        <div x-ref="columnChart" class="bg dark:bg-black rounded-lg"></div>
                
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


        @include('script_record.record_top12digi')

   
        @csrf
        @push('js')
        @endpush
   
        @endsection
