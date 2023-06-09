<?php
    /** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout :meta-title="'Lara Blog - Posts by category ' . $category->title" meta-description="By category description">
    <!-- Posts Section -->
        <section class="flex flex-col items-center w-full px-3 md:w-2/3">

            @foreach (($posts) as $post)
                <x-post-item :post="$post"></x-post-item>
            @endforeach

            {{$posts->onEachSide(1)->links()}}



        </section>

    <x-sidebar />
</x-app-layout>

