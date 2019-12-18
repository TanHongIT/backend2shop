<?php $__env->startSection('content'); ?>
<style>
  .muahang .btn:hover{
      background-color: #9c27b0;
      color: #fff;
  }</style>
<div class="album py-5 bg-light">
    <div class="container">

        <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
        <?php endif; ?>

        <div class="row">
            
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?php echo e(asset('storage/images/' . $item->product_image)); ?>" alt="Card image cap" onclick="getProduct('<?php echo e(route('product.productAjax',$item->id)); ?>',
                    '<?php echo e(asset('storage/images/')); ?>')">
                <div class="card-body">

                  <h6><a href="<?php echo e(route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html'); ?>"><?php echo e(mb_substr($item->product_name,0,40)); ?></a></h6>

                    <p class="card-text"><?php echo e(mb_substr($item->product_description,0, 100)); ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                    
                    <?php if($item->product_promotion_pricre==0): ?>
                        <h6 class="card-text">Giá <?php echo e($item->product_price); ?>VNĐ</h6> <br>
                        <?php else: ?>
                        <p class="card-text"> <strike> Giá <?php echo e($item->product_price); ?>VNĐ</strike></p> <br>
                        <h6 class="card-text"> Sale <?php echo e($item->product_promotion_pricre); ?> VNĐ</h6>
                        <?php endif; ?>
                        <div class="muahang" style="text-align:center">
                          <form method="POST" action="<?php echo e(route('cart.add')); ?>" class="form-inline my-2 my-lg-0" >
                              <?php echo csrf_field(); ?>
                              <input name="id" type="hidden" value="<?php echo e($item->id); ?>">
                              <button class="btn " type="submit"><i class="fa fa-cart-plus"></i> Mua ngay</button>
                          </form>
                        </div>
                    
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<br>
<br>
<br>
<!-- Modal -->
<script src="<?php echo e(asset('js/siteajax.js')); ?>"></script>

<div class="modal fade" id="productDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views/pages/category/show.blade.php ENDPATH**/ ?>