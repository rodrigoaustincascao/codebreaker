@props(['message', 'letters'])

<div class="text-center flex flex-wrap gap-7 mt-auto">

    @foreach (explode(' ', $message) as $word)
        <div class="word flex gap-x-2">
            @foreach (str_split($word) as $character)
                <div>
                    <span class="material-symbols-outlined character !text-4x1">
                        {{ $letters[strtolower($character)] ?? $character }}
                    </span>

                    <div class="bg-gray-200 w-12 h-12"></div>
                </div>
            @endforeach
        </div>
    @endforeach

</div>
