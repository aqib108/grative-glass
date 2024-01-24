<?php
    $posts = App\Models\Admin\Post::wherestatus(1)->join('post_feature_images','post_id','posts.id')->take(3)->orderBy('id', 'DESC')->get(['posts.title as title','post_feature_images.image as image','posts.created_at as date','posts.id as id']);
    $location=App\Models\Admin\Location::where(['status'=>1,'featured'=>1])->first();
?>
<footer class="footer">
    <div class="container-fluid container-width">
        <div class="top-footer common-card">
            <div class="row">
                <div class="col-lg-3 col-12 mb-lg-0 mb-md-5 mb-3">
                    <div class="footer-info">
                        <h5><?php echo e(__('app.about_us')); ?></h5>
                        <p><?php echo e(getSettingDataHelper('about_'.app()->getLocale())); ?></p>
                        <div class="footer-logo">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?php echo e(asset(getSettingDataHelper('logo'))); ?>" class="img-fluid" alt="" />
                            </a>
                        </div>
                        <div class="store-logos">
                            <a href="<?php echo e($location->location_link); ?>" target="_blank"><span class="icon fa fa-map-marker text-yellow"></span>
                                <span class="graish-color"> <?php echo set_locale($location->location_address) ?></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5><?php echo e(__('app.l_blog')); ?></h5>
                        <ul class="list-unstyled">
                           <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <a style="color: black" href="<?php echo e(route('home.blog-detail', ['id' => $post->id])); ?>">
                            <li class="d-flex">
                                <div class="imag-blog d-flex">
                                    <img style="height: 75px !important; width: 90px !important;" src="<?php echo e(asset('feature-images/'.$post->image)); ?>" class="img-fluid">
                                </div>
                                <div class="d-flex flex-column blog-detail">
                                    <?php echo set_locale($post->title) ?>
                                    <p><span class="icon fa fa-calendar text-yellow me-3"></span><?php echo date('M, d Y', strtotime($post->date)); ?></p>
                                </div>
                            </li>
                          </a>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5><?php echo e(__('app.con_info')); ?></h5>
                        <ul class="list-unstyled contact-info">
                           
                            <li>
                                <a href="#"><span class="icon fa fa-envelope"></span><span> <?php echo e(getSettingDataHelper('email')); ?></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon fa fa-phone"></span> <span><?php echo e(getSettingDataHelper('phone')); ?></span></a>
                            </li>
                            <li>
                                <a href="<?php echo e($location->location_link); ?>" target="_blank"><span class="icon fa fa-map-marker"></span><span><?php echo set_locale($location->location_address) ?></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon fa fa-clock-o"></span> <span><?php echo e(getSettingDataHelper('opening_time')); ?></span></a>
                            </li>
                        </ul>
                        <div class="follow-us">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="<?php echo e(getSettingDataHelper('facebook')); ?>" class="facebook">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(getSettingDataHelper('linkedin')); ?>" class="linkedin">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(getSettingDataHelper('twitter')); ?>" class="twitter">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(getSettingDataHelper('pinterest')); ?>" class="pinterest">
                                        <span class="fa fa-pinterest"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(getSettingDataHelper('youtube')); ?>" class="youtube">
                                        <span class="fa fa-youtube"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5><?php echo e(__('app.q_con')); ?></h5>
                        <form method="post" action="/contact_us">
                       <?php echo csrf_field(); ?>
                            <div class="footer-contact-form">
                            <div class="form-floating mb-3">
                                <input type="email" required class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput"><?php echo e(__('app.email-address')); ?></label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" name="subject" id="floatingPassword" placeholder="subject">
                                <label for="floatingPassword"><?php echo e(__('app.subject')); ?></label>
                            </div>
                            <div class="form-floating">
                                <textarea required class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                                <label for="floatingTextarea2"><?php echo e(__('app.comments')); ?></label>
                              </div>
                              <div class="form-floating mt-3">
                                <button type="submit" class="btn btn-success"><?php echo e(__('app.submit')); ?></button>
                                
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="footer-newsletter">
                        <h6 class="text-center text-white"><?php echo e(__('app.subscribe-news')); ?></h6>
                    <form action="/subscription" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="field-wrapper">
                            <input required class="form-control" name="email" type="email" placeholder="<?php echo e(__('app.enter-email')); ?>" />
                            <button type="submit" class="orange theme-button"><?php echo e(__('app.subscribe')); ?></button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="copyrights">
                <p>Halqa Noor Ul Iman <?php echo date('Y'); ?> - All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH /var/www/html/EStore/resources/views/home/sections/footer.blade.php ENDPATH**/ ?>