<script src={{ asset('assets/js/alpine-collaspe.min.js') }}></script>
<script src={{ asset('assets/js/alpine-persist.min.js') }}></script>
<script defer src={{ asset('assets/js/alpine-ui.min.js') }}></script>
<script defer src={{ asset('assets/js/alpine-focus.min.js') }}></script>
<script defer src={{ asset('assets/js/alpine.min.js') }}></script>
<script src={{ asset('assets/js/custom.js') }}></script>
<script src={{ asset('assets/js/swiper-bundle.min.js') }}></script>
<script src={{ asset('assets/js/highlight.min.js') }}></script>
<script defer src="assets/js/apexcharts.js"></script>

<!-- DataTables JS -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<!-- Buttons extension JS -->
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<script src="{{ asset('assets/js/file-upload-with-preview.iife.js') }}"></script>


<script>
  document.addEventListener('alpine:init', () => {
        // main section
        Alpine.data('scrollToTop', () => ({
            showTopButton: false,
            init() {
                window.onscroll = () => {
                    this.scrollFunction();
                };
            },

            scrollFunction() {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    this.showTopButton = true;
                } else {
                    this.showTopButton = false;
                }
            },

            goToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            },
        }));

        // theme customization
        Alpine.data('customizer', () => ({
            showCustomizer: false,
        }));


        
    });
</script>

