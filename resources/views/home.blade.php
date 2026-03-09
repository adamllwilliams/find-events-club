<x-layout>
    <div class="max-w-2xl mx-auto">
        {{-- @foreach ($events as $event) --}}
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">Event Name</div>
                        <div class="mt-1">Event Description</div>
                        <div class="text-sm text-gray-500 mt-2">
                            11 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        {{-- @endforeach --}}
    </div>
</x-layout>
