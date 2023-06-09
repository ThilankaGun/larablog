<?php
    /** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout meta-description="Lara's personal blog about coding tutorials">
    <!-- Posts Section -->
        <section class="flex flex-col items-center w-full px-3 md:w-2/3">

            @foreach (($posts) as $post)
                <x-post-item :post="$post"></x-post-item>
            @endforeach

            {{$posts->onEachSide(1)->links()}}



        </section>

    <x-sidebar />
</x-app-layout>

