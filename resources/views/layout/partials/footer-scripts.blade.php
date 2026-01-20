<script src="{{ asset('/build/js/jquery-3.7.1.min.js') }}"></script>

<script src="{{ asset('/build/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('/build/js/feather.min.js') }}"></script>

@if (!Route::is(['under-maintenance', 'under-construction', 'coming-soon', 'error-404', 'error-500', 'two-step-verification-3', 'two-step-verification-2', 'two-step-verification', 'email-verification-3', 'email-verification-2', 'email-verification', 'reset-password-3', 'reset-password-2', 'reset-password', 'forgot-password-3', 'forgot-password-2', 'forgot-password', 'register-3', 'register-2', 'register', 'login-3', 'login-2', 'login', 'success', 'success-2', 'success-3', 'lock-screen']))
    <script src="{{ asset('/build/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('/build/plugins/summernote/summernote-lite.min.js') }}"></script>    

    <script src="{{ asset('/build/js/moment.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/daterangepicker/daterangepicker.js') }}"></script>    
@endif

@if (Route::is(['add-invoices', 'edit-invoices', 'file-manager', 'group-video-call', 'invoice-details', 'invoices', 'manage-jobs', 'maps-leaflet', 'maps-vector', 'payslip', 'promotion', 'resignation', 'termination']))
    <script src="{{ asset('/build/js/plyr-js.js') }}"></script>
    <script src="{{ asset('/build/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
@endif    

@if (!Route::is(['under-maintenance', 'under-construction', 'coming-soon', 'error-404', 'error-500', 'two-step-verification-3', 'two-step-verification-2', 'two-step-verification', 'email-verification-3', 'email-verification-2', 'email-verification', 'reset-password-3', 'reset-password-2', 'reset-password', 'forgot-password-3', 'forgot-password-2', 'forgot-password', 'register-3', 'register-2', 'register', 'login-3', 'login-2', 'login', 'success', 'success-2', 'success-3', 'lock-screen']))
    <script src="{{ asset('/build/plugins/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <script src="{{ asset('/build/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/build/js/dataTables.bootstrap5.min.js') }}"></script>  
  
    <script src="{{ asset('/build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
@endif

@if (Route::is(['job-grid-2', 'job-list-2', 'plugin', 'ui-rangeslider', 'ui-rating']))
    <script src="{{ asset('/build/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
@endif

@if (Route::is(['calendar', 'incoming-call', 'outgoing-call', 'video-call', 'voice-call']))
    <script src="{{ asset('/build/plugins/fullcalendar/index.global.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/fullcalendar/calendar-data.js') }}"></script>
@endif

@if (!Route::is(['under-maintenance', 'under-construction', 'coming-soon', 'error-404', 'error-500', 'two-step-verification-3', 'two-step-verification-2', 'two-step-verification', 'email-verification-3', 'email-verification-2', 'email-verification', 'reset-password-3', 'reset-password-2', 'reset-password', 'forgot-password-3', 'forgot-password-2', 'forgot-password', 'register-3', 'register-2', 'register', 'login-3', 'login-2', 'login', 'success', 'success-2', 'success-3', 'lock-screen']))        
    <script src="{{ asset('/build/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('/build/plugins/select2/js/select2.min.js') }}"></script>
@endif

@if (Route::is(['calendar', 'file-manager', 'incoming-call', 'outgoing-call', 'plugin', 'video-call']))
    <script src="{{ asset('/build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/theia-sticky-sidebar/ResizeSensor.min.js') }}"></script>
@endif

@if (Route::is(['email-reply', 'email', 'notes', 'plugin', 'project-details', 'social-feed', 'task-details']))
    <script src="{{ asset('/build/js/owl.carousel.min.js') }}"></script>
@endif

@if (Route::is(['ui-clipboard']))
    <script src="{{ asset('/build/plugins/clipboard/clipboard.min.js') }}"></script>
@endif

@if (Route::is(['maps-vector']))
    <script src="{{ asset('/build/plugins/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('/build/js/us-merc-en.js') }}"></script>
    <script src="{{ asset('/build/js/russia.js') }}"></script>
    <script src="{{ asset('/build/js/spain.js') }}"></script>
    <script src="{{ asset('/build/js/canada.js') }}"></script>
    <script src="{{ asset('/build/js/jsvectormap.js') }}"></script>
    <script src="{{ asset('/build/plugins/@simonwep/pickr/pickr.min.js') }}"></script>
@endif

@if (Route::is(['maps-leaflet']))
    <script src="{{ asset('/build/plugins/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('/build/js/leaflet.js') }}"></script>
