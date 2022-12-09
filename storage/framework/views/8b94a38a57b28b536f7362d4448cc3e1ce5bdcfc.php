<?php $__env->startSection('title', 'Default Forms'); ?>



<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Default Forms</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(URL::route('cigarettes.index')); ?>" title="List Of Cigarettes" >Cigarettes</a></li>
<li class="breadcrumb-item active">Delete Record</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-12 col-xl-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Delete Cigarette</h5>
                        </div>
                        
                        <form method="POST" action="<?php echo e(route('cigarettes.delete',$cigarette->id)); ?>" class="theme-form mega-form">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
							
                            
                            
								<h6>Cigarette Information</h6>

								<div class="mb-3">
									<label class="col-form-label">Category Name</label>
									
								
									<select name="category_id" class="js-example-basic-single col-sm-12">
										<option value="">Select Category</option>
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($category->id); ?>" <?php echo e($cigarette->category_id == $category->id ? 'selected="yes"' : ""); ?>><?php echo e($category->name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
									</select>

								</div>

								<div class="mb-3">
									<label class="col-form-label color-danger">Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo e($cigarette->name); ?>" placeholder="Name">
								</div>
								<div class="mb-3">
									<label class="col-form-label">Max Storage Quantity</label>
									<input class="form-control" type="number" name="maxqty" value="<?php echo e($cigarette->maxqty); ?>" placeholder="Maximum Storage Quantity">
								</div>

								<div class="mb-3">
									<label class="col-form-label">Display Order</label>
									<input class="form-control" type="text" name="ord" value="<?php echo e($cigarette->ord); ?>" placeholder="record order">
								</div>
							
							
							
						</div>
						<div class="card-footer">
							<button class="btn btn-primary" type="submit">Delete</button>
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
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gile/laravel-projects/a4energy2/resources/views/cigarettes/forms/delete.blade.php ENDPATH**/ ?>