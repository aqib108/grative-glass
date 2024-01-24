<section class="noor-libarary">
    <div class="container-fluid container-width">
        <div class="d-flex flex-column justify-content-center align-items-center library-content">
            <h5 class="text-yellow text-captilize text-center"><?php echo e(__('app.assets')); ?></h5>
            <h2 class="center-image-heading orange-text-img text-center"><?php echo e(__('app.our_library')); ?></h2>
            <p class="text-center para-3"><?php echo e(__('app.library-content')); ?></p>
        </div>
        <div class="row library-tabs">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column">
                <ul class="library-navs nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                    <?php $__currentLoopData = $libraryTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo e(($key == 0) ? 'active':''); ?> lib-tab-headers lib-<?php echo e($type->id); ?>" data-cl="lib-<?php echo e($type->id); ?>" data-val="<?php echo e($type->id); ?>" aria-selected="true" onclick="getLibrarySections('<?php echo e($type->id); ?>','lib-<?php echo e($type->id); ?>')"><?php echo set_locale($type->title) ?></button>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </ul>
                <div class="noor-libray-content tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Image" role="tabpanel" aria-labelledby="pills-Image">
                        <div class="tab-info">
                            <div class="row home-lib-row" id="lib-tab-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->startPush('footer-scripts'); ?>
<?php echo $__env->make('home.scripts.library-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/EStore/resources/views/home/home-sections/library.blade.php ENDPATH**/ ?>