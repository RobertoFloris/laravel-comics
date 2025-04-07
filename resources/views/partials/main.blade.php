@php
    $comics = config('comics');
@endphp

<main class="p-3">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-md-3 mb-4">
                <x-card>
                    <x-slot:titolo>
                        {{ $comic['title'] }}
                    </x-slot:titolo>
                    <x-slot:img>
                        {{ $comic['thumb'] }}
                    </x-slot:img>
                </x-card>
            </div>
        @endforeach
    </div>
</main>
