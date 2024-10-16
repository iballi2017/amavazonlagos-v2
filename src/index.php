<!-- Head -->
<?php include("./components/head.php") ?>

<!-- Main Toolbar -->
<?php include("./components/main-toolbar.php") ?>

<!-- Main Content -->
<main class="flex justify-center items-center min-h-screen">
    <div class="w-full bg-black/85 py-12 px-2">
        <div class="container mx-auto flex flex-col items-center text-center">
            <!-- Hero Text -->
            <h1 class="text-3xl lg:text-4xl font-bold text-white mb-4">
                Track Your Shipment
            </h1>
            <p class="text-lg text-blue-100 mb-8">
                Enter your tracking number to know where your package is.
            </p>

            <!-- Shipment Tracker Form -->
            <form class="w-full max-w-md flex flex-col sm:flex-row items-center">
                <input
                    type="text"
                    placeholder="Enter tracking number"
                    class="w-full px-4 py-2 rounded lg:rounded-lg text-gray-700 mb-4 sm:mb-0 sm:mr-4 focus:outline-none focus:ring-2 focus:ring-blue-300" />
                <button
                    type="submit"
                    class="text-nowrap bg-white text-blue-500 font-semibold px-6 py-2 rounded lg:rounded-lg hover:bg-blue-100 transition duration-300">
                    Track Now
                </button>
            </form>
        </div>
    </div>

    <!-- <div class="bg-white shadow-lg rounded lg:rounded-lg w-full max-w-md p-8">

    </div> -->
</main>


<!-- Foot -->
<?php include("./components/foot.php") ?>