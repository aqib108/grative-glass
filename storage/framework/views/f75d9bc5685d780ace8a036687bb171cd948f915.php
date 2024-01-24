<section class="testimonials common-top-padding common-bottom-padding">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h5 class="text-yellow text-captilize green-heading"><?php echo e(__('app.testo')); ?></h5>
            <h2 class="center-image-heading orange-text-img"><?php echo e(__('app.p_love')); ?></h2>
        </div>
        <div class="testimonial-slider">
            <div id="owl-three" class="owl-carousel owl-theme">
                <?php $__currentLoopData = $Testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="testimonial-slider-item">
                    <div class="testimonial-human-content">
                        <p class="text-center">
                            "<?php echo set_locale($Testimonial->message); ?>"
                        </p>
                        <div class="testimonial-profile-">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="d-flex">
                                    <div class="client-image">
                                        <img src="<?php echo e(asset('testimonial-images/'.$Testimonial->image)); ?>" alt="image not found" class="img-fluid">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h6 class="text-green"><?php echo set_locale($Testimonial->name); ?></h6>
                                    <p class="opacity">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
               
                
            </div>
        </div>
    </div>
</section><?php /**PATH /var/www/html/Room_booking/resources/views/home/home-sections/testimonial.blade.php ENDPATH**/ ?>