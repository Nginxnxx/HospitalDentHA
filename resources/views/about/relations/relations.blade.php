@extends('layouts.layouts')
@section('title', 'ความสัมพันธ์ระดับองค์กร')
@section('content')

    <!-- start header section -->
    @include('layouts.header_font')
    <!-- end header section -->
    <div class="animate__animated p-6">
        <h4 class="text mb-6 text-xl font-bold md:text-2xl">ความสัมพันธ์ระดับองค์กร</h4>
        <hr>
        <div class="h-full flex-1">
            <div class="mb-6 grid grid-cols-1 gap-6 py-4">
                <div>
                    <div class="mb-5 flex flex-col sm:flex-row" x-data="{ tab: '1' }">
                        <div class="mb-5 sm:mb-0 sm:flex-[0_0_20%]" style="font-size: 16px">
                            <ul class="space-y-2 ltr:pr-4 rtl:pl-4">
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '1' }"
                                        @click="tab = '1'">ระบบกำกับดูแลองค์กร</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '2' }"
                                        @click="tab = '2'">กลุ่มผู้ป่วยที่สำคัญ</p>และความต้องการ</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '3' }"
                                        @click="tab = '3'">กลุ่มผู้รับผลงานอื่นๆ </p>และความต้องการ</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '4' }"
                                        @click="tab = '4'">โครงสร้างเครือข่ายบริการ</p>และเครือข่ายความร่วมมือ</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '5' }"
                                        @click="tab = '5'">ผู้ส่งมอบและคู่ความร่วมมือ</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '6' }"
                                        @click="tab = '6'">บริการที่มีการจ้างเหมามาจากภายนอก</a>
                                </li>
                                <li>
                                    <a href="javascript:;"
                                        class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                                        :class="{ '!bg-primary text-white': tab === '7' }"
                                        @click="tab = '7'">การมีพันธสัญญาการให้บริการ</a>
                                </li>
                            </ul>
                        </div>
                        <div style="width: 3%"></div>
                        <div class="flex-1 text-sm ">
                            <template x-if="tab === '1'">
                                <div>
                                    <h4 class="text-xl font-semibold">ระบบกำกับดูแลองค์กร (Governance System)</h4>
                                    <div class="text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px;">
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;โรงพยาบาลทันตกรรม คณะทันตแพทยศาสตร์
                                            มีการกับดูแลองค์กรตามลำดับขั้น
                                            จากคณะกรรมการสภามหาวิทยาลัย </p>คณะกรรมการบริหารประจำคณะฯ
                                        คณะกรรมการอำนวยการประจำคณะฯ และคณะกรรมการบริหารโรงพยาบาล
                                        ในการบริหารงาน และควบคุมกำกับดูแลตามลำดับ</p>
                                        <div class="text mt-3">
                                            @foreach ($governance as $row)
                                                <li>{{ $row->detail }}</li>
                                            @endforeach
                                            {{-- <li>การกำกับด้านนโยบายจากมหาวิทยาลัย โดยคณะกรรมการบริหารคณะฯ
                                                ผ่านการสื่อสารสู่การดำเนินการวางแผนปฏิบัติการ
                                                </p>&nbsp;&nbsp;&nbsp;&nbsp;และกำกับติดตามผลในที่ประชุมประจำเดือนของคณะฯ
                                            </li>
                                            <li>การกำกับดูแลการปฏิบัติงานภายใน
                                                มีการตรวจสอบภายในจากกลุ่มตรวจสอบภายในประเด็นสำคัญต่าง ๆ เช่น การเงิน พัสดุ
                                                </p>
                                                &nbsp;&nbsp;&nbsp;&nbsp;และประเมินผลการปฏิบัติราชการตามคำรับรองการปฏิบัติราชการในการกำกับดูแล
                                            </li> --}}
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '2'">
                                <div>
                                    <h4 class="text-xl font-semibold">กลุ่มผู้ป่วย/ผู้รับบริการที่สำคัญและความต้องการ</h4>
                                    <div class="text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        @foreach ($customers as $row)
                                            @if ($row->name == 'เนื้อหา')
                                                <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    {{ $row->detail }}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>กลุ่มผู้ป่วย/ผู้รับบริการแบ่งตามอาการตามความเร่งด่วนของโรค</th>
                                                    <th>เกณฑ์การพิจารณา</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($customers as $row)
                                                @if ($row->title == 'กลุ่มผู้ป่วย')
                                                <tr>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->detail }}</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th>ผู้ป่วยความต้องการพิเศษ</th>
                                                    <th>เกณฑ์การพิจารณา</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($customers as $row)
                                                @if ($row->title == 'ผู้ป่วยความต้องการพิเศษ')
                                                <tr>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->detail }}</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '3'">
                                <div>
                                    <h4 class="text-xl font-semibold">กลุ่มผู้รับผลงานอื่น ๆ และความต้องการ </h4>
                                    <div class="mt-5 text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        @foreach ($need as $row)
                                            <li>{{ $row->detail }}</li>
                                        @endforeach
                                        {{-- <li>นักศึกษาทันตแพทย์ในระดับปริญญาตรีและในระดับหลังปริญญา การฝึกปฏิบัติงาน</li>
                                        <li>นักเรียนในโรงเรียนต่าง ๆ ในการได้รับข้อมูล ความรู้ และการส่งเสริมสุขภาพช่องปาก
                                        </li>
                                        <li>องค์กรปกครองส่วนท้องถิ่นในจังหวัดเชียงใหม่และภาคเหนือตอนบน
                                            การประสานงานด้านการดูแลรักษา และส่งเสริมสุขภาพช่องปาก</li> --}}
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '4'">
                                <div>
                                    <h4 class="text-xl font-semibold">โครงสร้างเครือข่ายบริการและเครือข่ายความร่วมมือ</h4>
                                    <div class="mt-5 text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        @foreach ($service as $row)
                                            <li>{{ $row->detail }}</li>
                                        @endforeach
                                        {{-- <li>โรงพยาบาลมหาราชนครเชียงใหม่</li>
                                        <li>มหาวิทยาลัยเชียงใหม่ รับผิดชอบนักศึกษามหาวิทยาลัยเชียงใหม่</li>
                                        <li>สำนักงานสาธารณสุขจังหวัดเชียงใหม่ ภายใต้กองทุนทันตกรรม </li>
                                        <li>สำนักงานหลักประกันสุขภาพแห่งชาติ</li>
                                        <li>โรงพยาบาลศูนย์ โรงพยาบาลชุมชนทุกแห่ง ในเขตจังหวัดภาคเหนือตอนบน</li> --}}
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '5'">
                                <div>
                                    <h4 class="text-xl font-semibold">ผู้ส่งมอบและคู่ความร่วมมือ</h4>
                                    <div class="text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        <div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>ผู้ส่งมอบที่สำคัญ</th>
                                                        <th>ผลิตภัณฑ์และบริการที่ส่งมอบ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($deliverer as $row)
                                                        <tr>
                                                            <td>{{$row->name}}</td>
                                                            <td>{{$row->detail}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '6'">
                                <div>
                                    <h4 class="text-xl font-semibold">บริการที่มีการจ้างเหมามาจากภายนอก</h4>
                                    <div class="text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        <div>
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>บริการจ้างเหมา</th>
                                                        <th>บริการ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($outsourcing as $row)
                                                        <tr>
                                                            <td>{{$row->name}}</td>
                                                            <td>{{$row->detail}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <template x-if="tab === '7'">
                                <div>
                                    <h4 class="text-xl font-semibold">การมีพันธสัญญาการให้บริการ </h4>
                                    <div class="text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;พันธสัญญาในการให้บริการของโรงพยาบาลทันตกรรม
                                            คณะทันแพทยศาสตร์ ได้แก่ การมีพันธสัญญาการให้บริการ</p>
                                        <li>สำนักงานหลักประกันสุขภาพแห่งชาติ ในการดูแลผู้ป่วยส่งต่อจากโรงพยาบาลต่าง ๆ</li>
                                        <li>กรมบัญชีกลาง ในการใช้บริการเบิกตรงของข้าราชการ</li>
                                        <li>โรงพยาบาลมหาราชนครเชียงใหม่
                                            ในการดูแลสุขภาพช่องปากของนักศึกษามหาวิทยาลัยเชียงใหม่</li>
                                        <li>ธนาคารแห่งประเทศไทย ในการดูแลสุขภาพช่องปากพนักงานธนาคารทุกคน</li>
                                    </div>

                                    <h4 class="text font-semibold mt-5" style="font-size: 16px">
                                        คู่ความร่วมมือที่สำคัญและบทบาท</h4>
                                    <div class="text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;โรงพยาบาลมหาราชนครเชียงใหม่ ร่วมมือในการรักษาโรคร่วมต่าง
                                            ๆ</p>
                                    </div>
                                    <h4 class="text font-semibold mt-5" style="font-size: 16px">
                                        การฝึกอบรมหรือเป็นสถาบันสมทบในการฝึกอบรม</h4>
                                    <div class="text-[#515365] dark:text-white-dark mt-3" style="font-size: 16px">
                                        <li>สถาบันสบทบของราชวิทยาลัยทันตแพทย์แห่งประเทศไทย
                                            สาขาศัลยศาสตร์ช่องปากและแม็กซิลโลเฟเชียล สาขาทันตกรรมทั่วไป สาขาปริทันตวิทยา
                                            สาขาทันตกรรมจัดฟัน และสาขาทันตกรรมประดิษฐ์</li>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
