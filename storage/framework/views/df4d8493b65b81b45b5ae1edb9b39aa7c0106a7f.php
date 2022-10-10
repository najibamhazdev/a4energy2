<?php $__env->startSection('title', 'Cart'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Cart</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Ecommerce</li>
<li class="breadcrumb-item active">Cart</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Cart</h5>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="order-history table-responsive wishlist">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Prdouct</th>
                              <th>Prdouct Name</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Action</th>
                              <th>Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><img class="img-fluid img-40" src="<?php echo e(asset('assets/images/product/1.png')); ?>" alt="#"></td>
                              <td>
                                 <div class="product-name"><a href="#">Long Top</a></div>
                              </td>
                              <td>$21</td>
                              <td>
                                 <fieldset class="qty-box">
                                    <div class="input-group">
                                       <input class="touchspin text-center" type="text" value="5">
                                    </div>
                                 </fieldset>
                              </td>
                              <td><i data-feather="x-circle"></i></td>
                              <td>$12456</td>
                           </tr>
                           <tr>
                              <td><img class="img-fluid img-40" src="<?php echo e(asset('assets/images/product/13.png')); ?>" alt="#"></td>
                              <td>
                                 <div class="product-name"><a href="#">Fancy watch</a></div>
                              </td>
                              <td>$50</td>
                              <td>
                                 <fieldset class="qty-box">
                                    <div class="input-group">
                                       <input class="touchspin text-center" type="text" value="5">
                                    </div>
                                 </fieldset>
                              </td>
                              <td><i data-feather="x-circle"></i></td>
                              <td>$12456</td>
                           </tr>
                           <tr>
                              <td><img class="img-fluid img-40" src="<?php echo e(asset('assets/images/product/4.png')); ?>" alt="#"></td>
                              <td>
                                 <div class="product-name"><a href="#">Man shoes</a></div>
                              </td>
                              <td>$11</td>
                              <td>
                                 <fieldset class="qty-box">
                                    <div class="input-group">
                                       <input class="touchspin text-center" type="text" value="5">
                                    </div>
                                 </fieldset>
                              </td>
                              <td><i data-feather="x-circle"></i></td>
                              <td>$12456</td>
                           </tr>
                           <tr>
                              <td colspan="4">
                                 <div class="input-group">
                                    <input class="form-control me-2" type="text" placeholder="Enter coupan code"><a class="btn btn-primary" href="#">Apply</a>
                                 </div>
                              </td>
                              <td class="total-amount">
                                 <h6 class="m-0 text-end"><span class="f-w-600">Total Price :</span></h6>
                              </td>
                              <td><span>$6935.00  </span></td>
                           </tr>
                           <tr>
                              <td class="text-end" colspan="5"><a class="btn btn-secondary cart-btn-transform" href="#">continue shopping</a></td>
                              <td><a class="btn btn-success cart-btn-transform" href="">check out</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webiotspc/Desktop/hetvi/laravel/Cuba/resources/views/apps/cart.blade.php ENDPATH**/ ?>