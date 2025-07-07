<div>
    <form method="POST" action="{{ route('tasks.store') }}" class="mt-8 flex space-x-4">
        @csrf
        {{-- <input type="hidden" name="folder_id" value="{{ request()->route('folder')->id }}"> --}}
        <input type="text" name="title" placeholder="New Task" required
            :class="isDark
                ?
                'bg-gray-700 border-gray-600 text-gray-300' :
                'bg-white border border-gray-300 text-gray-900'"
            class="flex-1 px-4 py-3 rounded-lg" />
        <button type="submit"
            class="bg-green-600 hover:bg-green-700 text-white px-6 rounded-lg transition-colors duration-200">
            Add
        </button>
    </form>
</div>
