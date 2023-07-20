<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee</a></li>
            </ul>

            <hr class="d-md-none text-white-50">

            
        </div>
        <div class="dropdown">
            <a class="btn btn-outline-light my-2 ms-md-auto" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-person-circle me-1"></i>
                <?php echo e(Auth::user()->name); ?>

            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?php echo e(route('profile')); ?>"> My Profile</a></li>

              <li>
                    <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <?php echo e(__('Logout')); ?>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
              </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\File Utama Javier\Kuliah\Semester 4\Framework\Modul4\Controller_view\resources\views/layouts/nav.blade.php ENDPATH**/ ?>