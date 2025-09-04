<form method="POST" action="{{ route("register") }}" id="login-form" class="space-y-6">
    @csrf
    <div id="name-field">
        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
            Name
        </label>
        <div class="relative">
            <input
                placeholder="Enter your name"
                type="text"
                id="name"
                name="name"
                required
                value="{{ old('name') }}"
                class="w-full pr-4 pl-11 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
            >
            <x-bi-person-fill class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" />
        </div>
        @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div id="email-field">
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
            Email Address
        </label>
        <div class="relative">
            <input
                placeholder="Enter your email"
                type="email"
                id="email"
                name="email"
                required
                value="{{ old('email') }}"
                class="w-full pr-4 pl-11 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
            >
            <x-eva-email-outline class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" />
        </div>
        @error('email')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div id="password-field">
        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
            Password
        </label>
        <div class="relative">
            <input
                placeholder="Enter your password"
                type="password"
                id="password"
                name="password"
                required
                class="w-full pl-11 pr-11 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
            >
            <x-bi-lock-fill class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" />
            <button type="button" id="toggle-password" class="toggle-password cursor-pointer absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                <x-fas-eye class="eye-password w-4 h-4 text-gray-400"/>
                <x-heroicon-s-eye-slash class="eye-slash-password w-4 h-4 text-gray-400 hidden"/>
            </button>
        </div>
        @error('password')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div id="password-confirmation-field">
        <label for="password-confirmation" class="block text-sm font-medium text-gray-700 mb-2">
            Password confirmation
        </label>
        <div class="relative">
            <input
                placeholder="Confirm your password"
                type="password"
                id="password-confirmation"
                name="password_confirmation"
                required
                class="w-full pl-11 pr-11 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
            >
            <x-bi-lock-fill class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" />
            <button type="button" id="toggle-password-confirmation" class="toggle-password cursor-pointer absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                <x-fas-eye class="eye-password w-4 h-4 text-gray-400"/>
                <x-heroicon-s-eye-slash class="eye-slash-password w-4 h-4 text-gray-400 hidden"/>
            </button>
        </div>
    </div>

    <button
        type="submit"
        id="register-btn"
        class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white py-3 px-4 rounded-md font-medium hover:opacity-90 transition-opacity focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 cursor-pointer"
    >
        Register
    </button>
</form>

@push("scripts")
    <script>
        window.addEventListener("load", function () {
            $(document).on("click", ".toggle-password", function () {
                let input = $(this).siblings("input");

                if(input.attr("type") === "password") {
                    input.attr("type", "text");
                    $(this).find(".eye-password").addClass("hidden");
                    $(this).find(".eye-slash-password").removeClass("hidden");
                } else {
                    input.attr("type", "password");
                    $(this).find(".eye-password").removeClass("hidden");
                    $(this).find(".eye-slash-password").addClass("hidden");
                }
            });
        });
    </script>
@endpush
