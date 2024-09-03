<div class="w-full brutalism brutalism-hover p-2 flex gap-2 justify-between items-center"wire:click="click" wire:confirm='are you sure to change task status to completed' >
    <div class="flex gap-2 items-center" >
        </span>
        <label for="vehicle1" class="{{ $task->status !='todo'?'line-through':'' }}"> {{ $task->task }}</label>
    </div>
    <div class="flex flex-row gap-2">

    <span  class="inline text-red-900 cursor-pointer" wire:click="arsip">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
          </svg>

    </span>
      </div>
</div>
