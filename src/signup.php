<!-- Head -->
<?php include("./components/head.php") ?>


<!-- Main Content -->
<main class="flex py-4 justify-center items-center min-h-screen">
    <div class="space-y-8 bg-white shadow-lg rounded-lg w-full max-w-md p-8">
        <h1 class="text-2xl font-semibold text-gray-800 text-center mb-6">Sign Up</h1>

        <!--  -->

        <!-- Login with Gmail Button -->
        <div>
            <button
                class="w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 flex items-center justify-center">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-2">
                Sign Up with Gmail
            </button>
        </div>

        <div class="relative mt-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Or signup with Email</span>
            </div>
        </div>

        <!-- Sign Up Form -->
        <form action="#" method="POST">

            <fieldset>

                <legend class="block w-full">
                    <div class="flex items-center gap-2 justify-between w-full mb-4">
                        <hr class="w-full">
                        <span class="block w-full text-nowrap text-center">Personal Information</span>
                        <hr class="w-full">
                    </div>
                </legend>

                <div class="mb-4">
                    <label for="first_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="last_name" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Phone Number</label>
                    <div class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        <!-- Input field for phone number -->
                        <input id="phone" type="tel" name="phone" />
                    </div>
                </div>
            </fieldset>


            <fieldset>
                <legend class="block w-full">
                    <div class="flex items-center gap-2 justify-between w-full my-4">
                        <hr class="w-full">
                        <span class="block w-full text-nowrap text-center">Address</span>
                        <hr class="w-full">
                    </div>
                </legend>
                <div class="mb-4">
                    <label for="street" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Street</label>
                    <input type="text" id="street" name="street" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="apartment" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Apartment, suite, etc.</label>
                    <input type="text" id="apartment" name="apartment" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="city" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">City</label>
                    <input type="text" id="city" name="city" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="state" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">State/Province</label>
                    <input type="text" id="state" name="state" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>
                <div class="mb-4">
                    <label for="zip" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">ZIP/Postal Code</label>
                    <input type="text" id="zip" name="zip" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                </div>

                <!-- Country -->
                <div class="mb-4">
                    <label for="country" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Country</label>
                    <select id="country" name="country"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        required>
                        <option value="usa">United States</option>
                        <option value="canada">Canada</option>
                        <option value="uk">United Kingdom</option>
                        <option value="australia">Australia</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </fieldset>

            <hr class="my-4">







            <div class="mb-4">
                <label for="password" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="confirm-password" class="cursor-pointer block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                    </div>
                    <label for="terms" class="ms-2 text-sm font-medium text-gray-900">I agree with our <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
                </div>
            </div>


            <div class="mb-4">
                <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Your name</label>
                <input type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Bonnie Green">
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full px-4 py-2 font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign Up
                </button>
            </div>
        </form>

        <!-- Already have an account -->
        <p class="mt-4 text-sm text-center text-gray-600">Already have an account? <a href="signin.php" class="text-blue-500 hover:underline">Sign in</a></p>
    </div>
</main>


<!-- Foot -->
<?php include("./components/foot.php") ?>