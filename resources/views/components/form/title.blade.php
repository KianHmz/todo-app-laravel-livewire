<div>
    <h2 {{ $attributes->merge([
        'class' => 'text-2xl font-bold text-center',
    ]) }}
        :class="isDark ? 'text-gray-100' : 'text-gray-900'">

        {{ $value }}
    </h2>
</div>
