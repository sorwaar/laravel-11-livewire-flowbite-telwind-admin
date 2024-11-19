<div class="flex flex-col items-center justify-center  space-y-4" wire:poll.1s="increment">
    <h1 class="font-bold text-base text-gray-900  dark:text-gray-200 dark:hover:bg-gray-700">Livewire Counter</h1>
    <div class="flex items-center space-x-4">
        <span class="font-mono text-base text-gray-700  dark:text-gray-200 dark:hover:bg-gray-700">{{ $count }}</span>
    </div>
</div>
