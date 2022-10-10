<?php $__env->startSection('title', 'Animate'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Animate</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Animation</li>
<li class="breadcrumb-item active">Animate</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 col-md-8 offset-xl-3 offset-md-2">
              <div id="animation-box">
                <div class="card">
                  <div class="animate-widget">
                    <div><img class="img-fluid" src="<?php echo e(asset('assets/images/banner/3.jpg')); ?>" alt=""></div>
                    <div class="text-center p-25">
                      <p class="text-muted mb-0">Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings</p>
                    </div>
                  </div>
                </div>
              </div>
              <form class="theme-form text-center">
                <div class="mb-3">
                  <select class="form-select input input--dropdown js-animations">
                    <optgroup label="Attention Seekers">
                      <option value="bounce">bounce</option>
                      <option value="flash">flash</option>
                      <option value="pulse">pulse</option>
                      <option value="rubberBand">rubberBand</option>
                      <option value="shake">shake</option>
                      <option value="swing">swing</option>
                      <option value="tada">tada</option>
                      <option value="wobble">wobble</option>
                      <option value="jello">jello</option>
                    </optgroup>
                    <optgroup label="Bouncing Entrances">
                      <option value="bounceIn">bounceIn</option>
                      <option value="bounceInDown">bounceInDown</option>
                      <option value="bounceInLeft">bounceInLeft</option>
                      <option value="bounceInRight">bounceInRight</option>
                      <option value="bounceInUp">bounceInUp</option>
                    </optgroup>
                    <optgroup label="Bouncing Exits">
                      <option value="bounceOut">bounceOut</option>
                      <option value="bounceOutDown">bounceOutDown</option>
                      <option value="bounceOutLeft">bounceOutLeft</option>
                      <option value="bounceOutRight">bounceOutRight</option>
                      <option value="bounceOutUp">bounceOutUp</option>
                    </optgroup>
                    <optgroup label="Fading Entrances">
                      <option value="fadeIn">fadeIn</option>
                      <option value="fadeInDown">fadeInDown</option>
                      <option value="fadeInDownBig">fadeInDownBig</option>
                      <option value="fadeInLeft">fadeInLeft</option>
                      <option value="fadeInLeftBig">fadeInLeftBig</option>
                      <option value="fadeInRight">fadeInRight</option>
                      <option value="fadeInRightBig">fadeInRightBig</option>
                      <option value="fadeInUp">fadeInUp</option>
                      <option value="fadeInUpBig">fadeInUpBig</option>
                    </optgroup>
                    <optgroup label="Fading Exits">
                      <option value="fadeOut">fadeOut</option>
                      <option value="fadeOutDown">fadeOutDown</option>
                      <option value="fadeOutDownBig">fadeOutDownBig</option>
                      <option value="fadeOutLeft">fadeOutLeft</option>
                      <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                      <option value="fadeOutRight">fadeOutRight</option>
                      <option value="fadeOutRightBig">fadeOutRightBig</option>
                      <option value="fadeOutUp">fadeOutUp</option>
                      <option value="fadeOutUpBig">fadeOutUpBig</option>
                    </optgroup>
                    <optgroup label="Flippers">
                      <option value="flip">flip</option>
                      <option value="flipInX">flipInX</option>
                      <option value="flipInY">flipInY</option>
                      <option value="flipOutX">flipOutX</option>
                      <option value="flipOutY">flipOutY</option>
                    </optgroup>
                    <optgroup label="Lightspeed">
                      <option value="lightSpeedIn">lightSpeedIn</option>
                      <option value="lightSpeedOut">lightSpeedOut</option>
                    </optgroup>
                    <optgroup label="Rotating Entrances">
                      <option value="rotateIn">rotateIn</option>
                      <option value="rotateInDownLeft">rotateInDownLeft</option>
                      <option value="rotateInDownRight">rotateInDownRight</option>
                      <option value="rotateInUpLeft">rotateInUpLeft</option>
                      <option value="rotateInUpRight">rotateInUpRight</option>
                    </optgroup>
                    <optgroup label="Rotating Exits">
                      <option value="rotateOut">rotateOut</option>
                      <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                      <option value="rotateOutDownRight">rotateOutDownRight</option>
                      <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                      <option value="rotateOutUpRight">rotateOutUpRight</option>
                    </optgroup>
                    <optgroup label="Sliding Entrances">
                      <option value="slideInUp">slideInUp</option>
                      <option value="slideInDown">slideInDown</option>
                      <option value="slideInLeft">slideInLeft</option>
                      <option value="slideInRight">slideInRight</option>
                    </optgroup>
                    <optgroup label="Sliding Exits">
                      <option value="slideOutUp">slideOutUp</option>
                      <option value="slideOutDown">slideOutDown</option>
                      <option value="slideOutLeft">slideOutLeft</option>
                      <option value="slideOutRight">slideOutRight</option>
                    </optgroup>
                    <optgroup label="Zoom Entrances">
                      <option value="zoomIn">zoomIn</option>
                      <option value="zoomInDown">zoomInDown</option>
                      <option value="zoomInLeft">zoomInLeft</option>
                      <option value="zoomInRight">zoomInRight</option>
                      <option value="zoomInUp">zoomInUp</option>
                    </optgroup>
                    <optgroup label="Zoom Exits">
                      <option value="zoomOut">zoomOut</option>
                      <option value="zoomOutDown">zoomOutDown</option>
                      <option value="zoomOutLeft">zoomOutLeft</option>
                      <option value="zoomOutRight">zoomOutRight</option>
                      <option value="zoomOutUp">zoomOutUp</option>
                    </optgroup>
                    <optgroup label="Specials">
                      <option value="hinge">hinge</option>
                      <option value="jackInTheBox">jackInTheBox</option>
                      <option value="rollIn">rollIn</option>
                      <option value="rollOut">rollOut</option>
                    </optgroup>
                  </select>
                </div>
                <button class="js-triggeraNimation btn btn-primary">Animate it</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>How to use it?</h5>
          <span>All you have to do is to add animation name class attribute to html element, like :<code>Fade</code></span>
        </div>
        <div class="card-body options">
          <div>flash</div>
          <div>pulse</div>
          <div>rubberBand</div>
          <div>shake</div>
          <div>swing</div>
          <div>tada</div>
          <div>wobble</div>
          <div>jello</div>
          <div>bounceIn</div>
          <div>bounceInDown</div>
          <div>bounceInLeft</div>
          <div>bounceInRight</div>
          <div>bounceInUp</div>
          <div>bounceOut</div>
          <div>bounceOutDown</div>
          <div>bounceOutLeft</div>
          <div>bounceOutRight</div>
          <div>bounceOutUp</div>
          <div>bounceOut</div>
          <div>bounceOutDown</div>
          <div>bounceOutLeft</div>
          <div>bounceOutRight</div>
          <div>bounceOutUp</div>
          <div>fadeOut</div>
          <div>fadeOutDown</div>
          <div>fadeOutDownBig</div>
          <div>fadeOutLeft</div>
          <div>fadeOutLeftBig</div>
          <div>fadeOutRight</div>
          <div>fadeOutRightBig</div>
          <div>fadeOutUp</div>
          <div>fadeOutUpBig</div>
          <div>flip</div>
          <div>flipInX</div>
          <div>flipInY</div>
          <div>flipOutX</div>
          <div>flipOutY</div>
          <div>lightSpeedIn</div>
          <div>lightSpeedOut</div>
          <div>rotateIn</div>
          <div>rotateInDownLeft</div>
          <div>rotateInDownRight</div>
          <div>rotateInUpLeft</div>
          <div>rotateInUpRight</div>
          <div>rotateOut</div>
          <div>rotateOutDownLeft</div>
          <div>rotateOutDownRight</div>
          <div>rotateOutUpLeft</div>
          <div>rotateOutUpRight</div>
          <div>slideInUp</div>
          <div>slideInDown</div>
          <div>slideInLeft</div>
          <div>slideInRight</div>
          <div>slideOutUp</div>
          <div>slideOutDown</div>
          <div>slideOutLeft</div>
          <div>slideOutRight</div>
          <div>zoomIn</div>
          <div>zoomInDown</div>
          <div>zoomInLeft</div>
          <div>zoomInRight</div>
          <div>zoomInUp</div>
          <div>zoomOut</div>
          <div>zoomOutDown</div>
          <div>zoomOutLeft</div>
          <div>zoomOutRight</div>
          <div>zoomOutUp</div>
          <div>hinge</div>
          <div>jackInTheBox</div>
          <div>rollIn</div>
          <div>rollOut</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/animation/animate-custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/webiotspc/Desktop/hetvi/laravel/Cuba/resources/views/animation/animate.blade.php ENDPATH**/ ?>