@extends('layouts.layouts')
@section('title', 'ข้อมูลทางสถิติ')
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
                        <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'tratmentcount' }">
                            @include('about.record.tab')
                            
                            <div class="flex-1">
                                <div>
                                    <h4 class="mb-4 text-2xl font-semibold">สถิติการรักษาแยกตามรายการ</h4>
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>ชื่อโรค</th>
                                                    @foreach ($treatmentCounts as $row)
                                                        @if ($loop->first || $row->year !== $prevYear)
                                                            <th class="font-semibold">{{ $row->year }}</th>
                                                        @endif
                                                        @php
                                                            $prevYear = $row->year;
                                                        @endphp
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $treaName = [];
                                                @endphp
                                                @foreach ($treatmentCounts as $row)
                                                    @if ($row->treat_name !== 'US' && !in_array($row->treat_name, $treaName))
                                                        <tr>
                                                            <td>{{ $row->treat_name }}</td>
                                                            @php
                                                                $treaName[] = $row->treat_name;
                                                            @endphp
                                                            @foreach ($treatmentCounts as $innerRow)
                                                                @if ($row->treat_name === $innerRow->treat_name)
                                                                    <td>{{ $innerRow->numtreat }}</td>
                                                                @endif
                                                            @endforeach
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                
                                
                                
                                    </div>
                                    <div class="mt-2 flex justify-center md:justify-end py-2">
                                
                                        <a href="{{ asset('assets/excel/สถิติการรักษา.xlsx') }}" download>
                                            <button type="button" class="btn btn-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                    class="bi bi-download" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                    <path
                                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                </svg>&nbsp; Download
                                            </button>
                                        </a>
                                
                                    </div>
                                
                                
                                    {{-- ตาราง --}}
                                    <div>
                                        <div x-data="chart">
                                        </div>
                                        <div>
                                            <div x-ref="barChart" class="rounded-lg dark:bg-black overflow-hidden">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
      
        @include('script_record.script_treatmentcount')

        @csrf
        @push('js')
        @endpush
    @endsection
