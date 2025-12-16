<?php
session_start();
require_once 'php/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $error = "";

    if ($password !== $confirm_password) {
        $error = "Passwords do not match";
    }

    // Check username
    if (empty($error)) {
        $stmt = pg_query_params($conn, "SELECT user_id FROM users WHERE username = $1", array($username));
        if ($stmt && pg_num_rows($stmt) > 0) {
            $error = "Username already exists";
        }
        pg_free_result($stmt);
    }

    // Check email
    if (empty($error)) {
        $stmt = pg_query_params($conn, "SELECT user_id FROM users WHERE email = $1", array($email));
        if ($stmt && pg_num_rows($stmt) > 0) {
            $error = "Email already exists";
        }
        pg_free_result($stmt);
    }

    // Check phone
    if (empty($error)) {
        $stmt = pg_query_params($conn, "SELECT user_id FROM users WHERE phone = $1", array($phone));
        if ($stmt && pg_num_rows($stmt) > 0) {
            $error = "Phone number already exists";
        }
        pg_free_result($stmt);
    }

    // Insert user if no errors
    if (empty($error)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO users (username, email, phone, password, created_at) VALUES ($1, $2, $3, $4, $5)";
        $stmt = pg_query_params($conn, $query, array($username, $email, $phone, $hashed_password, $created_at));

        if ($stmt) {
            $_SESSION['success_message'] = "Account created successfully! Please login.";
            header("Location: login.php");
            exit();
        } else {
            $error = "Registration failed. Please try again.";
        }

        pg_free_result($stmt);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="css/createacc.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        .error-message {
            color: #dc3545;
            background-color: #f8d7da;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .success-message {
            color: #28a745;
            background-color: #d4edda;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="box-side"></div>

    <div class="form-container">
        <form class="create-account-form" method="POST" action="createaccount.php">
            <p id="create-acc-text1">Create Account</p>

            <?php if (!empty($error)): ?>
                <div class="error-message"><?php echo $error; ?></div>
            <?php endif; ?>

            <!-- Fixed username field - removed default value of "root" -->
            <input class="inputs-field" type="text" name="username" placeholder="Username"
                value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" required>

            <input class="inputs-field" type="email" name="email" placeholder="Email"
                value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>

            <input class="inputs-field" type="text" name="phone" placeholder="Phone Number"
                value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>" required>

            <div style="position: relative;">
                <input class="inputs-field" type="password" name="password" id="password" placeholder="Password"
                    required>
                <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                    onclick="togglePasswordVisibility('password')">
                    <i id="password-eye">👁️</i>
                </span>
            </div>

            <div style="position: relative;">
                <input class="inputs-field" type="password" name="confirm_password" id="confirm_password"
                    placeholder="Confirm Password" required>
                <span style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;"
                    onclick="togglePasswordVisibility('confirm_password')">
                    <i id="confirm-password-eye">👁️</i>
                </span>
            </div>

            <p>Already have an account? <a href="login.php"><span id="create-acc">Sign In</span></a></p>

            <button type="submit">Create Account</button>
        </form>

        <script>
            function togglePasswordVisibility(inputId) {
                const passwordInput = document.getElementById(inputId);
                const eyeIcon = document.getElementById(inputId === 'password' ? 'password-eye' : 'confirm-password-eye');

                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.textContent = '🔒';
                } else {
                    passwordInput.type = "password";
                    eyeIcon.textContent = '👁️';
                }
            }
        </script>

        <div class="form-image" id="form-image">
            <p id="arbitel">Arbitel <span style="position:relative; color:#DFA974; right:0.8rem;">.</span></p>
            <p id="fi-acc">Account</p>

            <div class="form-image-list">
                <p>Experience refined hotel comfort and elegance.</p>
                <p>Relax in rooms designed for true comfort.</p>
                <p>Enjoy free high-speed Wi-Fi and gym access.</p>
                <p>Stay near the city's top attractions.</p>
            </div>
        </div>
    </div>
</body>

</html>