<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>AutoDrive Motors</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f5f5f5;
      color: #222;
      line-height: 1.5;
    }
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    header {
      background-color: #111;
      color: #fff;
      padding: 15px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    header h1 {
      font-size: 24px;
      letter-spacing: 1px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin-left: 20px;
      font-size: 14px;
      text-transform: uppercase;
    }

    nav a:hover {
      color: #ffcb05;
    }

    .hero {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      padding: 50px 40px;
      background: linear-gradient(135deg, #101820, #343a40);
      color: #fff;
    }

    .hero-text {
      flex: 1 1 320px;
      padding-right: 20px;
    }

    .hero-text h2 {
      font-size: 36px;
      margin-bottom: 15px;
    }

    .hero-text p {
      margin-bottom: 20px;
      max-width: 500px;
    }

    .hero-text .btn {
      display: inline-block;
      padding: 10px 22px;
      background-color: #ffcb05;
      color: #111;
      border-radius: 4px;
      text-decoration: none;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 14px;
    }

    .hero-text .btn:hover {
      background-color: #ffdb4d;
    }

    .hero-image {
      flex: 1 1 280px;
      text-align: center;
    }

    .hero-image div {
      width: 100%;
      max-width: 420px;
      height: 220px;
      margin: 0 auto;
      border-radius: 12px;
      background: radial-gradient(circle at 20% 20%, #ffcb05, #111);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
    }

    main {
      padding: 40px;
    }

    section {
      margin-bottom: 40px;
    }

    section h2 {
      font-size: 26px;
      margin-bottom: 15px;
      border-left: 4px solid #ffcb05;
      padding-left: 10px;
    }

    .about p {
      max-width: 700px;
    }

    .models-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-top: 15px;
    }

    .model-card {
      background-color: #fff;
      border-radius: 8px;
      padding: 15px 15px 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .model-card h3 {
      margin-bottom: 5px;
      font-size: 20px;
    }

    .model-card .tagline {
      font-size: 13px;
      color: #777;
      margin-bottom: 10px;
    }

    .model-card ul {
      list-style: none;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .model-card ul li::before {
      content: "• ";
      color: #ffcb05;
      font-weight: bold;
    }

    .model-card .price {
      font-weight: bold;
      color: #111;
      margin-top: 4px;
    }

    .contact-form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      max-width: 450px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }

    .contact-form label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 8px 10px;
      margin-bottom: 12px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .contact-form button {
      padding: 10px 16px;
      border: none;
      border-radius: 4px;
      background-color: #111;
      color: #fff;
      cursor: pointer;
      font-size: 14px;
      text-transform: uppercase;
      font-weight: bold;
    }

    .contact-form button:hover {
      background-color: #333;
    }

    footer {
      text-align: center;
      padding: 15px;
      background-color: #111;
      color: #aaa;
      font-size: 13px;
    }

    @media (max-width: 600px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        margin-top: 10px;
      }

      .hero {
        padding: 30px 20px;
      }

      main {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>

<?php if (isset($component)) { $__componentOriginal7f62e568a40669567f35a9fed6203163 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7f62e568a40669567f35a9fed6203163 = $attributes; } ?>
<?php $component = App\View\Components\Layout\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7f62e568a40669567f35a9fed6203163)): ?>
<?php $attributes = $__attributesOriginal7f62e568a40669567f35a9fed6203163; ?>
<?php unset($__attributesOriginal7f62e568a40669567f35a9fed6203163); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7f62e568a40669567f35a9fed6203163)): ?>
<?php $component = $__componentOriginal7f62e568a40669567f35a9fed6203163; ?>
<?php unset($__componentOriginal7f62e568a40669567f35a9fed6203163); ?>
<?php endif; ?>


<?php if (isset($component)) { $__componentOriginalf02069b532f504b17c9ead0e0bf2b7ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf02069b532f504b17c9ead0e0bf2b7ae = $attributes; } ?>
<?php $component = App\View\Components\Layout\Content::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout.content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout\Content::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo e($slot); ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf02069b532f504b17c9ead0e0bf2b7ae)): ?>
<?php $attributes = $__attributesOriginalf02069b532f504b17c9ead0e0bf2b7ae; ?>
<?php unset($__attributesOriginalf02069b532f504b17c9ead0e0bf2b7ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf02069b532f504b17c9ead0e0bf2b7ae)): ?>
<?php $component = $__componentOriginalf02069b532f504b17c9ead0e0bf2b7ae; ?>
<?php unset($__componentOriginalf02069b532f504b17c9ead0e0bf2b7ae); ?>
<?php endif; ?>

<footer>
  &copy; 2025 AutoDrive Motors. Static demo page for automobile website design.
</footer>

</body>
</html>
<?php /**PATH C:\laragon\www\BMDAutomobiles\BMDAutos-app\resources\views/components/layout/home.blade.php ENDPATH**/ ?>