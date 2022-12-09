<?php $__env->startSection('title', 'Create New'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Default Forms</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('cigarettes.index')); ?>">Cigarettes Daily Count</a></li>
<li class="breadcrumb-item active">Create Record</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		
		<div class="col-sm-12 col-xl-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Create New</h5>
                        </div>
                        
                        <form method="POST" action="<?php echo e(route('dailycount.store')); ?>" class="theme-form mega-form">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
							
                            
                            
								<h6>Daily Cigarettes Count</h6>
								<div class="mb-3">
									<label class="col-form-label">Date</label>
									<input class="datepicker-here form-control digits" type="text" name="date" data-language="en">
								</div>

								<div class="mb-3">
									<label class="col-form-label">Employee Name</label>
									<input class="form-control" type="text" name="empl_name" placeholder="Employee Name">
								</div>

								<?php $__currentLoopData = $cigarettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cigarette): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="mb-2">
									<label class="col-form-label"><?php echo e($cigarette->name); ?></label>
									
									<input class="form-control" type="text" name="cigarette_qty_<?php echo e($cigarette->id); ?>" placeholder="How Many Carton Of <?php echo e($cigarette->name); ?>">
									<input type="hidden" name="cigarette_id_<?php echo e($cigarette->id); ?>" value="<?php echo e($cigarette->id); ?>" >
								</div>

								
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								<div class="mb-3">
									<label class="col-form-label">Name</label>
									<input class="form-control" type="text" name="name" placeholder="Name">
								</div>

								<div class="mb-3">
									<label class="col-form-label">Max Storage Quantity</label>
									<input class="form-control" type="number" name="maxqty" placeholder="Maximum Storage Quantity">
								</div>

								<div class="mb-3">
									<label class="col-form-label">Display Order</label>
									<input class="form-control" type="number" name="ord" placeholder="record order">
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
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gile/laravel-projects/a4energy2/resources/views/dailycount/forms/create.blade.php ENDPATH**/ ?>