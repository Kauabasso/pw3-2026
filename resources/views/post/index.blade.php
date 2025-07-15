<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <x-link-button href="{{ route('post.create') }}">
                        + Post
                    </x-link-button>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($posts as $post)
                    <div class="bg-gray-100 dark:bg-gray-700 rounded-lg shadow p-4">
            

                        <p class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $post->title }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">{{ $post->content}}</p>
                        

                   



                    </div>
                @empty
                    <p class="text-gray-600 dark:text-gray-300">Nenhum post feito.</p>
                @endforelse
            </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>