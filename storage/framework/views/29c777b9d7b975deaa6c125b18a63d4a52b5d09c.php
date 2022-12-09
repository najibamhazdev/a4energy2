<?php $__env->startSection('title', 'Daily Count'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatable-extension.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>List Of Daily Counts </h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>

<li class="breadcrumb-item active">Daily Counts</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h5>Configuration Option</h5>
					<span>Here you can ADD,Edit, Delete a record of the listing below.</span>
				</div>
				<div class="card-body">
					<div class="dt-ext table-responsive">
					<a href="<?php echo e(URL::route('dailycount.create')); ?>" title="Create New" ><button class="btn btn-primary btn-sm mb-5 right-btn" > Create New <i class="fa fa-plus-square" ></i></button></a>
					
					
						<table class="display" id="responsive">
							<thead>
								<tr>
									<th>Date</th>
									<th>Employee</th>
									<th>Note</th>
									<th>Action</th>
									
									
								</tr>
							</thead>
							<tbody>
								
								<?php $__currentLoopData = $dailycounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daily): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($daily->date); ?></td>
										<td><?php echo e($daily->empl_name); ?></td>
										<td><?php echo e($daily->note); ?></td>
										<td><a href="<?php echo e(route('dailycount.edit', array('id' => $daily->id))); ?>" title="Edit Record" ><i class="fa fa-edit text-success" ></i></a>&nbsp; &nbsp; <a href="<?php echo e(URL::route('dailycount.delete', array('id' => $daily->id))); ?>" title="Delete Record" ><i class="fa fa-trash text-danger" ></i></a></td>
										
									</tr>
									
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
								
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatable-extension/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gile/laravel-projects/a4energy2/resources/views/dailycount/index.blade.php ENDPATH**/ ?>