<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="x-element">
    <div class="x-each">
        <div class="x-title"><span class="x-highlight"><?php echo e($field->customfields_title); ?></span></div>

        <div class="x-content">
            <?php echo e(customFieldValue($field->customfields_name, $task, 'text')); ?>

        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/x/x4power/erp.cit-llc.ru/public_html/application/resources/views/pages/task/components/custom-fields.blade.php ENDPATH**/ ?>