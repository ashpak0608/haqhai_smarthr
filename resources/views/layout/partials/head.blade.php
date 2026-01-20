<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/build/img/favicon.png') }}">

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/build/img/apple-touch-icon.png') }}">

@if (!Route::is(['login', 'layout-horizontal', 'layout-detached', 'layout-modern', 'layout-horizontal-overlay', 'layout-two-column', 'layout-hovered', 'layout-box', 'layout-horizontal-single', 'layout-horizontal-box', 'layout-horizontal-fullwidth', 'layout-stacked', 'layout-horizontal-sidemenu', 'layout-vertical-transparent', 'layout-without-header', 'login-2', 'login-3', 'register', 'register-2', 'register-3', 'forgot-password', 'forgot-password-2', 'forgot-password-3', 'reset-password', 'reset-password-2', 'reset-password-3', 'email-verification', 'email-verification-2', 'email-verification-3', 'lock-screen', 'error-404', 'error-500', 'coming-soon', 'under-maintenance', 'under-construction', 'success', 'success-2', 'success-3', 'two-step-verification', 'two-step-verification-2', 'two-step-verification-3', 'layout-rtl', 'layout-dark', 'job-grid-2', 'job-list-2', 'job-details']))
    <script src="{{ asset('/build/js/theme-script.js') }}"></script>
@endif

@if (Route::is(['layout-rtl']))
    <link rel="stylesheet" href="{{ asset('/build/css/bootstrap.rtl.min.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('/build/css/bootstrap.min.css') }}">
@endif

@if (Route::is(['employee-salary', 'project-details', 'gallery', 'plugins', 'search-result', 'social-feed']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/fancybox/jquery.fancybox.min.css') }}">
@endif

<link rel="stylesheet" href="{{ asset('/build/plugins/icons/feather/feather.css') }}">
<link rel="stylesheet" href="{{ asset('/build/plugins/tabler-icons/tabler-icons.css') }}">
<link rel="stylesheet" href="{{ asset('/build/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('/build/plugins/fontawesome/css/all.min.css') }}">

@if (Route::is(['icon-bootstrap']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/icons/bootstrap/bootstrap-icons.min.css') }}">
@endif

@if (Route::is(['icon-remix']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/remix/fonts/remixicon.css') }}">
@endif

@if (!Route::is(['under-maintenance', 'under-construction', 'coming-soon', 'error-404', 'error-500', 'two-step-verification-3', 'two-step-verification-2', 'two-step-verification', 'email-verification-3', 'email-verification-2', 'email-verification', 'reset-password-3', 'reset-password-2', 'reset-password', 'forgot-password-3', 'forgot-password-2', 'forgot-password', 'register-3', 'register-2', 'register', 'login-3', 'login-2', 'login', 'success', 'success-2', 'success-3', 'lock-screen']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/@simonwep/pickr/themes/nano.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/summernote/summernote-lite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@endif

@if (Route::is(['maps-leaflet']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/leaflet/leaflet.css') }}">
@endif

@if (Route::is(['maps-vector']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/jsvectormap/css/jsvectormap.min.css') }}">
@endif

@if (Route::is(['ui-scrollbar']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/scrollbar/scroll.min.css') }}">
@endif

@if (Route::is(['ui-stickynote']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/stickynote/sticky.css') }}">
@endif

@if (Route::is(['email-reply', 'email', 'notes', 'plugin', 'project-details', 'social-feed', 'task-details']))
    <link rel="stylesheet" href="{{ asset('/build/css/owl.carousel.min.css') }}">
@endif

@if (Route::is(['add-invoices', 'edit-invoices', 'file-manager', 'group-video-call', 'invoice-details', 'invoices', 'manage-jobs', 'maps-vector', 'payslip', 'promotion', 'resignation', 'termination']))
    <link rel="stylesheet" href="{{ asset('/build/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/owlcarousel/owl.carousel.min.css') }}">
@endif

@if (Route::is(['ui-drag-drop', 'form-pickers', 'icon-bootstrap', 'icon-remix', 'icon-tabler', 'maps-leaflet', 'maps-vector', 'plugin', 'ui-clipboard', 'ui-sortable', 'ui-swiperjs']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/dragula/css/dragula.min.css') }}">
@endif

@if (Route::is(['ui-swiperjs', 'maps-google', 'ui-sortable']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/swiper/swiper-bundle.min.css') }}">
@endif

@if (Route::is(['chart-c3', 'plugin']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/c3-chart/c3.min.css') }}">
@endif

@if (Route::is(['job-grid-2', 'job-list-2', 'plugin', 'ui-rangeslider', 'ui-rating']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
@endif

@if (Route::is(['ui-lightbox']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/lightbox/glightbox.min.css') }}">
@endif

@if (Route::is(['icon-ionic', 'plugin']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/icons/ionic/ionicons.css') }}">
@endif

@if (Route::is(['chart-morris']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/morris/morris.css') }}">
@endif

@if (Route::is(['icon-material']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/material/materialdesignicons.css') }}">
@endif

@if (Route::is(['icon-pe7']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/icons/pe7/pe-icon-7.css') }}">
@endif

@if (Route::is(['icon-simpleline', 'plugin']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/simpleline/simple-line-icons.css') }}">
@endif

@if (Route::is(['icon-themify']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/icons/themify/themify.css') }}">
@endif

@if (Route::is(['icon-typicon']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/icons/typicons/typicons.css') }}">
@endif  

@if (Route::is(['icon-flag']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/icons/flags/flags.css') }}">
@endif

@if (Route::is(['icon-weather']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/icons/weather/weathericons.css') }}">
@endif

@if (Route::is(['form-pickers']))
    <link rel="stylesheet" href="{{ asset('/build/plugins/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/jquery-timepicker/jquery-timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/build/plugins/pickr/pickr-themes.css') }}">
@endif 

<link rel="stylesheet" href="{{ asset('/build/css/style.css') }}">