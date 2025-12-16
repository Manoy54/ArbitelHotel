<?php
// First, let's create a debugging script to check session state
// Save this as session_debug.php in your project root

session_start();

echo "<h2>Session Debug Information</h2>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<h3>Session ID</h3>";
echo session_id();

echo "<h3>Session Status</h3>";
switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "Sessions are disabled";
        break;
    case PHP_SESSION_NONE:
        echo "Sessions are enabled but none exists";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Sessions are enabled and one exists";
        break;
}

// Check PHP session configuration
echo "<h3>PHP Session Configuration</h3>";
echo "session.save_path: " . ini_get('session.save_path') . "<br>";
echo "session.gc_maxlifetime: " . ini_get('session.gc_maxlifetime') . " seconds<br>";
echo "session.cookie_lifetime: " . ini_get('session.cookie_lifetime') . " seconds<br>";
?>

<h3>Actions</h3>
<a href="../login.php">Go to Login Page</a>