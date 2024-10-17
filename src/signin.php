<!-- Head -->
<?php include("./components/head.php") ?>

<!-- Main Content -->
<main class="flex py-4 justify-center items-center min-h-screen">
    <div class="space-y-8 bg-white shadow-lg rounded-lg w-full max-w-md p-8">
        <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Sign In</h1>

        <form action="#" method="POST" class="space-y-6">
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="mt-1">
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <p class="text-right text-sm text-indigo-600 hover:text-indigo-900">
                    <a href="forgot-password.php">Forgot password?</a>
                </p>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign in
                </button>
            </div>
        </form>

        <div class="relative mt-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Or continue with</span>
            </div>
        </div>

        <!-- Login with Gmail Button -->
        <div>
            <button
                class="w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 flex items-center justify-center">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2">
                Sign In with Gmail
            </button>
        </div>
        <!-- Don't have an account -->
        <p class="mt-4 text-sm text-center text-gray-600">Don't have an account? <a href="signup.php" class="text-blue-500 hover:underline">Sign Up</a></p>
    </div>
</main>





<!-- Foot -->
<?php include("./components/foot.php") ?>