<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit a Product</h1>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    <form action="<?php echo e(route('product.update',$item->id)); ?>" method="post" enctype="multipart/form-data">
        
        <?php echo csrf_field(); ?>
        
        <?php echo method_field('PATCH'); ?>
        <div class="form-group">
            <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name" value="<?php echo e($item->product_name); ?>">
        </div>
        <div class="form-group">
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product Price" value="<?php echo e($item->product_price); ?>">
        </div>
        <div class="form-group">
            <input type="text" name="product_promotion_pricre" id="product_promotion_pricre" class="form-control" placeholder="Product Price">
        </div>
        <div class="form-group">
            <textarea type="text" name="product_description" id="product_description" class="form-control" placeholder="Product Description"><?php echo e($item->product_description); ?></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="product_image" id="product_image" class="form-control" placeholder="Product Image">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views/pages/product/edit.blade.php ENDPATH**/ ?>