<?php use Illuminate\Support\Facades\Session; ?>
<header class="et-header to-be-fixed py-[30px] xxs:py-[20px] fixed top-0 w-full px-[155px] xxxl:px-[100px] xxl:px-[40px] xs:px-[20px] z-50">
    <div class="flex justify-between items-center">
        <!-- logo -->
        <div class="logo shrink-0">
            <a href="<?php echo e(url('/')); ?>">
                <img style="width: 15vw;" src="assets/img/logo_new.png" alt="logo">
            </a>
        </div>

        <div class="et-header-right flex items-center gap-[60px] xl:gap-[30px]">
            <div class="to-go-to-sidebar-in-mobile flex md:flex-col md:items-start items-center gap-[100px] xl:gap-[30px] md:gap-y-[15px]">
                <!-- nav -->
                <ul class="et-header-nav flex md:flex-col gap-x-[43px] xl:gap-x-[33px] font-kanit text-[17px] font-normal">
                    <li class="has-sub-menu relative">
                        <a role="button"><?php echo e(translation('header.home')); ?></a>

                        <ul class="et-header-submenu">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.home')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.home.2')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.home.3')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.home.4')); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.about_us')); ?></a></li>
                    <li class="has-sub-menu relative">
                        <a role="button"><?php echo e(translation('header.events')); ?></a>

                        <ul class="et-header-submenu">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.all_events')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.events_details')); ?></a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button"><?php echo e(translation('header.details')); ?></a>

                        <ul class="et-header-submenu">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.pricing_plan')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.gallery')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.faq')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.sponsors')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.venue')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.error_404')); ?></a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button"><?php echo e(translation('header.team')); ?></a>

                        <ul class="et-header-submenu">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.team_members')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.team_details')); ?></a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu relative">
                        <a role="button"><?php echo e(translation('header.news')); ?></a>

                        <ul class="et-header-submenu">
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.all_news')); ?></a></li>
                            <li><a href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.news_details')); ?></a></li>
                        </ul>
                    </li>
                    <li><a class="hover:text-etBlue" href="<?php echo e(url('/')); ?>"><?php echo e(translation('header.contact')); ?></a></li>
                </ul>

                <!-- button -->
                

                <div class="language-switcher flex gap-2 items-center">
                    <?php
                        $currentLocale = Session::get('locale', config('app.locale'));
                    ?>
                    <?php $__currentLoopData = ['en' => 'EN', 'ru' => 'RU', 'uz' => 'UZ']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(route('change.lang', ['locale' => $localeCode])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" style="display: block; line-height: 3" class="et-sidebar-close-btn border border-white/50 w-[45px] aspect-square shrink-0 text-white text-[22px] hover:text-etBlue hover:bg-white">
                                <?php echo e($label); ?>

                            </button>
                        </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- mobile menu button -->
            <button type="button" class="et-mobile-menu-open-btn hidden md:inline-block bg-etBlue rounded-full w-[50px] aspect-square text-white text-[18px] hover:bg-etBlue"><i class="fa-solid fa-bars"></i></button>
        </div>
    </div>
</header>
<?php /**PATH /Users/mnsrv/PhpstormProjects/expo-copy/resources/views/partials/header.blade.php ENDPATH**/ ?>