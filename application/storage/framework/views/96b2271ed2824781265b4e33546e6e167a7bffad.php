<!--bulk actions-->
<?php echo $__env->make('pages.timesheets.components.actions.checkbox-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--main table view-->
<?php echo $__env->make('pages.timesheets.components.table.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--filter-->
<?php if(auth()->user()->is_team): ?>
<?php echo $__env->make('pages.timesheets.components.misc.filter-timesheets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<!--timesheets--><?php /**PATH /home/x/x4power/erp.cit-llc.ru/public_html/application/resources/views/pages/timesheets/components/table/wrapper.blade.php ENDPATH**/ ?>