<section class="main-banner">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <div class="main-banner-slider">
                <div id="owl-one" class="owl-carousel owl-theme">
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slider-item-1" style='background-image : url("<?php echo e('slider-images/'.$slide->image); ?>")'>
                        <div class="slider-centent">
                            <div class="baner-logo">
                                <img src="<?php echo e(asset($slide->slider_logo)); ?>" alt="image not found" class="img-fluid" />
                            </div>
                            <?php echo set_locale($slide->content) ?>
                        </div>
                    </div>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>  <?php /**PATH /var/www/html/Room_booking/resources/views/home/home-sections/slider.blade.php ENDPATH**/ ?>