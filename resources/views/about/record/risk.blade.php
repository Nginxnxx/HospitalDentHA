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
                        <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'risk' }">

                            @include('about.record.tab')

                            <div class="flex-1">
                                <div>
                                    <h4 class="mt-3 text-xl font-semibold">สถิติความเสี่ยง</h4>
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
                                        <form action="{{ route('risk') }}" method="GET" >
                                            @csrf
                                            <select name="year" onchange="this.form.submit()" class="btn btn-secondary  dropdown-toggle"  class="dropdown">
                                                <option value="">เลือกปี</option>
                                                @for ($i = date('Y') ; $i >= date('Y') - 3; $i--)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                        </form>
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

        @include('script_record.record_risk')
        <script>
            document.getElementById('yearSelect').addEventListener('change', function() {
                document.getElementById('yearForm').submit();
            });
        </script>
        @csrf
        @push('js')
        @endpush
    @endsection
