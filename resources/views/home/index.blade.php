@extends('layouts_backend.layouts')
@section('title', 'กิจกรรม')
@section('content')
    {{-- @include('script_datatable.script') --}}
    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <div class="main-content flex flex-col min-h-screen">
            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->
                <div x-data="contacts">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <h2 class="text-xl font-semibold">กิจกรรม</h2>
                        <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                            <div class="flex gap-3">
                                <div>
                                    <a href="{{ route('create_activity') }}" type="button" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="h-5 w-5 ltr:mr-3 rtl:ml-3">
                                            <line x1="12" y1="5" x2="12" y2="19">
                                            </line>
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                        </svg>เพิ่มกิจกรรม</a>
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
                                        <th style="text-align: center">ชื่อเรื่อง</th>
                                        <th style="text-align: center">รายละเอียด</th>
                                        <th style="text-align: center">รูปภาพ</th>
                                        <th style="text-align: center">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($activitys as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->detail }}</td>
                                            <td>{{ $row->picture }}</td>
                                            <td>
                                                <div class="flex items-center justify-center gap-4">
                                                    <a href="{{ route('home.edit', $row->id) }}"
                                                        class="btn btn-sm btn-outline-warning"> แก้ไข</a>
                                                    <form action="{{ route('home.destroy', $row->id) }}" method="POST">
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

                    <div class="mt-5">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <h2 class="text-xl font-semibold">ประชาสัมพันธ์</h2>
                            <div class="flex w-full flex-col gap-4 sm:w-auto sm:flex-row sm:items-center sm:gap-3">
                                <div class="flex gap-3">
                                    <div>
                                        <a href="{{ route('create_public') }}" type="button" class="btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="h-5 w-5 ltr:mr-3 rtl:ml-3">
                                                <line x1="12" y1="5" x2="12" y2="19">
                                                </line>
                                                <line x1="5" y1="12" x2="19" y2="12">
                                                </line>
                                            </svg>
                                            เพิ่มประชาสัมพันธ์</a>
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
                                        <th style="text-align: center">ชื่อเรื่อง</th>
                                        <th style="text-align: center">รายละเอียด</th>
                                        <th style="text-align: center">รูปภาพ</th>
                                        <th style="text-align: center">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($publish as $row)
                                        <tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->detail }}</td>
                                            <td>{{ $row->picture }}</td>
                                            <td>
                                                <div class="flex items-center justify-center gap-4">
                                                    <a href="{{ route('publish.edit', $row->id) }}"
                                                        class="btn btn-sm btn-outline-warning"> แก้ไข</a>
                                                    <form action="{{ route('publish.destroy', $row->id) }}" method="POST">
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


                <div class="mt-5">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <h2 class="text-xl font-semibold">ข้อมูลทั่วไป</h2>
                    </div>
                </div>
                <div x-data="basic">
                    <div class="panel mt-3">
                        <table id="example3" class="table-hover whitespace-nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center">ID</th>
                                    <th style="text-align: center">ชื่อภาษาไทย</th>
                                    <th style="text-align: center">ชื่อภาษาอังกฤษ</th>
                                    <th style="text-align: center">ที่อยู่</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($general as $row)
                                    <tr>
                                        <td>{{ $row->nameTH }}</td>
                                        <td>{{ $row->nameEN }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td>
                                            <div class="flex items-center justify-center gap-4">   
                                                    <a href="{{ route('generalinfomation.edit', ['generalinfomation' => $row->id, 'source' => 'general']) }}" class="btn btn-sm btn-outline-warning">
                                                        แก้ไข
                                                    </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
              
                <div class="mt-5">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <h2 class="text-xl font-semibold">ผู้บริหาร</h2>
                    </div>
                </div>
                <div x-data="basic">
                    <div class="panel mt-3">
                        <table id="example4" class="table-hover whitespace-nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="text-align: center">ID</th>
                                    <th style="text-align: center">ชื่อ-นามสกุล</th>
                                    <th style="text-align: center">ตำแหน่ง</th>
                                    <th style="text-align: center">หน้าที่</th>
                                    <th style="text-align: center">อีเมล์</th>
                                    <th style="text-align: center">เบอร์โทรศัพท์</th>
                                    <th style="text-align: center">การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($management as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->position }}</td>
                                        <td>{{ $row->duty }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->telephone }}</td>
                                        <td>
                                            <div class="flex items-center justify-center gap-4">
                                                <a href="{{ route('generalinfomation.edit', ['generalinfomation' => $row->id, 'source' => 'management']) }}" class="btn btn-sm btn-outline-warning">
                                                    แก้ไข
                                                </a>
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
    <script src="{{ asset('assets/js/file-upload-with-preview.iife.js') }}"></script>
    <script>
        // multiple image upload
        new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
            images: {
                baseImage: 'assets/images/file-preview.svg',
                backgroundImage: '',
            },
            multiple: true,
        });
    </script>

    <script>
        function showPopup() {
            // แสดง Popup
            document.getElementById('popupContainer').classList.remove('hidden');
        }

        function closePopup() {
            // ปิด Popup
            document.getElementById('popupContainer').classList.add('hidden');
        }
    </script>
    @csrf
    @push('js')
    @endpush
@endsection
