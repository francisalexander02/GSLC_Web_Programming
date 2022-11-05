@props(['problem'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl font-bold">
                <a href="/problems/{{ $problem->id }}">{{ $problem->title }}</a>
            </h3>
            <div class="text-xl mb-4">Author: {{ $problem->author }}</div>
            <x-problem-tags :tagsCsv="$problem->tags"/>
        </div>
    </div>
</x-card>
