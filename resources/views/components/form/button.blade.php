<div>
    <button
        {{ $attributes->merge([
            'class' => 'w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition',
        ]) }}>

        {{ $value }}
    </button>
</div>
