<x-layouts.auth title="Login">

    <x-form.title value="Login" />
    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
            <x-form.label value="Email" />
            <x-form.input name="email" type="email" />
            <x-form.error-message name="email" />
        </div>

        <div>
            <x-form.label value="Password" />
            <x-form.input name="password" type="password" />
            <x-form.error-message name="password" />
        </div>

        <div class="flex items-center justify-between">
            <x-form.remember-me />
            <x-form.forget-password href="{{ route('auth.password.request') }}" />
        </div>

        <x-form.button name="Login" value="Login" type="submit" />
    </form>

    <p class="text-center text-sm mt-4" :class="isDark ? 'text-gray-400' : 'text-gray-600'">
        Don't have an account?
        <a href="{{ route('register') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline font-semibold">
            register
        </a>
    </p>

</x-layouts.auth>
