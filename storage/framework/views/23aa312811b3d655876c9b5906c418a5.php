<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>
<body>
    <?php if(@session('success')): ?>
    
        <div id="flash" class="text-center bg-green-50 text-green-500 p-4 font-bold">
            <?php echo e(session('success')); ?>

        </div>

    <?php endif; ?>
    <header>
        <nav>
            <h1>Ninja Network</h1>
                <a href="<?php echo e(route('ninjas.index')); ?>">All Ninjas</a>
                <a href="<?php echo e(route('ninjas.create')); ?>">Create New Ninja</a>
        </nav>
    </header>

    <main class="container">
        <?php echo e($slot); ?>

    </main>
</body>
</html>
<?php /**PATH C:\Users\20221071\Herd\ninja_network\resources\views/components/layout.blade.php ENDPATH**/ ?>