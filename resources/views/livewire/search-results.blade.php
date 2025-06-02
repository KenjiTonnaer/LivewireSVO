<div class="{{ $show ? 'block' : 'hidden'}}">
    <div class="mt-4 p-4 absolute border rounded-md text-white bg-gray-700 border-indigo-600">
        <div class="flex justify-end pt-1 pr-3">
            <button class="text-red-600"
                type="button"
                wire:click="dispatch('search:clear-results')"
                >X
            </button>
        </div>

        @if (count($results) == 0)
        <p>No results found.</p>

        @endif

        @foreach ($results as $result)
            <div class="pt-2" wire:key="{{$result->id}}">
                <a href="/articles/{{$result->id}}">{{$result->title}}</a>
            </div>

        @endforeach

    </div>
</div>
