<x-layouts.auth title="Register">

    <x-form.session-message/>

    <x-form.title value="Register" />
    <form method="POST" action="{{ route('auth.register') }}" class="space-y-4">
        @csrf

        <div>
            <x-form.label value="Name" />
            <x-form.input name="name" />
            <x-form.error-message name="name" />
        </div>

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

        <div>
            <x-form.label value="Confirm Password" />
            <x-form.input name="password_confirmation" type="password" />
            <x-form.error-message name="password_confirmation" />
        </div>

        <div>
            <x-form.button name="Register" value="Register" type="submit" />
        </div>

    </form>

    <p class="text-center text-sm mt-4" :class="isDark ? 'text-gray-400' : 'text-gray-600'">
        Already have an account?
        <a href="{{ route('auth.login') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline font-semibold">
            Login
        </a>
    </p>

</x-layouts.auth>
