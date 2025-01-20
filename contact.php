<?php
include "includes/header.php";
?>

<section class="flex flex-col lg:flex-row py-10 px-8 bg-white shadow-lg">
    <!-- Contact Image (on top on smaller screens) -->
    <div class="w-full lg:w-1/2 bg-cover bg-center rounded-lg mb-6 lg:mb-0 h-64 lg:h-auto" style="background-image: url('assets/contact.jpg');"></div>

    <!-- Contact Form -->
    <div class="w-full lg:w-1/2 px-4">
        <h2 class="text-2xl font-bold mb-6">Contact Us</h2>
        <form method="post">
            <label for="name" class="block text-lg font-semibold mb-2">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Name" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="email" class="block text-lg font-semibold mb-2">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Email" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="subject" class="block text-lg font-semibold mb-2">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="message" class="block text-lg font-semibold mb-2">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Message" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm"></textarea>

            <button type="submit" class="w-full py-3 bg-teal-500 text-white font-semibold rounded-md hover:bg-teal-600 transition duration-300">Send Message</button>
        </form>
    </div>
</section>

<?php
include "includes/footer.php";
?>
