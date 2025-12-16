<?php
// Assuming this is your login.php file or the file handling the login form submission

// Start the session at the very beginning
session_start();

// Database connection
require_once 'db_connect.php';

// Initialize variables
$error = "";
$username = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate inputs
    if (empty($username) || empty($password)) {
        $error = "Username and password are required";
    } else {
        // Check credentials using MySQLi prepared statement
        $query = "SELECT user_id, username, password FROM users WHERE username = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Verify password (assuming password is hashed)
            if (password_verify($password, $user['password'])) {
                // Password is correct, set session variables
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['logged_in'] = true;

                // For debugging - log the session data
                error_log("User logged in: " . $user['user_id'] . " - " . $user['username']);

                // Redirect to profile page
                header("Location: index.php");
                exit;
            } else {
                // If password is stored as plain text (not recommended)
                if ($password === $user['password']) {
                    // Password is correct, set session variables
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['logged_in'] = true;

                    // For debugging
                    error_log("User logged in (plain text): " . $user['user_id'] . " - " . $user['username']);

                    // Redirect to profile page
                    header("Location: profile.php");
                    exit;
                } else {
                    $error = "Invalid username or password";
                }
            }
        } else {
            $error = "Invalid username or password";
        }
        $result->free();
        $stmt->close();
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Martel:wght@200;300;400;600;700;800;900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nanum+Myeongjo&family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Flex:opsz,wght@8..144,100..1000&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="box-side"></div>


    <div class="form-container">
        <div class="form-image" id="form-image-box">
            <p id="arbitel"> Arbitel <span style=" position:relative; color:#DFA974; right:1.3rem;">.</span> </p>
            <p id="est-p"> <span id="est"> EST </span>2025 </p>
        </div>

        <form class="login-form" method="POST" action="login.php">
            <p id="sona-form">Sign In</p>

            <?php if (!empty($error)): ?>
                <div class="error-message"
                    style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; border: 1px solid #f5c6cb; margin-bottom: 15px; text-align: center;">
                    <i style="margin-right: 5px;">⚠</i><?php echo $error; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['success_message'])): ?>
                <div class="success-message"
                    style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; border: 1px solid #c3e6cb; margin-bottom: 15px; text-align: center;">
                    <i style="margin-right: 5px;">✓</i><?php echo $_SESSION['success_message']; ?>
                </div>
                <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>

            <div class="form-group">
                <input type="text" id="input-name" name="username" placeholder="Username" required>

                <div style="position: relative;">
                    <input type="password" id="input-pass" name="password" placeholder="Password" required>
                    <span
                        style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                        onclick="togglePasswordVisibility('input-pass')">
                        <i id="password-eye">👁️</i>
                    </span>
                </div>

                <p>Don't have an account yet? <a href="createaccount.php"><span id="create-acc">Create
                            Account</span></a></p>
                <button type="submit">Sign In</button>
            </div>
        </form>

        <script>
            function togglePasswordVisibility(inputId) {
                const passwordInput = document.getElementById(inputId);
                const eyeIcon = document.getElementById('password-eye');

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.textContent = '🔒'; // Closed eye
                } else {
                    passwordInput.type = "password";
                    eyeIcon.textContent = '👁️'; // Open eye
                }
            }
        </script>


    </div>


</body>

</html>