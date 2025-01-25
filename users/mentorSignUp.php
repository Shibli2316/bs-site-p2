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
    $stmt = $conn->prepare("INSERT INTO `mentors` (`name`, `phone`, `email`, `area`, `city`, `state`, `post_code`, `degree_name`, `discipline`, `institute_name`, `position_name`, `institution_name`, `expertise_area`, `motivation`, `mentees_count`, `recommend_mentor`, `matching_preferences`, `suggestions`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssssssssssssssss", $name, $phone, $email, $area, $city, $state, $post_code, $degree_name, $discipline, $institute_name, $position_name, $institution_name, $expertise_area, $motivation, $mentees_count, $recommend_mentor, $matching_preferences, $suggestions);

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
    <div class="mx-auto w-full max-w-[600px] bg-white shadow-lg rounded-lg">
        <form class="space-y-6 px-6 sm:px-8 py-8 sm:py-10" method="POST">
            <h2 class="text-3xl font-semibold text-center text-[#07074D] mb-8">Become a Mentor</h2>

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
                <input type="text" name="degree_name" id="degree_name" placeholder="Full Name" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="discipline" class="text-lg font-medium text-[#07074D]">Discipline/Subject</label>
                <input type="text" name="discipline" id="discipline" placeholder="Enter your discipline" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="institute_name" class="text-lg font-medium text-[#07074D]">Name of Institute (Highest degree attained from)</label>
                <input type="text" name="institute_name" id="institute_name" placeholder="Enter your institute" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label class="text-xl font-semibold text-[#07074D]">Professional Information</label>
            </div>
            
            <div class="mb-6">
                <label for="position_name" class="text-lg font-medium text-[#07074D]">Name of Current Position</label>
                <input type="text" name="position_name" id="position_name" placeholder="Enter your position" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="institution_name" class="text-lg font-medium text-[#07074D]">Institution/Organization</label>
                <input type="text" name="institution_name" id="institution_name" placeholder="Enter your institution name" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label for="expertise_area" class="text-lg font-medium text-[#07074D]">Area of Expertise</label>
                <input type="text" name="expertise_area" id="expertise_area" placeholder="Enter your expertise area" class="w-full rounded-md border py-3 px-4 text-base" required />
            </div>

            <div class="mb-6">
                <label class="text-xl font-semibold text-[#07074D]">Questions</label>
            </div>

            <div class="mb-6">
                <label for="motivation" class="text-lg font-medium text-[#07074D]">Why do you want to take part in this program?</label>
                <textarea name="motivation" id="motivation" rows="4" placeholder="Why do you want to become a mentor?" class="w-full rounded-md border py-3 px-4 text-base" required></textarea>
            </div>

            <div class="mb-6">
                <label class="text-lg font-medium text-[#07074D]">Number of Mentees</label>
                <div class="flex justify-center space-x-8 mt-2 mb-2">
                    <label for="mentees_count" class="inline-flex items-center">
                        <input type="radio" name="mentees_count" value="1-3" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                        <span class="ml-2">1-3</span>
                    </label>
                    <label for="mentees_count" class="inline-flex items-center">
                        <input type="radio" name="mentees_count" value="4-6" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                        <span class="ml-2">4-6</span>
                    </label>
                    <label for="mentees_count" class="inline-flex items-center">
                        <input type="radio" name="mentees_count" value="6+" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" />
                        <span class="ml-2">6+</span>
                    </label>
                </div>
            </div>

            <div class="mb-6">
                <label for="recommend_mentor" class="text-lg font-medium text-[#07074D]">Have you been recommended as a mentor?</label>
                <textarea name="recommend_mentor" id="recommend_mentor" rows="4" placeholder="Yes/No" class="w-full rounded-md border py-3 px-4 text-base"></textarea>
            </div>

            <div class="mb-6">
                <label for="matching_preferences" class="text-lg font-medium text-[#07074D]">Matching Preferences</label>
                <textarea name="matching_preferences" id="matching_preferences" rows="4" placeholder="Describe your preferences" class="w-full rounded-md border py-3 px-4 text-base"></textarea>
            </div>

            <div class="mb-6">
                <label for="suggestions" class="text-lg font-medium text-[#07074D]">Suggestions</label>
                <textarea name="suggestions" id="suggestions" rows="4" placeholder="Any additional suggestions" class="w-full rounded-md border py-3 px-4 text-base"></textarea>
            </div>

            <button type="submit" class="w-full py-3 px-6 rounded-lg bg-blue-600 text-white text-lg font-semibold hover:bg-blue-700 transition">
                Submit
            </button>
        </form>
    </div>
</div>


<?php
include "footer.php";
?>