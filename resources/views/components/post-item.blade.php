<article class="flex flex-col w-full my-4 bg-white shadow">
    <!-- Article Image -->
    <a href="{{route('view', $post)}}" class="hover:opacity-75">
        <img src="{{$post->getThumbnail()}}">
    </a>
    <div class="flex flex-col justify-start w-full p-6 bg-white">
        <div class="flex gap-4">
            @foreach($post->categories as $category)
                <a href="#" class="pb-4 text-sm font-bold text-blue-700 uppercase">
                    {{$category->title}}
                </a>
            @endforeach
        </div>
        <a href="{{route('view', $post)}}" class="pb-4 text-3xl font-bold hover:text-gray-700">
            {{$post->title}}
        </a>
        <p href="#" class="pb-3 text-sm">
            By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on {{$post->getFormattedDate()}}
        </p>
        <a href="{{route('view', $post)}}" class="pb-6">
            {{$post->shortBody()}}
        </a>
        <a href="#" class="text-gray-800 uppercase hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>
