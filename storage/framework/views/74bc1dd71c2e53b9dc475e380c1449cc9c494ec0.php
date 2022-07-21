<nav class="navbar navbar-expand-sm sticky-top navbar-dark" style="background-color: #27231E;">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <img src="<?php echo e(asset('images/hot-desk-icon.png')); ?>" width="30" height="30" alt="">
        Hot Desk
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-4">
                <a class="nav-link" href="<?php echo e(url('dashboard')); ?>">Dashboard</a>
            </li>
            <li class="nav-item dropdown mr-4">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Book a desk
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo e(url('booking')); ?>">Reservation</a>
                    <a class="dropdown-item" href="<?php echo e(url('bookings')); ?>">All Bookings</a>
                </div>
            </li>
            <li class="nav-item mr-4">
                <a class="nav-link" href="<?php echo e(url('support')); ?>">Get help</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo e(asset('images/avatar.png')); ?>" class="rounded-circle" width="25" height="25" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right col-md" aria-labelledby="navbarDropdownMenuLink">
                    <div class="container pt-2">
                        <div class="col mb-3 mx-auto text-center justify-content-center">
                            <img src="<?php echo e(asset('images/default-avatar.png')); ?>" alt="..." class="rounded-circle mb-2 border border-secondary" width="100" height="100">
                            <p class="text-center mt-2 mb-1">
                                <span class="pr-1" id="dashboardName"></span>
                            </p>
                            <span class="text-center pt-1" id="dashboardEmail"></span>
                        </div>
                    </div>

                    <button id="logout" type="button" class="btn btn-danger btn-block">Logout</button>
                </div>
            </li>
        </ul>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\hotdeskingAPI\resources\views/layouts/homenavbar.blade.php ENDPATH**/ ?>