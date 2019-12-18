<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block top-15">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?><?php /**PATH C:\wamp64\www\be2_w9\resources\views/layouts/partials/messages.blade.php ENDPATH**/ ?>