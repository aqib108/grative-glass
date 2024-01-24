<?php if(count($results)): ?>
<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($type == 1): ?>
    <div class="col-lg-3 col-md-6 col-sm-6  mb-3">
        <div class="image-galary">
            <img src="<?php echo e(asset($result->file)); ?>" alt="image not found" class="img-fluid" />
            <div class="seacrh-btn">
                <span class="seach-hover"> <i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
<?php elseif($type == 2): ?>
<div class="col-lg-3 col-md-6 col-sm-6  mb-3">
    <div class="image-galary">
        <video controls src="<?php echo e(asset($result->file)); ?>" style="height: 100%; width: 100%;"></video>
        <div class="seacrh-btn">
            <span class="seach-hover"> <i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
    </div>
</div>
<?php elseif($type == 3): ?>
<div class="col-lg-3 col-md-6 col-sm-6  mb-3">
    <div class="image-galary">
        <audio controls style="width: 100%;">
            <source src="<?php echo e(asset($result->file)); ?>" type="audio/ogg">
        </audio>
        <div class="seacrh-btn">
            <span class="seach-hover"> <i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
    </div>
</div>
<?php elseif($type == 4): ?>
    <div class="col-lg-3 col-md-6 col-sm-6  mb-3">
        <div class="image-galary">
            <a target="_blank" href="<?php echo e(asset($result->file)); ?>" frameborder="0" height="100%" width="100%">
                <img src="<?php echo e(!empty($result->img_thumb_nail)? asset($result->img_thumb_nail) : asset('images/thumbnails/books.png')); ?>" alt="image not found" class="img-fluid" />
            </a>
            
            <div class="seacrh-btn">
                <span class="seach-hover"> <i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <div class="col-lg-3 col-md-6 col-sm-6  mb-3 mt-lg-3">
        <div class="">
            Not Available
        </div>
    </div>
<?php endif; ?><?php /**PATH /var/www/html/EStore/resources/views/home/partial/library-tabs-partial.blade.php ENDPATH**/ ?>