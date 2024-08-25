<script>
    function previewImage(event) {
        var image = document.getElementById('droparea');
        var reader = new FileReader();

        reader.onload = function(){
            if (reader.readyState == 2) {
                image.style.backgroundImage = 'url(' + reader.result + ')';
            }
        }

        reader.readAsDataURL(event.target.files[0]);
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
    <div class="form-layout">
        <h1 class="form-title">
            Upload Image
        </h1>
        <form  class="upload-form" action="<?php echo e(route('pics.store')); ?>" method="POST"  enctype="multipart/form-data"> 
            <?php echo csrf_field(); ?>
            <label for="input-file" id="droparea" >
                    <input name="image" type="file" accept="image/*" title="Select Image" id="input-file" hidden onchange="previewImage(event)">
                    <p class="select-llabel">Select Image</p>
                    
            </label>
            
            <div class="descriptiondiv">
                <label for="description">Description:</label>
                <textarea name="description" id="description" placeholder="Write a desciption about the picture"></textarea>
           
            </div>
            <div class="submitButton">
                <button class="uploadsubmit" type="submit">Upload</button>
                <a href="<?php echo e(route('pics.index')); ?>" class="cancel-button">Cancel</a>
            </div>
            
        </form>
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
<?php /**PATH C:\xampp\htdocs\FotoFoshi\resources\views/pics/create.blade.php ENDPATH**/ ?>