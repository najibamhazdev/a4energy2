
        <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>Create New Category</h2></div>
                  <div class="pull-right">
                      <a class=" close-model" data-dismiss="modal" > <i class="fa fa-close"></i></a>
                  </div>
              </div>
          </div>
          <?php if(count($errors) > 0): ?>
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
          <?php endif; ?>
          <form method="POST" action="<?php echo e(route('categories.store')); ?>" class="theme-form mega-form">
            <?php echo csrf_field(); ?>
            <div class="card-body">
            
            
            
                <h6>Category Information</h6>
                <div class="mb-3">
                    <label class="col-form-label">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="your Name">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Display Order</label>
                    <input class="form-control" type="text" name="ord" placeholder="record order">
                </div>
            
            
            
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Cancel</button>
        </div></form>

          <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    
                    format: 'YYYY-MM-DD'
                });
            });
        </script>    
   <?php /**PATH /home/gile/laravel-projects/a4energy2/resources/views/categories/modals/create.blade.php ENDPATH**/ ?>