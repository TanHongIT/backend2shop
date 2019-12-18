<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
    <h1>Add a Product</h1> <br>
    <br>
    
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
        <div class="col-md">
        <div class="form-group">
            Name: <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Product Name">
        </div></div>
        <div class="col-md-6"><div class="form-group">
            Price: <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Product Price">
        </div></div>
        <div class="col-md-6"><div class="form-group">
            Promotion: <input type="text" name="product_promotion_pricre" id="product_promotion_pricre" class="form-control" placeholder="Product Promotion Price">
        </div></div>
        <div class="form-group">
            Description: <textarea type="text" name="product_description" id="product_description" class="form-control" placeholder="Product Description"></textarea>
            <script> CKEDITOR.replace( 'product_description' );</script>
        </div>
        <div class="form-group">
            Select Picture: <input type="file" name="product_image" id="product_image" class="form-control" placeholder="Product Image">
        </div>
        <div class="checkbox">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                    <div class="col-md-2">                     
                    <label>
                        <input type="checkbox" name="category_id[]" id="category_id" value="<?php echo e($category->id); ?>">
                            <?php echo e($category->category_name); ?>

                    </label>
                </div>  
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
            

        <br>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" style="text-align:center">Add Product</button>
        <br>
        <br>
        <br>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views/pages/product/create.blade.php ENDPATH**/ ?>