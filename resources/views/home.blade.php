<x-layout>
    <div class="max-w-2xl mx-auto">
        @forelse ($events as $event)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $event->name }}</div>
                        <div class="mt-1">{{ $event->description }}</div>
                        <div class="text-sm text-gray-500 mt-2">
                            {{ $event->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No events yet.</p>
        @endforelse
    </div>
</x-layout>
