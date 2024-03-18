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

        $('.dt-button').removeClass('dt-button').addClass('btn btn-primary btn-sm m-1');
    });
    $(document).ready(function(e) {

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

        $('.dt-button').removeClass('dt-button').addClass('btn btn-primary btn-sm m-1');
    });
    $(document).ready(function(e) {

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
    $(document).ready(function(e) {

        $('#example4').DataTable({
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
    $(document).ready(function(e) {

        $('#example5').DataTable({
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