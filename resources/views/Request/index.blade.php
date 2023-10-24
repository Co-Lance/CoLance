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
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@v0.74.0/dist/L.Control.Locate.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@v0.74.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.74.4/dist/L.Control.Locate.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                        <a href="{{ url('/products') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Products</a>
                        <a href="{{ url('/addProduct') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Product</a>
                        <a class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" href="{{url('offres')}}">My offers</a>
                        <a href="{{route('createoffre')}}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out" >Create Offer</a>
                        <a href="{{ url('/reclamation') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Reclamations</a>
                        <a href="{{ url('/addReclamation') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Reclamation</a>
                        <a href="{{ route('requests.index') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Requests</a>

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
                Products
            </h1>
        </nav>


        <div class="flex flex-col flex-grow p-4 items-center ">

            <!-- Content for each tab goes here -->


            <div class="gap-3 justify-center mt-5">
                <div class="relative overflow-x-auto shadow-md rounded-lg sm:rounded-lg">
                    <table class="w-full text-base text-left text-gray-500">
                        <thead class="text-base text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th class="px-4 py-3 sm:px-6 sm:py-4">Request offer</th>
                            <th class="px-4 py-3 sm:px-6 sm:py-4">Date of Submission</th>
                            <th class="px-4 py-3 sm:px-6 sm:py-4">User</th>
                            <th class="px-4 py-3 sm:px-6 sm:py-4">Location</th>
                            <th class="px-4 py-3 sm:px-6 sm:py-4"><span class="sr-only">Accept</span></th>
                            <th class="px-4 py-3 sm:px-6 sm:py-4"><span class="sr-only">Refuse</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listrequests as $request)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-8 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $request->offre->name }}
                                </th>
                                <td class="px-8 py-4">
                                    {{ $request->created_at }}
                                </td>
                                <td class="px-8 py-4">
                                    {{ $request->user_name }}
                                </td>
                                <td class="px-8 py-4" >
                                    {{ $request->offre->location }}
                                </td>
                                <td class="px-8 py-4 text-right">
                                    <a href="{{ route('requests.accept', ['id' => $request->id]) }}" class="font-medium text-blue-600 hover:underline">Accept</a>
                                </td>
                                <td class="px-8 py-4 text-right">
                                    <a href="{{ route('requests.delete', ['id' => $request->id]) }}" class="font-medium text-blue-600 hover:underline">Refuse</a>
                                </td>
                                <td class="px-8 py-4 text-right">
                                    <a onclick="addMarker({{ $request->latitude }} ,{{ $request->longitude }})" class="font-medium text-blue-600 hover:underline">show</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>


                <div id="map" class="h-96 w-full my-10"></div>





            </div>

        </div>




        <div class="bg-white mt-auto p-3 text-gray-600 text-center">
            <p>&copy; <?php echo date('Y'); ?> Copyrights CO-SHARE <span class="ml-2">&trade;</span></p>
        </div>
    </div>

</div>
</body>
</html>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.74.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>
<script>

    // Map initialization
    var map = L.map('map').setView([36.718022481154286, 9.197722604312807], 8);

    // Add the OpenStreetMap layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var locations = JSON.parse('@json($listrequests)');
    locations.map(function (location) {
        console.log(location.latitude, location.longitude);
       // L.marker([location.latitude, location.longitude]).addTo(map)
    });
    function addMarker(lat, lng) {
        L.marker([lat, lng]).addTo(map);
    }

</script>

