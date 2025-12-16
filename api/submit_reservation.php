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
    // Optional: Set strict schema usage or other options if needed
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

try {
    $stmt = $pdo->prepare("
        INSERT INTO reservations (
            user_id, first_name, last_name, email, phone, address, special_instructions,
            room_category, room_name, nights, room_price, service_charge, vat, total_price,
            check_in_date, check_out_date, reservation_date
        ) VALUES (
            :user_id, :first_name, :last_name, :email, :phone, :address, :special_instructions,
            :room_category, :room_name, :nights, :room_price, :service_charge, :vat, :total_price,
            :check_in_date, :check_out_date, NOW()
        )
    ");

    $stmt->execute([
        ':user_id' => $_SESSION['user_id'],
        ':first_name' => $data['first_name'],
        ':last_name' => $data['last_name'],
        ':email' => $data['email'],
        ':phone' => $data['phone'],
        ':address' => $data['address'],
        ':special_instructions' => $data['special_instructions'],
        ':room_category' => $data['room_category'],
        ':room_name' => $data['room_name'],
        ':nights' => $data['nights'],
        ':room_price' => $data['room_price'],
        ':service_charge' => $data['service_charge'],
        ':vat' => $data['vat'],
        ':total_price' => $data['total_price'],
        ':check_in_date' => $data['check_in_date'],
        ':check_out_date' => $data['check_out_date']
    ]);

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>