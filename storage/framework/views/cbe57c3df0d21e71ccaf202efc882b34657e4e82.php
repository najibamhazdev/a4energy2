<?php $__env->startSection('title', 'Default Forms'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Default Forms</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(URL::route('categories.index')); ?>" title="List Categories" >Categories</a></li>
<li class="breadcrumb-item active">Delete Category</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-12 col-xl-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Delete Category</h5>
                        </div>
                        
                        <form method="POST" action="<?php echo e(route('categories.delete',$category->id)); ?>" class="theme-form mega-form">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
							
                            
                            
								<h6>Category Information</h6>
								<div class="mb-3">
									<label class="col-form-label color-danger">Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo e($category->name); ?>" placeholder="your Name">
								</div>
								<div class="mb-3">
									<label class="col-form-label">Display Order</label>
									<input class="form-control" type="text" name="ord" value="<?php echo e($category->ord); ?>" placeholder="record order">
								</div>
							
							
							
						</div>
						<div class="card-footer">
							<button class="btn btn-primary" type="submit">Submit</button>
							<button class="btn btn-secondary" type="reset">Cancel</button>
						</div></form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gile/laravel-projects/a4energy2/resources/views/categories/forms/delete.blade.php ENDPATH**/ ?>