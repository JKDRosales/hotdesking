<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body style="background-color: #F4EFEB;">
    <div id="app">
        <?php echo $__env->make('layouts.simplenav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>
            <div class="container">
                <div class="mask justify-content-center mb-5 py-5">
                    <div class="container">
                        <h1 class="col text-center">Help Center</h1>
                        <div class="row d-flex justify-content-center">
                            <div class="mt-3 mb-5"> <br>
                                <p class="opacity-50 text-center"> Get started in using our website through our help center. If you need <br> any help, feel free to contact our support team.</p>
                            </div>
                            <div class="card-deck pt-5">
                                <div class="card mb-4" style="width: 18rem;">
                                    <div class="card-body shadow bg-white rounded">
                                        <img src="<?php echo e(asset('images/user-guide.png')); ?>" class="rounded-circle mx-auto d-block mt-n5 shadow p-1 mb-3 bg-white rounded" alt="...">
                                        <h5 class="card-title text-center mt-3">User Guide</h5>
                                        <p class="card-text text-center">This page provide guide for the user</p>
                                        <div class="text-center">
                                            <a href="<?php echo e(url('userguide')); ?>" class="btn btn-warning col-md-6">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4" style="width: 18rem;">
                                    <div class="card-body shadow bg-white rounded">
                                        <img src="<?php echo e(asset('images/faqs.png')); ?>" class="rounded-circle mx-auto d-block mt-n5 shadow p-1 mb-3 bg-white rounded" alt="...">
                                        <h5 class="card-title text-center mt-3">FAQs</h5>
                                        <p class="card-text text-center">This page provide answer for your questions</p>
                                        <div class="text-center">
                                            <a href="<?php echo e(url('faqs')); ?>" class="btn btn-warning col-md-6">View</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4" style="width: 18rem;">
                                    <div class="card-body shadow bg-white rounded">
                                        <img src="<?php echo e(asset('images/privacy.png')); ?>" class="rounded-circle mx-auto d-block mt-n5 shadow p-1 mb-3 bg-white rounded" alt="...">
                                        <h5 class="card-title text-center mt-3">Privacy Disclaimer</h5>
                                        <p class="card-text text-center">This page provide privacy statement for the user.</p>
                                        <div class="text-center">
                                            <a href="<?php echo e(url('privacy')); ?>" class="btn btn-warning col-md-6">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </main>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</html><?php /**PATH C:\xampp\htdocs\hotdeskingAPI\resources\views/support.blade.php ENDPATH**/ ?>