<?php 
    use App\Product;
    $products = Product::paginate(9);
?>




<?php $__env->startSection('content'); ?>

<div class="album py-5 bg-light">
    <div class="container">
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md"><h1>Product Manager</h1></div>
        <div class="col-md"></div>
        
    </div>
      <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary">Tạo Sản Phẩm Mới</a> <br><br>
        <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
        <?php endif; ?>

        <div class="row">
            
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <p><a href="<?php echo e(route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html'); ?>"><?php echo e($item->product_name); ?></a></p>

                    <p class="card-text"><?php echo e(mb_substr($item->product_description,0, 100)); ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo e(route('product.edit', $item->id)); ?>" class="btn btn-primary">Edit</a>
                    <form action="<?php echo e(route('product.destroy', $item->id)); ?>" method="post" onsubmit="return confirm('Delete?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php echo e($products->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views/pages/admin/dashboard.blade.php ENDPATH**/ ?>