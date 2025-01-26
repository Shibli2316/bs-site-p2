<script src="https://cdn.tailwindcss.com"></script>

<?php
include "../database/dbconn.php";
$showPopup = false; // Flag for displaying popups
$errorMessage = ""; // Stores error messages
$successMessage = ""; // Stores success messages

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $firstName = trim(mysqli_real_escape_string($conn, $_POST["firstName"]));
    $lastName = trim(mysqli_real_escape_string($conn, $_POST['lastName']));
    $name = $firstName . " " . $lastName;
    $email = filter_var(trim(mysqli_real_escape_string($conn, $_POST['email'])), FILTER_SANITIZE_EMAIL);
    $password = trim(mysqli_real_escape_string($conn, $_POST["password"]));
    $cpassword = trim(mysqli_real_escape_string($conn, $_POST["cpassword"]));

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Invalid email format";
        $showPopup = true;
    } elseif (strlen($password) < 5) {
        $errorMessage = "Password too small (minimum 5 characters)";
        $showPopup = true;
    } else {
        // Check if the email already exists
        $existSql = "SELECT 1 FROM `auth` WHERE email = ?";
        $stmt = $conn->prepare($existSql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $numExistRows = $stmt->num_rows;
        $stmt->close();

        if ($numExistRows > 0) {
            $errorMessage = "Email already exists";
            $showPopup = true;
        } else {
            // Check if passwords match
            if ($password === $cpassword) {
                // Hash the password
                $hash = password_hash($password, PASSWORD_DEFAULT);

                // Start a transaction for both inserts
                $conn->begin_transaction();

                try {
                    // Insert into `auth` table
                    $authSql = "INSERT INTO `auth` (password, email) VALUES (?, ?)";
                    $authStmt = $conn->prepare($authSql);
                    $authStmt->bind_param("ss", $hash, $email);
                    $authStmt->execute();

                    // Insert into `profile` table
                    $profileSql = "INSERT INTO `profile` (name, email) VALUES (?, ?)";
                    $profileStmt = $conn->prepare($profileSql);
                    $profileStmt->bind_param("ss", $name, $email);
                    $profileStmt->execute();

                    // Commit transaction if both queries succeed
                    $conn->commit();

                    // Close statements
                    $authStmt->close();
                    $profileStmt->close();

                    // Display success popup and redirect
                    $successMessage = "Account created successfully! You will be redirected to the login page shortly.";
                    $showPopup = true;

                    // JavaScript for delayed redirection
                    echo "
                        <script>
                            setTimeout(() => {
                                window.location.href = 'login.php';
                            }, 1000); // Redirect after 1 seconds
                        </script>
                    ";
                } catch (Exception $e) {
                    // Rollback transaction on failure
                    $conn->rollback();
                    $errorMessage = "Something went wrong. Please try again later.";
                    $showPopup = true;
                }
            } else {
                $errorMessage = "Passwords do not match";
                $showPopup = true;
            }
        }
    }
}

if ($showPopup) {
    echo "
    <div id='popup' class='fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50'>
        <div class='bg-white p-6 rounded-lg shadow-lg text-center'>
            <h3 class='text-xl font-semibold mb-4 " . ($successMessage ? "text-green-600" : "text-red-600") . "'>" .
            ($successMessage ? "Success!" : "Error!") .
            "</h3>
            <p class='mb-4 text-gray-700'>" .
            htmlspecialchars($successMessage ?: $errorMessage) .
            "</p>
            <button onclick='redirectToSignup()' class='px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition'>
                Close
            </button>
        </div>
    </div>

    <script>
        function redirectToSignup() {
            window.location.href = 'signup.php';
        }
    </script>
    ";
}
?>
