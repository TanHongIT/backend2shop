<?php $__env->startSection('content'); ?>
<style>
    .muahang .btn:hover{
        background-color: #9c27b0;
        color: #fff;
    }</style>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Product</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="<?php echo e(url('/')); ?>">Home</a> / <span>Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo e(asset('storage/images/' . $item->product_image)); ?>" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <h4><b><?php echo e($item->product_name); ?></b></h4>
                            <p class="single-item-price">
                                <?php if($item->product_promotion_pricre==0): ?>
                        <h6 class="card-text">Giá <?php echo e($item->product_price); ?>VNĐ</h6> <br>
                        <?php else: ?>
                        <p class="card-text"> <strike> Giá <?php echo e($item->product_price); ?>VNĐ</strike></p> <br>
                        <h6 class="card-text"> Sale <?php echo e($item->product_promotion_pricre); ?> VNĐ</h6>
                        <?php endif; ?>
            
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p><?php echo e($item->product_description); ?></p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-options">
                            <div class="muahang" style="text-align:center">
                                <form method="POST" action="<?php echo e(route('cart.add')); ?>" class="form-inline my-2 my-lg-0" >
                                    <?php echo csrf_field(); ?>
                                    <input name="id" type="hidden" value="<?php echo e($item->id); ?>">
                                    <button class="btn " type="submit"><i class="fa fa-cart-plus"></i> Mua ngay</button>
                                </form>
                              </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="comment">
                    <h3>Để lại comment</h3>
                    <form action="<?php echo e(route('comment.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <textarea name="comment_content" id="comment_content" class="form-control"></textarea>
                            <input type="hidden" name="product_id" value="<?php echo e($item->id); ?>">
                            <br>
                            <div class="muahang">
                            <button type="submit" class="btn">Gửi comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        <li><a href="#tab-reviews">Comment</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <?php echo e($item->product_description); ?>

                    </div>
                    <div class="panel" id="tab-reviews">
                 
                     <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($comment->id); ?>. <?php echo e($comment->comment_content); ?></p>
                        <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
            </div>
           
       
    </div> <!-- #content -->
</div> <!-- .container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views/pages/product/show.blade.php ENDPATH**/ ?>