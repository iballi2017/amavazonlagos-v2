<!-- Head -->
<?php include("./components/head.php") ?>


<!-- Main Toolbar -->
<?php include("./components/user-main-toolbar.php") ?>

<!-- Main container -->
<main class="flex flex-col h-full">

    <?php include "./components/user-account-side-navigation.php"; ?>

    <!-- Content -->
    <div class="lg:ml-64 flex-1 p-4 lg:p-10 my-12">


        <div class="border-b border-gray-200">
            <ul id="tabs-nav" class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500">
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

        <div id="tab-contents" class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
            <div id="tab-schedule" class="tab-content hidden">
                user profile
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