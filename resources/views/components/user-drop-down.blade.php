<style>
    #user-menu-toggle:checked~.user-dropdown {
        display: block;
    }
</style>

<div class="relative inline-block text-left">
    <input type="checkbox" id="user-menu-toggle" class="hidden" />

    <label for="user-menu-toggle"
        :class="isDark ? 'bg-gray-800 text-indigo-400 hover:bg-gray-700' :
            'bg-gray-100 text-indigo-600 hover:bg-gray-200'"
        class="flex items-center cursor-pointer select-none rounded-md px-4 py-2 font-semibold transition-colors duration-200">
        user_name
        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
    </label>


    <div :class="isDark ? 'bg-gray-800 text-indigo-400 hover:bg-gray-700' :
        'bg-gray-100 text-indigo-600 hover:bg-gray-200'"
        class="user-dropdown absolute right-0 mt-2 w-40 rounded-md shadow-lg z-10 hidden">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                Logout
            </button>
        </form>
    </div>

</div>
