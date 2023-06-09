<x-app-layout meta-title="Lara's Blog - About us page" meta-description="Lorem Ipsum">
        <section class="flex flex-col items-center w-full px-3 ">

            <article class="flex flex-col w-full my-4 shadow">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="/storage/{{$widget->image}}" class="w-2/3" />
                </a>
                <div class="flex flex-col justify-start p-6 bg-white">

                    <h1 class="pb-4 text-3xl font-bold hover:text-gray-700">
                        {{$widget->title}}
                    </h1>

                </div>
                    {!! $widget->content !!}
                </div>
            </article>


        </section>
</x-app-layout>

