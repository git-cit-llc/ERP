<?php if(auth()->user()->is_team): ?>
<?php echo $__env->make('nav.leftmenu-team', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(auth()->user()->is_client): ?>
<?php echo $__env->make('nav.leftmenu-client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH /home/x/x4power/erp.cit-llc.ru/public_html/application/resources/views/nav/leftmenu.blade.php ENDPATH**/ ?>