<section class="about-us common-top-padding common-bottom-padding">
    <div class="container-fluid container-width">
        <div class="row">
            <div class="col-lg-5">
               <?php
               if(isset($aims->file))
               $image = $aims->file;
               else
               $image='#';
               ?>
                <div class="image-container">
                    <img src="<?php echo e(asset($image)); ?>" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="our-aim-content">
                    <h5 class="text-yellow text-captilize green-heading"><?php echo e(__('app.our_mission')); ?></h5>
                    <h2 class="orange-text-img"><?php echo e(set_locale($aims->title)); ?></h2>
                    <p class="m-3">
                        <?php echo set_locale($aims->content) ?>
                    </p>
                    
                    <div class="buton-holder">
                        <div class="d-flex" >
                            <a class="orange theme-button me-3" href="/aims-&-object"><?php echo e(__('app.read_more')); ?></a>
                            <form action="https://www.paypal.com/donate" method="post" target="_top"><input name="hosted_button_id" type="hidden" value="KA3Q4526LZZ7Q">
                                
                                <button class="orange theme-button" type="submit"  name="submit" id="donate-now-btn"><?php echo e(__('app.donate_now')); ?></button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH /var/www/html/Room_booking/resources/views/home/home-sections/our-aim.blade.php ENDPATH**/ ?>