<div>
    <button @click="toggleTheme"
        {{ $attributes->merge([
            'class' => 'ml-4 p-2 rounded-full transition text-xl cursor-pointer',
        ]) }}>
        <span x-show="!isDark" aria-label="Day" role="img">☀️</span>
        <span x-show="isDark" aria-label="Night" role="img">🌙</span>
    </button>
</div>

<script>
    function themeSwitcher() {
        return {
            isDark: localStorage.getItem('theme') === 'dark' ||
                (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches),
            toggleTheme() {
                this.isDark = !this.isDark;
                localStorage.setItem('theme', this.isDark ? 'dark' : 'light');
            }
        }
    }
</script>
