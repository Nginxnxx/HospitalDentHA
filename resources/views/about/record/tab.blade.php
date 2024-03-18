<div class="sm:mb-0 xl:flex-[0_0_20%]">
    <ul class="space-y-2 ltr:pr-4 rtl:pl-4">
        <li>
            <a href="{{ route('record') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'record' }"
                @click="tab = 'record'">
                12 อันดับการวินิจฉัยโรคผู้ป่วยนอก</a>
        </li>
        <li>
            <a href="{{ route('sendptcount') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'sendptcount' }"
                @click="tab = 'sendptcount'">ข้อมูลสถิติการรักษา</a>
        </li>
        <li>
            <a href="{{ route('patientstatistics') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white">
                การให้บริการทางทันตกรรมย้อนหลัง 6 เดือน</a>
        </li>
        <li>
            <a href="{{ route('patientstatisticspervisit') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'patientstatisticspervisit' }"
                @click="tab = 'patientstatisticspervisit'">การให้บริการทางทันตกรรมย้อนหลัง
                4 ปี</a>
        </li>
        <li>
            <a href="{{route('treatmentcount')}}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'tratmentcount' }"
                @click="tab = 'title'">สถิติการรักษาแยกตามรายการ</a>
        </li>
        <li>
            <a href="{{ route('lecturer') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'title1' }"
                @click="tab = 'title1'">กลุ่มอาจารย์</a>
        </li>
        <li>
            <a href="{{ route('academic') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'title2' }"
                @click="tab = 'title1'">กลุ่มสนับสนุนวิชาการ,วิชาชีพและนักวิจัย</a>
        </li>
        <li>
            <a href="{{ route('risk') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'risk' }"
                @click="tab = 'title1'">สถิติความเสี่ยง</a>
        </li>
        <li>
            <a href="{{ route('elderlygroups') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'elderly' }"
                @click="tab = 'title1'">สถิติผู้ป่วยกลุ่มผู้สูงอายุ</a>
        </li>
        <li>
            <a href="{{ route('special_patientgroup') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'specialpatientgroup' }"
                @click="tab = 'title1'">สถิติผู้ป่วยกลุ่มเด็กพิเศษที่มีอายุ 12 ปี ขึ้นไป</a>
        </li>
        <li>
            <a href="{{ route('emergency') }}"
                class="block rounded-md p-3.5 py-2 transition-all duration-300 hover:bg-primary hover:text-white"
                :class="{ '!bg-primary text-white': tab === 'emergency' }"
                @click="tab = 'title1'">สถิติผู้ป่วยกลุ่ม Emergency</a>
        </li>
   
    </ul>
    
    {{-- <ul class="flex flex-wrap justify-center mt-3 space-x-2 rtl:space-x-reverse">
        <li><a href="{{ route('record')}}"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-primary rounded hover:text-white"
                :class="{ 'bg-primary text-white'}">12 อันดับการวินิจฉัยโรคผู้ป่วยนอก</a>
        </li>
        <li><a href="{{ route('sendptcount') }}"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-primary rounded hover:text-white"
                :class="{ 'bg-primary text-white'}"
               >ข้อมูลสถิติการรักษา</a>
        </li>
        <li><a href="javascript:"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-primary rounded hover:text-white"
                :class="{ 'bg-primary text-white'}">จํานวนการให้บริการทางทันตกรรมย้อนหลัง
                6 เดือน</a>
        </li>
        <li><a href="javascript:"
            class="p-3.5 py-2 -mb-[1px] block hover:bg-primary rounded hover:text-white"
            :class="{ 'bg-primary text-white'}">จํานวนการให้บริการทางทันตกรรมย้อนหลัง
            4 ปี</a>
        </li>
        <li><a href="javascript:"
                class="p-3.5 py-2 -mb-[1px] block hover:bg-primary rounded hover:text-white"
                :class="{ 'bg-primary text-white'}">สถิติการรักษาแยกตามรายการ</a>
        </li>
        <li><a href="javascript:"
            class="p-3.5 py-2 -mb-[1px] block hover:bg-primary rounded hover:text-white"
            :class="{ 'bg-primary text-white'}">อัตรากำลัง</a>
        </li>
    </ul> --}}
</div>