@endif

@if (Route::is(['ui-drag-drop']))
    <script src="{{ asset('/build/plugins/dragula/js/dragula.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/dragula/js/drag-drop.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/dragula/js/draggable-cards.js') }}"></script>
@endif

@if (Route::is(['ui-sweetalerts', 'ui-ribbon']))
    <script src="{{ asset('/build/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/sweetalert/sweetalerts.min.js') }}"></script>
@endif

@if (Route::is(['ui-stickynote', 'kanban-view', 'task-board', 'deals-grid', 'leads-grid', 'candidates-kanban']))
    <script src="{{ asset('/build/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/build/js/jquery.ui.touch-punch.min.js') }}"></script>    
@endif

@if (Route::is(['plugin', 'ui-stickynote']))
    <script src="{{ asset('/build/plugins/stickynote/sticky.js') }}"></script>
@endif

@if (Route::is(['chart-apex', 'index', 'employee-dashboard', 'deals-dashboard', 'leads-dashboard', 'file-manager', 'dashboard', 'companies', 'packages', 'layout-horizontal', 'layout-detached', 'layout-modern', 'layout-horizontal-overlay', 'layout-two-column', 'layout-hovered', 'layout-box', 'layout-horizontal-single', 'layout-horizontal-box', 'layout-horizontal-fullwidth', 'layout-horizontal-sidemenu', 'layout-vertical-transparent', 'layout-without-header', 'layout-rtl', 'layout-stacked', 'layout-dark', 'analytics', 'expenses-report', 'invoice-report', 'payment-report', 'project-report', 'task-report', 'user-report', 'employee-report', 'payslip-report', 'attendance-report', 'leave-report', 'daily-report']))
    <script src="{{ asset('/build/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/apexchart/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-c3']))
    <script src="{{ asset('/build/plugins/c3-chart/d3.v5.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/c3-chart/c3.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/c3-chart/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-js', 'index', 'deals-dashboard', 'dashboard', 'companies', 'layout-horizontal', 'layout-detached', 'layout-modern', 'layout-horizontal-overlay', 'layout-two-column', 'layout-hovered', 'layout-box', 'layout-horizontal-single', 'layout-horizontal-box', 'layout-horizontal-fullwidth', 'layout-horizontal-sidemenu', 'layout-vertical-transparent', 'layout-without-header', 'layout-rtl', 'layout-stacked', 'layout-dark', 'analytics']))
    <script src="{{ asset('/build/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/chartjs/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-morris']))
    <script src="{{ asset('/build/plugins/morris/raphael-min.js') }}"></script>
    <script src="{{ asset('/build/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/morris/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-peity', 'deals-dashboard', 'leads-dashboard', 'dashboard', 'companies', 'subscription', 'tickets-grid', 'tickets', 'task-report']))
    <script src="{{ asset('/build/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/peity/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-flot']))
    <script src="{{ asset('/build/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('/build/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('/build/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/build/plugins/flot/chart-data.js') }}"></script>
@endif

@if (Route::is(['ui-rating']))
    <script src="{{ asset('/build/plugins/rater-js/index.js') }}"></script>
    <script src="{{ asset('/build/js/ratings.js') }}"></script>
@endif

@if (Route::is(['ui-toasts']))
    <script src="{{ asset('/build/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/toastr/toastr.js') }}"></script>
@endif

@if (Route::is(['ui-counter']))
    <script src="{{ asset('/build/plugins/countup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/countup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/countup/jquery.missofis-countdown.js') }}"></script>
    <script src="{{ asset('/build/js/counter.js') }}"></script>
@endif

@if (Route::is(['ui-lightbox']))
    <script src="{{ asset('/build/plugins/lightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/lightbox/lightbox.js') }}"></script>
@endif

@if (Route::is(['ui-swiperjs']))
    <script src="{{ asset('/build/plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/@simonwep/pickr/pickr.min.js') }}"></script>
    <script src="{{ asset('/build/js/swiper.js') }}"></script>
@endif

@if (Route::is(['form-wizard']))
    <script src="{{ asset('/build/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('/build/plugins/twitter-bootstrap-wizard/prettify.js') }}"></script>
    <script src="{{ asset('/build/plugins/twitter-bootstrap-wizard/form-wizard.js') }}"></script>
@endif

@if (Route::is(['form-mask']))
    <script src="{{ asset('/build/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('/build/js/mask.js') }}"></script>
@endif

