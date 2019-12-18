<?php $__env->startSection('content'); ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title "><?php echo e(__('Users')); ?></h4>
                <p class="card-category"> <?php echo e(__('Here you can manage users')); ?></p>
              </div>
              <div class="card-body">
                <?php if(session('status')): ?>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span><?php echo e(session('status')); ?></span>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
                <div class="row">
                  <div class="col-12 text-right">
                    <a href="<?php echo e(route('user.create')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Add user')); ?></a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          <?php echo e(__('Name')); ?>

                      </th>
                      <th>
                        <?php echo e(__('Email')); ?>

                      </th>
                      <th>
                        <?php echo e(__('Creation date')); ?>

                      </th>
                      <th class="text-right">
                        <?php echo e(__('Actions')); ?>

                      </th>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <?php echo e($user->name); ?>

                          </td>
                          <td>
                            <?php echo e($user->email); ?>

                          </td>
                          <td>
                            <?php echo e($user->created_at->format('Y-m-d')); ?>

                          </td>
                          <td class="td-actions text-right">
                            <?php if($user->id != auth()->id()): ?>
                              <form action="<?php echo e(route('user.destroy', $user)); ?>" method="post">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('delete'); ?>
                              
                                  <a rel="tooltip" class="btn btn-success btn-link" href="<?php echo e(route('user.edit', $user)); ?>" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('<?php echo e(__("Are you sure you want to delete this user?")); ?>') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
                                      <div class="ripple-container"></div>
                                  </button>
                              </form>
                            
                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views/users/index.blade.php ENDPATH**/ ?>