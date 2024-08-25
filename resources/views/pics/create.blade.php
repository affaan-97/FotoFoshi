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

<x-app-layout>
    <div class="form-layout">
        <h1 class="form-title">
            Upload Image
        </h1>
        <form  class="upload-form" action="{{ route('pics.store')}}" method="POST"  enctype="multipart/form-data"> 
            @csrf
            <label for="input-file" id="droparea" >
                    <input name="image" type="file" accept="image/*" title="Select Image" id="input-file" hidden onchange="previewImage(event)">
                    <p class="select-llabel">Select Image</p>
                    {{-- <img id="imagePreview" src="#"> --}}
            </label>
            
            <div class="descriptiondiv">
                <label for="description">Description:</label>
                <textarea name="description" id="description" placeholder="Write a desciption about the picture"></textarea>
           
            </div>
            <div class="submitButton">
                <button class="uploadsubmit" type="submit">Upload</button>
                <a href="{{route('pics.index')}}" class="cancel-button">Cancel</a>
            </div>
            
        </form>
    </div>
</x-app-layout>
