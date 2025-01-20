<?php
include "header.php";
?>

<div class="flex items-center justify-center p-4 sm:p-8 md:p-12 bg-gray-50">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[600px] bg-white shadow-lg rounded-lg">
        <form class="space-y-6 px-6 sm:px-8 py-8 sm:py-10">
            <h2 class="text-3xl font-semibold text-center text-[#07074D] mb-8">Book Your Appointment</h2>

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

            <!-- Date and Time Fields (Responsive Grid) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="mb-6">
                    <label for="date" class="text-lg font-medium text-[#07074D]">Date</label>
                    <input type="date" name="date" id="date" 
                        class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                </div>

                <div class="mb-6">
                    <label for="time" class="text-lg font-medium text-[#07074D]">Time</label>
                    <input type="time" name="time" id="time" 
                        class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                </div>
            </div>

            <!-- Address Details Section -->
            <div class="mb-6">
                <label class="text-xl font-semibold text-[#07074D]">Address Details</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <!-- Area Field -->
                    <div class="mb-6">
                        <input type="text" name="area" id="area" placeholder="Enter area" 
                            class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                    </div>

                    <!-- City Field -->
                    <div class="mb-6">
                        <input type="text" name="city" id="city" placeholder="Enter city" 
                            class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                    </div>

                    <!-- State Field -->
                    <div class="mb-6">
                        <input type="text" name="state" id="state" placeholder="Enter state" 
                            class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                    </div>

                    <!-- Post Code Field -->
                    <div class="mb-6">
                        <input type="text" name="post-code" id="post-code" placeholder="Post Code" 
                            class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" 
                    class="w-full bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white rounded-md hover:bg-[#5A50D1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300">
                    Book Appointment
                </button>
            </div>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>
