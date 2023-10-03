<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<div class="flex justify-center">
    <div class="w-full sm:w-2/3 lg:w-1/2 xl:w-1/3">
        <div class="bg-white shadow-md rounded-lg">

            <div class="bg-gray-50 border-b px-6 py-4">
                <h2 class="text-2xl font-semibold">{{ __('Forums') }}</h2>
            </div>

            <div class="p-6">
                @if (session('success'))
                <div class="mb-4 text-green-800">{{ session('success') }}</div>
                @endif

                @if ($forums->isEmpty())
                <p>{{ __('No forums found.') }}</p>
                @else
                <ul class="divide-y divide-gray-200">
                    @foreach ($forums as $forum)
                    <li class="py-4">
                        <div class="mb-2">
                            <h3 class="text-lg font-semibold">{{ $forum->title }}</h3>
                            <p class="text-gray-500">{{ $forum->description }}</p>
                            <p class="text-gray-500">{{ __('Created by') }}: {{ $forum->user_name }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('forums.show', $forum) }}" class="text-blue-600 hover:underline">
                                {{ __('View Comments') }}
                            </a>
                            <a href="{{ route('forums.edit', $forum) }}" class="text-yellow-600 hover:underline">
                                {{ __('Edit') }}
                            </a>
                            <form action="{{ route('forums.destroy', $forum) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">{{ __('Delete') }}</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div class="bg-gray-50 px-6 py-4">
                <a href="{{ route('forums.create') }}"
                    class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                    {{ __('Create Forum') }}
                </a>
            </div>

        </div>
    </div>
</div>

</html>