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

<x-app-layout>
    <div class="show-container-primary">
        <div class="show-container">
            <div class="show-title">
                <h1> {{ $pic->name }} </h1>
            </div>
            <div class="show-img">
                <img src="{{ asset($pic->image) }}" alt="{{ $pic->name }}" >
            </div>
            <div class="show-data">
                <div class="show-desc">
                    {{ $pic->description }}
                </div>
                <div class="show-meta">
                    <p>
                        {{ $pic->created_at }}
                    </p>
                    <p>
                        {{ $pic->user ? $pic->user->name : "TESTER" }}
                    </p>
                </div>
            </div>

            @php
                 $currentUserId = Auth::id();
            @endphp

            <div class="show-delete">
                @if ($pic->user_id === $currentUserId)
                    <button  class="delete-button" id="myBtn" onclick="viewmodal(event)">Delete</button>
                @endif
                {{--  --}}
                 <a href="{{route('pics.index',$pic)}}" class="cancel-button" >Cancel</a> 
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
                <form action="{{route('pics.destroy',$pic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="delete-button">Delete</button>
                </form>
                
                <button class="cancel-button" id="modal-close" onclick="closemodal(event)">Cancel</button> 
            </div>
        </div>
    </div>
  
  </div>
  
</x-layout>
