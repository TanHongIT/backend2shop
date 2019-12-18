<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="<?php echo e(route('user.store')); ?>" autocomplete="off" class="form-horizontal">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?php echo e(__('Add User')); ?></h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="<?php echo e(route('user.index')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Back to list')); ?></a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Name')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" id="input-name" type="text" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name')); ?>" required="true" aria-required="true"/>
                      <?php if($errors->has('name')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('name')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label"><?php echo e(__('Email')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" id="input-email" type="email" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('email')); ?>" required />
                      <?php if($errors->has('email')): ?>
                        <span id="email-error" class="error text-danger" for="input-email"><?php echo e($errors->first('email')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password"><?php echo e(__(' Password')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                      <input class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" input type="password" name="password" id="input-password" placeholder="<?php echo e(__('Password')); ?>" value="" required />
                      <?php if($errors->has('password')): ?>
                        <span id="name-error" class="error text-danger" for="input-name"><?php echo e($errors->first('password')); ?></span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation"><?php echo e(__('Confirm Password')); ?></label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="<?php echo e(__('Confirm Password')); ?>" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary"><?php echo e(__('Add User')); ?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views/users/create.blade.php ENDPATH**/ ?>