<x-layout>
    <div class="max-w-2xl mx-auto">
        @forelse ($events as $event)
            <div class="collapse collapse-arrow bg-base-100 shadow mt-8">
                <input type="checkbox" id="event-{{ $event->id }}" />
                <label for="event-{{ $event->id }}" class="collapse-title cursor-pointer">
                    <div class="font-semibold text-base-content">{{ $event->name }}</div>
                    <div class="mt-1 text-base-content">
                        Fri 27 Mar 19:30 - 22:00
                        <br>
                        Clwb Ifor Bach
                    </div>
                    <div class="text-sm text-base-content/50 mt-2">
                        Posted {{ $event->created_at->diffForHumans() }}
                    </div>
                </label>
                <div class="collapse-content">
                    <div class="mt-1 text-base-content text-sm">{{ $event->description }}</div>
                </div>
            </div>
        @empty
            <p class="text-base-content/50">No events yet. Be the first to post!</p>
        @endforelse
    </div>
</x-layout>
