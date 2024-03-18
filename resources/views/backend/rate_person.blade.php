@extends('backend/layoutbe')
@section('title', 'สถิติวินิจฉัยโรค')
@section('content')




    <body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
        :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' :
            '', $store.app.menu, $store.app.layout, $store.app.rtlClass
        ]">
        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <!-- start main content section -->

            <div x-data="contacts">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <h2 class="text-xl">สถิติการวินิจฉัยโรค 12 อันดับแรก</h2>
                </div>

            </div>


            <!-- end main content section -->
            <div x-data="basic">

                <div class="panel mt-6">

                    <table id="example" class="table-hover whitespace-nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center">ชนิดของโรค</th>
                                <th style="text-align: center">ปี 2563</th>
                                <th style="text-align: center">ปี 2564</th>
                                <th style="text-align: center">ปี 2565</th>
                                <th style="text-align: center">ปี 2566</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="text-align: center">
                               <td>ฟันคุด</td>
                               <td>8,042</td>
                               <td>9,377</td>
                               <td>9,453</td>
                               <td>8,602</td>
                            </tr>
                            <tr style="text-align: center">
                                <td>TMD</td>
                                <td>6,194</td>
                                <td>7,238</td>
                                <td>5,762</td>
                                <td>4,653</td>
                            </tr>
                            <tr style="text-align: center">
                                <td>เหงือกอักเสบ</td>
                                <td>4,662</td>
                                <td>5,161</td>
                                <td>5,299</td>
                                <td>4,653</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @csrf
        @push('js')
        @endpush
    @endsection
