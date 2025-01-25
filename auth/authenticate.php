<!-- login -->

<?php
$showError = false;

include "../database/dbconn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $pass = trim($_POST['password']);

    // Validate inputs
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $showError = "Invalid email format";
    } elseif (empty($pass)) {
        $showError = "Password cannot be empty";
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

                // Redirect based on session status
                header('Location: ../users/dashboard.php');
                exit;
            } else {
                $showError = "Incorrect password";
            }
        } else {
            $showError = "Invalid credentials";
        }
        $stmt->close();
    }
}

// Display errors securely if any
if ($showError) {
    echo htmlspecialchars($showError);
}
?>
