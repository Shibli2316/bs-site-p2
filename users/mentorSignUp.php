<?php
include "header.php";
$showPopup = false;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and validate inputs
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $phone = trim($_POST['phone']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $city = trim($_POST['city']);
    $country = trim($_POST['county$country']);

    $degree_name = trim($_POST['degree_name']);
    $discipline = trim($_POST['discipline']);
    $institute_name = trim($_POST['institute_name']);

    $position_name = trim($_POST['position_name']);
    $institution_name = trim($_POST['institution_name']);
    $expertise_area = trim($_POST['expertise_area']);

    $motivation = trim($_POST['motivation']);
    $mentees_count = trim($_POST['mentees_count']);
    $recommend_mentor = trim($_POST['recommend_mentor']);
    $matching_preferences = trim($_POST['matching_preferences']);
    $suggestions = trim($_POST['suggestions']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Prepare SQL query to insert data using prepared statements
    $stmt = $conn->prepare("INSERT INTO `mentors` (`first_name`, `last_name`, `phone`, `email`, `city`, `country`, `degree_name`, `discipline`, `institute_name`, `position_name`, `institution_name`, `expertise_area`, `motivation`, `mentees_count`, `recommend_mentor`, `matching_preferences`, `suggestions`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssssssssss", $first_name, $last_name, $phone, $email, $city, $country, $degree_name, $discipline, $institute_name, $position_name, $institution_name, $expertise_area, $motivation, $mentees_count, $recommend_mentor, $matching_preferences, $suggestions);

    // Execute the query and check if successful
    if ($stmt->execute()) {
        $showPopup = true;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

if ($showPopup) {
    echo "
    <div id='popup' class='fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50'>
        <div class='bg-white p-6 rounded-lg shadow-lg text-center'>
            <h3 class='text-xl font-semibold mb-4 text-green-600'>Thank You for Applying!</h3>
            <p class='mb-4 text-gray-700'>We appreciate your interest in becoming a mentor. We will get back to you soon.</p>
            <button onclick='closePopup()' class='px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition'>
                Close
            </button>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
    ";
}
?>



<div class="flex items-center justify-center p-4 sm:p-8 md:p-12 bg-gray-50">

    <div class="mx-auto w-full max-w-[600px] shadow-lg rounded-lg bg-gray-50">
        <!-- heading section -->
        <div class="p-6 bg-gray-50 border-b border-gray-300 rounded-t-lg">
            
            <h2 class="text-3xl font-semibold text-center text-[#07074D] mb-8">Mentor Signup Form</h2>
            <p class="mt-4 text-gray-700 ">
            Thank you for your interest in participating in Bahujan Scholars. We only mentor young scholars for graduate programs (i.e., Masters and PhD) in India and for study abroad programs. We seek mentors who believe in social justice and are eager to assist mentees from the excluded groups.
            </p>
            <p class="mt-4 text-gray-700 ">
            Please go through the <a href="../about.php#logicModel" class="text-[#6A64F1] font-medium underline">Logic Model</a> to get an overview of our One-on-One mentoring process. For more information about the mentoring program, please visit <a href="../faq.php"
                    class="text-[#6A64F1] font-medium underline">FAQs</a>.
            </p>
            <p class="mt-4 text-gray-700  font-medium">
            To participate, you need to complete this form. First, we want to know more about your personal, educational, and professional information so we can better match the interests of mentors and mentees. Second, answer questions about your mentoring interest and refer to the participation consent section. If you have any questions or comments, please write to us at <a
                    href="mailto:bahujanscholars.org@gmail.com"
                    class="text-[#6A64F1] font-medium underline">bahujanscholars.org@gmail.com</a>.
            </p>
        </div>
    <div class="mx-auto w-full max-w-[600px] bg-white shadow-lg rounded-lg">
        <form class="space-y-6 px-6 sm:px-8 py-8 sm:py-10" method="POST">
            
            <!-- section 1 starts -->
            <div class="p-6 border border-gray-300 rounded-lg shadow-md">
                <label class="text-xl font-semibold text-[#07074D]">Personal Information</label>
                <div class="mb-6">
                    <label for="first_name" class="text-lg font-medium text-[#07074D]">First Name</label>
                    <input type="text" name="first_name" id="first_name" placeholder="First Name"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>
                <div class="mb-6">
                    <label for="last_name" class="text-lg font-medium text-[#07074D]">Last Name</label>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>

                <div class="mb-6">
                    <label for="phone" class="text-lg font-medium text-[#07074D]">Phone Number</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>

                <div class="mb-6">
                    <label for="email" class="text-lg font-medium text-[#07074D]">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>

                <div class="mb-6">
                    <label class="text-xl font-semibold text-[#07074D]">Address Details</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4 mb-4">
                        <input type="text" name="city" id="city" placeholder="Enter City"
                            class="w-full rounded-md border py-3 px-4 text-base" />
                        <input type="text" name="country" id="country" placeholder="Enter Country"
                            class="w-full rounded-md border py-3 px-4 text-base" />
                    </div>
                </div>
            </div>
            <!-- section 1 ends -->

            <!-- section 2 starts -->
            <div class="p-6 border border-gray-300 rounded-lg shadow-md">
                <label class="text-xl font-semibold text-[#07074D]">Educational Information</label>
                <div class="mb-6">
                    <label for="degree_name" class="text-lg font-medium text-[#07074D]">Name of Highest Degree</label>
                    <input type="text" name="degree_name" id="degree_name" placeholder="Full Name"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>

                <div class="mb-6">
                    <label for="discipline" class="text-lg font-medium text-[#07074D]">Discipline/Subject</label>
                    <input type="text" name="discipline" id="discipline" placeholder="Enter your discipline"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>

                <div class="mb-6">
                    <label for="institute_name" class="text-lg font-medium text-[#07074D]">Name of Institute (Highest
                        degree
                        attained from)</label>
                    <input type="text" name="institute_name" id="institute_name" placeholder="Enter your institute"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>
            </div>
            <!-- section 2 ends -->

            <!-- section 3 starts -->
            <div class="p-6 border border-gray-300 rounded-lg shadow-md">
                <div class="mb-6">
                    <label class="text-xl font-semibold text-[#07074D]">Professional Information</label>
                </div>

                <div class="mb-6">
                    <label for="position_name" class="text-lg font-medium text-[#07074D]">Name of Current
                        Position</label>
                    <input type="text" name="position_name" id="position_name" placeholder="Enter your position"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>

                <div class="mb-6">
                    <label for="institution_name"
                        class="text-lg font-medium text-[#07074D]">Institution/Organization</label>
                    <input type="text" name="institution_name" id="institution_name"
                        placeholder="Enter your institution name" class="w-full rounded-md border py-3 px-4 text-base"
                        required />
                </div>

                <div class="mb-6">
                    <label for="expertise_area" class="text-lg font-medium text-[#07074D]">Area of Expertise</label>
                    <input type="text" name="expertise_area" id="expertise_area" placeholder="Enter your expertise area"
                        class="w-full rounded-md border py-3 px-4 text-base" required />
                </div>
            </div>
            <!-- section 3 ends -->

            <!-- section 4 starts -->
            <div class="p-6 border border-gray-300 rounded-lg shadow-md">
                <div class="mb-6">
                    <label class="text-xl font-semibold text-[#07074D]">Questions</label>
                </div>

                <div class="mb-6">
                    <label for="motivation" class="text-lg font-medium text-[#07074D]">Why do you want to take part in
                        this
                        program?</label>
                    <textarea name="motivation" id="motivation" rows="4"
                        placeholder="Why do you want to become a mentor?"
                        class="w-full rounded-md border py-3 px-4 text-base" required></textarea>
                </div>

                <div class="mb-6">
                    <label for="recommend_mentor" class="text-lg font-medium text-[#07074D]">Would you like to recommend
                        one or two names of potential mentors who can join the Bahujan Mentoring program? </label>
                    <textarea name="recommend_mentor" id="recommend_mentor" rows="4" placeholder="Yes/No"
                        class="w-full rounded-md border py-3 px-4 text-base" required></textarea>
                </div>

                <div class="mb-6">
                    <label class="text-lg font-medium text-[#07074D]"> Do you have any preferences regarding the mentee
                        you wish to be matched with? </label>
                    <div class="flex justify-center space-x-8 mt-2 mb-2">
                        <label for="mentees_count" class="inline-flex items-center">
                            <input type="radio" name="mentees_count" value="Yes"
                                class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" required />
                            <span class="ml-2">Yes</span>
                        </label>
                        <label for="mentees_count" class="inline-flex items-center">
                            <input type="radio" name="mentees_count" value="No"
                                class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                            <span class="ml-2">No</span>
                        </label>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="matching_preferences" class="text-lg font-medium text-[#07074D]">If yes</label>
                    <textarea name="matching_preferences" id="matching_preferences" rows="4" placeholder="Describe"
                        class="w-full rounded-md border py-3 px-4 text-base" required></textarea>
                </div>

                <div class="mb-6">
                    <label for="suggestions" class="text-lg font-medium text-[#07074D]"> Do you have any questions
                        and/or suggestions about the mentoring program? </label>
                    <textarea name="suggestions" id="suggestions" rows="4" placeholder="Write your suggestions"
                        class="w-full rounded-md border py-3 px-4 text-base" required></textarea>
                </div>
            </div>
            <!-- section 4 ends -->
            <div class="flex items-center mt-4">
                <input type="checkbox" id="terms" name="terms"
                    class="w-5 h-5 text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] rounded transition duration-300"
                    required>
                <label for="terms" class="ml-2 text-[#07074D] text-sm font-medium">
                    I agree to the
                    <span class="relative group">
                        <a href="#" class="text-[#6A64F1] underline hover:text-[#5a53c6]">
                            terms and conditions
                        </a>
                        <span
                            class="absolute left-0 mt-1 w-64 p-3 text-xs text-white bg-gray-900 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            In the Bahujan Mentoring program, we will match each mentee with an appropriate mentor.
                            During an orientation session, we will introduce mentors and mentees to each other and
                            provide an overview of the program. Any information we collect will be used solely for the
                            purpose of your participation in the program and your information will be kept confidential.
                        </span>
                    </span>
                </label>
            </div>
            <button type="submit"
                class="w-full py-3 px-6 rounded-lg bg-blue-600 text-white text-lg font-semibold hover:bg-blue-700 transition">
                Submit
            </button>

            
        </form>
    </div>
</div>
</div>



<?php
include "footer.php";
?>