<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Co-Lance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
</head>

<body>
<div class="flex flex-col lg:flex-row md:flex-row" style="background-color: white;">

    <div class="flex pb-10 flex-col md:w-4/12 md:h-screen lg:w-2/4 lg:h-screen w-screen bg-gray-900 shadow-lg " >
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
                        <a href="{{route('offres')}}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">My Offers</a>
                        <a href="{{route('createoffre')}}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" >Create Offer</a>
                        <a href="#" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Off</a>
                        <a href="#" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Settings</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="/auth" class="md:block lg:block text-sm mt-auto text-center -ml-4 font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out">
            <span>Logout</span>
        </a>
    </div>

    <div class="flex flex-col overflow-y-auto flex-grow " style="height:100vh;">

        <div class="flex flex-col flex-grow p-4">

            <div class=" ml-10 sm:ml-1 ">

                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl text-gray-800 text-center   lg:ml-72 pt-10" >Offres</h1>
                <div class="flex items-center justify-center py-4 md:py-8 flex-wrap ">
                    <button type="button"  class="text-white border  hover:border-gray-200 border-gray-900 bg-gray-900   focus:ring-4 focus:outline-none  rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3  focus:ring-gray-800 focus:bg-teal-800" >All categories</button>
                    <button type="button" class="text-white border  hover:border-gray-200 border-gray-900 bg-gray-900   focus:ring-4 focus:outline-none  rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3  focus:ring-gray-800 focus:bg-teal-800">Shoes</button>
                    <button type="button" class="text-white border  hover:border-gray-200 border-gray-900 bg-gray-900   focus:ring-4 focus:outline-none  rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3  focus:ring-gray-800 focus:bg-teal-800">Bags</button>
                    <button type="button" class="text-white border  hover:border-gray-200 border-gray-900 bg-gray-900   focus:ring-4 focus:outline-none  rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3  focus:ring-gray-800 focus:bg-teal-800">Electronics</button>
                    <button type="button" class="text-white border  hover:border-gray-200 border-gray-900 bg-gray-900   focus:ring-4 focus:outline-none  rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3  focus:ring-gray-800 focus:bg-teal-800">Gaming</button>
                </div>
                <div class=" text-center border-opacity-10  flex flex-wrap gap-6 pt-10 pl-28  ">
                    @foreach($listoffres as $offre)
                        <div class="pb-8 pr-4 border border-5">
                            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                                <div>
                                    <img alt="person capturing an image" src="{{$offre->image}}" tabindex="0" class="focus:outline-none w-full h-44 mt-8 ml-2" />
                                </div>
                                <div class="bg-white ml-2">
                                    <div class="flex items-center justify-between px-4 pt-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                            </svg>
                                        </div>
                                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold ">{{$offre->name}}</h2>
                                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                                        </div>
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">The Apple iPhone XS is available in 3 colors with 64GB memory. Shoot amazing videos</p>
                                        <div class="flex mt-4">
                                            <div>
                                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                            </div>
                                            <div class="pl-2">
                                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between py-4">
                                            <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Bay Area, San Francisco</h2>
                                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>

                                        </div>
                                        <div class="flex flex-wrap m-2">
                                        <form method="post" action="{{ route('offers.destroy', $offre->id) }}" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex-no-shrink bg-red-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 text-white rounded-full" >Delete</button>
                                        </form>
                                        <form method="post" action="{{ route('offers.edit', $offre->id) }}" >
                                            @csrf
                                            @method('Get')
                                            <button type="submit" class="flex-no-shrink bg-red-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-red-500 text-white rounded-full" >Edit</button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            </div>



        </div>

    </div>

</div>
</body>
</html>
