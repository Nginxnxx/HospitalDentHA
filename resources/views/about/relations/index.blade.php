@extends('layouts_backend.layouts')
@section('title', 'ความสัมพันธ์ระดับองค์กร')
@section('content')
{{-- @include('script_datatable.script') --}}
        <body style="font-family: 'Prompt', sans-serif;" x-data="main"
            class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
            <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
                <div class="main-content flex flex-col min-h-screen">
                    <div class="animate__animated p-6" :class="[$store.app.animation]">
                        <!-- simple tabs -->
                        <div>
                            <ul class="flex flex-wrap border-b border-white-light dark:border-[#191e3a]">
                                <li>
                                    <input type="radio" id="tab1" name="tab" class="hidden" />
                                    <label for="tab1"
                                        class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-b-black"
                                        :class="{ 'active': tab === '1' }"
                                        @click="showTab('tab-content1')">
                                        ระบบกำกับดูแลองค์กร
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="tab2" name="tab" class="hidden" />
                                    <label for="tab2"
                                        class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                        :class="{ 'active': tab === '2' }"
                                        @click="showTab('tab-content2')">
                                        ผู้รับบริการที่สำคัญและความต้องการ
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="tab3" name="tab" class="hidden" />
                                    <label for="tab3"
                                        class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                        :class="{ 'active': tab === '3' }"
                                        @click="showTab('tab-content3')">
                                        กลุ่มผู้รับผลงานอื่นๆ
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="tab4" name="tab" class="hidden" />
                                    <label for="tab4"
                                        class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                        :class="{ 'active': tab === '4' }"
                                        @click="showTab('tab-content4')">
                                        โครงสร้างเครือข่ายบริการ
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="tab5" name="tab" class="hidden" />
                                    <label for="tab5"
                                        class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                        :class="{ 'active': tab === '5' }"
                                        @click="showTab('tab-content5')">
                                        ผู้ส่งมอบและคู่ความร่วมมือ
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="tab6" name="tab" class="hidden" />
                                    <label for="tab6"
                                        class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                        :class="{ 'active': tab === '6' }"
                                        @click="showTab('tab-content6')">
                                        บริการที่มีการจ้างเหมามาจากภายนอก
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="tab7" name="tab" class="hidden" />
                                    <label for="tab7"
                                        class="tab-label p-3.5 py-2 block border border-transparent hover:text-primary dark:hover:border-[#191e3a] dark:hover:border-b-black"
                                        :class="{ 'active': tab === '7' }"
                                        @click="showTab('tab-content7')">
                                        การมีพันธสัญญาการให้บริการ
                                    </label>
                                </li>
                            </ul>
                        </div>
                        
                        <div>
                            <div class="tab-content" id="tab-content1">
                                <div x-data="contacts" class="mt-5">
                                    <div class="flex flex-wrap items-center justify-between gap-4">
                                        <h2 class="text-xl font-semibold">
                                            ระบบกำกับดูแลองค์กร (Governance System)</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('create_governance') }}">
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
                                        <table id="example" class="table-hover whitespace-nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">ชื่อหัวข้อ</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($governance as $row)
                                                <tr>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->detail }}</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('relations_manage.edit', $row->id) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข</a>
                                                            <form action="{{ route('relations_manage.destroy', $row->id) }}" method="POST">
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
                                            กลุ่มผู้ป่วย/ผู้รับบริการที่สำคัญและความต้องการ</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>  
                                                    <a href="{{ route('create_patient')}}">
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
                                        <table id="example2" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">ชื่อเรื่อง</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patient as $row)
                                                <tr> 
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->name}}</td>
                                                    <td>{{ $row->detail}}</td>
                                                   
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('patient.edit', $row->id) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข</a>
                                                            <form action="{{ route('patient.destroy', $row->id) }}" method="POST">
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
                                            กลุ่มผู้รับผลงานอื่นๆ และความต้องการ</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('create_need')}}">
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
                                        <table id="example3" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($need as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->detail}}</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('need.edit', $row->id) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข</a>
                                                            <form action="{{ route('need.destroy', $row->id) }}" method="POST">
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
                                            โครงสร้างเครือข่ายบริการและเครือข่ายความร่วมมือ</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('create_service')}}">
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
                                        <table id="example4" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($service as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->detail}}</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('service.edit', $row->id) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข</a>
                                                            <form action="{{ route('service.destroy', $row->id) }}" method="POST">
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
                                            ผู้ส่งมอบและคู่ความร่วมมือ</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('create_deliverer')}}">
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
                                        <table id="example5" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">หัวข้อ</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($deliverer as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->name}}</td>
                                                    <td>{{ $row->detail}}</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('deliverer.edit', $row->id) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข</a>
                                                            <form action="{{ route('deliverer.destroy', $row->id) }}" method="POST">
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

                            <div class="tab-content" id="tab-content6">
                                <div x-data="contacts" class="mt-5">
                                    <div class="flex flex-wrap items-center justify-between gap-4">
                                        <h2 class="text-xl font-semibold">
                                            บริการที่มีการจ้างเหมามาจากภายนอก</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('create_outsourcing')}}">
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
                                        <table id="example6" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">หัวข้อ</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($outsourcing as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->name}}</td>
                                                    <td>{{ $row->detail}}</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('outsourcing.edit', $row->id) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข</a>
                                                            <form action="{{ route('outsourcing.destroy', $row->id) }}" method="POST">
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

                            <div class="tab-content" id="tab-content7">
                                <div x-data="contacts" class="mt-5">
                                    <div class="flex flex-wrap items-center justify-between gap-4">
                                        <h2 class="text-xl font-semibold">
                                            การมีพันธสัญญาการให้บริการ</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('covenants.create', ['source' => 'covenants'])}}">
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
                                        <table id="example7" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($covenants as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->detail}}</</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                                <a href="{{ route('covenants.edit', ['covenant' => $row->id, 'source' => 'covenants']) }}" class="btn btn-sm btn-outline-warning">
                                                                    แก้ไข
                                                                </a>
                                                                <form action="{{ route('covenants.destroy', ['covenant' => $row->id, 'source' => 'covenants']) }}" method="POST">
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
                                            คู่ความร่วมมือที่สำคัญและบทบาท</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('covenants.create', ['source' => 'coop'])}}">
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
                                        <table id="example8" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cooperation as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->detail}}</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('covenants.edit', ['covenant' => $row->id, 'source' => 'coop']) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข
                                                            </a>
                                                            <form action="{{ route('covenants.destroy', ['covenant' => $row->id, 'source' => 'coop']) }}" method="POST">
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
                                            การฝึกอบรมหรือเป็นสถาบันสมทบในการฝึกอบรม</h2>
                                        <div
                                            class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                            <div class="flex gap-3">
                                                <div>
                                                    <a href="{{ route('covenants.create', ['source' => 'train'])}}">
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
                                        <table id="example9" class="table-hover whitespace-nowrap"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center">ID</th>
                                                    <th style="text-align: center">รายละเอียด</th>
                                                    <th style="text-align: center">การจัดการ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($train as $row)
                                                <tr>
                                                    <td>{{ $row->id}}</td>
                                                    <td>{{ $row->detail}}</</td>
                                                    <td>
                                                        <div class="flex items-center justify-center gap-4">
                                                            <a href="{{ route('covenants.edit', ['covenant' => $row->id, 'source' => 'train']) }}" class="btn btn-sm btn-outline-warning">
                                                                แก้ไข
                                                            </a>
                                                            <form action="{{ route('covenants.destroy', ['covenant' => $row->id, 'source' => 'train']) }}" method="POST">
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
