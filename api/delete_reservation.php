<?php
session_start();
header('Content-Type: application/json');

// Get connection details from Environment Variables
$host = getenv('DB_HOST');
$db = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');
$port = getenv('DB_PORT');

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => 'Database connection failed: ' . $e->getMessage()]);
    exit;
}

// Get JSON body
$data = json_decode(file_get_contents('php://input'), true);

// Validate session user_id
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'error' => 'User not logged in']);
    exit;
}

// Validate reservation ID
if (!isset($data['reservation_id']) || !is_numeric($data['reservation_id'])) {
    echo json_encode(['success' => false, 'error' => 'Invalid reservation ID']);
    exit;
}

$reservation_id = $data['reservation_id'];
$user_id = $_SESSION['user_id'];

try {
    // First verify that the reservation belongs to the logged-in user
    $verifyStmt = $pdo->prepare("SELECT reser_id FROM reservations WHERE reser_id = ? AND user_id = ?");
    $verifyStmt->execute([$reservation_id, $user_id]);

    if ($verifyStmt->rowCount() === 0) {
        echo json_encode(['success' => false, 'error' => 'Reservation not found or access denied']);
        exit;
    }

    // Option 1: Hard delete the reservation
    $deleteStmt = $pdo->prepare("DELETE FROM reservations WHERE reser_id = ? AND user_id = ?");
    $deleteStmt->execute([$reservation_id, $user_id]);

    // Option 2 (alternative): Soft delete by setting status to 'Cancelled'
    // Uncomment this and comment out the hard delete if you prefer soft deletion
    /*
    $statusStmt = $pdo->prepare("UPDATE reservations SET status = 'Cancelled' WHERE reser_id = ? AND user_id = ?");
    $statusStmt->execute([$reservation_id, $user_id]);
    */

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>