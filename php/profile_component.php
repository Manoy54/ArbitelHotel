<?php
// profile_component.php
// This file can be included in any page where you want to show the profile container

// Check if user is logged in
$user_display_name = "Guest"; // Default name for non-logged in users

// If user is logged in, get their name from the session
if (isset($_SESSION['username'])) {
    $user_display_name = $_SESSION['username'];
}
?>

