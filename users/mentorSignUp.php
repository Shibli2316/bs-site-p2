<?php
include "header.php";
?>

<div class="flex items-center justify-center p-4 sm:p-8 md:p-12 bg-gray-50">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[600px] bg-white shadow-lg rounded-lg">
        <form class="space-y-6 px-6 sm:px-8 py-8 sm:py-10">
            <h2 class="text-3xl font-semibold text-center text-[#07074D] mb-8">Become a Mentor</h2>

            <!-- Full Name Field -->
            <label class="text-xl font-semibold text-[#07074D]">Personal Information</label>
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






            <label class="text-xl font-semibold text-[#07074D]">Educational Information</label>
            <div class="mb-6">
                <label for="name" class="text-lg font-medium text-[#07074D]">Name of Highest Degree</label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>

            <!-- Phone Number Field -->
            <div class="mb-6">
                <label for="phone" class="text-lg font-medium text-[#07074D]">Descipline/Subject</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Name of institute (Highest Degree attained
                    from)</label>
                <input type="text" name="email" id="email" placeholder="Enter your email"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>




            <label class="text-xl font-semibold text-[#07074D]">Professional Information</label>
            <div class="mb-6">
                <label for="name" class="text-lg font-medium text-[#07074D]">Name of current position</label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>

            <!-- Phone Number Field -->
            <div class="mb-6">
                <label for="phone" class="text-lg font-medium text-[#07074D]">Name of institution/organisation</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Area of expertise/proficiency</label>
                <input type="text" name="email" id="email" placeholder="Enter your email"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>

            <div class="mb-6">
                <label class="text-xl font-semibold text-[#07074D]">Questions</label>
            </div>
            <div class="mb-6">
                <label for="name" class="text-lg font-medium text-[#07074D]">Why do you want to take part in this
                    program?</label>
                <input type="text" name="name" id="name" placeholder="Full Name"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Number of mentee you would like to take:
                </label>
                <div class="flex justify-center space-x-8 mt-2 mb-2">
                    <label for="degreeYes" class="inline-flex items-center">
                        <input type="radio" name="degree" id="degreeYes"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        1
                    </label>
                    <label for="degreeNo" class="inline-flex items-center">
                        <input type="radio" name="degree" id="degreeNo"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        2
                    </label>
                </div>
            </div>

            <!-- Phone Number Field -->
            <div class="mb-6">
                <label for="phone" class="text-lg font-medium text-[#07074D]">
                    Would you like to recommend one or two names of potential mentors who can join the program in the
                    pilot project or in the future?
                </label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Do you have any preferences regarding the
                    mentee/s you wish to be matched with?
                </label>
                <div class="flex justify-center space-x-8 mt-2 mb-2">
                    <label for="degreeYes" class="inline-flex items-center">
                        <input type="radio" name="degree" id="degreeYes"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        Yes
                    </label>
                    <label for="degreeNo" class="inline-flex items-center">
                        <input type="radio" name="degree" id="degreeNo"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        No
                    </label>
                </div>
            </div>


            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Do you have any questions and/or
                    suggestions about becoming a mentor?
                </label>
                <input type="text" name="email" id="email" placeholder="Enter your email"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>



            <div class="flex items-center mt-4">
                <input type="checkbox" id="terms" name="terms"
                    class="w-5 h-5 text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] rounded transition duration-300">
                <label for="terms" class="ml-2 text-[#07074D] text-sm font-medium">
                    I agree to the <a href="#" class="text-[#6A64F1] underline hover:text-[#5a53c6]">terms and
                        conditions</a>.
                </label>
            </div>




            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white rounded-md hover:bg-[#5A50D1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300">
                    Become a mentor
                </button>
            </div>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>