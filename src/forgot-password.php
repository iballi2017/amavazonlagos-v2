<!-- Head -->
<?php include("./components/head.php") ?>

<!-- Main Content -->
<main class="flex py-4 justify-center items-center min-h-screen">
    <div class="space-y-8 bg-white shadow-lg rounded-lg w-full max-w-md p-8">
        <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Forgot Password</h1>

        <form action="#" method="POST" class="space-y-6">
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>


            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Submit
                </button>
            </div>
        </form>

        <!-- Already have an account -->
        <p class="mt-4 text-sm text-center text-gray-600">Already have an account? <a href="signin.php" class="text-blue-500 hover:underline">Sign in</a></p>
    </div>
</main>





<!-- Foot -->
<?php include("./components/foot.php") ?>