<div>
    <form wire:submit='store'>
    <div class="flex flex-row justify-center gap-2">


        <livewire:input-text :class="'w-full'" :placeHolder="'Enter your task here...'" wire:model='task'/>
        {{-- <input type="text" name="" id="" wire:model='task'> --}}

        <livewire:button :type="'submit'" :label="'Add'" />

    </div>
</form>
</div>
