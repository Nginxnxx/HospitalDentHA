@extends('layouts.layouts')
@section('title', 'บริการ')

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
        <h4 class="text mb-6 text-xl font-bold md:text-2xl">อาคารและสถานที่</h4>
        <hr>
        <div class="item item-center mb-6 grid grid-cols-1 gap-6 lg:grid-cols">
            <div class="h-full">
                <div class="h-full w-full mt-3">
                    <img class="card-img-top mx-auto" height="400px" width="800px"
                        src="{{ asset('assets/images/dent/building3.svg') }}" alt="Card image">
                </div>
            </div>
            <div
                class="max-w-full space-y-4 p-4 ltr:rounded-r-none rtl:rounded-l-none xl:relative xl:block xl:h-auto ltr:xl:rounded-r-md rtl:xl:rounded-l-md">
                <div class="h-full w-full ml-20">
                        <h5 class="text-lg font-semibold dark:text-white-light">อาคารสถานที่ที่สำคัญ :</h5>
                    <div class="text text-[#515365] dark:text-white-dark" style="font-size: 16px;">
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            คณะทันตแพทยศาสตร์ มีพื้นที่ดูแลรับผิดชอบประมาณ 15 ไร่ ประกอบด้วยอาคารสำนักงาน ห้องบรรยาย
                            ห้องปฏิบัติการ
                            คลินิก ศูนย์วิจัยต่าง ๆ รวมทั้งสิ้น 10 อาคาร โดยอาคาร 1 - 5 เป็นอาคารสูง 2 ชั้น
                            อาคาร 6 เป็นอาคารสูง 4 ชั้น อาคาร 7 เป็นอาคารสูง 5 ชั้น อาคาร 8 เป็นอาคารสูง 6 ชั้น และอาคาร 9
                            เป็นอาคารสูง 5 ชั้น ให้บริการคลินิกทันตกรรมพิเศษ คลินิกบริการวิชาการสำหรับอาจารย์ และ
                            ในปัจจุบันประกอบไปด้วย 10 อาคาร ได้แก่ อาคารสำนักงาน ห้องบรรยาย ห้องปฏิบัติการ คลินิก
                            และศูนย์วิจัยต่างๆ
                            ในส่วนความรับผิดชอบ และการดำเนินการของโรงพยาบาลทันตกรรม
                        </p>
                        <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            ในปี พ.ศ. 2565 ได้เริ่มมีการจัดตั้งคลินิกเพื่อผู้ป่วยความต้องการพิเศษขึ้น ณ คลินิกส่งเสริมฯ
                            ชั้น2 อาคาร 3
                            เพื่อให้ผู้ป่วยในกลุ่มนี้มีโอกาสเข้าถึงระบบการรักษาทางทันตกรรมที่รวดเร็ว ปลอดภัย
                            หลังจากนั้นจากการที่มีจำนวนเพิ่มขึ้น
                            และมีการจัดระบบการดูแลผู้ป่วยที่ดีขึ้นทำให้ต้องมีการย้ายพื้นที่ไปใช้ที่ ชั้น 1 อาคาร 4
                            ซึ่งจะแล้วเสร็จภายใน ปี พ.ศ. 2566 นี้
                        </p>
                    </div>
                    <div class="grid grid-cols-1 gap-2 lg:grid-cols-3 mt-3 text-[#515365] dark:text-white-dark" style="font-size: 16px;">
                        <ul>
                            <li><b>อาคาร 1</b></li>
                            <li>ชั้น 1 ห้องผ่าตัด วิสัญญี และหอผู้ป่วย</li>
                            <li>ชั้น 3 หน่วยบูรณะช่องปากและใบหน้า</li>
                        </ul>
                        <div class="text justify-between">
                            <ul>
                                <li> <b>อาคาร 2</b> </li>
                                <li>ชั้น 1 คลินิกศัลยศาสตร์และแม็กซิลโลเฟเซียล</li>
                                <li>ชั้น 2 คลินิกทันตกรรมบูรณะ</li>
                                <li>ชั้น 3 คลินิกทันตกรรมจัดฟัน</li>
                            </ul>
                        </div>

                        <div class="text justify-between">
                            <ul>
                                <li> <b>อาคาร 3</b></li>
                                <li>ชั้น 1 ห้องปฏิบัติการวิทยาศาสตร์การแพทย์</li>
                                <li>ชั้น 2 คลินิกผู้ป่วยความต้องการพิเศษ</li>
                            </ul>
                        </div>

                        <div class="text justify-between">
                            <ul>
                                <li> <b>อาคาร 4</b></li>
                                <li>ชั้น 1 จุดคัดกรอง, เวชระเบียน,</p>หน่วยเภสัชกรรม, คลินิกศัลย์ปริทันต์</li>
                                <li>ชั้น 2 คลินิกปริทันตวิทยา รวมถึงงานเอ็นโดดอนท์ </p>และทันตกรรมประดิษฐ์</li>
                            </ul>
                        </div>

                        <div class="text justify-between">
                            <ul>
                                <li><b>อาคาร 5</b></li>
                                <li>ชั้น 1 คลินิกพิเคราะห์โรคช่องปาก เวชศาสตร์ช่องปาก และ TMD</li>
                                <li>ชั้น 2 คลินิกทันตกรรมสำหรับเด็ก</li>
                                <li>ชั้น 3 คลินิกทันตกรรมประดิษฐ์ และปริทันตวิทยา</li>
                            </ul>
                        </div>

                        <div class="text justify-between">
                            <ul>
                                <li><b>อาคาร 6</b></li>
                                <li>ชั้น 1 คลินิกรังสีวิทยาและแม็กซิลโลเฟเซียล และศูนย์เอกซเรย์ทางทันตกรรม</li>
                                <li>ชั้น 2 และ 3 คลินิกทันตกรรมพร้อมมูล</li>
                            </ul>
                        </div>

                        <div class="text justify-between">
                            <ul>
                                <li><b>อาคาร 7</b></li>
                                <li>ชั้น 1 สำนักงานโรงพยาบาลทันตกรรม, หน่วยซ่อมบำรุงทางทันตกรรม, หน่วยซัพพลายและซักฟอก</li>
                            </ul>
                        </div>

                        <div class="text justify-between">
                            <ul>
                                <li><b>อาคาร 9</b> </li>
                                <li>ชั้น 3-4 : ศูนย์ความเป็นเลิศทางทันตกรรมรากเทียม</li>
                            </ul>
                        </div>

                        <div class="text justify-between">
                            <ul>
                                <li><b>อาคาร 10</b> </li>
                                <li>ชั้น 2 คลินิกบัณฑิตศึกษา</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
