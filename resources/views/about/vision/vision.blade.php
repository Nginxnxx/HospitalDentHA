@extends('layouts.layouts')
@section('title', ' วิสัยทัศน์ | พันธกิจ | ค่านิยม')
@section('content')
  <!-- start header section -->
  @include('layouts.header_font')
  <!-- end header section -->
    <div class="animate__animated p-6">
        <h4 class="text mb-6 text-xl font-bold md:text-1xl">วิสัยทัศน์ | พันธกิจ | ค่านิยม</h4>
        <hr>
        <div class="mb-6 grid gap-6 custom-line-spacing" style="color: #782A8C; font-size:20px; line-height: 1.8;">
            <img class="card-img-top mx-auto mt-3" height="200px" width="220px"
                src="{{ asset('assets/images/dent/หัวกระดาษ.svg') }}" alt="Card image">
            <div>
                <h4 class="text text-center text-xl font-bold md:text-xl">วิสัยทัศน์ (Vision)</h4>
                <div class="text text-center" style="font-size: 16px;">
                    <p>
                        คณะทันตแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</p>
                    “สถาบันแห่งศาสตร์และวิทยาการชั้นสูงทางทันตกรรม เพื่อสังคม”<br><br>
                    โรงพยาบาลทันตกรรม คณะทันตแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</p>
                    “โรงพยาบาลทันตกรรมแห่งความเป็นเลิศ ด้วยศาสตร์และวิทยาการขั้นสูง</p>
                    เพื่อตอบสนองความต้องการของสังคม”
                    </p>
                </div>
            </div>
            <div>
                <h4 class="text text-center text-xl font-bold md:text-xl">ค่านิยม (Values)</h4>
                <p class="text text-center" style="font-size: 16px;">
                    Standardized : Safe : Satisfying<br>
                    ผู้ป่วยมีความพึงพอใจจากการบริการที่มีความปลอดภัยตามมาตรฐานการรักษา
                </p>
            </div>
            <div>
                <h4 class="text text-center text-xl font-bold md:text-xl">พันธกิจ (Mission)</h4>
                <p class="text text-center" style="font-size: 16px;">
                    โรงพยาบาลทันตกรรม คณะทันตแพทยศาสตร์ <br>
                    ดำเนินพันธกิจตามแนวปณิธานของมหาวิทยาลัยเชียงใหม่ ทั้ง 4 ด้าน <br>
                    1. สนับสนุนการเรียนการสอน เพื่อผลิตบัณฑิตทางด้านทันตแพทยศาสตร์ที่มีคุณภาพ<br>
                    2. สนับสนุนการวิจัยคุณภาพ เพื่อการเรียนการสอนและการบริการวิชาการแก่สังคม<br>
                    3. การบริการวิชาการแก่สังคมทางทันตกรรมตามมาตรฐานวิชาชีพ<br>
                    4. การทำนุบำรุงศิลปวัฒนธรรม ดำรงไว้ซึ่งวัฒนธรรมอันดีงามที่พึงกระทำ<br>
                </p>
            </div>
        </div>
        <img class="card-img-top mx-auto" height="200px" width="220px"
            src="{{ asset('assets/images/dent/ท้ายกระดาษ.svg') }}" alt="Card image">
    </div>

@endsection
