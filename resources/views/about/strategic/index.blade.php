@extends('layouts_backend.layouts')
@section('title', 'บริบทเชิงกลยุทธ์')
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
                                    ปัญหาสุขภาพ
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="tab2" name="tab" class="hidden" />
                                <label for="tab2"
                                    class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                    :class="{ 'active': tab === '2' }" @click="showTab('tab-content2')">
                                    ความท้าทายเชิงกลยุทธ์
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="tab3" name="tab" class="hidden" />
                                <label for="tab3"
                                    class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                    :class="{ 'active': tab === '3' }" @click="showTab('tab-content3')">
                                    การเปลี่ยนแปลงสิ่งแวดล้อมภายนอก/นโยบาย
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="tab4" name="tab" class="hidden" />
                                <label for="tab4"
                                    class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                    :class="{ 'active': tab === '4' }" @click="showTab('tab-content4')">
                                    ปัญหาสำคัญที่โรงพยาบาลพยายามแก้ไข
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="tab5" name="tab" class="hidden" />
                                <label for="tab5"
                                    class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                    :class="{ 'active': tab === '5' }" @click="showTab('tab-content5')">
                                    ความได้เปรียบเชิงกลยุทธ์ที่สำคัญ
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <div class="tab-content" id="tab-content1">
                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        ปัญหาสุขภาพที่สำคัญในพื้นที่</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a
                                                    href="{{ route('strategic_manage.create', ['source' => 'problemsinarea']) }}">
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
                                                {{-- <th style="text-align: center">ชื่อหัวข้อ</th> --}}
                                                <th style="text-align: center">รายละเอียด</th>
                                                <th style="text-align: center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($problemsinarea as $row)
                                            <tr>
                                                <td style="text-align: center">{{ $row->id}}</td>
                                                <td>{{ $row->detail}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('strategic_manage.edit', ['strategic_manage' => $row->id, 'source' => 'problemsinarea']) }}" class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </a>
                                                        <form action="{{ route('strategic_manage.destroy', ['strategic_manage' => $row->id, 'source' => 'problemsinarea']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-danger">ลบ</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        ปัญหาสุขภาพที่เป็นโอกาสพัฒนา</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a href="{{ route('strategic_manage.create', ['source' => 'problemsdevelop']) }}">
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
                                                {{-- <th style="text-align: center">ชื่อหัวข้อ</th> --}}
                                                <th style="text-align: center">รายละเอียด</th>
                                                <th style="text-align: center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($problemsdevelop as $row)
                                            <tr>
                                                <td style="text-align: center">{{ $row->id}}</td>
                                                <td>{{ $row->detail}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('strategic_manage.edit', ['strategic_manage' => $row->id, 'source' => 'problemsdevelop']) }}" class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </a>
                                                        <form action="{{ route('strategic_manage.destroy', ['strategic_manage' => $row->id, 'source' => 'problemsdevelop']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-danger">ลบ</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        โรคที่มีข้อจำกัดในการให้บริการ/ต้องส่งต่อ</h2>
                                        <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('strategic_manage.create', ['source' => 'problemsforward']) }}">
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
                                                {{-- <th style="text-align: center">ชื่อหัวข้อ</th> --}}
                                                <th style="text-align: center">รายละเอียด</th>
                                                <th style="text-align: center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($problemsforward as $row)
                                            <tr>
                                                <td style="text-align: center">{{ $row->id}}</td>
                                                <td>{{ $row->detail}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('strategic_manage.edit', ['strategic_manage' => $row->id, 'source' => 'problemsforward']) }}" 
                                                            class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </a>
                                                        <form action="{{ route('strategic_manage.destroy', ['strategic_manage' => $row->id, 'source' => 'problemsforward']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-danger">ลบ</button>
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
                                        ความท้าทายเชิงกลยุทธ์</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a href="{{ route('strategic_manage.create', ['source' => 'challenges']) }}">
                                                <button type="button" class="btn btn-primary" @click="editUser">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                    <table id="example4" class="table-hover whitespace-nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">ID</th>
                                                {{-- <th style="text-align: center">ชื่อเรื่อง</th> --}}
                                                <th style="text-align: center">รายละเอียด</th>
                                                <th style="text-align: center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($challenges as $row)
                                            <tr>
                                                {{-- <td></td> --}}
                                                <td>{{ $row->id}}</td>
                                                <td>{{ $row->detail}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('strategic_manage.edit', ['strategic_manage' => $row->id, 'source' => 'challenges']) }}" class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </a>
                                                        <form action="{{ route('strategic_manage.destroy', ['strategic_manage' => $row->id, 'source' => 'challenges']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-danger">ลบ</button>
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
                                        การเปลี่ยนแปลงสิ่งแวดล้อมภายนอก/นโยบาย</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a href="{{ route('strategic_manage.create', ['source' => 'externalenv']) }}">
                                                <button type="button" class="btn btn-primary" @click="editUser">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                    <table id="example5" class="table-hover whitespace-nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">ID</th>
                                                {{-- <th style="text-align: center">ชื่อเรื่อง</th> --}}
                                                <th style="text-align: center">รายละเอียด</th>
                                                <th style="text-align: center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($externalenv as $row)
                                            <tr>
                                                {{-- <td></td> --}}
                                                <td>{{ $row->id}}</td>
                                                <td>{{ $row->detail}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('strategic_manage.edit', ['strategic_manage' => $row->id, 'source' => 'externalenv']) }}" class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </a>
                                                        <form action="{{ route('strategic_manage.destroy', ['strategic_manage' => $row->id, 'source' => 'externalenv']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-danger">ลบ</button>
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

                        <div class="tab-content" id="tab-content4">
                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        ปัญหาสำคัญที่โรงพยาบาลพยายามแก้ไข</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a href="{{ route('strategic_manage.create', ['source' => 'problemstrying']) }}">
                                                <button type="button" class="btn btn-primary" @click="editUser">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                    <table id="example6" class="table-hover whitespace-nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">ID</th>
                                                {{-- <th style="text-align: center">หัวข้อ</th> --}}
                                                <th style="text-align: center">รายละเอียด</th>
                                                <th style="text-align: center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($problemstrying as $row)
                                            <tr>
                                                <td>{{ $row->id}}</td>
                                                <td>{{ $row->detail}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('strategic_manage.edit', ['strategic_manage' => $row->id, 'source' => 'problemstrying']) }}" class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </a>
                                                        <form action="{{ route('strategic_manage.destroy', ['strategic_manage' => $row->id, 'source' => 'problemstrying']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-danger">ลบ</button>
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

                        <div class="tab-content" id="tab-content5">
                            <div x-data="contacts" class="mt-5">
                                <div class="flex flex-wrap items-center justify-between gap-4">
                                    <h2 class="text-xl font-semibold">
                                        ความได้เปรียบเชิงกลยุทธ์ที่สำคัญ</h2>
                                    <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                        <div class="flex gap-3">
                                            <div>
                                                <a href="{{ route('strategic_manage.create', ['source' => 'advantages']) }}">
                                                    <button type="button" class="btn btn-primary" @click="editUser">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
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
                                    <table id="example7" class="table-hover whitespace-nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">ID</th>
                                                <th style="text-align: center">รายละเอียด</th>
                                                <th style="text-align: center">การจัดการ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($advantages as $row)
                                            <tr>
                                                <td>{{ $row->id}}</td>
                                                <td>{{ $row->detail}}</td>
                                                <td>
                                                    <div class="flex items-center justify-center gap-4">
                                                        <a href="{{ route('strategic_manage.edit', ['strategic_manage' => $row->id, 'source' => 'advantages']) }}" class="btn btn-sm btn-outline-warning">
                                                            แก้ไข
                                                        </a>
                                                        <form action="{{ route('strategic_manage.destroy', ['strategic_manage' => $row->id, 'source' => 'advantages']) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-outline-danger">ลบ</button>
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
