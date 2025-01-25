<?php
include "header.php";
$showPopup = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and validate inputs
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $area = trim($_POST['area']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $post_code = trim($_POST['post-code']);

    $highest_degree = trim($_POST['highest_degree']);
    $discipline = trim($_POST['discipline']);
    $institute = trim($_POST['institute']);

    $degree_pursuing = trim($_POST['degree_pursuing']);
    $current_position = trim($_POST['current_position']);
    $expertise = trim($_POST['expertise']);

    $organisation = trim($_POST['organisation']);
    $support = trim($_POST['support']);
    $mentor_assist = trim($_POST['mentor_assist']);
    $career_goal = trim($_POST['career_goal']);
    $social_activity = trim($_POST['social_activity']);
    $mentor_explain = trim($_POST['mentor_explain']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Prepare SQL query to insert data using prepared statements
    $stmt = $conn->prepare("INSERT INTO `mentees` (`name`, `phone`, `email`, `area`, `city`, `state`, `post_code`, `highest_degree`, `discipline`, `institute`, `degree_pursuing`, `current_position`, `expertise`, `organisation`, `support`, `mentor_assist`, `career_goal`, `social_activity`, `mentor_explain`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssssssssssssssssss", $name, $phone, $email, $area, $city, $state, $post_code, $highest_degree, $discipline, $institute, $degree_pursuing, $current_position, $expertise, $organisation, $support, $mentor_assist, $career_goal, $social_activity, $mentor_explain);

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
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[600px] bg-white shadow-lg rounded-lg">
        <form class="space-y-6 px-6 sm:px-8 py-8 sm:py-10" method="post" action="menteeSignup.php">
            <h2 class="text-3xl font-semibold text-center text-[#07074D] mb-8">Mentee Signup Form</h2>

            <!-- Full Name Field -->
            <label class="text-xl font-semibold text-[#07074D]">Personal Information</label>
            <div class="mb-6">
                <label for="name" class="text-lg font-medium text-[#07074D]">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="phone" class="text-lg font-medium text-[#07074D]">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label class="text-xl font-semibold text-[#07074D]">Address Details</label>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <input type="text" name="area" id="area" placeholder="Enter area" class="w-full rounded-md border py-3 px-4 text-base" />
                    <input type="text" name="city" id="city" placeholder="Enter city" class="w-full rounded-md border py-3 px-4 text-base" />
                    <input type="text" name="state" id="state" placeholder="Enter state" class="w-full rounded-md border py-3 px-4 text-base" />
                    <input type="text" name="post-code" id="post-code" placeholder="Post Code" class="w-full rounded-md border py-3 px-4 text-base" />
                </div>
            </div>

            <label class="text-xl font-semibold text-[#07074D]">Educational Information</label>
            <div class="mb-6">
                <label for="degree_name" class="text-lg font-medium text-[#07074D]">Name of Highest Degree</label>
                <input type="text" name="highest_degree" id="degree_name" placeholder="Full Name" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="discipline" class="text-lg font-medium text-[#07074D]">Discipline/Subject</label>
                <input type="text" name="discipline" id="discipline" placeholder="Enter your discipline" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="institute_name" class="text-lg font-medium text-[#07074D]">Name of Institute (Highest degree attained from)</label>
                <input type="text" name="institute" id="institute_name" placeholder="Enter your institute" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>


            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Are you pursuing a degree</label>
                <div class="flex justify-center space-x-8 mt-2 mb-2">
                    <label for="degreeYes" class="inline-flex items-center">
                        <input type="radio" name="degree_pursuing" id="degreeYes" value="yes"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        Yes
                    </label>
                    <label for="degreeNo" class="inline-flex items-center">
                        <input type="radio" name="degree_pursuing" id="degreeNo" value="no"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        No
                    </label>
                </div>
            </div>

            <label class="text-xl font-semibold text-[#07074D]">Professional Information (if apply)</label>
            <div class="mb-6">
                <label for="name" class="text-lg font-medium text-[#07074D]">Name of current position</label>
                <input type="text" name="current_position" id="name" placeholder="Enter your current position"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>

            <!-- Phone Number Field -->
            <div class="mb-6">
                <label for="phone" class="text-lg font-medium text-[#07074D]">Name of institution/organisation </label>
                <input type="text" name="organisation" id="phone" placeholder="Enter your organisation"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Area of expertise/proficiency</label>
                <input type="text" name="expertise" id="email" placeholder="Enter your expertise"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>

            <div class="mb-6">
                <label class="text-xl font-semibold text-[#07074D]">Questions</label>
            </div>
            <div class="mb-6">
                <label for="name" class="text-lg font-medium text-[#07074D]">What type of support and guidance are you
                    looking for (be specific and succinct and not more than five areas/topics)?
                </label>
                <input type="text" name="support" id="name" placeholder="Your Answer"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Do you consider any one (as a mentor) who
                    is currently assisting you to achieve your goals? </label>
                <div class="flex justify-center space-x-8 mt-2 mb-2">
                    <label for="degreeYes" class="inline-flex items-center">
                        <input type="radio" name="mentor_assist" id="degreeYes" value="yes"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        Yes
                    </label>
                    <label for="degreeNo" class="inline-flex items-center">
                        <input type="radio" name="mentor_assist" id="degreeNo" value="no"
                            class="text-[#6A64F1] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
                        No
                    </label>
                </div>
            </div>

            <!-- Phone Number Field -->
            <div class="mb-6">
                <label for="phone" class="text-lg font-medium text-[#07074D]">If yes, please explain how he/she/they
                    assist you.
                </label>
                <input type="text" name="mentor_explain" id="phone" placeholder="Your Answer"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>


            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">What is your career goal or what types of
                    work interest you?
                </label>
                <input type="text" name="career_goal" id="email" placeholder="Your Answer"
                    class="w-full rounded-md border border-[#e0e0e0] py-3 px-4 sm:px-6 text-base text-[#6B7280] focus:outline-none focus:ring-2 focus:ring-[#6A64F1] transition duration-300" />
            </div>
            <div class="mb-6">
                <label for="email" class="text-lg font-medium text-[#07074D]">Are you involved in any social activity or
                    civic engagement? </label>
                <input type="text" name="social_activity" id="email" placeholder="Your Answer"
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
                    Become a Mentee
                </button>
            </div>
        </form>
    </div>
</div>

<?php
include "footer.php";
?>