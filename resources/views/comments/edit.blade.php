<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Co-Lance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex flex-col lg:flex-row md:flex-row" style="background-color: #F6F6F6;">

        <div class="flex pb-10 flex-col md:w-4/12 md:h-screen  lg:w-2/12 lg:h-screen w-screen bg-gray-900 shadow-lg">
            <div class="items-center justify-center mt-5 -ml-2 lg:flex md:flex hidden">
                <a href="/">
                    <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073341/YouTube_Thumbnail_1280x720_px_1_sonpfc.png"
                        alt="Logo" style="width: 150px">
                </a>
            </div>

            <div class="lg:block md:block mt-4">
                <div id="profile" class="space-y-3 mt-8">
                    <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1694623518/TDS-platform/e1g7fbd5r9ymja0jkxm6.jpg"
                        alt="Admin picture" class="md:w-16 rounded-full mx-auto" style="width: 120px;">
                    <div>
                        <h2 class="font-medium text-md md:text-sm text-center text-red-600">Admin</h2>
                        <p class="text-md text-gray-300 text-center">Foulen ben foulen</p>
                    </div>
                </div>
                <div class="pr-16 mt-10">
                    <div class="p-4">
                        <div id="menu" class="flex flex-col space-y-2">
                            <a href="{{ url('/products') }}"
                                class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Products</a>
                            <a href="{{ url('/addProduct') }}"
                                class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add
                                Product</a>
                            <a class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
                                href="{{url('offres')}}">My offers</a>
                            <a href="{{route('createoffre')}}"
                                class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Create
                                Offer</a>
                            <a href="{{ url('/reclamation') }}"
                                class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Reclamations</a>
                            <a href="{{ url('/addReclamation') }}"
                                class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add

                                Reclamation</a>
                            <a href="{{ url('/forums') }}"
                                class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Forums</a>

                        </div>
                    </div>
                </div>
            </div>
            <a href="/auth"
                class="md:block lg:block text-sm mt-auto text-center -ml-4 font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <span>Logout</span>
            </a>
        </div>

        <div class="flex flex-col overflow-y-auto flex-grow" style="height:100vh;">
            <nav class="bg-white shadow-lg p-6 mb-10">
                <h1 class="text-2xl font-bold text-blue-950">
                    Edit Comment
                </h1>
            </nav>


            <div class="flex flex-col flex-grow p-4 items-center ">

                <!-- Content for each tab goes here -->


                <div class="flex flex-col gap-4 flex-wrap w-2/5 mt-5">

                    <!-- Edit Product Form -->
                    <form action="{{ route('comments.update', ['id' => $comment->id]) }}" method="post"
                        class="w-full max-w-sm">
                        @csrf
                        @method('PUT')
                        <!-- Use the PUT method for updating -->

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                            <textarea name="content" id="content" value="{{$comment->content }}" rows="3"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>{{ $comment->content }}</textarea>
                        </div>

                        <div class="flex justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-4">
                                Update Content
                            </button>
                            <button
                                class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                <a href="{{ url('/comments') }}">Back to Comments</a>
                            </button>
                        </div>
                    </form>


                </div>
            </div>




            <div class="bg-white mt-auto p-3 text-gray-600 text-center">
                <p>&copy; <?php echo date('Y'); ?> Copyrights TDS <span class="ml-2">&trade;</span></p>
            </div>
        </div>

    </div>
</body>

</html>