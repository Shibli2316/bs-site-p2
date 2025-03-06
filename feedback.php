<?php
include "includes/header.php";
include "database/dbconn.php";
$showPopup = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validate and sanitize inputs
    $name = trim($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    
    $feedback = trim($_POST['feedback']);
    $improvement = trim($_POST['improvement']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Prepare SQL query using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `feedback` (`name`, `email`, `feedback`, `improvement`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $feedback, $improvement);

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
            <h3 class='text-xl font-semibold mb-4 text-green-600'>Feedback Submitted!</h3>
            <p class='mb-4 text-gray-700'>Thank you for your feedback. We appreciate your time and effort.</p>
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

            

            <label for="feedback" class="block text-lg font-semibold mb-2">Your Feedback</label>
            <textarea id="feedback" name="feedback" rows="5" placeholder="Write your feedback here..." class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm"></textarea>

            <label for="improvements" class="block text-lg font-semibold mb-2">Suggestions for Improvement</label>
            <textarea id="improvements" name="improvement" rows="5" placeholder="Share your suggestions for improvement..." class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm"></textarea>

            <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-300">Submit Feedback</button>
        </form>
    </div>
</section>

<?php
include "includes/footer.php";
?>
