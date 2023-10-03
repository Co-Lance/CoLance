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

<head>
    <meta charset="UTF-8">
    <title>Edit Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto mt-2">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Edit Forum</h2>
            <a href="{{ route('forums.index') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Back</a>
        </div>

        @if(session('status'))
        <div class="bg-green-500 text-white px-4 py-2 mb-4">{{ session('status') }}</div>
        @endif

        <form action="{{ route('forums.update', $forum->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label class="block mb-1 font-semibold" for="title">Title:</label>
                    <input type="text" name="title" id="title"
                        class="w-full border border-gray-300 rounded-md px-3 py-2" placeholder="Title"
                        value="{{ $forum->title }}">
                    @error('title')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 font-semibold" for="description">Description:</label>
                    <textarea name="description" id="description"
                        class="w-full border border-gray-300 rounded-md px-3 py-2"
                        placeholder="Description">{{ $forum->description }}</textarea>
                    @error('description')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 font-semibold" for="user_name">User Name:</label>
                    <input type="text" name="user_name" id="user_name"
                        class="w-full border border-gray-300 rounded-md px-3 py-2" placeholder="User Name"
                        value="{{ $forum->user_name }}">
                    @error('user_name')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 font-semibold" for="comments">Comments:</label>
                    <textarea name="comments" id="comments" class="w-full border border-gray-300 rounded-md px-3 py-2"
                        placeholder="Comments">{{ $forum->comments }}</textarea>
                    @error('comments')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>