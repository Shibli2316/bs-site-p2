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

    $highest_degree = trim($_POST['highest_degree']);
    $discipline = trim($_POST['discipline']);
    $institute = trim($_POST['institute']);
    $degree_pursuing = trim($_POST['degree_pursuing']);
    $specialisation = trim($_POST['specialisation']);
    
    $current_position = trim($_POST['current_position']);
    $organisation = trim($_POST['organisa$organisation']);
    $expertise = trim($_POST['expertise']);

    $support_guidance = trim($_POST['support_guidance']);
    $academic_aspirations = trim($_POST['academic_aspirations']);
    $social_activity = trim($_POST['social_activity']);
    $mentor_interest = trim($_POST['mentor_interest']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Prepare SQL query to insert data using prepared statements
    $stmt = $conn->prepare("INSERT INTO `mentees` (`first_name`, `phone`, `email`, `last_name`, `city`, `country`, `highest_degree`, `discipline`, `institute`, `degree_pursuing`, `current_position`, `expertise`, `organisation`, `support_guidance`, `academic_aspirations`, `specialisation`, `social_activity`, `mentor_interest`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssssssssss", $first_name, $phone, $email, $last_name, $city, $country, $highest_degree, $discipline, $institute, $degree_pursuing, $current_position, $expertise, $organisation, $support_guidance, $academic_aspirations, $specialisation, $social_activity, $mentor_interest);

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
            <p class='mb-4 text-gray-700'>We appreciate your interest in becoming a mentee. We will get back to you soon.</p>
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
    <!-- heading section -->
    <div class="mx-auto w-full max-w-[600px] shadow-lg rounded-lg bg-gray-50">
        <!-- heading section -->
        <div class="p-6 bg-gray-50 border-b border-gray-300 rounded-t-lg">

            <h2 class="text-3xl font-semibold text-center text-[#07074D] mb-8">Mentee Signup Form</h2>
            <p class="mt-4 text-gray-700 ">
                Thank you for your interest in participating in Bahujan Scholars. We only mentor young scholars for
                graduate programs (i.e., Masters and PhD) in India and for study abroad programs. We invite mentees from
                excluded groups who aspire to pursue graduate studies.
            </p>
            <p class="mt-4 text-gray-700 ">
                Please review the <a href="../about.php#logicModel" class="text-[#6A64F1] font-medium underline">Logic
                    Model</a> to gain an
                overview of our One-on-One mentoring process. For more information about the mentoring program, please
                visit <a href="../faq.php" class="text-[#6A64F1] font-medium underline">FAQs</a>.
            </p>
            <p class="mt-4 text-gray-700  font-medium">
                To participate, you need to complete this form. First, we want to learn more about your personal,
                educational, and professional information so we can better match the interests of mentors and mentees.
                Second, answer questions about your mentoring interest and refer to the participation consent section.
                If you have any questions or comments, please write to us at <a
                    href="mailto:bahujanscholars.org@gmail.com"
                    class="text-[#6A64F1] font-medium underline">bahujanscholars.org@gmail.com</a>.
            </p>
        </div>

        <!-- heading ends -->

        <div class="mx-auto w-full max-w-[600px] bg-white shadow-lg rounded-lg">
            <form class="space-y-6 px-6 sm:px-8 py-8 sm:py-10" method="post" action="menteeSignup.php">

                <!-- Full Name Field -->
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

                <div class="p-6 border border-gray-300 rounded-lg shadow-md">

                    <label class="text-xl font-semibold text-[#07074D]">Educational Information</label>
                    <div class="mb-6">
                        <label for="highest_degree" class="text-lg font-medium text-[#07074D]">Name of Highest
                            Degree</label>
                        <input type="text" name="highest_degree" id="highest_degree" placeholder="Full Name"
                            class="w-full rounded-md border py-3 px-4 text-base" required />
                    </div>

                    <div class="mb-6">
                        <label for="discipline" class="text-lg font-medium text-[#07074D]">Discipline/Subject</label>
                        <input type="text" name="discipline" id="discipline" placeholder="Enter your discipline"
                            class="w-full rounded-md border py-3 px-4 text-base" required />
                    </div>

                    <div class="mb-6">
                        <label for="institute" class="text-lg font-medium text-[#07074D]">Name of Institute (Highest
                            degree attained from)</label>
                        <input type="text" name="institute" id="institute" placeholder="Enter your institute"
                            class="w-full rounded-md border py-3 px-4 text-base" required />
                    </div>

                    <div class="mb-6">
                        <label for="degree_pursuing" class="text-lg font-medium text-[#07074D]">Are you pursuing a
                            degree</label>
                        <div class="flex justify-center space-x-8 mt-2 mb-2">
                            <label for="degreeYes" class="inline-flex items-center">
                                <input type="radio" name="degree_pursuing" id="degreeYes" value="yes"
                                    class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300"
                                    required />
                                Yes
                            </label>
                            <label for="degreeNo" class="inline-flex items-center">
                                <input type="radio" name="degree_pursuing" id="degreeNo" value="no"
                                    class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                                No
                            </label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="specialisation" class="text-lg font-medium text-[#07074D]">If yes please
                            specify</label>
                        <input type="text" name="specialisation" id="specialisation"
                            placeholder="Enter your specialisation"
                            class="w-full rounded-md border py-3 px-4 text-base" />
                    </div>
                </div>

                <div class="p-6 border border-gray-300 rounded-lg shadow-md">

                    <label class="text-xl font-semibold text-[#07074D]">Professional Information (if apply)</label>
                    <div class="mb-6">
                        <label for="current_position" class="text-lg font-medium text-[#07074D]">Name of current
                            position</label>
                        <input type="text" name="current_position" id="current_position"
                            placeholder="Enter your current position"
                            class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                    </div>

                    <div class="mb-6">
                        <label for="organisation" class="text-lg font-medium text-[#07074D]">Name of
                            institution/organisation</label>
                        <input type="text" name="organisation" id="organisation" placeholder="Enter your organisation"
                            class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                    </div>

                    <div class="mb-6">
                        <label for="expertise" class="text-lg font-medium text-[#07074D]">Area of
                            expertise/proficiency</label>
                        <input type="text" name="expertise" id="expertise" placeholder="Enter your expertise"
                            class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                    </div>
                </div>

                <div class="p-6 border border-gray-300 rounded-lg shadow-md">

                    <div class="mb-6">
                        <label class="text-xl font-semibold text-[#07074D]">Questions</label>
                    </div>
                    <div class="mb-6">
                        <label for="academic_aspirations" class="text-lg font-medium text-[#07074D]">What are your
                            academic
                            aspirations (in 200 words)?</label>
                        <textarea name="academic_aspirations" id="academic_aspirations" rows="4"
                            placeholder="Write here" class="w-full rounded-md border py-3 px-4 text-base"
                            required></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="support_guidance" class="text-lg font-medium text-[#07074D]">What type of support
                            and
                            guidance are you looking for (be specific and succinct and not more than five areas/topics)
                            in 150 words?</label>
                        <textarea name="support_guidance" id="support_guidance" rows="4" placeholder="Write here"
                            class="w-full rounded-md border py-3 px-4 text-base" required></textarea>
                    </div>

                    <div class="mb-6">
                        <label for="mentor_interest" class="text-lg font-medium text-[#07074D]">Do you want to be a
                            mentor for a
                            young mentee?</label>
                        <div class="flex justify-center space-x-8 mt-2 mb-2">
                            <label for="mentorYes" class="inline-flex items-center">
                                <input type="radio" name="mentor_interest" id="mentorYes" value="yes"
                                    class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300"
                                    required />
                                Yes
                            </label>
                            <label for="mentorNo" class="inline-flex items-center">
                                <input type="radio" name="mentor_interest" id="mentorNo" value="no"
                                    class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                                No
                            </label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="social_activity" class="text-lg font-medium text-[#07074D]">Are you involved in any
                            social
                            activity or civic engagement? 200 words</label>
                        <textarea type="text" name="social_activity" id="social_activity" placeholder="Your Answer"
                            rows="4" placeholder="Write here" class="w-full rounded-md border py-3 px-4 text-base"
                            required></textarea>
                    </div>
                </div>

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
                                provide an overview of the program. Any information we collect will be used solely for
                                the
                                purpose of your participation in the program and your information will be kept
                                confidential.
                            </span>
                        </span>
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="w-full bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white rounded-md hover:bg-[#5A50D1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300">
                        Become a Mentee
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<?php
include "footer.php";
?>