<script src="{{ asset('assets/js/alpine-collaspe.min.js') }}"></script>
<script src="{{ asset('assets/js/alpine-persist.min.js') }}"></script>
<script defer src="{{ asset('assets/js/alpine-ui.min.js') }}"></script>
<script defer src="{{ asset('assets/js/alpine-focus.min.js') }}"></script>
<script defer src="{{ asset('assets/js/alpine.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
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
    new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
        images: {
            baseImage: 'assets/images/file-preview.svg',
            backgroundImage: '',
        },
    });
</script>



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

            notifications: [{
                    id: 1,
                    profile: 'user-profile.jpeg',
                    message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                    time: '45 min ago',
                },
                {
                    id: 2,
                    profile: 'profile-34.jpeg',
                    message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                    time: '9h Ago',
                },
                {
                    id: 3,
                    profile: 'profile-16.jpeg',
                    message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                    time: '9h Ago',
                },
            ],

            messages: [{
                    id: 1,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                    title: 'Congratulations!',
                    message: 'Your OS has been updated.',
                    time: '1hr',
                },
                {
                    id: 2,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                    title: 'Did you know?',
                    message: 'You can switch between artboards.',
                    time: '2hr',
                },
                {
                    id: 3,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                    title: 'Something went wrong!',
                    message: 'Send Reposrt',
                    time: '2days',
                },
                {
                    id: 4,
                    image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                    title: 'Warning',
                    message: 'Your password strength is low.',
                    time: '5days',
                },
            ],

            languages: [{
                    id: 1,
                    key: 'Chinese',
                    value: 'zh',
                },
                {
                    id: 2,
                    key: 'Danish',
                    value: 'da',
                },
                {
                    id: 3,
                    key: 'English',
                    value: 'en',
                },
                {
                    id: 4,
                    key: 'French',
                    value: 'fr',
                },
                {
                    id: 5,
                    key: 'German',
                    value: 'de',
                },
                {
                    id: 6,
                    key: 'Greek',
                    value: 'el',
                },
                {
                    id: 7,
                    key: 'Hungarian',
                    value: 'hu',
                },
                {
                    id: 8,
                    key: 'Italian',
                    value: 'it',
                },
                {
                    id: 9,
                    key: 'Japanese',
                    value: 'ja',
                },
                {
                    id: 10,
                    key: 'Polish',
                    value: 'pl',
                },
                {
                    id: 11,
                    key: 'Portuguese',
                    value: 'pt',
                },
                {
                    id: 12,
                    key: 'Russian',
                    value: 'ru',
                },
                {
                    id: 13,
                    key: 'Spanish',
                    value: 'es',
                },
                {
                    id: 14,
                    key: 'Swedish',
                    value: 'sv',
                },
                {
                    id: 15,
                    key: 'Turkish',
                    value: 'tr',
                },
                {
                    id: 16,
                    key: 'Arabic',
                    value: 'ae',
                },
            ],

            removeNotification(value) {
                this.notifications = this.notifications.filter((d) => d.id !== value);
            },

            removeMessage(value) {
                this.messages = this.messages.filter((d) => d.id !== value);
            },
        }));

        // Alpine.data('basic', () => ({
        //     datatable: null,
        //     init() {
        //         this.datatable = new simpleDatatables.DataTable('#myTable', {
        //             data: {
        //                 headings: ['ID', 'ชื่อบริการ', 'Last Name', 'Email', 'Phone'],
        //                 data: [
        //                     [1, 'พรนิภา', 'Jensen', 'carolinejensen@zidant.com',
        //                         '+1 (821) 447-3782'
        //                     ],
        //                     [2, 'Celeste', 'Grant', 'celestegrant@polarax.com',
        //                         '+1 (838) 515-3408'
        //                     ],
        //                     [3, 'Tillman', 'Forbes', 'tillmanforbes@manglo.com',
        //                         '+1 (969) 496-2892'
        //                     ],
        //                     [4, 'Daisy', 'Whitley', 'daisywhitley@applideck.com',
        //                         '+1 (861) 564-2877'
        //                     ],
        //                     [5, 'Weber', 'Bowman', 'weberbowman@volax.com',
        //                         '+1 (962) 466-3483'
        //                     ],
        //                     [6, 'Buckley', 'Townsend', 'buckleytownsend@orbaxter.com',
        //                         '+1 (884) 595-2643'
        //                     ],
        //                     [7, 'Latoya', 'Bradshaw', 'latoyabradshaw@opportech.com',
        //                         '+1 (906) 474-3155'
        //                     ],
        //                     [8, 'Kate', 'Lindsay', 'katelindsay@gorganic.com',
        //                         '+1 (930) 546-2952'
        //                     ],
        //                     [9, 'Marva', 'Sandoval', 'marvasandoval@avit.com',
        //                         '+1 (927) 566-3600'
        //                     ],
        //                     [10, 'Decker', 'Russell', 'deckerrussell@quilch.com',
        //                         '+1 (846) 535-3283'
        //                     ],
        //                     [11, 'Odom', 'Mills', 'odommills@memora.com',
        //                         '+1 (995) 525-3402'
        //                     ],
        //                     [12, 'Sellers', 'Walters', 'sellerswalters@zorromop.com',
        //                         '+1 (830) 430-3157'
        //                     ],
        //                     [13, 'Wendi', 'Powers', 'wendipowers@orboid.com',
        //                         '+1 (863) 457-2088'
        //                     ],
        //                     [14, 'Sophie', 'Horn', 'sophiehorn@snorus.com',
        //                         '+1 (885) 418-3948'
        //                     ],
        //                     [15, 'Levine', 'Rodriquez', 'levinerodriquez@xth.com',
        //                         '+1 (999) 565-3239'
        //                     ],
        //                     [16, 'Little', 'Hatfield', 'littlehatfield@comtract.com',
        //                         '+1 (812) 488-3011'
        //                     ],
        //                     [17, 'Larson', 'Kelly', 'larsonkelly@zidant.com',
        //                         '+1 (892) 484-2162'
        //                     ],
        //                     [18, 'Kendra', 'Molina', 'kendramolina@sureplex.com',
        //                         '+1 (920) 528-3330'
        //                     ],
        //                     [19, 'Ebony', 'Livingston', 'ebonylivingston@danja.com',
        //                         '+1 (970) 591-3039'
        //                     ],
        //                     [20, 'Kaufman', 'Rush', 'kaufmanrush@euron.com',
        //                         '+1 (924) 463-2934'
        //                     ],
        //                     [21, 'Frank', 'Hays', 'frankhays@illumity.com',
        //                         '+1 (930) 577-2670'
        //                     ],
        //                     [22, 'Carmella', 'Mccarty', 'carmellamccarty@sybixtex.com',
        //                         '+1 (876) 456-3218'
        //                     ],
        //                     [23, 'Massey', 'Owen', 'masseyowen@zedalis.com',
        //                         '+1 (917) 567-3786'
        //                     ],
        //                     [24, 'Lottie', 'Lowery', 'lottielowery@dyno.com',
        //                         '+1 (912) 539-3498'
        //                     ],
        //                     [25, 'Addie', 'Luna', 'addieluna@multiflex.com',
        //                         '+1 (962) 537-2981'
        //                     ],
        //                 ],
        //             },
        //             sortable: false,
        //             searchable: false,
        //             perPage: 10,
        //             perPageSelect: [10, 20, 30, 50, 100],
        //             firstLast: true,
        //             firstText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
        //             lastText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
        //             prevText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
        //             nextText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
        //             labels: {
        //                 perPage: '{select}',
        //             },
        //             layout: {
        //                 top: '{search}',
        //                 bottom: '{info}{select}{pager}',
        //             },
        //         });
        //     },
        // }));


    });
</script>

<script>
    document.addEventListener('alpine:init', () => {
        // main section

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
                this.filterdContactsList = this.contactList.filter((d) => d.name.toLowerCase()
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
                        this.contactList.reduce((max, character) => (character.id > max ? character
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