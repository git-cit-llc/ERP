<!--main table view-->
<?php echo $__env->make('pages.tasks.components.kanban.kanban', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--Update Card Poistion (team only)-->
<?php if(auth()->user()->is_team): ?>
<span id="js-tasks-kanban-wrapper" class="hidden" data-position="<?php echo e(url('tasks/update-position')); ?>">placeholder</script>
<?php endif; ?><?php /**PATH /home/x/x4power/erp.cit-llc.ru/public_html/application/resources/views/pages/tasks/components/kanban/wrapper.blade.php ENDPATH**/ ?>