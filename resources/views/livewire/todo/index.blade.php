<div class="">
    <div class="p-4">
        <livewire:todo.create>
        <livewire:section/>
        <div class="flex flex-col gap-2 mt-3">

        @foreach ($tasks as $task)

        <livewire:card :$task :key="$task->id"/>
        @endforeach
        <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
        <ul x-sort>
            <li x-sort:item>
                <span x-sort:handle> - </span>foo
            </li>

            <li x-sort:item>
                <span x-sort:handle> - </span>bar
            </li>

            <li x-sort:item>
                <span x-sort:handle> - </span>baz
            </li>
        </ul>
        </div>

    </div>





</div>
