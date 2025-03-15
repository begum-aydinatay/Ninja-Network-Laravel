<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <form action="<?php echo e(route('ninjas.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <h2>Create a New Ninja</h2>

        <!-- ninja Name -->
        <label for="name">Ninja Name:</label>
        <input
          type="text"
          id="name"
          name="name"
          value="<?php echo e(old('name')); ?>"
          required
        >

        <!-- ninja Strength -->
        <label for="skill">Ninja Skill (0-100):</label>
        <input
          type="number"
          id="skill"
          name="skill"
          value="<?php echo e(old('skill')); ?>"
          required
        >

        <!-- ninja Bio -->
        <label for="bio">Biography:</label>
        <textarea
          rows="5"
          id="bio"
          name="bio"
          required
        ><?php echo e(old('bio')); ?></textarea>

        <!-- select a dojo -->
        <label for="dojo_id">Dojo:</label>
        <select id="dojo_id" name="dojo_id" required>
          <option value="" disabled selected>Select a dojo</option>
            <?php $__currentLoopData = $dojos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dojo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($dojo->id); ?>" <?php echo e(old('dojo_id') == $dojo->id ? 'selected' : ''); ?>>
                    <?php echo e($dojo->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <button type="submit" class="btn mt-4">Create Ninja</button>

        <!-- validation errors -->
        <?php if($errors->any()): ?>
            <ul class = "px-4 py-2 bg-red-100">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="my-2 text-red-500"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>

      </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\20221071\Herd\ninja_network\resources\views/ninjas/create.blade.php ENDPATH**/ ?>