
@php
    if ($variant=='primary') {
       $class .=' brutalism brutalism-focus';
    }else {
        $class='bg-slate-700';
    };
@endphp

<input type={{ $type }} class="{{ $class }} p-2 text-{{ $size }} focus:outline-none"  placeholder='{{ $placeHolder }}' wire:model='$parent.task'/>
