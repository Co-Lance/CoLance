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

    <div class="flex pb-10 flex-col md:w-6/12 md:h-screen  lg:w-4/12 lg:h-screen w-screen bg-gray-900 shadow-lg"  >
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
                        <a href="{{ url('/products') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Products</a>
                        <a href="{{ url('/addProduct') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Product</a>
                        <a class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" href="{{url('offres')}}">My offers</a>
                        <a href="{{route('createoffre')}}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" >Create Offer</a>

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
                Offers
            </h1>
        </nav>


        <div class="flex flex-col flex-grow p-4 items-center ">

            <!-- Content for each tab goes here -->


            <div class="flex gap-3 flex-wrap justify-center mt-5">
                @foreach($listoffres as $offre)
                    <div class="flex flex-col  max-w-xs bg-white border border-gray-200 rounded-lg shadow">
                        <div class="rounded-t-lg w-full h-2/4">
                            <img src="{{ $offre->image }}" alt="" class="rounded-t-lg w-full h-full object-cover" />
                        </div>
                        <div class="flex flex-col p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $offre->name }}</h5>

                            <p class="mb-3 font-normal text-md text-gray-700">{{ $offre->description }}</p>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 py-5">
                                @php
                                    $now = now();
                                    $createdAt = $offre->created_at;
                                    $isToday = $now->toDateString() === $createdAt->toDateString();
                                @endphp

                                @if ($isToday)
                                    @if ($now->diffInMinutes($createdAt) < 60)
                                        {{ $now->diffInMinutes($createdAt) }} minutes ago
                                    @else
                                        {{ $now->diffInHours($createdAt) }} hours ago
                                    @endif
                                @else
                                    {{ $createdAt->diffInDays($now) }} days ago
                                @endif
                            </p>
                            <!-- Assuming you have a URL for a 'Continue' link -->
                            <div>

                                <div class="flex flex-wrap m-4">
                                    <form method="post" action="{{ route('offers.destroy', $offre->id) }}" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-500 border border-2 border-red-500 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300">Delete</button>
                                    </form>
                                    <form method="post" action="{{ route('offers.edit', $offre->id) }}" >
                                        @csrf
                                        @method('Get')
                                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-500 border border-2 border-red-500 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 mx-5">Edit</button>
                                    </form>
                                    <form method="post"  action="{{route('requests.addrequest',$offre->id)}}">
                                        @csrf

                                        <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-500 border border-2 border-red-500 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300">Request</button>
                                    </form>
                                </div>
                                </div>
                        </div>
                    </div>
                @endforeach






            </div>
        </div>




        <div class="bg-white mt-auto p-3 text-gray-600 text-center">
            <p>&copy; <?php echo date('Y'); ?> Copyrights CO-SHARE <span class="ml-2">&trade;</span></p>
        </div>
    </div>

</div>
</body>
</html>
