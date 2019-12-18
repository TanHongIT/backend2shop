<?php $__env->startSection('content'); ?>
<style>
  .muahang .btn:hover{
      background-color: #9c27b0;
      color: #fff;
  }</style>
<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
                  <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<!-- THE FIRST SLIDE -->
								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="<?php echo e(asset("source/image/slide/$sl->image")); ?>" data-src="<?php echo e(asset("source/image/slide/$sl->image")); ?>" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('<?php echo e(asset("source/image/slide/$sl->image")); ?>'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
											</div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
<div class="album py-5 bg-light">
    <div class="container">
        <?php if(session()->get('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
        <?php endif; ?>
        <div class="beta-products-list">
          <br><br>
          <h2>Tổng Hợp Sản Phẩm</h2> <br>
          Tìm Thấy <?php echo e(count($products)); ?> Sản Phẩm Trong Trang
          <div class="row">
            
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?php echo e(asset('storage/images/' . $item->product_image)); ?>" alt="Card image cap" onclick="getProduct('<?php echo e(route('product.productAjax', $item->id)); ?>')">
                  <div class="card-body">
                      <h6><a href="<?php echo e(route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html'); ?>"><?php echo e(mb_substr($item->product_name,0,40)); ?></a></h6>

                      <p class="card-text"><?php echo e(mb_substr($item->product_description,0, 100)); ?>... <br><b><a href="<?php echo e(route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html'); ?>">Read More</a></b></p>
                      <div class="d-flex justify-content-between align-items-center"> <br>
                        
                        <?php if($item->product_promotion_pricre==0): ?>
                        <h6 class="card-text">Giá <?php echo e($item->product_price); ?>VNĐ</h6> <br>
                        <?php else: ?>
                        <p class="card-text"> <strike> Giá <?php echo e($item->product_price); ?>VNĐ</strike></p> <br>
                        <h6 class="card-text"> Sale <?php echo e($item->product_promotion_pricre); ?> VNĐ</h6>
                        <?php endif; ?>
                      <br>
                      
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
                  <br><br><br>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        
        <?php echo e($products->links()); ?>

        <hr>
        <h2>Sản Phẩm Giảm Giá</h2>
          <div class="row">
            
              <?php $__currentLoopData = $product_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="<?php echo e(asset('storage/images/' . $item->product_image)); ?>" alt="Card image cap" onclick="getProduct('<?php echo e(route('product.productAjax', $item->id)); ?>')">
                  <div class="card-body">
                      <h6><a href="<?php echo e(route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html'); ?>"><?php echo e(mb_substr($item->product_name,0,40)); ?></a></h6>

                      <p class="card-text"><?php echo e(mb_substr($item->product_description,0, 100)); ?>... <br><b><a href="<?php echo e(route('product.show', ['id' => $item->id, 'slug' =>  Str::slug($item->product_name, '-')]) . '.html'); ?>">Read More</a></b></p>
                      <div class="d-flex justify-content-between align-items-center"> <br>
                        
                        <?php if($item->product_promotion_pricre==0): ?>
                        <h6 class="card-text">Giá <?php echo e($item->product_price); ?>VNĐ</h6> <br>
                        <?php else: ?>
                        <p class="card-text"> <strike> Giá <?php echo e($item->product_price); ?>VNĐ</strike></p> <br>
                        <h6 class="card-text"> Sale <?php echo e($item->product_promotion_pricre); ?> VNĐ</h6>
                        <?php endif; ?>
                      <br>
                      
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
                  <br><br><br>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <?php echo e($product_sale->links()); ?>

        </div>
        
        
    </div>
</div>

<!-- Modal -->
<script src="<?php echo e(asset('js/siteajax.js')); ?>"></script>

<div class="modal fade" id="productDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi Tiết Sản Phẩm</h5>
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
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\backend2shop\resources\views//index.blade.php ENDPATH**/ ?>