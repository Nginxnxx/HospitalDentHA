@extends('layouts.layouts')
@section('title', 'บริการ')

@section('content')
   <!-- start header section -->
   @include('layouts.header_font')
   <!-- end header section -->
<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
:class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' :
    '', $store.app.menu, $store.app.layout, $store.app.rtlClass
]">
    <div class="text ml-20">
        <div class="animate__animated p-6">
            <h4 class="text mt-5 mb-6 text-xl font-bold md:text-1xl">กฎระเบียบข้อบังคับที่เกี่ยวข้อง</h4>
            <hr>
            <img class="card-img-top mx-auto mt-3" height="200px" width="220px"
                src="{{ asset('assets/images/dent/หัวกระดาษ.svg') }}" alt="Card image">

            {{-- <img class="card-img-top mx-auto mt-5" height="30px" width="30px"
                src="{{ asset('assets/images/dent/icon.png') }}" alt="Card image"> --}}

            <div class="animate__animated p-6">
                <ul style="color: #782A8C; font-size:18px; line-height: 1.8;">
                    @foreach ($rules as $row)
                                            
                    <li>• {{$row->name}} <a href="{{$row->link}}">อ่านต่อ</a></li>
                   
                    @endforeach
                    {{-- <li>• พระราชบัญญัติการศึกษาแห่งชาติ พ.ศ. 2542</li>
                    <li>• ประกาศคณะกรรมการการอุดมศึกษาเรื่องแนวทางปฏิบัติตามกรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ พ.ศ.
                        2552 และ
                        (ฉบับที่ 2) พ.ศ. 2554</li>
                    <li>• กรอบมาตรฐานคุณวุฒิระดับอุดมศึกษาแห่งชาติ (TQF)</li>
                    <li>• มาตรฐานคุณวุฒิระดับปริญญาตรี สาขาวิชาทันตแพทยศาสตร์ พ.ศ. 2557 </li>
                    <li>• ข้อบังคับมหาวิทยาลัยเชียงใหม่ ว่าด้วยการศึกษาระดับบัณฑิตศึกษา พ.ศ. 2559</li>
                    <li>• ข้อบังคับมหาวิทยาลัยเชียงใหม่ ว่าด้วยการศึกษาเพื่อปริญญาทันตแพทยศาสตร์บัณฑิต
                        และปริญญาวิทยาศาสตรบัณฑิต
                        สาขาวิทยาศาสตร์การแพทย์ พ.ศ. 2553, พ.ศ. 2556, พ.ศ. 2561 และ พ.ศ. 2565</li>
                    <li>• พระราชบัญญัติส่งเสริมและรักษาคุณภาพสิ่งแวดล้อมแห่งชาติ พ.ศ. 2535 </li>
                    <li>• พระราชบัญญัติความปลอดภัย และสภาพแวดล้อมในการทำงาน พ.ศ. 2554</li>
                    <li>• พระราชบัญญัติสุขภาพแห่งชาติ พ.ศ. 2550</li>
                    <li>• พระราชบัญญัติสถานพยาบาล พ.ศ. 2541 และแก้ไขเพิ่มเติม</li>
                    <li>• พระราชบัญญัติเครื่องมือแพทย์ พ.ศ. 2562 </li>
                    <li>• พระราชบัญญัติวิชาชีพทันตกรรม พ.ศ. 2537 และ ฉบับที่ 2 (พ.ศ. 2559)</li>
                    <li>• พระราชบัญญัติวิชาชีพการพยาบาลและการผดุงครรภ์ พ.ศ.2528 และที่แก้ไขเพิ่มเติมโดย
                        พระราชบัญญัติวิชาชีพการพยาบาลและการผดุงครรภ์ (ฉบับที่ 2) พศ. 2540</li>
                    <li>• พระราชบัญญัติวิชาชีพเภสัชกรรม พ.ศ.2537 และที่แก้ไขเพิ่มเติมโดย พระราชบัญญัติวิชาชีพเภสัชกรรม
                        (ฉบับที่ 2)
                        พ.ศ.2558</li>
                    <li>• พระราชบัญญัติการประกอบโรคศิลปะ พ.ศ. 2542</li>
                    <li>• พระราชบัญญัติการประกอบโรคศิลปะ (ฉบับที่ 4) พ.ศ. 2556</li>
                    <li>• พระราชบัญญัติวิชาชีพเวชกรรม พ.ศ. 2525</li>
                    <li>• พระราชบัญญัติหลักประกันสุขภาพแห่งชาติ พ.ศ. 2545</li>
                    <li>• พระราชบัญญัติประกันสังคม พ.ศ. 2533</li>
                    <li>• พระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562</li>
                    <li>• แนวทางปฏิบัติเพื่อความปลอดภัยทางทันตกรรม 2566 - DENTAL SAFETY GOALS & GUIDELINES 2023</li> --}}
                </ul>
            </div>
        </div>
            <img class="mx-auto" height="200px" width="220px"
                src="{{ asset('assets/images/dent/ท้ายกระดาษ.svg') }}">
        </div>
    </div>
@endsection
