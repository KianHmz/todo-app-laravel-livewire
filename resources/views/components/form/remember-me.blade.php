<div>
    <label {{ $attributes->merge([
        'class' => 'flex items-center text-sm',
    ]) }}
        :class="isDark ? 'text-gray-300' : 'text-gray-600'">
        <input type="checkbox" name="remember" class="mr-2">
        Remember Me
    </label>
</div>
