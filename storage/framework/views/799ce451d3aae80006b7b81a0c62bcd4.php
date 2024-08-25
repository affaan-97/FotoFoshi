<script>

// When the user clicks on the button, open the modal
function viewmodal(event){
    var modal = document.getElementById("myModal");
    modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
function closemodal(event) {
    var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    var modal = document.getElementById("myModal");
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="show-container-primary">
        <div class="show-container">
            <div class="show-title">
                <h1> <?php echo e($pic->name); ?> </h1>
            </div>
            <div class="show-img">
                <img src="<?php echo e(asset($pic->image)); ?>" alt="<?php echo e($pic->name); ?>" >
            </div>
            <div class="show-data">
                <div class="show-desc">
                    <?php echo e($pic->description); ?>

                </div>
                <div class="show-meta">
                    <p>
                        <?php echo e($pic->created_at); ?>

                    </p>
                    <p>
                        <?php echo e($pic->user ? $pic->user->name : "TESTER"); ?>

                    </p>
                </div>
            </div>

            <?php
                 $currentUserId = Auth::id();
            ?>

            <div class="show-delete">
                <?php if($pic->user_id === $currentUserId): ?>
                    <button  class="delete-button" id="myBtn" onclick="viewmodal(event)">Delete</button>
                <?php endif; ?>
                
                 <a href="<?php echo e(route('pics.index',$pic)); ?>" class="cancel-button" >Cancel</a> 
            </div>
    
       </div>

    </div>
                <!-- The Modal -->
     <div id="myModal" class="modal">
                <!-- Modal content -->
        <div class="modal-content">
             <div class="modal-header">
                 <h2>Are you sure?</h2>
            </div>
            <div class="modal-body">
                 <p>You cant undo this operation. Are you sure <br> you want to delete this Foto?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo e(route('pics.destroy',$pic)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="delete-button">Delete</button>
                </form>
                
                <button class="cancel-button" id="modal-close" onclick="closemodal(event)">Cancel</button> 
            </div>
        </div>
    </div>
  
  </div>
  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FotoFoshi\resources\views/pics/show.blade.php ENDPATH**/ ?>