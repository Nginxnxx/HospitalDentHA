<header class="z-40" :class="{ 'dark': $store.app.semidark && $store.app.menu === 'horizontal' }">
    <div class="shadow-sm">
        <div class="relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-[#0e1726]">
            <div class="hidden ltr:mr-2 rtl:ml-2 sm:block">
                <ul class="flex items-center space-x-2 rtl:space-x-reverse dark:text-[#d0d2d6]">
                    <li>
                        <a href="#"
                            class="hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60">
                            <img class="card-img-top" width="170px"
                                src="{{ asset('assets/images/dent/dentcmu.svg') }}" alt="Card image">
                        </a>
                    </li>
                </ul>
            </div>
            <div x-data="header"
                class="flex items-center space-x-1.5 ltr:ml-auto rtl:mr-auto rtl:space-x-reverse dark:text-[#d0d2d6] sm:flex-1 ltr:sm:ml-0 sm:rtl:mr-0 lg:space-x-2">
                <div class="sm:ltr:mr-auto sm:rtl:ml-auto">
                </div>
                <div>
                    <a href="{{route('index')}}"
                        class="block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary">
                        หน้าหลัก
                    </a>
                </div>

                <div @click.outside="open = false">
                    <a href="{{ route('menu') }}"
                        class="block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60">
                        กิจกรรม HA
                    </a>
                </div>

                <div class="rounded-full dropdown flex-shrink-0" x-data="dropdown"
                    x-on:mouseover="open = true" x-on:mouseleave="open = false"
                    @click.outside="open = false">
                    <a href="javascript:;"
                        class="group relative block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                        @click="toggle">
                        เกี่ยวกับเรา
                    </a>
                    <ul x-cloak x-show="open" x-transition x-transition.duration.300ms
                        class="top-11 w-[230px] !py-0 text-dark ltr:right-0 rtl:left-0 dark:text-white-dark dark:text-white-light/90">
                        <li>
                            <a href="{{ route('structure') }}" class="dark:hover:text-white"
                                @click="toggle">
                                โครงสร้างองค์กร</a>
                        </li>
                        <li>
                            <a href="{{ route('record') }}" class="dark:hover:text-white"
                                @click="toggle">
                                ข้อมูลทางสถิติ</a>
                        </li>
                        <li>
                            <a href="{{ route('vision') }}" class="dark:hover:text-white"
                                @click="toggle">
                                วิสัยทัศน์ | พันธกิจ | ค่านิยม</a>
                        </li>
                        <li>
                            <a href="{{ route('environment') }}" class="dark:hover:text-white"
                                @click="toggle">
                                สภาพแวดล้อมด้านการแข่งขัน</a>
                        </li>
                        <li>
                            <a href="{{ route('rules') }}" class="dark:hover:text-white" @click="toggle">
                                กฎระเบียบข้อบังคับที่เกี่ยวข้อง</a>
                        </li>
                        <li>
                            <a href="{{ route('building') }}" class="dark:hover:text-white"
                                @click="toggle">
                                อาคารและสถานที่</a>
                        </li>
                        <li>
                            <a href="{{ route('relations') }}" class="dark:hover:text-white"
                                @click="toggle">
                                ความสัมพันธ์ระดับองค์กร</a>
                        </li>
                        <li>
                            <a href="{{ route('strategic') }}" class="dark:hover:text-white"
                                @click="toggle">
                                บริบทเชิงกลยุทธ์ </a>
                        </li>
                        <li>
                            <a href="{{ route('performance') }}" class="dark:hover:text-white"
                                @click="toggle">
                                ระบบการปรับปรุงคุณภาพขององค์กร</a>
                        </li>
                    </ul>
                </div>

                <div @click.outside="open = false">
                    <a href="{{ route('standard') }}"
                        class="block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                        @click="toggle">
                        มาตรฐานและแนวทางการปฏิบัติ
                    </a>
                </div>

                <div @click.outside="open = false">
                    <a href="{{ route('contact') }}"
                        class="block rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                        @click="toggle">
                        ติดต่อเรา
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>