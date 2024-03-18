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
                        <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'lecturer' }">

                            @include('about.record.tab')

                            <div class="flex-1">
                                <div>
                                    <h4 class="mt-3 text-xl font-semibold">อัตรากำลัง</h4>
                                    
                                    <div class="table-responsive ml-5">
                                        <table>
                                            <thead style="text-align: center">
                                                <tr>
                                                    <th style="text-align: center" rowspan="2">
                                                        กลุ่มอาจารย์</th>
                                                    <th colspan="4" style="text-align: center">ตำแหน่งทางวิาการ</th>
                                                    <th colspan="3" style="text-align: center">คุณวุฒิ</th>
                                                    <th colspan="3" style="text-align: center">ระยะเวลาปฏิบัติงาน (ปี)</th>
                                                    <th style="text-align: center">รวม</th>

                                                </tr>
                                                <tr>
                                                    <th style="text-align: center">อาจารย์</th>
                                                    <th style="text-align: center">ผศ.</th>
                                                    <th style="text-align: center">รศ.</th>
                                                    <th style="text-align: center">ศ.</th>

                                                    <th style="text-align: center">ป.ตรี</th>
                                                    <th style="text-align: center">ป.โท</th>
                                                    <th style="text-align: center">ป.เอก</th>

                                                    <th style="text-align: center">1-10 ปี</th>
                                                    <th style="text-align: center">11-25 ปี</th>
                                                    <th style="text-align: center">25 ปี</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                                <td>จำนวน (คน)</td>
                                                @foreach ($lecturer as $row)
                                                <td style="text-align: center">{{$row->lecturer}}</td>
                                                <td style="text-align: center">{{$row->assistant_professor}}</td>
                                                <td style="text-align: center">{{$row->associate_professor}}</td>
                                                <td style="text-align: center">{{$row->professor}}</td>

                                                <td style="text-align: center">{{$row->Bachelor_degree}}</td>
                                                <td style="text-align: center">{{$row->Master_degree}}</td>
                                                <td style="text-align: center">{{$row->Doctoral_degree}}</td>

                                                <td style="text-align: center">{{$row->age_1_10}}</td>
                                                <td style="text-align: center">{{$row->age_11_25}}</td>
                                                <td style="text-align: center">{{$row->age_over_25}}</td>    

                                                <td style="text-align: center">{{$row->pis_bio_count}}</td>    
                                                @endforeach
                                               </tr>
                                               <tr>
                                                <td>จำนวน (%)</td>
                                                @foreach ($lecturer as $row)
                                                <td style="text-align: center"> {{ intval(($row->lecturer / $row->pis_bio_count) * 100) }}</td>
                                                <td style="text-align: center">{{ intval(($row->assistant_professor / $row->pis_bio_count) * 100) }}</td>
                                                <td style="text-align: center">{{ intval(($row->associate_professor / $row->pis_bio_count) * 100) }}</td>
                                                <td style="text-align: center">{{ intval(($row->professor / $row->pis_bio_count) * 100) }}</td>
                                                
                                                <td style="text-align: center">{{ intval(($row->Bachelor_degree / $row->pis_bio_count) * 100) }}</td>
                                                <td style="text-align: center">{{ intval(($row->Master_degree / $row->pis_bio_count) * 100) }}</td>
                                                <td style="text-align: center">{{ intval(($row->Doctoral_degree / $row->pis_bio_count) * 100) }}</td>
                                                
                                                <td style="text-align: center">{{ intval(($row->age_1_10 / $row->pis_bio_count) * 100) }}</td>
                                                <td style="text-align: center">{{ intval(($row->age_11_25 / $row->pis_bio_count) * 100) }}</td>
                                                <td style="text-align: center">{{ intval(($row->age_over_25 / $row->pis_bio_count) * 100) }}</td>    
                                                
                                                <td style="text-align: center">{{ intval(($row->pis_bio_count / $row->pis_bio_count) * 100) }}</td>                                                
                                               </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @csrf
        @push('js')
        @endpush
    @endsection