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
$verifySQL = "SELECT booking_id FROM event_bookings WHERE booking_id = ? AND user_id = ?";
$stmt = $conn->prepare($verifySQL);
$stmt->bind_param("ii", $booking_id, $user_id);
$stmt->execute();
$verifyResult = $stmt->get_result();

if (!$verifyResult) {
    sendResponse(false, 'Query failed: ' . $conn->error);
}

if ($verifyResult->num_rows === 0) {
    // Either booking doesn't exist or doesn't belong to this user
    sendResponse(false, 'You do not have permission to cancel this booking or it does not exist');
}

$stmt->close();

// If we're here, the booking exists and belongs to the current user, so delete it
// If we're here, the booking exists and belongs to the current user, so delete it
$deleteSQL = "DELETE FROM event_bookings WHERE booking_id = ? AND user_id = ?";
$stmt = $conn->prepare($deleteSQL);
$stmt->bind_param("ii", $booking_id, $user_id);

if ($stmt->execute()) {
    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        sendResponse(true, 'Booking successfully cancelled');
    } else {
        sendResponse(false, 'No booking was deleted. It may have been already cancelled.');
    }
} else {
    sendResponse(false, 'Error deleting booking: ' . $conn->error);
}

$stmt->close();
$conn->close();
?>