<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Forum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold">
                <div
                    class="items-center justify-center mt-5 -ml-2 lg:flex md:flex hidden text-4xl font-bold text-center mb-4 text-darkgreen">
                    <a href="/">
                        <img src="https://res.cloudinary.com/dnnhnqiym/image/upload/v1695073341/YouTube_Thumbnail_1280x720_px_1_sonpfc.png"
                            alt="Logo" style="width: 150px">
                    </a>
                </div>Edit Forum
            </h2>
            <a href="{{ route('forums.index') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Back</a>
        </div>

        @if(session('status'))
        <div class="bg-green-500 text-white px-4 py-2 mb-8">{{ session('status') }}</div>
        @endif

        <form action="{{ route('forums.update', $forum->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block mb-2 font-semibold text-gray-700" for="title">Title:</label>
                    <input type="text" name="title" id="title"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500"
                        placeholder="Title" value="{{ $forum->title }}">
                    @error('title')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 font-semibold text-gray-700" for="description">Description:</label>
                    <textarea name="description" id="description"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500"
                        placeholder="Description">{{ $forum->description }}</textarea>
                    @error('description')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 font-semibold text-gray-700" for="user_name">User Name:</label>
                    <input type="text" name="user_name" id="user_name"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500"
                        placeholder="User Name" value="{{ $forum->user_name }}">
                    @error('user_name')
                    <div class="text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 font-semibold text-gray-700" for="comments">Comments:</label>
                    <textarea name="comments" id="comments"
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-500"
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