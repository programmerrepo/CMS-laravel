<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Post</div>

                <div class="card-body">
               
           <?php if($tagss->count() > 0): ?>    
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Tag</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $tagss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
        <td>
         <?php echo e($pos->tag); ?>

      </td>
       <td>
           <a class="" href="<?php echo e(route('tag.edit' , ['id' => $pos ->id ])); ?>">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
        
      </td>
        <td>
           <a href="<?php echo e(route('tag.delete' , ['id' => $pos ->id ])); ?>">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
       
  </tbody>
</table>
    <?php else: ?>
    
    <p class="text-center">There is no tag to view.</p>
        
 <?php endif; ?> 
            
               
                   
               
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>