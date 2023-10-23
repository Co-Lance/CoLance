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

    <div class="flex pb-10 flex-col md:w-4/12 md:h-screen  lg:w-2/12 lg:h-screen w-screen bg-gray-900 shadow-lg"  >
        <div class="items-center justify-center mt-5 -ml-2 lg:flex md:flex hidden">
            <a href="/">
                <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073341/YouTube_Thumbnail_1280x720_px_1_sonpfc.png" alt="Logo" style="width: 150px">
            </a>
        </div>
      
        <div class="lg:block md:block mt-4">
            <div id="profile" class="space-y-3 mt-8">
                <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1694623518/TDS-platform/e1g7fbd5r9ymja0jkxm6.jpg" alt="Admin picture" class="md:w-16 rounded-full mx-auto" style="width: 120px;">
                <div>
                    <h2 class="font-medium text-md md:text-sm text-center text-red-600">Admin</h2>
                    <p class="text-md text-gray-300 text-center">Foulen ben foulen</p>
                </div>
            </div>
            <div class="pr-16 mt-10">
                <div class="p-4">
                <div id="menu" class="flex flex-col space-y-2">
               
                        <a href="{{ url('/categories') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Categories</a>
                        <a href="{{ url('/categories/create') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Categorie</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="/auth" class="md:block lg:block text-sm mt-auto text-center -ml-4 font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out">
            <span>Logout</span>
        </a>
    </div>

    <div class="flex flex-col overflow-y-auto flex-grow" style="height:100vh;">
        <nav class="bg-white shadow-lg p-6 mb-10">
            <h1 class="text-2xl font-bold text-blue-950">
            Categories
            </h1>
        </nav>
       

        <div class="flex flex-col flex-grow p-4 items-center ">
            
            <!-- Content for each tab goes here -->



    <div class="container mx-auto py-6">
        <h1 class="text-2xl font-semibold ml-4 mb-6">Categories</h1>
        <div class="bg-white shadow-md  rounded-lg my-6 mx-4">
            <table class="min-w-full bg-white  rounded-xl">
                <thead>
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase tracking-wider font-semibold text-gray-700">Name</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase tracking-wider font-semibold text-gray-700">color</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase tracking-wider font-semibold text-gray-700">Description</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase tracking-wider font-semibold text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td class="text-left py-3 px-4">{{ $category->name }}</td>
                            <td class="text-left py-3 px-4">
                            <span class="inline-block w-6 h-6 rounded-full" style="background-color: {{ $category->color }}"></span>
                        </td>
                            <td class="text-left py-3 px-4">{{ $category->description }}</td>
                            <td>   <div class="flex flex-row gap-2 mr-4">
                <a  href="{{ route('categories.delete', ['id' => $category->id]) }}" class="mt-auto">
                    <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-500 border border-2 border-red-500 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300">
                       supprimer
                        
                    </span></a>
                    <a  href="{{ route('categories.edit', ['id' => $category->id]) }}">
                    <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-teal-600 border border-2 border-teal-800 rounded-lg hover:bg-black hover:text-white focus:ring-4 focus:outline-none focus:ring-teal-300">
                       modifier
                        <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                </a></div></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


  




    <div class="mt-auto p-3 text-gray-600 text-center w-full">
            <p>&copy; <?php echo date('Y'); ?> Copyrights CO-SHARE <span class="ml-2">&trade;</span></p>
        </div>
    </div>

</div>
</body>
</html>
