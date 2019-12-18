<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('assets/img/sidebar-1.jpg')); ?>">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <?php echo e($activePage = ""); ?>

  <div class="logo">
    <a href="<?php echo e(route('admin')); ?>" class="simple-text logo-normal">
      <?php echo e(__('T2T Shop')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item<?php echo e($activePage == 'dashboard' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('admin')); ?>">
          <i class="material-icons">dashboard</i>
            <p><?php echo e(__('Dashboard')); ?></p>
        </a>
      </li>
      <li class="nav-item <?php echo e(($activePage == 'profile' || $activePage == 'user-management') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="<?php echo e(asset('assets/img/laravel.svg')); ?>"></i>
          <p><?php echo e(__('Cuustomer')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(url('/')); ?>/users1">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"><?php echo e(__('Your Profile')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(url('/')); ?>/changepassword">
                <span class="sidebar-mini"> CP </span>
                <span class="sidebar-normal"><?php echo e(__('Change PassWord')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item <?php echo e(($activePage == 'profile' || $activePage == 'user-management') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="<?php echo e(asset('assets/img/laravel.svg')); ?>"></i>
          <p><?php echo e(__('User Management')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('users.create')); ?>">
                <span class="sidebar-mini"> MP </span>
                <span class="sidebar-normal"><?php echo e(__('Create New User')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('users')); ?>">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> <?php echo e(__('User Management')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item <?php echo e(($activePage == 'product' || $activePage == 'product-management') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="<?php echo e(asset('assets/img/laravel.svg')); ?>"></i>
          <p><?php echo e(__('Products')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'product' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('product.create')); ?>">
                <span class="sidebar-mini"> CN </span>
                <span class="sidebar-normal"><?php echo e(__('Create New')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'product' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('admin')); ?>">
                <span class="sidebar-mini"> PM </span>
                <span class="sidebar-normal"> <?php echo e(__('Product Management')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
    </ul>
  </div>
</div><?php /**PATH C:\wamp64\www\backend2shop\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>