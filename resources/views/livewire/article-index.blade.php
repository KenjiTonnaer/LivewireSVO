<div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach ($articles as $article)
            <div class="bg-gray-800 rounded-lg shadow overflow-hidden" wire:key="article-{{ $article->id }}">
                <a href="/articles/{{ $article->id }}"
                   class="block bg-blue-600 hover:bg-blue-700 text-white text-center text-xl py-3 px-4">
                    <div class="truncate font-bold">
                        {{ $article->title }}
                    </div>
                </a>
                <div class="p-4 text-left text-gray-300">
                    {{ \Illuminate\Support\Str::words($article->content, 30) }}
                </div>
            </div>
        @endforeach
    </div>

<div class="fixed bottom-5 left-0 w-full flex justify-center z-50">
    <div class="bg-gray-900 bg-opacity-90 px-4 py-3 rounded flex flex-col sm:flex-row sm:items-center sm:space-x-4 space-y-2 sm:space-y-0">
        {{ $articles->links() }}
    </div>
</div>


</div>
