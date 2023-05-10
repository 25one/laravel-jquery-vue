

<?php $__env->startSection('main'); ?>

<div class="super_container_inner">
    <div class="super_overlay"></div>
    <div class="products">
        <div class="container">
            <div class="row products_row">
               
              <?php
              //print_r($products);
              ?>

              <?php echo $__env->make('product.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                     

            </div>
        </div>
    </div>

    <div class="button load_more ml-auto mr-auto" style="margin-bottom: 1em;"><a href="#" class="link_again">more</a></div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/mainIndex.js')); ?>"></script>
<script>
$(document).ready(function(){
   //alert('hi');

   $('.load_more').click(function() {
      BaseRecord.more = 1;
      BaseRecord.showMore();
      return false;
   });
   //$('body').on('click', '.load_more', function() {...});

   //header_search_button
   $('.header_search_button').click(function() {
      BaseRecord.search = $('.search_input').val();
      BaseRecord.showSearch();
   });
});
</script>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('product.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-products/resources/views/product/index.blade.php ENDPATH**/ ?>