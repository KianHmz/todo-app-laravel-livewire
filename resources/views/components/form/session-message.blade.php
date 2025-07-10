<div>
    @if (session('msg'))
        <p {{ $attributes->merge([
            'class' => 'border border-green-300 px-2 py-2 rounded-md',
        ]) }}
            :class="isDark ? 'bg-green-800 text-green-100' : 'bg-green-100 text-green-800'">
            {{ session('msg') }}
        </p>
    @endif
</div>
