<?php
include "includes/header.php";
include "database/dbconn.php";
$showPopup = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validate and sanitize inputs
    $name = trim($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Prepare SQL query using prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

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
            <h3 class='text-xl font-semibold mb-4 text-green-600'>Message Sent!</h3>
            <p class='mb-4 text-gray-700'>Thank you for reaching out. We will get back to you soon.</p>
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
    <!-- Contact Image (on top on smaller screens) -->
    <div class="w-full lg:w-1/2 bg-cover bg-center rounded-lg mb-6 lg:mb-0 h-64 lg:h-auto" style="background-image: url('assets/web/hero.png');"></div>

    <!-- Contact Form -->
    <div class="w-full lg:w-1/2 px-4">
        <h2 class="text-2xl font-bold mb-6">Contact Us</h2>
        <form method="post" action="contact.php">
            <label for="name" class="block text-lg font-semibold mb-2">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Name" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="email" class="block text-lg font-semibold mb-2">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Email" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="subject" class="block text-lg font-semibold mb-2">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm">

            <label for="message" class="block text-lg font-semibold mb-2">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Message" class="w-full p-4 mb-6 border border-gray-300 rounded-md shadow-sm"></textarea>

            <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition duration-300">Send Message</button>
        </form>
    </div>
</section>

<?php
include "includes/footer.php";
?>