@if (!Route::is(['under-maintenance', 'under-construction', 'coming-soon', 'error-404', 'error-500', 'two-step-verification-3', 'two-step-verification-2', 'two-step-verification', 'email-verification-3', 'email-verification-2', 'email-verification', 'reset-password-3', 'reset-password-2', 'reset-password', 'forgot-password-3', 'forgot-password-2', 'forgot-password', 'register-3', 'register-2', 'register', 'login-3', 'login-2', 'login', 'success', 'success-2', 'success-3', 'lock-screen']))
    <script src="{{ asset('/build/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('/build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
@endif

@if (Route::is(['reset-password', 'reset-password-2', 'reset-password-3']))
    <script src="{{ asset('/build/js/validation.js') }}"></script>
@endif

@if (Route::is(['email-verification', 'email-verification-2', 'email-verification-3', 'two-step-verification', 'two-step-verification-2', 'two-step-verification-3']))
    <script src="{{ asset('/build/js/otp.js') }}"></script>
@endif

@if (Route::is(['form-fileupload']))
    <script src="{{ asset('/build/plugins/fileupload/fileupload.min.js') }}"></script>
    <script src="{{ asset('/build/js/file-upload.js') }}"></script>
@endif

@if (Route::is(['employee-salary']))
    <script src="{{ asset('/build/js/employee-salary.js') }}"></script>
@endif

@if (Route::is(['employee-salary', 'project-details', 'gallery', 'plugins', 'search-result', 'social-feed']))
    <script src="{{ asset('/build/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
@endif

@if (Route::is(['form-pickers']))
    <script src="{{ asset('/build/plugins/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('/build/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/build/plugins/jquery-timepicker/jquery-timepicker.js') }}"></script>
    <script src="{{ asset('/build/plugins/pickr/pickr.js') }}"></script>
    <script src="{{ asset('/build/js/forms-pickers.js') }}"></script>
@endif

@if (Route::is(['coming-soon']))
    <script src="{{ asset('/build/js/coming-soon.js') }}"></script>
@endif

@if (Route::is(['email-reply', 'email', 'social-feed']))
    <script src="{{ asset('/build/js/email.js') }}"></script>
@endif

@if (Route::is(['candidates-kanban', 'kanban-view', 'delas-grid', 'leads-grid', 'task-board']))
    <script src="{{ asset('/build/js/kanban.js') }}"></script>
@endif

@if (Route::is(['add-invoices', 'edit-invoices']))
    <script src="{{ asset('/build/js/invoice.js') }}"></script>
@endif

@if (Route::is(['project-details']))
    <script src="{{ asset('/build/js/projects.js') }}"></script>
@endif

@if (Route::is(['leave-settings']))
    <script src="{{ asset('/build/js/multiselect.min.js') }}"></script>
@endif

@if (Route::is(['ui-popovers', 'ui-tooltips']))
    <script src="{{ asset('/build/js/popover.js') }}"></script>
@endif

@if (Route::is(['company-details', 'contact-details', 'delas-details', 'leads-details']))
    <script src="{{ asset('/build/js/add-comments.js') }}"></script>
@endif

@if (Route::is(['file-manager', 'project-details', 'task-details']))
    <script src="{{ asset('/build/js/file-manager.js') }}"></script>
@endif

@if (Route::is(['client-details', 'employee-dashboard', 'index', 'layout-box', 'layout-dark', 'layout-detached', 'layout-horizontal-box', 'layout-horizontal-fullwidth', 'layout-horizontal-overlay', 'layout-horizontal-single', 'layout-horizontal-sidemenu', 'layout-horizontal', 'layout-modern', 'layout-two-column', 'layout-hovered', 'layout-vertical-transparent', 'layout-without-header', 'layout-rtl', 'layout-stacked', 'project-details', 'task-details', 'tasks', 'todo-list', 'todo']))
    <script src="{{ asset('/build/js/todo.js') }}"></script>
@endif

@if (!Route::is(['under-maintenance', 'under-construction', 'coming-soon', 'error-404', 'error-500', 'two-step-verification-3', 'two-step-verification-2', 'two-step-verification', 'email-verification-3', 'email-verification-2', 'email-verification', 'reset-password-3', 'reset-password-2', 'reset-password', 'forgot-password-3', 'forgot-password-2', 'forgot-password', 'register-3', 'register-2', 'register', 'login-3', 'login-2', 'login', 'success', 'success-2', 'success-3', 'lock-screen']))
    <script src="{{ asset('/build/js/theme-colorpicker.js') }}"></script>
@endif

<script src="{{ asset('/build/js/script.js') }}"></script>