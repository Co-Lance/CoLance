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

<div class="flex flex-col overflow-y-auto flex-grow" style="height:100vh;">
    <nav class="bg-white shadow-lg p-6 mb-10">
        <h1 class="text-2xl font-bold text-blue-950">
            Forums
        </h1>
    </nav>

    <div class="flex flex-col flex-grow p-4 items-center">
        <!-- Content for each tab goes here -->

        <div class="flex gap-3 flex-wrap justify-center mt-5">
            @foreach($listforums as $forum)
            <div class="flex flex-col max-w-xs bg-white border border-gray-200 rounded-lg shadow">
                <div class="rounded-t-lg w-full h-2/4">
                    <img src="{{ $forum->image }}" alt="" class="rounded-t-lg w-full h-full object-cover" />
                </div>
                <div class="flex flex-col p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $forum->name }}</h5>
                    <p class="mb-3 font-normal text-md text-gray-700">{{ $forum->description }}</p>
                    <!-- Assuming you have a URL for a 'Continue' link -->
                    <div>
                        <a href="{{ route('forums.delete', ['id' => $forum->id]) }}" class="mt-auto">
                            <span
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-500 border border-2 border-red-500 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300">
                                Supprimer
                            </span>
                        </a>
                        <a href="{{ route('forums.edit', ['id' => $forum->id]) }}">
                            <span
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-red-500 border border-2 border-red-500 rounded-lg hover:bg-red-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300">
                                Modifier
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="bg-white mt-auto p-3 text-gray-600 text-center">
        <p>&copy; <?php echo date('Y'); ?> Co-Lance <span class="ml-2">&trade;</span></p>
    </div>
</div>

<body>

</body>

</html>