<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
<?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
        <?php
        $txtDropdown = 'class="nav-link"';
		$isDropdown = false;
        if(count($subcategory->subcategories))
        {
            $isDropdown = true;
            $txtDropdown = 'class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
        }
        ?>
        <a <?php echo $txtDropdown; ?> href="<?php echo e(route('category.show', $subcategory->id)); ?>"><?php echo e($subcategory->category_name); ?></a>
        <?php if($isDropdown): ?>
                <?php echo $__env->make('layouts.partials.subCategoryList',['subcategories' => $subcategory->subcategories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\wamp64\www\be2_w9_cart\resources\views/layouts/partials/subCategoryList.blade.php ENDPATH**/ ?>