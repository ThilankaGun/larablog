<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$metaTitle ?: 'Lara Blog'}}</title>
    <meta name="author" content="Lara">
    <meta name="description" content="{{$metaDescription}}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
        pre {
            padding: 1rem;
            background-color: #1a202c;
            color: white;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-50 font-family-karla">



    <!-- Text Header -->
    <header class="container w-full mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="text-5xl font-bold text-gray-800 uppercase hover:text-gray-700" href="{{route('home')}}">
                Lara Blog
            </a>
            <p class="text-lg text-gray-600">
                {{ \App\Models\TextWidget::getTitle('header')}}
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 bg-gray-100 border-t border-b" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="flex items-center justify-center block text-base font-bold text-center uppercase md:hidden"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="ml-2 fas"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="flex-grow w-full sm:flex sm:items-center sm:w-auto">
            <div class="container flex flex-col items-center justify-center w-full px-6 py-2 mx-auto mt-0 text-sm font-bold uppercase sm:flex-row">
                <a href="{{route('home')}}" class="px-4 py-2 mx-2 rounded hover:bg-blue-600 hover:text-white">Home</a>
                @foreach($categories as $category)
                    <a href="{{route('by-category', $category)}}" class="px-4 py-2 mx-2 rounded hover:bg-blue-600 hover:text-white">{{$category->title}}</a>
                @endforeach

                <a href="{{route('about-us')}}" class="px-4 py-2 mx-2 rounded hover:bg-blue-600 hover:text-white">About Us</a>
            </div>
        </div>
    </nav>


    <div class="container flex flex-wrap py-6 mx-auto">

        {{$slot}}



    </div>

    <footer class="w-full pb-12 bg-white border-t">

        <div class="container flex flex-col items-center w-full mx-auto">

            <div class="py-6 uppercase">&copy; myblog.com</div>
        </div>
    </footer>



</body>
</html>
