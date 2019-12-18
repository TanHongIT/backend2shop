<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Add a product</h1>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name">
        </div>
        <div class="form-group">
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product Price">
        </div>
        <div class="form-group">
            <textarea type="text" name="product_description" id="product_description" class="form-control" placeholder="Product Description"></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="product_image" id="product_image" class="form-control" placeholder="Product Image">
        </div>
        <div class="form-group">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="category_id[]" id="category_id" value="<?php echo e($category->id); ?>">
                <?php echo e($category->category_name); ?>

              </label>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\be2_w8\resources\views/pages/product/create.blade.php ENDPATH**/ ?>