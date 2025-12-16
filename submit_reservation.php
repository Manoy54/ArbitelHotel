<?php
session_start();
header('Content-Type: application/json');

// Include centralized database connection
require_once 'db_connect.php';

// Get JSON body
$data = json_decode(file_get_contents('php://input'), true);

// Validate session user_id
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'error' => 'User not logged in']);
    exit;
}

// Validate input data (basic validation)
if (!$data) {
    echo json_encode(['success' => false, 'error' => 'Invalid JSON data']);
    exit;
}

try {
    // Prepare SQL statement using MySQLi
    $query = "INSERT INTO reservations (
            user_id, first_name, last_name, email, phone, address, special_instructions,
            room_category, room_name, nights, room_price, service_charge, vat, total_price,
            check_in_date, check_out_date, reservation_date
        ) VALUES (
            ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?, ?,
            ?, ?, NOW()
        )";

    $stmt = $conn->prepare($query);

    if (!$stmt) {
        throw new Exception("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param(
        "issssssssiddddss",
        $_SESSION['user_id'],
        $data['first_name'],
        $data['last_name'],
        $data['email'],
        $data['phone'],
        $data['address'],
        $data['special_instructions'],
        $data['room_category'],
        $data['room_name'],
        $data['nights'],
        $data['room_price'],
        $data['service_charge'],
        $data['vat'],
        $data['total_price'],
        $data['check_in_date'],
        $data['check_out_date']
    );

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        throw new Exception("Execution failed: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();

} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>