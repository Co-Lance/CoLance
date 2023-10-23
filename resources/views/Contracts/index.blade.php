<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Co-Lance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add your CSS stylesheets here -->
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css">
    <!-- Add your fonts and stylesheets here -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="flex flex-col lg:flex-row md:flex-row" style="background-color: #F6F6F6;">
        <!-- Sidebar -->
        <div class="flex pb-10 flex-col md:w-4/12 md:h-screen lg:w-2/12 lg:h-screen w-screen bg-gray-900 shadow-lg">
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
                            <a href="{{ route('contract.index') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Contract</a>
                            <a href="{{ route('addcontract') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add new contract</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/auth" class="md:block lg:block text-sm mt-auto text-center -ml-4 font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <span>Logout</span>
            </a>
        </div>

        <!-- Content Section -->
       <!-- component -->

<div class="grid grid-cols-2 gap-4">

    @foreach ($contracts as $contract)
    @if ($contract->contract_type == "one way exchange")

    <div class="bg-blue-300 w-52 h-72 m-8 static rounded-lg ">
        <div class="bg-white w-52 h-72 -m-2 hover:m-0 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
            <h1 class="m-4 text-2xl font-bold">{{$contract->contract_name}}</h1>
            <hr class="m-4 rounded-2xl border-t-2">

            <p class="m-4 text-sm">{{$contract->contract_description}}</p>

            <a href="{{ route('contractedit', ['id' => $contract->id]) }}" >

                <div class="btn btn-success ms-2 me-5"><i class="fa-solid fa-pen-to-square"></i></div>
                </a>            <a href="{{ route('contract.destroy', ['id' => $contract->id]) }}" >
            <div class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></div></a>
        </div>
    </div>

    @elseif ($contract->contract_type == "two way exchnage")

    <div class="bg-yellow-300 w-52 h-72 m-8 static rounded-lg ">
        <div class="bg-white w-52 h-72 m-2 hover:m-0 absolute rounded-lg shadow-lg hover:shadow-2xl transition-all duration-150 ease-out hover:ease-in ">
            <h1 class="m-4 text-2xl font-bold">{{$contract->contract_name}}</h1>
            <hr class="m-4 rounded-2xl border-t-2">
            <p class="m-4 text-sm">{{$contract->contract_description}}</p>
            <a href="{{ route('contractedit', ['id' => $contract->id]) }}" >

            <div class="btn btn-success ms-2 me-5"><i class="fa-solid fa-pen-to-square"></i></div>
            </a>
                <a href="{{ route('contract.destroy', ['id' => $contract->id]) }}" >

            <div class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></div></a>
        </div>
    </div>

    @endif
    @endforeach

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
