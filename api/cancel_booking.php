<?php
// Start session to get user information
session_start();

// Set content type to JSON
header('Content-Type: application/json');

// Function to send JSON response
function sendResponse($success, $message = '')
{
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    sendResponse(false, 'User not logged in');
}

// Check if booking_id is provided
if (!isset($_POST['booking_id']) || empty($_POST['booking_id'])) {
    sendResponse(false, 'Booking ID is required');
}

// Get the booking ID from POST data
$booking_id = intval($_POST['booking_id']);
$user_id = $_SESSION['user_id'];

// Connect to the database
require 'db_connect.php';

// First, verify that the booking belongs to the current user (security check)
$verifySQL = "SELECT booking_id FROM event_bookings WHERE booking_id = $1 AND user_id = $2";
$verifyResult = pg_query_params($conn, $verifySQL, array($booking_id, $user_id));

if (!$verifyResult) {
    sendResponse(false, 'Query failed: ' . pg_last_error($conn));
}

if (pg_num_rows($verifyResult) === 0) {
    // Either booking doesn't exist or doesn't belong to this user
    sendResponse(false, 'You do not have permission to cancel this booking or it does not exist');
}

pg_free_result($verifyResult);

// If we're here, the booking exists and belongs to the current user, so delete it
$deleteSQL = "DELETE FROM event_bookings WHERE booking_id = $1 AND user_id = $2";
$result = pg_query_params($conn, $deleteSQL, array($booking_id, $user_id));

if ($result) {
    // Check if any rows were affected
    if (pg_affected_rows($result) > 0) {
        sendResponse(true, 'Booking successfully cancelled');
    } else {
        sendResponse(false, 'No booking was deleted. It may have been already cancelled.');
    }
} else {
    sendResponse(false, 'Error deleting booking: ' . pg_last_error($conn));
}

pg_free_result($result);
pg_close($conn);
?>