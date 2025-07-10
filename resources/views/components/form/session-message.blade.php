<div>
    @if (session('msg'))
        <p class="bg-green-100 text-green-800 border border-green-300 px-4 py-2 rounded-md">
            {{ session('msg') }}
        </p>
    @endif
</div>
