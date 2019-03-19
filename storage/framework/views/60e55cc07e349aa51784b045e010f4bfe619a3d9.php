<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View Post</div>

                <div class="card-body">
               
           <?php if($posts->count() > 0): ?>    
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Created_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
      
        
        <td>
        
        <img src="<?php echo e($pot->featured); ?>" class="img-thumbnail" alt="<?php echo e($pot->title); ?>">

        </td>
        
        <td>
          <?php echo e($pot->title); ?>

          </td>
     
      <td>
         <?php echo e($pot->created_at); ?>

      </td>
        
        <td>
         <?php echo e($pot->updated_at); ?>

      </td>
       <td>
           <a class="" href="<?php echo e(route('post.edit' , ['id' => $pot ->id ])); ?>">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
        
      </td>
        <td>
           <a href="<?php echo e(route('post.delete' , ['id' => $pot ->id ])); ?>">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
       
  </tbody>
</table>
    <?php else: ?>
    
    <p class="text-center">There is no post to view.</p>
        
 <?php endif; ?> 
            
               
                   
               
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>