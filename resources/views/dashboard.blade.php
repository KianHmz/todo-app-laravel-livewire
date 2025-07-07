<x-layouts.dashboard>

    <div class="flex flex-1 min-h-0">

        <!-- Folders sidebar -->
        <livewire:folder-manager/>


        <main :class="isDark ? 'bg-gray-900' : 'bg-white'"
            class="p-8 flex flex-col flex-1 relative transition-colors duration-300">

            <!-- user dropdown & theme toggler -->
            <div class="flex justify-end mb-6 relative z-10 space-x-4">
                <x-user-drop-down />
                <x-theme-toggler />
            </div>

            <!-- Tasks -->
            <h1 :class="isDark ? 'text-indigo-400' : 'text-indigo-600'" class="text-3xl font-bold mb-8">
                {{ $selectedFolder?->title ?? 'Select a Folder' }}
            </h1>

            <!-- Tasks list -->
            <livewire:tasks.show />
            {{-- <livewire:tasks.update /> --}}

            <!-- create task -->
            <livewire:tasks.create />

            <!-- end Tasks -->

        </main>

    </div>


</x-layouts.dashboard>
