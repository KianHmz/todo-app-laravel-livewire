<div>
    <label
        {{ $attributes->merge([
            'class' => 'block text-sm font-medium',
        ]) }}
        :class="isDark ? 'text-gray-300' : 'text-gray-700'">

        {{ $value }}
    </label>
</div>
