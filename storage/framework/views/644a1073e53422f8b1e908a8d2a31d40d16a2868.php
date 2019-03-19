<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Category</div>

                <div class="card-body">
               
     <?php if($cat->count() > 0): ?>
         
         
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoyName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
      <th scope="row"><?php echo e($categoyName->name); ?></th>
      <td>
           <a class="" href="<?php echo e(route('category.edit' , ['id' => $categoyName ->id ])); ?>">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
        
      </td>
      <td>
           <a href="<?php echo e(route('category.delete' , ['id' => $categoyName ->id ])); ?>">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
  </tbody>
</table>

<?php else: ?>
    <p class="text-center">There is no category.</p>
        
 <?php endif; ?>       
            
               
               
                      
               
               
               
               
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>