<!-- Head -->
<?php include("./components/head.php") ?>


<!-- Main Toolbar -->
<?php include("./components/user-main-toolbar.php") ?>

<!-- Main container -->
<main class="flex flex-col h-full">

    <?php include "./components/user-account-side-navigation.php"; ?>

    <!-- Content -->
    <div class="lg:ml-64 flex-1 p-4 lg:p-10 my-12">
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <ul class="grid grid-cols-2 gap-4">
                <li>

                    <a href="#" class="h-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Without Dollar Cards and U.S. Shipping Address</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            For Nigerian consumers who possess dollar-denominated cards, such as those issued by Nigerian banks for international transactions, but lack a physical address in the United States.
                        </p>
                    </a>

                </li>
                <li>

                    <a href="#" class="h-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nigerans with Dollar Cards but Without a U.S. Shipping Address</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">For Nigerians who lack access to international dollar-denominated cards or a U.S. shipping address. </p>
                    </a>

                </li>
            </ul>

        </div>


        <!-- <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <h1 class="text-lg font-semibold mb-4">Schedule Pickups</h1>
            <p>Ready to schedule your pickup? Simply fill out the form below or contact us directly, and we’ll make sure your items are picked up at your convenience. We look forward to serving you and making your pickup experience as seamless as possible.</p>

            <div class="mt-6">
                <a href="schedule-pickup-options.php"
                    class="w-full px-4 py-2 font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Schedule Now
                </a>
            </div>
        </div> -->


        <div class="border-b border-gray-200 dark:border-gray-700">
            <ul id="tabs-nav" class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                <li class="me-2">
                    <a href="?tab=schedule" aria-current="page" class="tab-link | inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                        <!-- <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                        </svg> -->
                        Schedule
                    </a>
                </li>
                <li class="me-2">
                    <a href="?tab=pickup-history" class="tab-link | inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                        <!-- <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.227 3.227 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076Zm-6-9A3.243 3.243 0 0 0 11 2.424V1a1 1 0 0 0-2 0v1.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0V8.576A3.243 3.243 0 0 0 13.25 5.5Z" />
                        </svg> -->
                        Pickup history
                    </a>
                </li>
            </ul>
        </div>

        <div id="tab-contents" class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="tab-schedule" class="tab-content hidden">
                <!-- user profile -->
                <?php include "./schedule-pickup_form.php" ?>
            </div>
            <div id="tab-pickup-history" class="tab-content hidden">
                <!-- user security -->
                <?php include "./pickup-history.php" ?>
            </div>
        </div>
    </div>

</main>




<!-- Foot -->
<?php include("./components/foot.php") ?>