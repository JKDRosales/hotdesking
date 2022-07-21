<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->make('layouts.homenavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row mt-2">
        <div class="col-lg">
            <div class="container ml-3 pl-5">
                <h1 class="text-left display-4"><b>All Bookings</b></h2>
                    <h4 class="text-left pb-4">These are all the employee's bookings</h4>
                    <div style="position: relative; height: 740px; overflow: auto; display: block; background: rgba(9, 9, 9, 0.8); border-radius: 10px;" id="carouselExampleControls" class="table-responsive" data-bs-interval="false" data-ride="carousel" data-pause="hover">
                        <table class="table table-bordered mb-0 " style="color: #FFFFFF; font-family: 'Roboto'; text-align: center;">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Location</th>
                                </tr>
                            </thead>
                            <tbody id="bookingList">
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

        <div class="col-lg mt-5 mr-4">
            <div class="container mr-5 pr-5 ml-4">
                <div id="calendar">

                </div>
            </div>
        </div>
    </div>

</body>
<?php echo $__env->make('layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


</html><?php /**PATH C:\xampp\htdocs\hotdeskingAPI\resources\views/bookings.blade.php ENDPATH**/ ?>