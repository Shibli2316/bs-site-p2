<?php
include "includes/header.php";
?>

<div class="flex items-center justify-center p-4 sm:p-8 md:p-12 bg-gray-50">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[600px] bg-white shadow-lg rounded-lg">
        <form class="space-y-6 px-6 sm:px-8 py-8 sm:py-10">
            <h2 class="text-3xl font-semibold text-center text-[#07074D]">Register for the event</h2>
            <p class="text-xl text-black-200 text-center">Event name</p>
            <hr>

            <!-- Full Name Field -->
            <div class="mb-6">
                <label for="name" class="text-lg font-medium text-[#07074D]">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>

            <!-- Phone Number Field -->
            <div class="mb-6">
                <label for="phone" class="text-lg font-medium text-[#07074D]">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>



            






            

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white rounded-md hover:bg-[#5A50D1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300">
                    Enroll In Event
                </button>
            </div>
        </form>
    </div>
</div>

<?php
include "includes/footer.php";
?>