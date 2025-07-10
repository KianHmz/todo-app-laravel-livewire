<x-layouts.dashboard>

    <div class="flex flex-1">

        <aside :class="isDark ? 'bg-gray-800 border-gray-700' : 'bg-gray-100 border-gray-200'"
            class="w-100 border-r p-6 flex flex-col">

            <!-- Folders -->
            <livewire:folder-manager />

        </aside>


        <main :class="isDark ? 'bg-gray-900' : 'bg-white'"
            class="p-8 flex flex-col flex-1 relative transition-colors duration-300">

            <!-- user dropdown & theme toggler -->
            <div class="flex justify-end mb-6 relative z-10 space-x-4">
                <x-user-drop-down user="{{ auth()->user()->name }}" />
                <x-theme-toggler />
            </div>

            <!-- Tasks -->
            <livewire:task-manager />

        </main>

    </div>

</x-layouts.dashboard>
