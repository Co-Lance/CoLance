<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Comment</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-green-700 to-black">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-center items-center mt-5 mb-4">

                <h1 class="text-4xl font-bold text-center mb-4 text-darkgreen">Add Comment</h1>
            </div>
            <a href="{{ route('comments.index') }}"
                class="bg-green-600 hover:bg-green-800 text-white py-2 px-4 mb-4 inline-block rounded-full mx-auto">Back</a>

            @if(session('success'))
            <div class="bg-green-500 text-white px-4 py-2 mb-4">{{ session('success') }}</div>
            @endif

            <form action="{{ route('comments.store', ['forumId' => $forum->id]) }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-4">

                    <div>
                        <label class="block mb-1 font-semibold text-white" for="content">Content:</label>
                        <textarea name="content" id="content" class="w-full border border-gray-300 rounded-md px-3 py-2"
                            placeholder="Content"></textarea>
                        @error('content')
                        <div class="text-red-500 mt-1">{{ $message }}</div>
                        @enderror
                    </div>


                    <div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-20 rounded-full block mx-auto">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <d class="bg-white mt-auto p-3 text-gray-600 text-center">
        <p>&copy; <?php echo date('Y'); ?> Copyrights TDS
            <span class="ml-2">&trade;</span>
        </p>
    </d iv>
    < </body>

</html>