@extends("layouts.app")

@section("title", "Login")

@section("content")
    <div id="login-container" class="flex items-center justify-center min-h-screen p-5">
        <div id="login-card" class="bg-white rounded-lg shadow-lg border border-gray-200 w-full max-w-md p-8">
            <div id="logo-section" class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl mb-4">
                    <x-eva-download-outline class="w-6 h-6 text-white"/>
                </div>
                <h1 class="text-2xl font-semibold text-gray-900 mb-2">
                    MediaSync
                </h1>
                <p class="text-gray-600 text-sm">
                    Download media from any link
                </p>
            </div>

            <form id="login-form" class="space-y-6">
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
                            class="w-full pr-4 pl-11 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-primary focus:border-primary outline-none transition-colors"
                        >
                        <x-eva-email-outline class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" />
                    </div>
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
                        <button type="button" id="toggle-password" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                            <x-fas-eye class="w-4 h-4 text-gray-400"/>
                        </button>
                    </div>
                </div>

                <div id="remember-forgot" class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>

                    <span class="text-sm text-indigo-500 hover:text-purple-500 font-medium cursor-pointer">
                        Forgot password?
                    </span>
                </div>

                <button type="submit" id="login-btn" class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white py-3 px-4 rounded-md font-medium hover:opacity-90 transition-opacity focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 cursor-pointer">
                    Sign in
                </button>
            </form>

            <div id="divider" class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">
                        Or continue with
                    </span>
                </div>
            </div>

            <div id="social-login" class="space-y-3">
                <button class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors cursor-pointer">
                    <x-bi-google class="h-4 w-4 text-red-500 mr-3"/>
                    <span class="text-gray-700 font-medium">Continue with Google</span>
                </button>
                <button class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-md hover:bg-gray-50 transition-colors cursor-pointer">
                    <x-bi-discord class="h-4 w-4 text-indigo-500 mr-3"/>
                    <span class="text-gray-700 font-medium">Continue with Discord</span>
                </button>
            </div>
        </div>
    </div>
@endsection
