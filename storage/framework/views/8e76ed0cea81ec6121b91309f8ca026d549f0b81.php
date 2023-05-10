<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body container">
                    <div class="row">
                      <div class="col-lg-3 border font-weight-bold p-2">Name</div>  
                      <div class="col-lg-3 border font-weight-bold p-2">Login(Email)</div>
                      <div class="col-lg-3 border font-weight-bold p-2">Date Create</div>
                      <div class="col-lg-3 border font-weight-bold p-2">Role</div>
                    </div>
                    <div class="user_item_list">
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                      <div class="col-lg-3 border p-2"><?php echo e($user->name); ?></div>  
                      <div class="col-lg-3 border p-2"><?php echo e($user->email); ?></div>
                      <div class="col-lg-3 border p-2"><?php echo e($user->created_at); ?></div>
                      <div class="col-lg-3 border p-2"><?php echo e($user->role); ?></div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                    <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>         
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/admin/index.blade.php ENDPATH**/ ?>