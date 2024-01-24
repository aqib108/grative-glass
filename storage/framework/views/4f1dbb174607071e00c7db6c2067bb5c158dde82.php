<section class="visitors-acount common-top-padding common-bottom-padding">
    <div class="container-fluid container-width">
        <div class="row">
            <div class="col-lg-5">
                
                <video controls width="100%" height="100%" poster="<?php echo e(asset('assets/front/images/vide-bg.png')); ?>">
                    <source src="<?php echo e(asset(getSettingDataHelper('video'))); ?>"
                    type="video/mp4">
                </video>
            </div>
            <div class="col-lg-7">
                <div class="our-aim-content">
                    <h5 class="text-yellow text-captilize green-heading"><?php echo e(__('app.interdum_maximus')); ?></h5>
                    <h2 class="orange-text-img"><?php echo e(__('app.vist_count')); ?></h2>
                    <p class="para-1 text-opacity">
                        <?php echo e(__('app.visitor-message')); ?>

                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="visiter-states">
                                <div class="img-wrap-1">
                                    
                                    <a href="https://info.flagcounter.com/S7r4"><img src="https://s11.flagcounter.com/count/S7r4/bg_FFFFFF/txt_000000/border_CCCCCC/columns_4/maxflags_12/viewers_3/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
                                </div>
                                <p class="text-center"><?php echo e(__('app.website-visited')); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="visiter-states">
                                <div class="img-wrap-1">
                                    <img src="<?php echo e(asset('assets/front/images/visit-img-1.svg')); ?>" class="img-fluid">
                                </div>
                                <h3 class="text-center"><?php echo e($course_count); ?></h3>
                                <p class="text-center" ><?php echo e(__('app.courses')); ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="visiter-states">
                                <div class="img-wrap-1">
                                    <img src="<?php echo e(asset('assets/front/images/visit-img-2.svg')); ?>" class="img-fluid">
                                </div>
                                <h3 class="text-center"><?php echo e($department_count); ?></h3>
                                <p class="text-center"><?php echo e(__('app.departments')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /var/www/html/Room_booking/resources/views/home/home-sections/visitors.blade.php ENDPATH**/ ?>