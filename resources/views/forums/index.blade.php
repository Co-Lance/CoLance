<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="bg-gradient-to-r from-gray-100 to-zinc-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/6 bg-gray-900 shadow-lg">
            <div class="flex items-center justify-center mt-5 mb-8">
                <a href="/">
                    <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073341/YouTube_Thumbnail_1280x720_px_1_sonpfc.png"
                        alt="Logo" style="width: 150px">
                </a>
            </div>

            <div class="mt-4">
                <div id="profile" class="space-y-3 mt-8">
                    <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1694623518/TDS-platform/e1g7fbd5r9ymja0jkxm6.jpg"
                        alt="Admin picture" class="md:w-16 rounded-full mx-auto" style="width: 120px;">
                    <div>
                        <h2 class="font-medium text-md md:text-sm text-center text-red-600">Admin</h2>
                        <p class="text-md text-gray-300 text-center">Foulen ben foulen</p>
                    </div>
                </div>
            </div>
            <a href="/auth"
                class="block text-sm mt-auto text-center -ml-4 font-medium text-gray-300 hover:text-red-700 hover:scale-105 rounded-md transition duration-150 ease-in-out">
                <span>Logout</span>
            </a>
        </div>

        <!-- Content -->
        <div class="w-5/6">
            <div class="container mx-auto mt-2 px-4 py-8">
                <div class="flex justify-between items-center mb-4">
                    <div class="items-center justify-center mt-5 -ml-2">
                        <a href="/">
                            <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073341/YouTube_Thumbnail_1280x720_px_1_sonpfc.png"
                                alt="Logo" style="width: 150px">
                        </a>
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-2">Welcome to the Co-Lance Forums</h2>
                    <a href="{{ route('forums.create') }}"
                        class="bg-green-500 hover:bg-green-800 text-white py-2 px-4 rounded-md">Create Forum</a>
                </div>

                @if(session('success'))
                <div class="bg-green-900 text-white px-4 py-2 mb-4 shadow-md rounded">{{ session('success') }}</div>
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                @endif

                <div class="overflow-x-auto">
                    <table class="w-full bg-white shadow-md rounded">
                        <thead>
                            <tr class="bg-gradient-to-r from-green-700 to-black text-white">
                                <th class="py-3 px-6 text-left">Title</th>
                                <th class="py-3 px-6 text-left">Description</th>
                                <th class="py-3 px-6 text-left">User Name</th>
                                <th class="py-3 px-6 text-left">Comments</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($forums as $forum)
                            <tr>
                                <td class="py-4 px-6">{{ $forum->title }}</td>
                                <td class="py-4 px-6">{{ $forum->description }}</td>
                                <td class="py-4 px-6">{{ $forum->user_name }}</td>
                                <td class="py-4 px-6">{{ $forum->comments }}</td>
                                <td class="py-4 px-6 text-center">

                                    <a href="{{ route('forums.edit', $forum->id) }}"
                                        class="text-yellow-600 hover:text-yellow-800 mx-2">Edit</a>
                                    <form action="{{ route('forums.delete', $forum->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('GET')
                                        <button type="submit"
                                            class="text-red-600 hover:text-red-800 mx-2">Delete</button>
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
</body>

</html>