<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">View User</div>

                <div class="card-body">
               
           <?php if($ser->count() > 0): ?>    
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User Image</th>
      <th scope="col">Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $ser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
      
      
       <td  style="padding-left: 30px">
        
        <img src="https://www.pngarts.com/files/3/Avatar-PNG-Picture.png" class="img-thumbnail"  alt="<?php echo e($pot->name); ?>" width= 75px hight= 100px >

        </td>
        
        <td>
          <?php echo e($pot->name); ?>

          
        </td>
            
             <td>
           <a class="" href="<?php echo e(route('user.edit' , ['id' => $pot ->id ])); ?>">
            <i style = " padding-left :7px" class="fas fa-edit"></i>
           </a>
            
            <?php if($pot->admin): ?>
                 <a class="" href="<?php echo e(route('user.notadmin' , ['id' => $pot -> id])); ?>">
                  Make User
                </a>
            <?php else: ?>
                <a class="" href="<?php echo e(route('user.admin' , ['id' => $pot ->id])); ?>">
                  Make Admin
                </a>
            <?php endif; ?>
        
      </td>
        <td>
           <a href="<?php echo e(route('user.delete' , ['id' => $pot ->id ])); ?>">
               <i style = " padding-left :15px" class="fas fa-trash-alt"></i>
           </a>
      </td>
  
    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
       
  </tbody>
</table>
    <?php else: ?>
    
    <p class="text-center">There is no user to view.</p>
        
 <?php endif; ?> 
            
               
                   
               
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>