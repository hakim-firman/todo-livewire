

@php

    if ($variant=='primary') {
       $class =' bg-blue-700 brutalism brutalism-active text-white';
    }else {
        $class='bg-slate-700';
    };
@endphp

<button type={{ $type }} class="{{ $class }}  p-2 text-{{ $size }}">
   {{ Str::upper($label) }}
</button>
