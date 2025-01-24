<?php
include "includes/header.php";
?>

<section class="flex flex-col lg:flex-row py-10 px-8 bg-white shadow-lg">
    <!-- Feedback Image (on top on smaller screens) -->
    <div class="w-full lg:w-1/2 bg-cover bg-center rounded-lg mb-6 lg:mb-0 h-64 lg:h-auto" style="background-image: url('assets/web/project.webp');"></div>

    <!-- Feedback Form -->
    <div class="w-full lg:w-1/2 px-4">
        <h2 class="text-2xl font-bold mb-6">Feedback Form</h2>
        <form method="post">
            <label for="name" class="block text-lg font-semibold mb-2">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="email" class="block text-lg font-semibold mb-2">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="rating" class="block text-lg font-semibold mb-2">Rate Your Experience</label>
            <select id="rating" name="rating" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">
                <option value="">Select a rating</option>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select>

            <label for="feedback" class="block text-lg font-semibold mb-2">Your Feedback</label>
            <textarea id="feedback" name="feedback" rows="5" placeholder="Write your feedback here..." class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm"></textarea>

            <label for="improvements" class="block text-lg font-semibold mb-2">Suggestions for Improvement</label>
            <textarea id="improvements" name="improvements" rows="5" placeholder="Share your suggestions for improvement..." class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm"></textarea>

            <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-300">Submit Feedback</button>
        </form>
    </div>
</section>

<?php
include "includes/footer.php";
?>
