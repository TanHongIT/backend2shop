<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo e(asset('assets/css/material-dashboard.css?v=2.1.1')); ?>" rel="stylesheet" />
    <!-- CSS Files scroll to top-->
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo e(asset('assets/demo/demo.css')); ?>" rel="stylesheet" />
</head>
<body class="<?php echo e($class ?? ''); ?>">
    <?php if(auth()->guard()->check()): ?>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
        <?php echo $__env->make('layouts.page_templates.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(auth()->guard()->guest()): ?>
        <?php echo $__env->make('layouts.page_templates.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    

     <!--   Core JS Files   -->
    <script src="<?php echo e(asset('asstes/js/core/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('asstes/js/core/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('asstes/js/core/bootstrap-material-design.min.js')); ?>"></script>
        <script src="<?php echo e(asset('asstes/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>
        <!-- Plugin for the momentJs  -->
        <script src="<?php echo e(asset('asstes/js/plugins/moment.min.js')); ?>"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="<?php echo e(asset('asstes/js/plugins/sweetalert2.js')); ?>"></script>
        <!-- Forms Validations Plugin -->
        <script src="<?php echo e(asset('asstes/js/plugins/jquery.validate.min.js')); ?>"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="<?php echo e(asset('asstes/js/plugins/jquery.bootstrap-wizard.js')); ?>"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="<?php echo e(asset('asstes/js/plugins/bootstrap-selectpicker.js')); ?>"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="<?php echo e(asset('asstes/js/plugins/bootstrap-datetimepicker.min.js')); ?>"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="<?php echo e(asset('asstes/js/plugins/jquery.dataTables.min.js')); ?>"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="<?php echo e(asset('asstes/js/plugins/bootstrap-tagsinput.js')); ?>"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="<?php echo e(asset('asstes/js/plugins/jasny-bootstrap.min.js')); ?>"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="<?php echo e(asset('asstes/js/plugins/fullcalendar.min.js')); ?>"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="<?php echo e(asset('asstes/js/plugins/jquery-jvectormap.js')); ?>"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="<?php echo e(asset('asstes/js/plugins/nouislider.min.js')); ?>"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="<?php echo e(asset('asstes/js/plugins/arrive.min.js')); ?>"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
        <!-- Chartist JS -->
        <script src="<?php echo e(asset('asstes/js/plugins/chartist.min.js')); ?>"></script>
        <!--  Notifications Plugin    -->
        <script src="<?php echo e(asset('asstes/js/plugins/bootstrap-notify.js')); ?>"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="<?php echo e(asset('asstes/js/material-dashboard.js?v=2.1.1" type="text/javascript')); ?>"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="<?php echo e(asset('asstes/demo/demo.js')); ?>"></script>
        <script src="<?php echo e(asset('asstes/js/settings.js')); ?>"></script>
        <!-- scroll to top -->
        <script src="<?php echo e(asset('asstes/js/scrip.js')); ?>"></script>
        <?php echo $__env->yieldPushContent('js'); ?>
</body>
</html>
<?php /**PATH C:\wamp64\www\backend2shop\resources\views/layouts/app.blade.php ENDPATH**/ ?>