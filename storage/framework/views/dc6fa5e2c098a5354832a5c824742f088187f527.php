<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo e(asset('storage/images/' . $item->product_image)); ?>" alt="Card image cap" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h1><?php echo e($item->product_name); ?></h1>

            <p><?php echo e($item->product_price); ?></p>
            <p><?php echo e($item->product_description); ?></p>

            <ul>
            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($comment->comment_content); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <form action="<?php echo e(route('comment.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <textarea name="comment_content" id="comment_content" class="form-control"></textarea>
                    <input type="hidden" name="product_id" value="<?php echo e($item->id); ?>">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\be2_w9\resources\views/pages/product/show.blade.php ENDPATH**/ ?>