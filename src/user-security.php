<h2 class="text-lg font-semibold mb-4">Manage Security</h2>

<section>
    <h3 class="font-semibold mb-4">Change Password</h3>
    <form action="">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 lg:col-span-1">
                <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                <input type="password" id="current_password" name="current_password" class="password mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                <button type="button" class="toggler | text-sm">Show</button>
            </div>
            <div class="col-span-3 lg:col-span-1">
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" id="new_password" name="new_password" class="password mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                <button type="button" class="toggler | text-sm">Show</button>
            </div>
            <div class="col-span-3 lg:col-span-1">
                <label for="confirm_new_password" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                <input type="password" id="confirm_new_password" name="confirm_new_password" class="password mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                <button type="button" class="toggler | text-sm">Show</button>
            </div>
            <!-- Submit Button -->
            <div class="col-span-3">
                <button type="submit"
                    class="px-10 py-2 font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
        </div>
    </form>
</section>

<hr class="my-10">

<section>
    <h3 class="font-semibold mb-4">Delete Account</h3>

    <button class="text-red-500 hover:bg-red-200 hover:p-2 rounded-md">Delete my account including all my data</button>
</section>