<?php if (isset($component)) { $__componentOriginal969d909b50db53e6e65329ec9c31304f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal969d909b50db53e6e65329ec9c31304f = $attributes; } ?>
<?php $component = App\View\Components\Layout\Home::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout\Home::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal969d909b50db53e6e65329ec9c31304f)): ?>
<?php $attributes = $__attributesOriginal969d909b50db53e6e65329ec9c31304f; ?>
<?php unset($__attributesOriginal969d909b50db53e6e65329ec9c31304f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal969d909b50db53e6e65329ec9c31304f)): ?>
<?php $component = $__componentOriginal969d909b50db53e6e65329ec9c31304f; ?>
<?php unset($__componentOriginal969d909b50db53e6e65329ec9c31304f); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\BMDAutomobiles\BMDAutos-app\resources\views/Home/index.blade.php ENDPATH**/ ?>