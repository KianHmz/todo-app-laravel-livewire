@props(['name'])

<div>
    <input name="{{ $name }}"
        {{ $attributes->merge([
            'class' => 'mt-1 w-full px-4 py-2 rounded-lg border focus:outline-none focus:ring transition',
            'type' => 'text',
        ]) }}
        :class="isDark ?
            'bg-gray-700 border-gray-600 text-white focus:ring-indigo-500' :
            'bg-white border-gray-300 text-gray-900 focus:ring-indigo-500'"
        required autofocus value="{{ old($name) }}" />
</div>
