<div>

    <div class="text-center pb-10">
        
        <input
            class="rounded-md w-1/5 border-0 py-2 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
            type="text"
            wire:model="name"
        />

        <x-button :button="$button" />

    </div>

    @foreach($tasks as $task)
        <x-task-item :task="$task" />
    @endforeach

</div>
