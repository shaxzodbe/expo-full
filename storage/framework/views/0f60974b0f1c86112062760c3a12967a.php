<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Eventics'); ?></title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/font-awesome/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/splide/splide.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/slim-select/slimselect.css')); ?>">

    <link href="<?php echo e(asset('src/output.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
</head>
<body>

<?php echo $__env->make('partials.overlay', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- JS Files -->
<script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/splide/splide.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/slim-select/slimselect.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/fslightbox/fslightbox.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/splide/splide-extension-auto-scroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/lenis/lenis.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/splittype/index.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/gsap/gsap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor/gsap/gsap-scroll-trigger.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/countdown.js')); ?>"></script>

</body>
</html>
<?php /**PATH /Users/mnsrv/PhpstormProjects/expo-copy/resources/views/layouts/app.blade.php ENDPATH**/ ?>