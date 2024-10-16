<!-- Head -->
<?php include("./components/head.php") ?>


<!-- Main Content -->
<main class="flex justify-center items-center min-h-screen">
    <div class="w-full py-12 px-2">
        <div class="container mx-auto flex flex-col items-center text-center">

            <!--  -->

            <style>
                .slide {
                    display: none;
                }

                .active-slide {
                    display: block;
                }
            </style>
            <div class="bg-white shadow-lg rounded-lg max-w-3xl w-full p-6">
                <form id="onboarding-form">
                    <!-- Slide 1 -->
                    <div id="slide-1" class="slide active-slide">
                        <h2 class="text-xl font-semibold mb-4">Welcome!</h2>
                        <p class="text-gray-600 mb-4">Let’s get started with some basic information.</p>
                        <label class="block mb-2" for="name">Name</label>
                        <input id="name" type="text" class="w-full px-3 py-2 border rounded-md mb-4" placeholder="Your Name">
                        <button type="button" class="next bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Next
                        </button>
                    </div>

                    <!-- Slide 2 -->
                    <div id="slide-2" class="slide">
                        <h2 class="text-xl font-semibold mb-4">Contact Information</h2>
                        <label class="block mb-2" for="email">Email</label>
                        <input id="email" type="email" class="w-full px-3 py-2 border rounded-md mb-4" placeholder="Your Email">
                        <div class="flex justify-between">
                            <button type="button" class="prev bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                                Previous
                            </button>
                            <button type="button" class="next bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                Next
                            </button>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div id="slide-3" class="slide">
                        <h2 class="text-xl font-semibold mb-4">Profile Setup</h2>
                        <label class="block mb-2" for="username">Username</label>
                        <input id="username" type="text" class="w-full px-3 py-2 border rounded-md mb-4" placeholder="Choose a username">
                        <div class="flex justify-between">
                            <button type="button" class="prev bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                                Previous
                            </button>
                            <button type="button" class="next bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                Next
                            </button>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div id="slide-4" class="slide">
                        <h2 class="text-xl font-semibold mb-4">Finish</h2>
                        <p class="text-gray-600 mb-4">You are almost done! Review your information and submit.</p>
                        <div class="flex justify-between">
                            <button type="button" class="prev bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                                Previous
                            </button>
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <script>
                // Handle slide switching
                const slides = document.querySelectorAll('.slide');
                let currentSlide = 0;

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.classList.toggle('active-slide', i === index);
                    });
                }

                document.querySelectorAll('.next').forEach(button => {
                    button.addEventListener('click', () => {
                        currentSlide++;
                        if (currentSlide >= slides.length) currentSlide = slides.length - 1;
                        showSlide(currentSlide);
                    });
                });

                document.querySelectorAll('.prev').forEach(button => {
                    button.addEventListener('click', () => {
                        currentSlide--;
                        if (currentSlide < 0) currentSlide = 0;
                        showSlide(currentSlide);
                    });
                });
            </script>

            <!--  -->
        </div>
    </div>

    <!-- <div class="bg-white shadow-lg rounded lg:rounded-lg w-full max-w-md p-8">

    </div> -->
</main>


<!-- Foot -->
<?php include("./components/foot.php") ?>