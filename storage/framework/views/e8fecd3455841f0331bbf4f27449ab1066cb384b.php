<section class="serving-humanity">
    <div class="container-fluid container-width">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h5 class="text-yellow text-captilize green-heading"><?php echo e(__('app.departments')); ?></h5>
            <h2 class="center-image-heading orange-text-img"><?php echo e(__('app.serving_humenity')); ?></h2>
        </div>
        <div class="serving-humanity-slider">
            <div id="owl-two" class="owl-carousel owl-theme">
                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="serve-slider-item">
                    <img src="<?php echo e(asset('department-image/'.$department->file)); ?>" alt="image not found" class="img-fluid" />
                    <div class="serv-human-content">
                        <h6><?php echo set_locale($department->name); ?></h6>
                        <p class="text-opacity"><?php echo set_locale($department->description) ?></p>
                        <div class="read-more-link d-flex justify-content-center align-items-center">
                            <a href="<?php echo e($department->url); ?>"><?php echo e(__('app.learn_more')); ?> <span class="ms-3 next-mark-img"><img src="<?php echo e(asset('assets/front/images/next-mark.svg')); ?>" alt=""></span></a>
                        </div>
                    </div>
                </div>   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
        </div>
    </div>
</section><?php /**PATH /var/www/html/Room_booking/resources/views/home/home-sections/departments.blade.php ENDPATH**/ ?>