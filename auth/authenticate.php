<script src="https://cdn.tailwindcss.com"></script>

<?php
$showPopup = false; // Flag to display popups
$message = ""; // Stores success or error messages
$messageType = ""; // Can be 'success' or 'error'

include "../database/dbconn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $pass = trim($_POST['password']);

    // Validate inputs
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
        $messageType = "error";
        $showPopup = true;
    } elseif (empty($pass)) {
        $message = "Password cannot be empty";
        $messageType = "error";
        $showPopup = true;
    } else {
        // Use prepared statements to prevent SQL injection
        $sql = "SELECT * FROM auth WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $num = $result->num_rows;

        if ($num === 1) {
            $row = $result->fetch_assoc();
            // Verify password hash
            if (password_verify($pass, $row['password'])) {
                // Start session and set session variables
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;

                // Display success popup
                $message = "Login successful! Redirecting to the dashboard...";
                $messageType = "success";
                $showPopup = true;

                // JavaScript for delayed redirect
                echo "
                    <script>
                        setTimeout(() => {
                            window.location.href = '../users/dashboard.php';
                        }, 1000);
                    </script>
                ";
            } else {
                $message = "Incorrect password";
                $messageType = "error";
                $showPopup = true;
            }
        } else {
            $message = "Invalid credentials";
            $messageType = "error";
            $showPopup = true;
        }
        $stmt->close();
    }
}

if ($showPopup) {
    echo "
    <div id='popup' class='fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50'>
        <div class='bg-white p-6 rounded-lg shadow-lg text-center'>
            <h3 class='text-xl font-semibold mb-4 " . ($messageType === "success" ? "text-green-600" : "text-red-600") . "'>" .
            ($messageType === "success" ? "Success!" : "Error!") .
            "</h3>
            <p class='mb-4 text-gray-700'>" .
            htmlspecialchars($message) .
            "</p>
            <button onclick='redirectToLogin()' class='px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition'>
                Close
            </button>
        </div>
    </div>

    <script>
        function redirectToLogin() {
            window.location.href = 'login.php';
        }
    </script>
    ";
}
?>
