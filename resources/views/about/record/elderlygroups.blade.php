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
                        <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'elderly' }">

                            @include('about.record.tab')

                            <div class="flex-1">
                                <div>
                                    <h4 class="mt-3 text-xl font-semibold">สถิติผู้ป่วยกลุ่มผู้สูงอายุ</h4>
                                    <div class="table-responsive ml-5 mt-5">
                                        <table>
                                            <thead style="text-align: center">
                                                <tr></tr>
                                            </thead>
                                            <tbody>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                     
                                        <div x-data="chart">
                                        </div>
                                       
                                      
                                        
                                        <div>
                                            <div x-ref="barChart" class="rounded-lg dark:bg-black overflow-hidden">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        @foreach ($count_sex as $row)
                                            <div>ปี {{$row->year}} คนไข้ {{$row->name}} คน เพศชาย  {{$row->male}} คน / เพศหญิง  {{$row->female}} คน  </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('script_record.elderlygroups')
   
        @csrf
        @push('js')
        @endpush
    @endsection
