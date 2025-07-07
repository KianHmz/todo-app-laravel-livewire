<div class="flex flex-1 min-h-0">

    <!-- Folders sidebar -->
    <aside :class="isDark ? 'bg-gray-800 border-gray-700' : 'bg-gray-100 border-gray-200'"
        class="w-100 border-r p-6 flex flex-col">
        <h2 :class="isDark ? 'text-indigo-400' : 'text-indigo-600'" class="text-2xl font-semibold mb-6">Folders</h2>

        <!-- Folders list -->
        <livewire:folders.show />
        <livewire:folders.update />

        <!-- create folder -->
        <livewire:folders.create />

    </aside>
    <!-- end Folders sidebar -->


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
