<!-- Head -->
<?php include("./components/head.php") ?>


<!-- Main Toolbar -->
<?php include("./components/user-main-toolbar.php") ?>

<!-- Main container -->
<main class="flex flex-col h-full">

    <!-- Content -->
    <div class="flex-1 p-4 lg:p-10 my-12">
        <div class="bg-gray-100">

            <!-- Page Header -->
            <header class="bg-yellow-600 p-6 text-white text-center">
                <h1 class="text-3xl font-bold">Track Your Product</h1>
            </header>

            <!-- Tracking Information Section -->
            <div class="container mx-auto mt-8 p-4 bg-white shadow-md rounded-lg">

                <!-- Product Information -->
                <div class="mb-4">
                    <h2 class="text-2xl font-semibold">Product: Wireless Earbuds</h2>
                    <p class="text-gray-500">Tracking ID: <span class="font-mono">1234567890</span></p>
                </div>

                <!-- Progress Bar -->
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Delivery Status:</h3>
                    <div class="flex justify-between text-sm font-medium">
                        <span>Ordered</span>
                        <span>Shipped</span>
                        <span>Out for Delivery</span>
                        <span>Delivered</span>
                    </div>

                    <!-- Progress Bar Container -->
                    <div class="relative pt-2">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-gray-200">
                            <div class="bg-yellow-500 h-full w-3/4"></div> <!-- Adjust the width for progress -->
                        </div>
                    </div>
                </div>

                <!-- Tracking Details -->
                <div>
                    <h3 class="text-xl font-semibold mb-2">Tracking Details:</h3>
                    <ul class="space-y-4 text-gray-600">
                        <li>
                            <strong>October 15, 2024:</strong> Your product is out for delivery.
                        </li>
                        <li>
                            <strong>October 13, 2024:</strong> Your product has been shipped.
                        </li>
                        <li>
                            <strong>October 10, 2024:</strong> Your order has been confirmed.
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</main>




<!-- Footer -->
<?php include("./components/footer.php") ?>
<!-- Foot -->
<?php include("./components/foot.php") ?>