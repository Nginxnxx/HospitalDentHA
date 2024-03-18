@extends('layouts_backend.layouts')
@section('title', 'ข้อมูลทางสถิติ')
@section('content')
    {{-- @include('script_datatable.script') --}}

    <body style="font-family: 'Prompt', sans-serif;" x-data="main"
        class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
        <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
            <div class="main-content flex flex-col min-h-screen">
                <div class="animate__animated p-6" :class="[$store.app.animation]">
                    <!-- simple tabs -->
                    <div>
                        <ul class="flex flex-wrap mt-3 border-b border-white-light dark:border-[#191e3a]">
                            <li>
                                <input type="radio" id="tab1" name="tab" class="hidden" />
                                <label for="tab1"
                                    class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-b-black"
                                    :class="{ 'active': tab === '1' }" @click="showTab('tab-content1')">
                                    สถิติผู้ป่วยกลุ่มผู้สูงอายุ
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="tab2" name="tab" class="hidden" />
                                <label for="tab2"
                                    class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                    :class="{ 'active': tab === '2' }" @click="showTab('tab-content2')">
                                    สถิติผู้ป่วยกลุ่มเด็กพิเศษที่มีอายุ 12 ปี ขึ้นไป
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="tab2" name="tab" class="hidden" />
                                <label for="tab2"
                                    class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                    :class="{ 'active': tab === '3' }" @click="showTab('tab-content3')">
                                    สถิติผู้ป่วยกลุ่ม Emergency
                                </label>
                            </li>
                            
                        </ul>
                    </div>

                    <div>
                        <div class="tab-content" id="tab-content1">
                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        สถิติผู้ป่วยกลุ่มผู้สูงอายุ</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a
                                                    href="{{ route('record_menage.create', ['source' => 'eldergroups']) }}">
                                                    <button type="button" class="btn btn-primary" @click="editUser">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" class="h-5 w-5 ltr:mr-3 rtl:ml-3">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19">
                                                            </line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12">
                                                            </line>
                                                        </svg>
                                                        เพิ่มข้อมูล
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="basic">
                                <div class="panel mt-3">
                                    <table id="example" class="table-hover whitespace-nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">ID</th>
                                                <th style="text-align: center">ปี</th>
                                                <th style="text-align: center">ชื่อ-นามสกุล</th>
                                                <th style="text-align: center">HN</th>
                                                <th style="text-align: center">อายุ</th>
                                                <th style="text-align: center">เพศ</th>
                                                <th style="text-align: center">โรคประจำตัว</th>
                                                <th style="text-align: center">Gero</th>
                                                <th style="text-align: center">Low_dependence</th>
                                                <th style="text-align: center">Medium_dependence</th>
                                                <th style="text-align: center">Endo</th>
                                                <th style="text-align: center">Fillng</th>
                                                <th style="text-align: center">Perio</th>
                                                <th style="text-align: center">Prosth</th>
                                                <th style="text-align: center">Extraction</th>
                                                <th style="text-align: center">จัดการ</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($elderlygroup as $row)
                                            <tr>
                                                <td style="text-align: center">{{ $row->id}}</td>
                                                <td>{{ $row->year}}</td>
                                                <td>{{ $row->name}}</td>
                                                <td>{{ $row->HN}}</td>
                                                <td>{{ $row->old}}</td>
                                                <td>{{ $row->sex}}</td>
                                                <td>{{ $row->congenital_disease}}</td>
                                                <td>{{ $row->gero}}</td>
                                                <td>{{ $row->low_dependence}}</td>
                                                <td>{{ $row->medium_dependence}}</td>


                                                <td>{{ $row->endo}}</td>
                                                <td>{{ $row->fillng}}</td>
                                                <td>{{ $row->perio}}</td>
                                                <td>{{ $row->prosth}}</td>
                                                <td>{{ $row->extraction}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('record_menage.edit', ['record_menage' => $row->id, 'source' => 'eldergroups']) }}">
                                                            <button type="button" class="btn btn-sm btn-outline-warning"
                                                               >
                                                                แก้ไข
                                                            </button>
                                                        </a>
                                                        <form action="{{ route('record_menage.destroy', ['record_menage' => $row->id, 'source' => 'eldergroups']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger">ลบ</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          

                        
                        </div>

                        <div class="tab-content" id="tab-content2">
                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        สถิติผู้ป่วยกลุ่มเด็กพิเศษที่มีอายุ 12 ปี ขึ้นไป</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a href="{{ route('record_menage.create', ['source' => 'specialpatient']) }}">
                                                    <button type="button" class="btn btn-primary" @click="editUser">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="h-5 w-5 ltr:mr-3 rtl:ml-3">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19">
                                                            </line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12">
                                                            </line>
                                                        </svg>
                                                        เพิ่มข้อมูล
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="basic">
                                <div class="panel mt-3">
                                    <table id="example2" class="table-hover whitespace-nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">ID</th>
                                                <th style="text-align: center">ปี</th>
                                                <th style="text-align: center">ชื่อ-นามสกุล</th>
                                                <th style="text-align: center">HN</th>
                                                <th style="text-align: center">อายุ</th>
                                                <th style="text-align: center">เพศ</th>
                                                <th style="text-align: center">โรคประจำตัว</th>
                                                <th style="text-align: center">GA</th>
                                                <th style="text-align: center">Filling</th>
                                                <th style="text-align: center">Perio</th>
                                                <th style="text-align: center">Fluoride</th>
                                                <th style="text-align: center">Scaling</th>
                                                <th style="text-align: center">Ext</th>
                                                <th style="text-align: center">OHI</th>
                                                <th style="text-align: center">Sealant</th>
                                                <th style="text-align: center">จัดการ</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($special_patientgroup as $row)
                                            <tr>
                                                <td style="text-align: center">{{ $row->id}}</td>
                                                <td>{{ $row->year}}</td>
                                                <td>{{ $row->name}}</td>
                                                <td>{{ $row->HN}}</td>
                                                <td>{{ $row->old}}</td>
                                                <td>{{ $row->sex}}</td>
                                                <td>{{ $row->U_D}}</td>
                                                <td>{{ $row->GA}}</td>
                                                <td>{{ $row->Filling}}</td>
                                                <td>{{ $row->Perio}}</td>
                                                <td>{{ $row->Fluoride}}</td>
                                                <td>{{ $row->Scaling}}</td>
                                                <td>{{ $row->Ext}}</td>
                                                <td>{{ $row->OHI}}</td>
                                                <td>{{ $row->Sealant}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('record_menage.edit', ['record_menage' => $row->id, 'source' => 'specialpatient']) }}">
                                                            <button type="button" class="btn btn-sm btn-outline-warning"
                                                               >
                                                                แก้ไข
                                                            </button>
                                                        </a>
                                                        <form action="{{ route('record_menage.destroy', ['record_menage' => $row->id, 'source' => 'specialpatient']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger">ลบ</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="tab-content3">
                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        สถิติผู้ป่วยกลุ่ม Emergency</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a href="{{ route('record_menage.create', ['source' => 'emergency']) }}">
                                                    <button type="button" class="btn btn-primary" @click="editUser">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                            height="24px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="h-5 w-5 ltr:mr-3 rtl:ml-3">
                                                            <line x1="12" y1="5" x2="12"
                                                                y2="19">
                                                            </line>
                                                            <line x1="5" y1="12" x2="19"
                                                                y2="12">
                                                            </line>
                                                        </svg>
                                                        เพิ่มข้อมูล
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="basic">
                                <div class="panel mt-3">
                                    <table id="example3" class="table-hover whitespace-nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">ID</th>
                                                <th style="text-align: center">ว/ด/ปี</th>
                                                <th style="text-align: center">HN</th>
                                                <th style="text-align: center">ชื่อ-นามสกุล</th>
                                                <th style="text-align: center">endo</th>
                                                <th style="text-align: center">fillng</th>
                                                <th style="text-align: center">perio</th>
                                                <th style="text-align: center">อื่นๆ</th>
                                                <th style="text-align: center">เดือน</th>
                                                <th style="text-align: center">ปี</th>
                                                <th style="text-align: center">จัดการ</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($emergency as $row)
                                            <tr>
                                                <td style="text-align: center">{{ $row->id}}</td>
                                                <td>{{ $row->date}}</td>
                                                <td>{{ $row->HN}}</td>
                                                <td>{{ $row->name}}</td>
                                                <td>{{ $row->endo}}</td>
                                                <td>{{ $row->fillng}}</td>
                                                <td>{{ $row->perio}}</td>
                                                <td>{{ $row->other}}</td>
                                                <td>{{ $row->month}}</td>
                                                <td>{{ $row->year}}</td>
                                            
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('record_menage.edit', ['record_menage' => $row->id, 'source' => 'emergency']) }}">
                                                            <button type="button" class="btn btn-sm btn-outline-warning"
                                                               >
                                                                แก้ไข
                                                            </button>
                                                        </a>
                                                        <form action="{{ route('record_menage.destroy', ['record_menage' => $row->id, 'source' => 'emergency']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger">ลบ</button>
                                                        </form>
                                                    </div>
                                                </td>
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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // เมื่อหน้าเว็บโหลดเสร็จ ให้แสดง tab-content1 และทำให้ tab1 เป็น active
                showTab('tab-content1');
                document.getElementById('tab1').checked = true;
            });

            function showTab(tabId) {
                // ซ่อนทุก tab-content ก่อน
                const allTabs = document.querySelectorAll('.tab-content');
                allTabs.forEach(tab => {
                    tab.style.display = 'none';
                });

                // แสดง tab-content ที่ถูกคลิก
                const selectedTab = document.getElementById(tabId);
                selectedTab.style.display = 'block';
            }
        </script>

        @csrf
        @push('js')
        @endpush
    @endsection
