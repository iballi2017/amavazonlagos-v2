<!-- Head -->
<?php include("./components/head.php") ?>


<!-- Main Toolbar -->
<?php include("./components/user-main-toolbar.php") ?>

<!-- Main container -->
<main class="flex flex-col h-full">

    <?php include "./components/user-account-side-navigation.php"; ?>

    <!-- Content -->
    <div class="lg:ml-64 flex-1 p-4 lg:p-10 my-12">

        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">

            <h1 class="text-xl font-semibold mb-4">Schedule Pickups</h1>
            <p>Ready to schedule your pickup? Simply select and fill out the form below or contact us directly, and we’ll make sure your items are picked up at your convenience. We look forward to serving you and making your pickup experience as seamless as possible.</p>


            <div class="my-4"></div>

            <ul class="grid grid-cols-2 gap-4">
                <li class="col-span-12 lg:col-span-1">

                    <a href="schedule-pickup-form-sch-1.php" class="h-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Without Dollar Cards and U.S. Shipping Address (SCH 1)</h5>
                        <p class="font-normal text-gray-700">
                            For Nigerian consumers who possess dollar-denominated cards, such as those issued by Nigerian banks for international transactions, but lack a physical address in the United States.
                        </p>
                    </a>

                </li>
                <li class="col-span-12 lg:col-span-1">

                    <a href="schedule-pickup-form-sch-2.php" class="h-full block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">

                        <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900">Nigerans with Dollar Cards but Without a U.S. Shipping Address (SCH 2)</h5>
                        <p class="font-normal text-gray-700">For Nigerians who lack access to international dollar-denominated cards or a U.S. shipping address. </p>
                    </a>

                </li>
            </ul>

        </div>
    </div>

</main>




<!-- Foot -->
<?php include("./components/foot.php") ?>