<script>
    $(document).ready(function(e) {

        $('#example').DataTable({
            perPage: 20,
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excel',
                text: '<button type="button" class="btn btn-primary btn-sm m-1" style="margin: -0.25rem;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2"><path d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z" fill="currentColor" /><path opacity="0.5" d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22" stroke="currentColor" stroke-width="1.5" /></svg>Excel</button>',
                className: 'btn btn-primary btn-sm m-1', // Custom CSS class for the button
                title: 'title',
                messageTop: 'messageTop',
                filename: 'filename',
                exportOptions: {
                    modifier: {
                        page: 'all'
                    },
                    // columns: [0, 1, 2, 3],
                }
            }],
            language: {
                searchPlaceholder: 'Enter search term...',
            },
            // ปรับแต่งสไตล์ของ pagination
            pagingType: "full_numbers",
            scrollY: (window.innerHeight / 2.2) + "px",
            scrollX: true,
            bScrollCollapse: true,

        });

        $('#example2').DataTable({
            perPage: 20,
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excel',
                text: '<button type="button" class="btn btn-primary btn-sm m-1" style="margin: -0.25rem;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2"><path d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z" fill="currentColor" /><path opacity="0.5" d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22" stroke="currentColor" stroke-width="1.5" /></svg>Excel</button>',
                className: 'btn btn-primary btn-sm m-1', // Custom CSS class for the button
                title: 'title',
                messageTop: 'messageTop',
                filename: 'filename',
                exportOptions: {
                    modifier: {
                        page: 'all'
                    },
                    // columns: [0, 1, 2, 3],
                }
            }],
            language: {
                searchPlaceholder: 'Enter search term...',
            },
            // ปรับแต่งสไตล์ของ pagination
            pagingType: "full_numbers",
            scrollY: (window.innerHeight / 2.2) + "px",
            scrollX: true,
            bScrollCollapse: true,

        });

        $('#example3').DataTable({
            perPage: 20,
            dom: 'Bfrtip',
            buttons: [{
                extend: 'excel',
                text: '<button type="button" class="btn btn-primary btn-sm m-1" style="margin: -0.25rem;"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2"><path d="M15.3929 4.05365L14.8912 4.61112L15.3929 4.05365ZM19.3517 7.61654L18.85 8.17402L19.3517 7.61654ZM21.654 10.1541L20.9689 10.4592V10.4592L21.654 10.1541ZM3.17157 20.8284L3.7019 20.2981H3.7019L3.17157 20.8284ZM20.8284 20.8284L20.2981 20.2981L20.2981 20.2981L20.8284 20.8284ZM14 21.25H10V22.75H14V21.25ZM2.75 14V10H1.25V14H2.75ZM21.25 13.5629V14H22.75V13.5629H21.25ZM14.8912 4.61112L18.85 8.17402L19.8534 7.05907L15.8947 3.49618L14.8912 4.61112ZM22.75 13.5629C22.75 11.8745 22.7651 10.8055 22.3391 9.84897L20.9689 10.4592C21.2349 11.0565 21.25 11.742 21.25 13.5629H22.75ZM18.85 8.17402C20.2034 9.3921 20.7029 9.86199 20.9689 10.4592L22.3391 9.84897C21.9131 8.89241 21.1084 8.18853 19.8534 7.05907L18.85 8.17402ZM10.0298 2.75C11.6116 2.75 12.2085 2.76158 12.7405 2.96573L13.2779 1.5653C12.4261 1.23842 11.498 1.25 10.0298 1.25V2.75ZM15.8947 3.49618C14.8087 2.51878 14.1297 1.89214 13.2779 1.5653L12.7405 2.96573C13.2727 3.16993 13.7215 3.55836 14.8912 4.61112L15.8947 3.49618ZM10 21.25C8.09318 21.25 6.73851 21.2484 5.71085 21.1102C4.70476 20.975 4.12511 20.7213 3.7019 20.2981L2.64124 21.3588C3.38961 22.1071 4.33855 22.4392 5.51098 22.5969C6.66182 22.7516 8.13558 22.75 10 22.75V21.25ZM1.25 14C1.25 15.8644 1.24841 17.3382 1.40313 18.489C1.56076 19.6614 1.89288 20.6104 2.64124 21.3588L3.7019 20.2981C3.27869 19.8749 3.02502 19.2952 2.88976 18.2892C2.75159 17.2615 2.75 15.9068 2.75 14H1.25ZM14 22.75C15.8644 22.75 17.3382 22.7516 18.489 22.5969C19.6614 22.4392 20.6104 22.1071 21.3588 21.3588L20.2981 20.2981C19.8749 20.7213 19.2952 20.975 18.2892 21.1102C17.2615 21.2484 15.9068 21.25 14 21.25V22.75ZM21.25 14C21.25 15.9068 21.2484 17.2615 21.1102 18.2892C20.975 19.2952 20.7213 19.8749 20.2981 20.2981L21.3588 21.3588C22.1071 20.6104 22.4392 19.6614 22.5969 18.489C22.7516 17.3382 22.75 15.8644 22.75 14H21.25ZM2.75 10C2.75 8.09318 2.75159 6.73851 2.88976 5.71085C3.02502 4.70476 3.27869 4.12511 3.7019 3.7019L2.64124 2.64124C1.89288 3.38961 1.56076 4.33855 1.40313 5.51098C1.24841 6.66182 1.25 8.13558 1.25 10H2.75ZM10.0298 1.25C8.15538 1.25 6.67442 1.24842 5.51887 1.40307C4.34232 1.56054 3.39019 1.8923 2.64124 2.64124L3.7019 3.7019C4.12453 3.27928 4.70596 3.02525 5.71785 2.88982C6.75075 2.75158 8.11311 2.75 10.0298 2.75V1.25Z" fill="currentColor" /><path opacity="0.5" d="M13 2.5V5C13 7.35702 13 8.53553 13.7322 9.26777C14.4645 10 15.643 10 18 10H22" stroke="currentColor" stroke-width="1.5" /></svg>Excel</button>',
                className: 'btn btn-primary btn-sm m-1', // Custom CSS class for the button
                title: 'title',
                messageTop: 'messageTop',
                filename: 'filename',
                exportOptions: {
                    modifier: {
                        page: 'all'
                    },
                    // columns: [0, 1, 2, 3],
                }
            }],
            language: {
                searchPlaceholder: 'Enter search term...',
            },
            // ปรับแต่งสไตล์ของ pagination
            pagingType: "full_numbers",
            scrollY: (window.innerHeight / 2.2) + "px",
            scrollX: true,
            bScrollCollapse: true,

        });
        $('.dt-button').removeClass('dt-button').addClass('btn btn-primary btn-sm m-1');
    });

    new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
        images: {
            baseImage: 'assets/images/file-preview.svg',
            backgroundImage: '',
        },
    });

    document.addEventListener('alpine:init', () => {
        // main section
        Alpine.data('scrollToTop', () => ({
            showTopButton: false,
            init() {
                window.onscroll = () => {
                    this.scrollFunction();
                };
            },

            scrollFunction() {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    this.showTopButton = true;
                } else {
                    this.showTopButton = false;
                }
            },

            goToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            },
        }));

        // theme customization
        // Alpine.data('customizer', () => ({
        //     showCustomizer: false,
        // }));

        // sidebar section
        Alpine.data('sidebar', () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href="' + window.location
                    .pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));

        // header section
        Alpine.data('header', () => ({
            init() {
                const selector = document.querySelector('ul.horizontal-menu a[href="' + window
                    .location.pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.classList.add('active');
                            });
                        }
                    }
                }
            },

        }));

        // main content
        Alpine.data('knowledge', () => ({
            items: [{
                    src: 'assets/images/knowledge/image-5.jpg',
                    title: 'Excessive sugar is harmful',
                },
                {
                    src: 'assets/images/knowledge/image-6.jpg',
                    title: 'Creative Photography',
                },
                {
                    src: 'assets/images/knowledge/image-7.jpg',
                    title: 'Plan your next trip',
                },
                {
                    src: 'assets/images/knowledge/image-8.jpg',
                    title: 'My latest Vlog',
                },
            ],
        }));

        //Carousel
        Alpine.data('carousel', () => ({
            items: ['ถอนฟัน.jpg', 'ขูดหินปูน.jpg', 'ครอบฟัน.jpg'],

            init() {
                // basic
                const swiper1 = new Swiper('#slider1', {
                    navigation: {
                        nextEl: '.swiper-button-next-ex1',
                        prevEl: '.swiper-button-prev-ex1',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
                // Autoplay
                const swiper2 = new Swiper('#slider2', {
                    navigation: {
                        nextEl: '.swiper-button-next-ex2',
                        prevEl: '.swiper-button-prev-ex2',
                    },
                    autoplay: {
                        delay: 2000,
                    },
                });
                // vertical
                setTimeout(() => {
                    const swiper3 = new Swiper('#slider3', {
                        direction: 'vertical',
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        autoplay: {
                            delay: 2000,
                        },
                    });
                });
                // Loop
                const swiper4 = new Swiper('#slider4', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        type: 'fraction',
                    },
                    navigation: {
                        nextEl: '.swiper-button-next-ex4',
                        prevEl: '.swiper-button-prev-ex4',
                    },
                });
                // Multiple Slides
                const swiper5 = new Swiper('#slider5', {
                    navigation: {
                        nextEl: '.swiper-button-next-ex5',
                        prevEl: '.swiper-button-prev-ex5',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 40,
                        },
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },
                    },
                });
            },

            // highlightjs
            codeArr: [],
            toggleCode(name) {
                if (this.codeArr.includes(name)) {
                    this.codeArr = this.codeArr.filter((d) => d != name);
                } else {
                    this.codeArr.push(name);

                    setTimeout(() => {
                        document.querySelectorAll('pre.code').forEach((el) => {
                            hljs.highlightElement(el);
                        });
                    });
                }
            },
        }));


        //contacts
        Alpine.data('contacts', () => ({
            defaultParams: {
                id: null,
                name: '',
                email: '',
                role: '',
                phone: '',
                location: '',
            },
            displayType: 'list',
            addContactModal: false,
            params: {
                id: null,
                name: '',
                email: '',
                role: '',
                phone: '',
                location: '',
            },
            filterdContactsList: [],
            searchUser: '',
            contactList: [{
                    id: 1,
                    path: 'profile-35.png',
                    name: 'Alan Green',
                    role: 'Web Developer',
                    email: 'alan@mail.com',
                    location: 'Boston, USA',
                    phone: '+1 202 555 0197',
                    posts: 25,
                    followers: '5K',
                    following: 500,
                },
                {
                    id: 2,
                    path: 'profile-35.png',
                    name: 'Linda Nelson',
                    role: 'Web Designer',
                    email: 'linda@mail.com',
                    location: 'Sydney, Australia',
                    phone: '+1 202 555 0170',
                    posts: 25,
                    followers: '21.5K',
                    following: 350,
                },
                {
                    id: 3,
                    path: 'profile-35.png',
                    name: 'Lila Perry',
                    role: 'UX/UI Designer',
                    email: 'lila@mail.com',
                    location: 'Miami, USA',
                    phone: '+1 202 555 0105',
                    posts: 20,
                    followers: '21.5K',
                    following: 350,
                },
                {
                    id: 4,
                    path: 'profile-35.png',
                    name: 'Andy King',
                    role: 'Project Lead',
                    email: 'andy@mail.com',
                    location: 'Tokyo, Japan',
                    phone: '+1 202 555 0194',
                    posts: 25,
                    followers: '21.5K',
                    following: 300,
                },
                {
                    id: 5,
                    path: 'profile-35.png',
                    name: 'Jesse Cory',
                    role: 'Web Developer',
                    email: 'jesse@mail.com',
                    location: 'Edinburgh, UK',
                    phone: '+1 202 555 0161',
                    posts: 30,
                    followers: '20K',
                    following: 350,
                },
                {
                    id: 6,
                    path: 'profile-35.png',
                    name: 'Xavier',
                    role: 'UX/UI Designer',
                    email: 'xavier@mail.com',
                    location: 'New York, USA',
                    phone: '+1 202 555 0155',
                    posts: 25,
                    followers: '21.5K',
                    following: 350,
                },
                {
                    id: 7,
                    path: 'profile-35.png',
                    name: 'Susan',
                    role: 'Project Manager',
                    email: 'susan@mail.com',
                    location: 'Miami, USA',
                    phone: '+1 202 555 0118',
                    posts: 40,
                    followers: '21.5K',
                    following: 350,
                },
                {
                    id: 8,
                    path: 'profile-35.png',
                    name: 'Raci Lopez',
                    role: 'Web Developer',
                    email: 'traci@mail.com',
                    location: 'Edinburgh, UK',
                    phone: '+1 202 555 0135',
                    posts: 25,
                    followers: '21.5K',
                    following: 350,
                },
                {
                    id: 9,
                    path: 'profile-35.png',
                    name: 'Steven Mendoza',
                    role: 'HR',
                    email: 'sokol@verizon.net',
                    location: 'Monrovia, US',
                    phone: '+1 202 555 0100',
                    posts: 40,
                    followers: '21.8K',
                    following: 300,
                },
                {
                    id: 10,
                    path: 'profile-35.png',
                    name: 'James Cantrell',
                    role: 'Web Developer',
                    email: 'sravani@comcast.net',
                    location: 'Michigan, US',
                    phone: '+1 202 555 0134',
                    posts: 100,
                    followers: '28K',
                    following: 520,
                },
                {
                    id: 11,
                    path: 'profile-35.png',
                    name: 'Reginald Brown',
                    role: 'Web Designer',
                    email: 'drhyde@gmail.com',
                    location: 'Entrimo, Spain',
                    phone: '+1 202 555 0153',
                    posts: 35,
                    followers: '25K',
                    following: 500,
                },
                {
                    id: 12,
                    path: 'profile-35.png',
                    name: 'Stacey Smith',
                    role: 'Chief technology officer',
                    email: 'maikelnai@optonline.net',
                    location: 'Lublin, Poland',
                    phone: '+1 202 555 0115',
                    posts: 21,
                    followers: '5K',
                    following: 200,
                },
            ],

            init() {
                this.searchContacts();
            },

            searchContacts() {
                this.filterdContactsList = this.contactList.filter((d) => d.name
                    .toLowerCase()
                    .includes(this.searchUser.toLowerCase()));
            },

            editUser(user) {
                this.params = this.defaultParams;
                if (user) {
                    this.params = JSON.parse(JSON.stringify(user));
                }

                this.addContactModal = true;
            },

            saveUser() {
                if (!this.params.name) {
                    this.showMessage('Name is required.', 'error');
                    return true;
                }
                if (!this.params.email) {
                    this.showMessage('Email is required.', 'error');
                    return true;
                }
                if (!this.params.phone) {
                    this.showMessage('Phone is required.', 'error');
                    return true;
                }
                if (!this.params.role) {
                    this.showMessage('Occupation is required.', 'error');
                    return true;
                }

                if (this.params.id) {
                    //update user
                    let user = this.contactList.find((d) => d.id === this.params.id);
                    user.name = this.params.name;
                    user.email = this.params.email;
                    user.role = this.params.role;
                    user.phone = this.params.phone;
                    user.location = this.params.location;
                } else {
                    //add user
                    let maxUserId = this.contactList.length ?
                        this.contactList.reduce((max, character) => (character.id >
                            max ?
                            character
                            .id : max), this.contactList[0].id) :
                        0;

                    let user = {
                        id: maxUserId + 1,
                        path: 'profile-35.png',
                        name: this.params.name,
                        email: this.params.email,
                        role: this.params.role,
                        phone: this.params.phone,
                        location: this.params.location,
                        posts: 20,
                        followers: '5K',
                        following: 500,
                    };
                    this.contactList.splice(0, 0, user);
                    this.searchContacts();
                }

                this.showMessage('User has been saved successfully.');
                this.addContactModal = false;
            },

            deleteUser(user) {
                this.contactList = this.contactList.filter((d) => d.id != user.id);
                // this.ids = this.ids.filter((d) => d != user.id);
                this.searchContacts();
                this.showMessage('User has been deleted successfully.');
            },

            setDisplayType(type) {
                this.displayType = type;
            },

            showMessage(msg = '', type = 'success') {
                const toast = window.Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000,
                });
                toast.fire({
                    icon: type,
                    title: msg,
                    padding: '10px 20px',
                });
            },
        }));
    });
</script>
