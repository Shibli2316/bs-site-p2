<!-- sign up -->

<?php
include "../database/dbconn.php";
$showAlert = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $firstName = trim(mysqli_real_escape_string($conn, $_POST["firstName"]));
    $lastName = trim(mysqli_real_escape_string($conn, $_POST['lastName']));
    $name = $firstName . " " . $lastName;
    $email = filter_var(trim(mysqli_real_escape_string($conn, $_POST['email'])), FILTER_SANITIZE_EMAIL);
    $password = trim(mysqli_real_escape_string($conn, $_POST["password"]));
    $cpassword = trim(mysqli_real_escape_string($conn, $_POST["cpassword"]));

    // Check for invalid email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $showError = "Invalid email format";
    } elseif (strlen($password) < 5) {
        $showError = "Password too small (minimum 5 characters)";
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
            $showError = "Email already exists";
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

                    // Redirect to login
                    $_SESSION['name'] = $name;
                    header('location: login.php');
                    $showAlert = true;
                    exit;
                } catch (Exception $e) {
                    // Rollback transaction on failure
                    $conn->rollback();
                    $showError = "Something went wrong. Please try again later.";
                }
            } else {
                $showError = "Passwords do not match";
            }
        }
    }
}

// Display errors if any
if ($showError) {
    echo htmlspecialchars($showError);
}
?>
