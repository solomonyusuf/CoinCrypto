<?php
    $setting = \App\Models\AppSetting::first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($setting->name); ?> Auth</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset($setting->logo)); ?>" />

    <script src="https://cdn.tailwindcss.com"></script>
    <?php echo \Livewire\Livewire::styles(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/fonts.css')); ?>" />
    <style>
        :root {
            --font-sans: 'neueHaas', 'neueHaas Fallback';
            --font-serif: 'family', 'family Fallback';
            --font-mono: 'dmMono', 'dmMono Fallback';
        }
    </style>

</head>
<body class="flex items-center justify-center min-h-screen bg-gray-300">
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        
        <!-- Logo -->
        <div class="flex justify-center mb-6 mt-3">
            <img src="<?php echo e(asset($setting->logo)); ?>" style="height:100px;width:150px;" alt="Logo" class="w-40 h-10">
        </div>

        <?php echo e($slot); ?>

    </div>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/layouts/auth.blade.php ENDPATH**/ ?>