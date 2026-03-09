<x-layout>
    <div class="max-w-2xl mx-auto">
        @forelse ($events as $event)
            <div class="collapse collapse-arrow bg-base-100 shadow mt-8">
                <input type="checkbox" />
                <div class="collapse-title">
                    <div class="font-semibold">{{ $event->name }}</div>
                    <div class="mt-1">{{ $event->description }}</div>
                    <div class="text-sm text-gray-500 mt-2">
                        {{ $event->created_at->diffForHumans() }}
                    </div>
                </div>
                <div class="collapse-content">
                    <div class="mt-1">Hi</div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No events yet. Be the first to post!</p>
        @endforelse
    </div>
</x-layout>
