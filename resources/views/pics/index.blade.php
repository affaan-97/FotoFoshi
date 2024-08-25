<x-app-layout>
    <div class="title-container">
        <e class="index-title">Feed</e>
    </div>
    <div class='gallery'>
        @foreach ($pics as $pic)
            <div class="gallery-image">
                <a href="{{route('pics.show', $pic)}}">
                    <img src="{{ asset($pic->image) }}" alt="{{ $pic->name }}" style="height:362px; width:362px; border-radius:15px">
                </a>
               
            </div>
        @endforeach

    </div>
</x-app-layout>
