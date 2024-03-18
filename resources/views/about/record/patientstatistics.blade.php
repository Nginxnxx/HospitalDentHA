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
                        <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: 'home' }">

                            @include('about.record.tab')

                            <div class="flex-1">
                                <div>
                                    <h4 class="mt-3 text-xl font-semibold">จำนวนการให้บริการย้อนหลัง 6 เดือน</h4>
                                    <div class="table-responsive ml-5">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>เดือน</th>
                                                    <th>ผู้ป่วยเก่า</th>
                                                    <th>ผู้ป่วยใหม่</th>
                                                    <th>รวม</th>
                                                    <th>เฉลี่ย/วัน</th>
                                                    <th>เฉลี่ย/ช.ม.</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patientstatistics as $key => $row)
                                                    @if ($key === 0 || $row->month !== $patientstatistics[$key - 1]->month)
                                                        <tr>
                                                            <td class="font-semibold">
                                                                {{ $monthTranslations[$row->month] }}
                                                            </td>
                                                            <td>
                                                                @foreach ($patientstatistics as $innerRow)
                                                                    @if ($innerRow->month === $row->month && $innerRow->patient_type == '0')
                                                                        {{ $innerRow->data }}
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @foreach ($patientstatistics as $innerRow)
                                                                    @if ($innerRow->month === $row->month && $innerRow->patient_type == '1')
                                                                        {{ $innerRow->data }}
                                                                    @endif
                                                                @endforeach
                                                            </td>

                                                            <td>
                                                                <?php
                                                                $totalPatientType0 = 0;
                                                                $totalPatientType1 = 0;
                                                                ?>

                                                                @foreach ($patientstatistics as $innerRow)
                                                                    @if ($innerRow->month === $row->month)
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
                                                            {{-- <td>
                                                                    {{ intval($totalPatientType0 + $totalPatientType1) / 20 }}
                                                                </td> --}}
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
