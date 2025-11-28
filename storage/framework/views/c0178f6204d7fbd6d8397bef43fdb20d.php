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
<div class="contact-form">
<form method="POST" action="/store">
        <?php echo csrf_field(); ?>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServerUsername">Username</label>
                <div class="input-group">
                    <input type="text" name="username" class="form-control is-invalid" id="validationServerUsername"
                        aria-describedby="inputGroupPrepend3" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServerUsername">Phone No.</label>
                <div class="input-group">
                    <input type="text" name="phone" class="form-control is-invalid" id="validationServerUsername"
                        aria-describedby="inputGroupPrepend3" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationServer03">City</label>
                <input type="text" class="form-control is-invalid" id="validationServer03" required>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServerUsername">Issue</label>
                    <div class="input-group">
                        <input type="text" name="issue" class="form-control is-invalid"
                            id="validationServerUsername" aria-describedby="inputGroupPrepend3" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>
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
<?php /**PATH C:\laragon\www\BMDAutomobiles\BMDAutos-app\resources\views/Home/Booking.blade.php ENDPATH**/ ?>