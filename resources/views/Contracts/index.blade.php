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
                            <a href="{{ url('/Contracts') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Inventory</a>
                            <a href="{{ url('/addcontract') }}" class="text-sm text-white font-medium py-2 px-2 hover:bg-red-700 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">Add Product to inventory</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/auth" class="md:block lg:block text-sm mt-auto text-center -ml-4 font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <span>Logout</span>
            </a>
        </div>

        <!-- Content Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">

                            @extends('contracts.layout')

                            @section('content')
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h2>CO-Lance</h2>
                                                </div>
                                                <div class="card-body">
                                                    <a href="{{ url('/contract/create') }}" class="btn btn-success btn-sm" title="Add New Contract">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                                    </a>
                                                    <br/>
                                                    <br/>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>contract_name</th>
                                                                    <th>contract_type</th>
                                                                    <th>contract_status</th>
                                                                    <th>contract_description</th>
                                                                    <th>contract_date</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($contracts as $item)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->contract_name }}</td>
                                                                    <td>{{ $item->contract_type }}</td>
                                                                    <td>{{ $item->contract_status }}</td>
                                                                    <td>{{ $item->contract_description }}</td>
                                                                    <td>{{ $item->contract_date }}</td>
                                                                    <td>
                                                                        <a href="{{ url('/contract/' . $item->id) }}" title="View contract">
                                                                            <button class="btn btn-info btn-sm">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i> View
                                                                            </button>
                                                                        </a>
                                                                        <a href="{{ url('/contract/' . $item->id . '/edit') }}" title="Edit Contract">
                                                                            <button class="btn btn-primary btn-sm">
                                                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                                            </button>
                                                                        </a>
                                                                        <form method="POST" action="{{ url('/contract' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                            {{ method_field('DELETE') }}
                                                                            {{ csrf_field() }}
                                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contract" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                                            </button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endsection

    <div class="py-20">
        <div class="container">
            <div class="mx-auto max-w-4xl sm:text-center">
                <img src="assets/images/landing/index-21.png" class="w-40 mx-auto" alt="">
                <h2 class="md:text-5xl text-3xl font-semibold tracking-tight">Contracts</h2>
                <div class="flex justify-center">
                    <p class="md:w-1/2 mt-6 text-xl/8 font-medium text-gray-500 dark:text-gray-400">We specialise in organising professional exchnage .</p>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grikd-cols-1 gap-6 mt-16">
                <div>
                    <div class="p-7 rounded-xl bg-amber-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">Electronic exchange</h3>
                        <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">We've designed and built ecommerce experiences that have driven sales.</p>
                        <a href="#" class="py-3 flex items-center justify-center w-full font-semibold rounded-md bg-white hover:bg-purple-500 hover:text-white transition-all duration-500 dark:bg-neutral-900 dark:hover:bg-purple-500 dark:hover:text-white ">Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" h-5 w-5 ms-3">
                                <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="p-7 rounded-xl bg-emerald-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">Material exchange</h3>
                        <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">The ability to independentiy value an enterprise is an essential tool for marking business and strategic decisions.</p>
                        <a href="#" class="py-3 flex items-center justify-center w-full font-semibold rounded-md bg-white hover:bg-purple-500 hover:text-white transition-all duration-500 dark:bg-neutral-900 dark:hover:bg-purple-500 dark:hover:text-white ">Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" h-5 w-5 ms-3">
                                <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="p-7 rounded-xl bg-red-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">Home deco exchange </h3>
                        <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">Strategic Business Leader is a trainig course from the Strategic Professional level.</p>
                        <a href="#" class="py-3 flex items-center justify-center w-full font-semibold rounded-md bg-white hover:bg-purple-500 hover:text-white transition-all duration-500 dark:bg-neutral-900 dark:hover:bg-purple-500 dark:hover:text-white ">Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" h-5 w-5 ms-3">
                                <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="p-7 rounded-xl bg-red-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">vintage exchange</h3>
                        <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">The ability to independently value an enterprise is an essential tool for making business and strategic decisions.</p>
                        <a href="#" class="py-3 flex items-center justify-center w-full font-semibold rounded-md bg-white hover:bg-purple-500 hover:text-white transition-all duration-500 dark:bg-neutral-900 dark:hover:bg-purple-500 dark:hover:text-white ">Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" h-5 w-5 ms-3">
                                <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="p-7 rounded-xl bg-amber-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">electronic exchange</h3>
                        <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">A unique opportunity to gain guidance and feedback from our expert.</p>
                        <a href="#" class="py-3 flex items-center justify-center w-full font-semibold rounded-md bg-white hover:bg-purple-500 hover:text-white transition-all duration-500 dark:bg-neutral-900 dark:hover:bg-purple-500 dark:hover:text-white ">Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" h-5 w-5 ms-3">
                                <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="p-7 rounded-xl bg-emerald-100 dark:bg-neutral-700/70">
                        <h3 class="text-xl font-semibold mb-7">books exchange</h3>
                        <p class="font-medium leading-7 text-gray-500 mb-6 dark:text-gray-400">Strategic Business Reporting is a Professional level training course. It covers topics related to advanced financial reporting, inccluding leasing.</p>
                        <a href="#" class="py-3 flex items-center justify-center w-full font-semibold rounded-md bg-white hover:bg-purple-500 hover:text-white transition-all duration-500 dark:bg-neutral-900 dark:hover:bg-purple-500 dark:hover:text-white ">Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class=" h-5 w-5 ms-3">
                                <path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
